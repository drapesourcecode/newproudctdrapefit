<?php

  namespace App\View\Cell;

  use Cake\View\Cell;


  /**
   * Users cell
   */
  class ChatCell extends Cell
   {

   protected $_validCellOptions = [];

   /**
    * Default display method.
    *
    * @return void
    * 
    * 
    * 
    */
   
   
   
    public function social_media() {
        $this->loadModel('SocialMedia');
        $getSocialMedia = $this->SocialMedia->find('all')->where(['SocialMedia.is_active'=>1])->order(['SocialMedia.sort_order'=>'ASC']);
       // pj($getEmoticons); exit;
        $this->set(compact('getSocialMedia'));
    }
    public function chat_support() {
         $this->loadModel('ChatCategoryImages');
        $userId = $this->request->session()->read('Auth.User.id');
        $userName = $this->request->session()->read('Auth.User.name');
        $getEmoticons = $this->ChatCategoryImages->find('all');
       // pj($getEmoticons); exit;
        $this->set(compact('userId', 'userName', 'getEmoticons'));
    }
     public function direct_chat_cell() {
        $this->viewBuilder()->setlayout('admin');
        $id = $this->request->session()->read('Auth.User.id');
        $type = $this->request->session()->read('Auth.User.type');
        $this->loadModel('PaymentGetways');
        $this->loadModel('ChatCategoryImages');
        $this->loadModel('Users');
        if (@$id) {
            $getUsersDetails = $this->PaymentGetways->find('all')->where(['PaymentGetways.status' => 1, 'PaymentGetways.emp_id' => $id]);
        }
        $userId = $getUsersDetails->extract('user_id')->toArray();
        if (!empty($userId)) {
            $userName = $this->request->session()->read('Auth.User.name');;
            $usersDetails = $this->Users->find('all')->where(['Users.type' => 2, 'Users.id IN' => $userId]);
            $usersDetailsCount = $this->Users->find('all')->where(['Users.type' => 2, 'Users.id IN' => $userId])->count();
        } else {
            $userName = $this->request->session()->read('Auth.User.name');
            $usersDetails = null;
            $usersDetailsCount = 0;
        }

        $getEmoticons = $this->ChatCategoryImages->find('all');


        $this->set(compact('id', 'userId', 'userName', 'usersDetails', 'usersDetailsCount', 'getEmoticons'));
    }
   
   
   
  



 }