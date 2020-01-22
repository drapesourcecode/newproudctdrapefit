<link rel="stylesheet" href="<?= HTTP_ROOT; ?>payment/css/style.css">
<script type="text/javascript" src="<?= HTTP_ROOT; ?>payment/js/jquery.creditCardValidator.js"></script>
<script type="text/javascript">
    function cardFormValidate() {
        var cardValid = 0;
        //Card validation

        $('#card_number').validateCreditCard(function (result) {
            var cardType = (result.card_type == null) ? '' : result.card_type.name;
            //alert(cardType);
            //alert(result.valid);
            $("#card_type_input").val(cardType);
            if (cardType == 'Visa') {
                var backPosition = result.valid ? '1px -61px, 470px -82px' : '2px -22px, 470px -12px';

            } else if (cardType == 'MasterCard') {
                var backPosition = result.valid ? '2px -183px, 319px -84px' : '2px -22px, 471px 14px';
            } else if (cardType == 'Maestro') {
                var backPosition = result.valid ? '2px -225px, 260px -87px' : '2px -22px, 260px -61px';
            } else if (cardType == 'Discover') {
                var backPosition = result.valid ? '2px -267px, 480px -84px' : '2px -22px, 471px 14px';
            } else if (cardType == 'Amex') {
                var backPosition = result.valid ? '2px -144px, 470px -83px' : '3px -22px, 471px 14px';
            } else if (cardType == 'jcb') {
                var backPosition = result.valid ? '2px -310px, 470px -83px' : '3px -22px, 471px 14px';
            } else {
                var backPosition = result.valid ? '2px -121px, 470px -87px' : '2px -22px, 471px 14px';
            }



            //alert(backPosition);
            $('#card_number').css("background-position", backPosition);
            if (result.valid) {
                $("#card_type").val(cardType);
                $(".card_type").val(cardType);
                $("#card_number").removeClass('required');
                cardValid = 1;
            } else {
                $("#card_type").val('');
                $("#card_number").addClass('required');
                cardValid = 0;
            }
        });

        //Form validation
        var cardName = $("#card_name").val();
        var expMonth = $("#expiry_month").val();
        var expYear = $("#expiry_year").val();
        var cvv = $("#cvv").val();
        var regName = /^[a-z ,.'-]+$/i;
        var regMonth = /^01|02|03|04|05|06|07|08|09|10|11|12$/;
        var regYear = /^2016|2017|2018|2019|2020|2021|2022|2023|2024|2025|2026|2027|2028|2029|2030|2031$/;
        var regCVV = /^[0-9]{3,3}$/;
        if (cardValid == 0) {
            $("#card_number").addClass('required');
            $("#card_number").focus();
            $('#cart-type-msg').html('<span style="color:red">Please enter your valid card no</span>');

            return false;
        } else if (!regMonth.test(expMonth)) {

            $("#card_number").removeClass('required');
            $("#expiry_month").addClass('required');
            $("#expiry_month").focus();
            $('#cart-type-msg').html('<span style="color:red">Please enter your valid expire month</span>');
            return false;
        } else if (!regYear.test(expYear)) {
            $("#card_number").removeClass('required');
            $("#expiry_month").removeClass('required');
            $("#expiry_year").addClass('required');
            $("#expiry_year").focus();
            $('#cart-type-msg').html('<span style="color:red">Please enter your valid expire year</span>');
            return false;

        } else if (!regName.test(cardName)) {

            if (cardName.length < 4) {
                //alert(cardName.length);
                $("#card_number").removeClass('required');
                $("#expiry_month").removeClass('required');
                $("#expiry_year").removeClass('required');
                $("#cvv").removeClass('required');
                $("#card_name").addClass('required');
                $("#card_name").focus();
                $('#cart-type-msg').html('<span style="color:red">Please enter your valid card name</span>');
                return false;
            }
        } else if (!regCVV.test(cvv)) {
            $("#card_number").removeClass('required');
            $("#expiry_month").removeClass('required');
            $("#expiry_year").removeClass('required');
            $("#cvv").addClass('required');
            $("#cvv").focus();
            $('#cart-type-msg').html('<span style="color:red">Please enter your valid cvv</span>');
            return false;
        } else {
            $("#card_number").removeClass('required');
            $("#expiry_month").removeClass('required');
            $("#expiry_year").removeClass('required');
            $("#cvv").removeClass('required');
            $("#card_name").removeClass('required');
            $('#cardSubmitBtn').prop('disabled', false);
            return true;
        }
    }
    $(document).ready(function () {

        $('#addpaymentForm input[type=text]').on('blur', function () {
            $('#card_number').removeAttr('style');
            $('#card_name').removeAttr('style');
            $('#cvv').removeAttr('style');
            $('#cart-type-msg').html('');
            cardFormValidate();
        });



    });
</script>
<style>
    .back-box{ float: left; width: 100%;}
    .back-box a {float: left; padding: 8px 15px; color: #ff6c00; background: #232f3e; font-size: 15px; font-family: "Amazon Ember", Arial, sans-serif; font-weight: bold; margin-bottom: 15px; border-radius: 0; text-transform: uppercase;}
    .back-box a:hover,.back-box a:focus { color: #232f3e; outline: none; background: #ff6c00; text-decoration: none;}
</style>
<div class="style-bar">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12 col-md-12">

                <?php echo $this->element('frontend/profile_menu_men') ?>



            </div>
        </div>
    </div>
</div>

<section class="order-review">
    <p><?= $this->Flash->render(); ?></p>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12 col-md-12">
                <div class="back-box"><a href="<?php echo HTTP_ROOT . 'order_review' ?>">Back</a></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-lg-12 col-md-12">
                <h1>Order Review</h1>
            </div>
        </div>
        <div class="col-md-12">
            <span id="msg" onclick="$('#msg').fadeOut('slow');"></span>
        </div>
        <div class="row">
            <div class="col-sm-9 col-lg-9 col-md-9">
                <div class="order-detailbox">
                    <div class="row">
                        <div class="col-sm-12 col-lg-12 col-md-12">
                            <div class="Address-details">
                                <h5>Shipping address<a onclick="getship()" href="javascript:voide(0)">Change</a></h5>
                                <span id="shipping-address">

                                </span>
                            </div>
                            <div class="Address-details">
                                <h5>Payment method<a onclick="changePayment()" href="javascript:void(0)">Change</a></h5>
                                <span id="get-Card">

                                </span>
                            </div>
                            <div class="Address-details">
                                <h5>Billing address<a  onclick="changeBillingAddress()" href="javascript:void(0)">Change</a></h5>
                                <span id="billing-address"> </span>
                            </div>
                            <div class="Address-details">
                                <h5>Gift cards, Voucher & Promotional codes </h5>
                                <span>
                                    <?php echo $this->Form->create("User", array('data-toggle' => "validator", 'id' => 'readmecode')) ?>
                                    <input type="text" onblur="getPromocode()" autocomplete="off" class="" name="promocode" maxlength="25" id="promocode" placeholder="Enter Code">
                                    <input type="hidden" id='alltotalPrice' value="Apply" >
                                    <input type="button" id='readmecodeBtnx'  class="" value="Apply" >
                                    <?php echo $this->Form->end(); ?>
                                    <p id="msgIdread"></p>
                                </span>



                                <br>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

            <?php echo $this->Form->create("customer_product_review_checkout", array('data-toggle' => "validator", 'id' => 'customer_product_review_checkout', 'onsubmit' => 'return getPageDisbale()')) ?>
            <div class="col-sm-3 col-lg-3 col-md-3">
                <?php
                $styleist = $this->User->styleFitFee();
                $style_pick_total = 0;
                $or_payment_id = 0;
                $i = 1;
//                        pj($customer_data);
                foreach ($prData as $pd) {
                    $or_payment_id= $pd->payment_id;
                    if ($pd->keep_status == 3) {
                        $sellprice = $pd->sell_price;
                    } else {
                        $sellprice = 0;
                    }
                    $style_pick_total += (double) $sellprice;
                    //$style_pick_total = 50;
                }
                ?>

                <div class="place-order">                
                    <button type="submit" value="Confirm Your Order" name="review_order" id="review_order" >Place your order</button>
                    <h5>Order Summary</h5>

                    <ul id="">
                        <li> Stylist Picks Subtotal<span> <?php echo '$' . number_format($style_pick_total, 2); ?></span></li>

                        <?php
                        $totalpropric = $this->User->totalprodiscount($paymentId);
                        
                        if ($style_pick_total != 0) {
                            if ($allKeepsProducts == 1) {
                                if ($style_pick_total > 1) {
                                    $price = $style_pick_total;
                                    $percentage = 25;
                                    //$discount = ($percentage / 100) * $price;
                                    $discount = ($percentage / 100) * $totalpropric;
                                    $subTotal = $price - $discount;
                                }
                                ?>
                                <li>Purchase all discount <?php echo $percentage; ?>%<span> -<?php echo '$' . number_format(@$discount, 2); ?></span></li>
                                <?php
                            } else {
                                $subTotal = $style_pick_total;
                            }
                        }
                        $isstylefee = $this->User->isstylefee($paymentId);
                        ?>
                                
                        <li> Style Fit Fee  <span> -<?php
                        
                                
                                if($isstylefee==1 ||  $subTotal==0){
                                    echo '$' . number_format(0, 2);
                                    $styleist1=0;
                                }else{
                                    echo '$' . number_format($styleist, 2);
                                    $styleist1=$styleist;
                                }
                        
                                /*if ($subTotal != 0) {
                                    echo '$' . number_format($styleist, 2);
                                    $styleist1=$styleist;
                                } else {
                                    echo '$' . number_format(0, 2);
                                    $styleist1=0;
                                }*/
                                ?></span>
                        </li> 
                        
                        <li> Order Subtotal<span><?php $final_sub_tot = $subTotal-$styleist1; 
                        if($final_sub_tot<0){
                            echo '$' . number_format(0, 2);
                        }else{
                            echo '$' . number_format($final_sub_tot, 2);
                        }
                        
                        
                        ?></span></li>
                        <li> Account Credit<span><?php $final_sub_tot = $subTotal-$styleist1; 
                        if(@$discount>$style_pick_total){
                            $creditblnc=$discount-$style_pick_total;
                            echo '$' . number_format($creditblnc, 2);
                        }else{
                            echo '$' . number_format(0, 2);
                        }
                        
                        
                        ?></span></li>
                        <li>
                            <ul id="promo_applied">
                                <?php $applied_promo_codes = $this->User->getPromoCode($or_payment_id);
                                $p_g_price=0;
                                foreach($applied_promo_codes as $cup_a){ 
                                  $p_g_price +=$cup_a->price;
                                    ?>
                                <li><?=$cup_a->code;?> applied <span> <?php //if($final_sub_tot > $p_g_price){
                                    echo'-$' . number_format($cup_a->price, 2);                                    
                                //}else{
                                    
                                //} ?></span></li>
                                <?php }
                                ?>
                            </ul>
                        </li>
                        

                        <?php
                        
                      
                   // echo  $p_g_price;
                    if ($style_pick_total != 0) {
                        
                        @$total = $final_sub_tot -$p_g_price;
                     
                        if (@$total >= 1) {
                            $amount = $final_sub_tot-$p_g_price;
                        } else {
                            $amount = 0;
                        }
                    }
                    //echo $p_g_price;
                    //echo $final_sub_tot;
                    //echo $amount;exit;
                    
                  
                        
                        
                        $orderAmount = $subTotal - $styleist1;
                      
                           if(@$walletBalace>=1){
                            ?>
                            <h6>
                                <span style="color:green">
                                    <input type=checkbox name="walletCheck" id="walletCheck" <?php if($amount<=0){?> disabled="" <?php } ?>value="1"> Use wallet balance $ <span><?php echo number_format($walletBalace, 2, '.', ',') ?> </span> 

                                </span>


                            </h6>
                        
                        <?php
                      }
                       if($p_g_price==0 ){
                         $currentBlance = 0; 
                       }else if ($p_g_price > $final_sub_tot){
                         $currentBlance = $p_g_price-$final_sub_tot;   
                       }else if($p_g_price < $final_sub_tot){
                       $currentBlance = 0;
                       }
                        ?>
                        

                        




                        <li id="promsg"></li>
                        <li id="giftmsg"></li>


                    </ul>
                    
                    <h4>Order Total<span id="totalSpan"><?php echo '$' . number_format($amount, 2); ?></span>
                        <input type="hidden" id="orderTotal" name="orderTotal" value="<?= @$subTotal-$styleist1;?>">
                        <input type="hidden" id="paymentID" name = 'paymentID' value="<?= @$or_payment_id;?>">
                        <input type="hidden" name="stotal" id="stotal" value="<?php echo @$final_sub_tot; ?>">
                        <input type="hidden" name="promoprice" id="promoprice" value="<?php echo $p_g_price; ?>">
                        <input type="hidden" name="wallet" id="wallet" value="<?php echo@$walletBalace; ?>">
                        <input type="hidden" name="total" id="total" value="<?php echo @$amount;  ?>">
                        <input type="hidden" name="keep_all_discount" value="<?php echo '-$' . number_format((!empty($discount)?$discount:0), 2); ?>">
                        <input type="hidden" name="stylist_picks_subtotal" value="<?php echo '$' . number_format($style_pick_total, 2);?>">
                        <input type="hidden" name="style_fit_fee " value="<?php echo '-$' . number_format($styleist1, 2);?>">

                    </h4>    
                </div>
                <ul class="current-bal">
                    <li id="walletBlace2"> Current Wallet balance <span id="currentBlnce">$<?php echo number_format($walletBalace+$currentBlance+$creditblnc, 2, '.', ',') ?></span></li>
                </ul>
            </div>
        </div>
        




        <div class="row">
            <div class="col-md-12">
                <div class="Product-table">
                    <table id="cart" class="table table-hover table-condensed">
                        <thead>
                            <tr>
                                <th>
                                    <span style=" width: 49%;text-align: left;display: inline-block;">Image</span>
                                </th>
                                <th>
                                    <span style="text-align: left;display: inline-block;">Product Details</span>
                                </th>
                                <th style="text-align: center;">Price</th>

                                <th> What would you like to do with this Product ?</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $style_pick_total = 0;
                            $i = 1;
                            foreach ($prData as $pd) {

                                if ($pd->keep_status == 3) {
                                    $customer_sellprice = $pd->sell_price;
                                } else {
                                    $customer_sellprice = 0;
                                }
                                $style_pick_total += (double) $customer_sellprice;
                                ?>
                                <tr>
                                    <td data-th="Image">
                                        <img src="<?php echo HTTP_ROOT . PRODUCT_IMAGES ?><?php echo $pd['product_image']; ?>" alt="">
                                    </td>
                                    <td data-th="Product Details">
                                        <?php echo $pd->product_name_one; ?>
                                    </td>
                                    <td data-th="Price" style=" width: 100px;" class="text-center">
                                        <?php
                                        if ($pd->keep_status == 3) {
                                            echo '$' . number_format($pd->sell_price, 2);
                                        } elseif ($pd->keep_status == 2) {
                                            echo '$' . number_format(0, 2);
                                        } elseif ($pd->keep_status == 1) {
                                            echo '$' . number_format(0, 2);
                                        }
                                        ?>
                                    </td>                   
                                    <td class="actions" data-th="What would you like to do with this Product ?">
                                        <div class="change-btn2">
                                            <label style='background: none;'for="radio-1"><?php
                                                if ($pd->keep_status == 3) {
                                                    echo 'Keep';
                                                } else if ($pd->keep_status == 2) {
                                                    echo 'Exchange';
                                                } else {
                                                    echo 'Return';
                                                }
                                                ?></label>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                                $i++;
                            }
                            ?>



                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>

<?php echo $this->Form->end(); ?>
</div>
<div id="loaderPyament" style="display: none; position: fixed; height: 100%; width: 100%; z-index: 11111111; padding-top: 20%; background: rgba(255, 255, 255, 0.7); top: 0; text-align: center;">
    <img src="<?php echo HTTP_ROOT . 'img/' ?>widget_loader.gif"/>
</div>


<div id="pop-up-box-payment" class="pop-up">
    <?php echo $this->Form->create("User", array('class' => 'pop-up-content', 'data-toggle' => "validator", 'id' => 'usethisform')) ?>
    <span  onclick="document.getElementById('pop-up-box-payment').style.display = 'none'" class="close1" id="close1" title="Close Modal">&times;</span>
    <div class="row pop-up-top">
        <div class="col-md-6">
            <p>Change Payment Method</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <label>
                Use the card 
            </label>

            <div id="addressCard"></div>

        </div>


    </div>

    <div class="row setting-pop-up-address-details">
        <div class="col-md-12">
            <div class="setting-pop-up-buttons">
                <a  onclick="addNewCard()" href="javascript:void(0)">Add new Card</a>
                <a  id="usethiscardbtn" href="javascript:void(0)">Use this Card</a>
            </div>
        </div>
    </div>
    <?php echo $this->Form->end(); ?>
</div>


<div id="pop-up-box-new-card" class="pop-up">
    <?php echo $this->Form->create("User", array('class' => 'pop-up-content', 'data-toggle' => "validator", 'id' => 'addpaymentForm')) ?>
    <span  onclick="document.getElementById('pop-up-box-new-card').style.display = 'none'" class="close1" id="close1" title="Close Modal">&times;</span>
    <div class="row pop-up-top">
        <div class="col-md-6">
            <p>Add new card</p>
        </div>
    </div>
    <style>
        .setting-box2{ padding-bottom: 0; padding-top: 0;}
        .setting-box2 .tab-content {
            padding: 13px 19px 0;
            min-height: 140px;
        }
        .setting-box2 .new-card-form ul li{width: 24% !important;}
        .setting-pop-up-address-details {
            margin-top: 16px;
        }
        .setting-box .tab-content p{ margin-bottom: 0;}
    </style>
    <div class="row">
        <div class="col-md-12 setting-box setting-box2">
            <div id="new-cardx" class="tab-content">
                <p>Enter your card information</p>
                <p id="cart-type-msg"></p>
                <div class="new-card-form">
                    <ul>
                        <li>
                            <label>Card number</label>
                            <input type="text" name="card_number" maxlength="16" id="card_number">
                        </li>
                        <li>
                            <label>Name on card</label>
                            <input type="text" name="card_name" id="card_name">
                        </li>

                        <li>
                            <label>Expiry date</label>
                            <select name="expiry_month" id="expiry_month">
                                <?php
                                for ($exp_count = 1; $exp_count <= 12; $exp_count++) {
                                    echo "<option>" . ( strlen($exp_count) == 1 ? '0' . $exp_count : $exp_count ) . "</option>";
                                }
                                ?>
                            </select>
                            <select name="expiry_year" id="expiry_year">
                                <option>2019</option>
                                <option>2020</option>
                                <option>2021</option>
                                <option>2022</option>
                                <option>2023</option>
                                <option>2024</option>
                                <option>2025</option>
                                <option>2026</option>
                                <option>2027</option>
                                <option>2028</option>
                                <option>2029</option>
                                <option>2030</option>
                                <option>2031</option>
                            </select>
                        </li>
                        <li>
                            <label>CVV</label>
                            <input type="text" name="cvv" id="cvv">
                        </li>

                        <li>
                            <input type="hidden"  id="card_type_input" name="card_type">

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row setting-pop-up-address-details">
        <div class="col-md-12">
            <div class="setting-pop-up-buttons">
                <a  onclick="cancelPayment()" href="javascript:void(0)">Cancel</a>
                <a  id="add_new_card_btn" href="javascript:void(0)">Add new card</a>
            </div>
        </div>
    </div>
    <?php echo $this->Form->end(); ?>
</div>

<div id="pop-up-box-change-form" class="pop-up">
    <?php echo $this->Form->create("User", array('class' => 'pop-up-content', 'data-toggle' => "validator", 'id' => 'shipaddress2')) ?>
    <span  onclick="document.getElementById('pop-up-box-change-form').style.display = 'none'" class="close1" id="close1" title="Close Modal">&times;</span>
    <div class="row pop-up-top">
        <div class="col-md-6">
            <p>Add a new address</p>
        </div>
    </div>


    <ul>
        <li>
            <label>Full name : </label>
            <input type="hidden" name="id" id="sid">
            <input type="text" name="full_name" id="full_name" maxlength="50">
        </li>
        <li>
            <label>Address line 1 : </label>
            <input type="text" name="address" id="address" maxlength="60">
        </li>
        <li>
            <label>Address line 2 : </label>
            <input type="text" name="address_line_2" id="address_line_2" maxlength="60">
        </li>
        <li>
            <label>City : </label>
            <input type="text" name="city" id="city" maxlength="50">
        </li>
        <li>
            <label>State/Province/Region : </label>
            <input type="text" name="state" id="state" maxlength="50">
        </li>
        <li>
            <label>ZIP : </label>
            <input type="text" name="zipcode" id="zipcode" maxlength="20">
        </li>
        <li>
            <label>Country : </label>
            <select id="country" name="country" >
                <option value="United states">United states</option>
            </select>
        </li>
        <li>
            <label>Phone number:</label>
            <input type="text" name="phone" id="phone" maxlength="20">
        </li>
    </ul>

    <div class="row setting-pop-up-address-details">
        <div class="col-md-12">
            <div class="setting-pop-up-buttons">
                <button type="button" onclick="cancel_address()" href="javascript:void(0)" class="btn deliver-address">Cancel</button>
                <!-- <a  id="add_new_card_btn" href="javascript:void(0)">Add new card</a>-->
                <button type="submit" value="addAddress" class="btn deliver-address">Save Address</button>
                <?= $this->Form->end(); ?>
            </div>
        </div>
    </div>
    <?php echo $this->Form->end(); ?>
</div>



<div id="pop-up-box-change-address" class="pop-up">
    <?php echo $this->Form->create("User", array('class' => 'pop-up-content', 'data-toggle' => "validator", 'id' => 'useAdForm')) ?>
    <span  onclick="document.getElementById('pop-up-box-change-address').style.display = 'none'" class="close1" id="close1"  title="Close Modal">&times;</span>
    <div class="row pop-up-top">
        <div class="col-md-6">
            <p>Change Address</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <label>
                Chose  billing address 
            </label>
            <div id="changeAddress"></div>
        </div>
    </div>
    <div class="row setting-pop-up-address-details">
        <div class="col-md-12">
            <div class="setting-pop-up-buttons">
                <a  onclick="addNewAddress()" href="javascript:void(0)">Add new address</a>
                <a  id="usethisaddress" href="javascript:void(0)">Use this address</a>
            </div>
        </div>
    </div>
    <?php echo $this->Form->end(); ?>
</div>
<div id="pop-up-box-change-ship" class="pop-up">
    <?php echo $this->Form->create("User", array('class' => 'pop-up-content', 'data-toggle' => "validator", 'id' => 'useshhipForm')) ?>
    <span  onclick="document.getElementById('pop-up-box-change-ship').style.display = 'none'" class="close1" id="close1"  title="Close Modal">&times;</span>
    <div class="row pop-up-top">
        <div class="col-md-6">
            <p>Change Address</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <label>
                Chose  shipping  address 
            </label>
            <div id="changeShipAddress"></div>
        </div>
    </div>
    <div class="row setting-pop-up-address-details">
        <div class="col-md-12">
            <div class="setting-pop-up-buttons">
                <a  onclick="addNewAddress1()" href="javascript:void(0)">Add new address</a>
                <a  id="usethisaddress1" href="javascript:void(0)">Use this address</a>
            </div>
        </div>
    </div>
    <?php echo $this->Form->end(); ?>
</div>

<div id="pop-up-box-change-ship-form" class="pop-up">
    <?php echo $this->Form->create("User", array('class' => 'pop-up-content', 'data-toggle' => "validator", 'id' => 'shipaddress3')) ?>
    <span  onclick="document.getElementById('pop-up-box-change-ship-form').style.display = 'none'" class="close1" id="close1" title="Close Modal">&times;</span>
    <div class="row pop-up-top">
        <div class="col-md-6">
            <p>Add a new address</p>
        </div>
    </div>


    <ul>
        <li>
            <label>Full name : </label>
            <input type="hidden" name="id" id="sid">
            <input type="text" name="full_name" id="full_name" maxlength="50">
        </li>
        <li>
            <label>Address line 1 : </label>
            <input type="text" name="address" id="address" maxlength="60">
        </li>
        <li>
            <label>Address line 2 : </label>
            <input type="text" name="address_line_2" id="address_line_2" maxlength="60">
        </li>
        <li>
            <label>City : </label>
            <input type="text" name="city" id="city" maxlength="50">
        </li>
        <li>
            <label>State/Province/Region : </label>
            <input type="text" name="state" id="state" maxlength="50">
        </li>
        <li>
            <label>ZIP : </label>
            <input type="text" name="zipcode" id="zipcode" maxlength="20">
        </li>
        <li>
            <label>Country : </label>
            <select id="country" name="country" >
                <option value="United states">United states</option>
            </select>
        </li>
        <li>
            <label>Phone number:</label>
            <input type="text" name="phone" id="phone" maxlength="20">
        </li>
    </ul>

    <div class="row setting-pop-up-address-details">
        <div class="col-md-12">
            <div class="setting-pop-up-buttons">
                <button  type="button" onclick="cancel_ship_address()" href="javascript:void(0)" class="btn deliver-address">Cancel</button>
                <button type="submit" value="addAddress" class="btn deliver-address">Save Address</button>
                <?= $this->Form->end(); ?>
            </div>
        </div>
    </div>
    <?php echo $this->Form->end(); ?>
</div>
<script type="text/javascript" >
    $(document).ready(function () {
        getSelectCard();
        getBillingAddress();
        getshipAddress();

    });
</script>
<script type="text/javascript" src="<?= HTTP_ROOT; ?>js/setting.js"></script>
<script type="text/javascript">
    function getPageDisbale() {
        $('#loaderPyament').show();
        return true;
    }

    $(function () {
        $('[data-toggle="tooltip"]').tooltip({trigger: 'manual'}).tooltip('show');
    });

    $(".progress-bar").each(function () {
        each_bar_width = $(this).attr('aria-valuenow');
        $(this).width(each_bar_width + '%');
    });

    function getSelectCard() {
        var url = $('#pageurl').val();
        $.ajax({
            type: 'POST',
            url: url + 'users/get_card_select',
            success: function (response) {
                if (response) {
                    $('#get-Card').html(response)
                }
            },
            dataType: 'html'
        });
    }

    $(function () {

        $('#card_number').keypress(function (e) {
            if (e.which == 49 || e.which == 50 || e.which == 51 || e.which == 52 || e.which == 53 || e.which == 54 || e.which == 55 || e.which == 56 || e.which == 57 || e.which == 48) {
            } else {
                return false;
            }
        });
        $('#cvv').keypress(function (e) {
            if (e.which == 49 || e.which == 50 || e.which == 51 || e.which == 52 || e.which == 53 || e.which == 54 || e.which == 55 || e.which == 56 || e.which == 57 || e.which == 48) {
            } else {
                return false;
            }
        });

    });

</script>