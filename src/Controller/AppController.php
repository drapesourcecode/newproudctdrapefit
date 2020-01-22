<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\ORM\Query;
use Cake\ORM\TableRegistry;
use Cake\I18n\Time;

class AppController extends Controller {

    public $test;

    public function initialize() {
        parent::initialize();
        date_default_timezone_set("America/Los_Angeles");
        // date_default_timezone_set('Asia/Kolkata');
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadModel('Users');
        $this->loadModel('UnderMaintenance');
        $this->loadModel('KidsDetails');
        $this->loadModel('MenStats');
        $this->loadModel('TypicallyWearMen');
        $this->loadModel('MenFit');
        $this->loadModel('MenStyle');
        $this->loadModel('EmailPreferences');
        $this->loadModel('LetsPlanYourFirstFix');
        $this->loadModel('PersonalizedFix');
        $this->loadModel('SizeChart');
        $this->loadModel('ReferFriends');

        $this->loadComponent('Auth', [
            'authenticate' => [
                'Form' => [
                    'fields' => ['username' => 'email', 'password' => 'password']
                ]
            ]
        ]);
        $this->loadComponent('Auth', [
            'loginRedirect' => [
                'controller' => 'Users',
                'action' => 'login'
            ],
            'logoutRedirect' => [
                'controller' => 'Users',
                'action' => 'login',
            ]
        ]);
    }

    public function beforeRender(Event $event) {


        $type = $this->Auth->user('type');
        $name = $this->Auth->user('name');
        $email = $this->Auth->user('email');
        $user_id = $this->Auth->user('id');
        $this->KidsDetails->hasOne('LetsPlanYourFirstFix', ['className' => 'LetsPlanYourFirstFix', 'foreignKey' => 'kid_id']);
        $this->KidsDetails->hasOne('EmailPreferences', ['className' => 'EmailPreferences', 'foreignKey' => 'kid_id']);
        $kidDetails = $this->KidsDetails->find('all')->contain(['LetsPlanYourFirstFix', 'EmailPreferences'])->where(['KidsDetails.user_id' => $user_id]);


        $kidnameData = $this->KidsDetails->find('all')->where(['KidsDetails.id' => @$this->request->session()->read('KID_ID')])->first();
        if (@$kidnameData->kids_first_name == '') {

            if (@$kidnameData->kid_count == 1) {
                $kidCounts = "first";
            }
            if (@$kidnameData->kid_count == 2) {
                $kidCounts = "second";
            }
            if (@$kidnameData->kid_count == 3) {
                $kidCounts = "third";
            }
            if (@$kidnameData->kid_count == 4) {
                $kidCounts = "fourth";
            }
            $kidName = "Your " . @$kidCounts . " child ";
        } else {
            $kidName = $kidnameData->kids_first_name;
        }

        if (($this->Auth->user('id') != '') && $this->Auth->user('type') == 2) {
            $userCount = $this->ReferFriends->find('all')->where(['reffer_id' => $this->Auth->user('id')])->count();
            if ($userCount == 0) {
                if (@$this->request->getCookie('refer_time') != '') {

                    $this->ReferFriends->updateAll(['email_address' => $this->Auth->user('email'), 'reffer_id' => $this->Auth->user('id')], ['my_link_with_uniq_no' => $this->request->getCookie('refer_time')]);
                }
            }
        }
        $acction = $this->request->params['action'];
        @$params= $this->request->params['pass'][0]; ;
        
     
        
        $this->set(compact('params','type', 'name', 'email', 'user_id', 'kidDetails', 'kidsData', 'kidName', 'acction'));
    }
    
    public function afterFilter(Event $event) {
        $maintainStatus = $this->UnderMaintenance->find('all')->where(['UnderMaintenance.id' => 1])->first();
        //echo $maintainStatus;exit;
        if ($maintainStatus->status == 1) {

            return $this->redirect(HTTP_ROOT . 'under-construction');
            //exit;
        }
    }

}
