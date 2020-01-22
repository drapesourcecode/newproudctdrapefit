<style>
    .payment-sucess {
        float: left;
        width: 100%;
        padding: 27px 0 10px;
    }
    .payment-sucess .jumbotron2{
        text-align: center;
        float: left;
        width: 100%;
    }
    .payment-sucess .jumbotron2 .display-3{
        font-size: 50px;
        font-weight: bold;
        color: #5ab72d;
    }
    .payment-sucess .jumbotron2 .display-3 span{
        display: block;
        margin-bottom: 10px;
        font-size: 60px;
    }
    .payment-sucess .jumbotron2 p{
        text-align: center;
    }
    .payment-sucess .jumbotron2 p a.btn-primary {
        display: inline-block;
        background: #d64ade;
        border: none;
        font-size: 19px;
        font-weight: bold;
        letter-spacing: 1px;
        padding: 8px 31px 10px;
        border-radius: 0;
        color:#fff;
    }
    .payment-sucess .jumbotron2 p a.btn-primary:hover{
        background: #d64ade;
        color:#fff;
    }
</style>
<?php

use Cake\ORM\TableRegistry;
if ($this->request->session()->read('PROFILE') == 'KIDS') {
    if ($this->request->session()->read('KID_ID')) {
        $kidsDetails = TableRegistry::get('kidsDetails');
        $Usersdata = $kidsDetails->find('all')->where(['id' => $this->request->session()->read('KID_ID')])->first();
        if ($Usersdata->is_redirect == 0 && @$Usersdata->is_progressbar != 100) {
            $curl = 'welcome/style/';
        } elseif ($Usersdata->is_redirect == 0 && $Usersdata->is_progressbar == 100) {
            $curl = 'welcome/schedule/';
        } elseif ($Usersdata->is_redirect == 0) {
            $curl = 'welcome/style/';
        } elseif ($Usersdata->is_redirect == 1) {
            $curl = 'welcome/schedule/';
        } elseif ($Usersdata->is_redirect == 2) {
            $curl = 'not-yet-shipped';
        } elseif ($Usersdata->is_redirect == 3) {
            $curl = 'profile-review/';
        } elseif ($Usersdata->is_redirect == 4) {
            $curl = 'order_review/';
        } elseif ($Usersdata->is_redirect == 5) {
            $curl = 'calendar-sechedule/';
        } elseif ($Usersdata->is_redirect == 6) {
            $curl = 'customer-order-review';
        }
    }
} else {
    $Users = TableRegistry::get('Users');
    $UserDetails = TableRegistry::get('UserDetails');
    $Usersdata = $Users->find('all')->where(['id' => $this->request->getSession()->read('Auth.User.id')])->first();
    $UserDetailsdata = $UserDetails->find('all')->where(['user_id' => $this->request->getSession()->read('Auth.User.id')])->first();
    if ($Usersdata->is_redirect == 0 && $UserDetailsdata->is_progressbar != 100) {
        $curl = 'welcome/style/';
    } elseif ($Usersdata->is_redirect == 0 && $UserDetailsdata->is_progressbar == 100) {
        $curl = 'welcome/schedule/';
    } elseif ($Usersdata->is_redirect == 0) {
        $curl = 'welcome/style/';
    } elseif ($Usersdata->is_redirect == 1) {
        $curl = 'welcome/schedule/';
    } elseif ($Usersdata->is_redirect == 2) {
        $curl = 'not-yet-shipped';
    } elseif ($Usersdata->is_redirect == 3) {
        $curl = 'profile-review/';
    } elseif ($Usersdata->is_redirect == 4) {
        $curl = 'order_review/';
    } elseif ($Usersdata->is_redirect == 5) {
        $curl = 'calendar-sechedule/';
    } elseif ($Usersdata->is_redirect == 6) {
        $curl = 'customer-order-review';
    }
}
?>
<div class="style-bar">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12 col-md-12">
                <?php
                echo $this->element('frontend/profile_menu_men');
                ?>
            </div>
        </div>
    </div>
</div>
<section class="checkout-payment-conformation">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="conformation-message">                
                    <h3><i class="fa fa-check"></i> Horrayyyyyy.. Your order has been placed!</h3>
                    <!-- <p>Please Keep an eye on your email on the progress we do for your Fit Box.</p> -->
                    <p class="go-home"><a class="btn btn-primary btn-sm" href="<?php echo HTTP_ROOT .$curl ?>" role="button">Continue to homepage</a></p>
                </div>              
            </div>
        </div>
    </div>
</section>

