WHAT A FIT FOR PLUS SIZE<?= $this->Flash->render() ?>
<script>
    $("#last-para2").bind("click", (function ()
    {
        alert("Button 2 is clicked!");
        $("#button1").trigger("click");
    }));
</script>

<section class="women-banner plus-size-banner">
    <div class="container"> 
        <div class="row">
            <div class="col-md-12">
                <div class="men-banner-text">
                    <h2><a href="<?= HTTP_ROOT; ?>women" style="color: #ff6c00;">PLUS SIZE STYLE FIT</a></h2>
                    <!-- <p>Get quality clothing customized to your style size and buget-delivered, offering sizes XS-3XL, 28-48 wait & inseams 28-36".</p> -->
                    <?php if ($this->request->session()->read('Auth.User.id') == '') { ?>
                        <a href="javascript:void(0);" onclick="document.getElementById('id03').style.display = 'block'">GET STARTED</a>
                    <?php } else { ?>
                        <a href="<?php echo HTTP_ROOT . 'calendar-sechedule' ?>">GET STARTED</a>
                    <?php } ?>
                </div>
            </div>
        </div>  
    </div>
</section>
<section class="working plus_size_how_it">
    <div class="container"> 
        <div class="row">
            <div class="col-md-12">
                <h2>HOW IT WORKS</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="how-it-works">
                    <div class="image-style4"></div>              
                    <h4>1. Fill Out The Quiz</h4>
                    <p>Tell us about your age, size and budget. Your personal stylist will connect with you .
you .</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="how-it-works">
                    <div class="image-style5"></div>
                    <h4>2. We Deliver The Goods  </h4>
                    <p>Your Stylist send you a hand picked outfits, accessories and you will get unique style.</p>
                </div>
            </div>


            <!--<div class="col-md-3">-->
            <!--    <div class="how-it-works">-->
            <!--        <div class="image-style6"></div>-->
            <!--        <h4>3.Keep what you love</h4>-->
            <!--        <p>Take 5 days to FIT,Choose and think and connect your personal stylist with questions you have.Try  before Buy . Keep what you love.</p>-->
            <!--    </div>-->
            <!--</div>-->

            <div class="col-md-4">
                <div class="how-it-works">
                    <div class="image-style7"></div>
                    <h4>3.Easy Return</h4>
                    <p>Keep what you love and return you don’t . It’s Free shipping and return. Return envelope included. </p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section class="mens-fit plus_size_mens_fit">
    <div class="container"> 

        <div class="row">

            <div class="col-md-6">
                <div class="mens-fit-image">
                    <img src="<?= $this->Url->image('plus-size-women5.jpg'); ?>">
                </div>
            </div>

            <div class="col-md-6">
                <div class="mens-fit-text">
                    <h2>WHAT A FIT FOR PLUS SIZE</h2>
                    <ul>
                        <li>
                            Drape Fit Plus Size outfits allow everyone to dream and dare to be different , as experts in personal
style service value your needs. Drape Fit offer different styles and trends in plus size outfits up to
24W &amp; 3X. Your stylist find a perfect flawlessly styled and fitted hand picked outfits for you as per
your size,age and budget .
                        </li>
                        <a href="<?= HTTP_ROOT; ?>women/plus-size">See our full sizing chart »</a>

                        <li>
                            Our stylists send you a perfect FIT Box near to your door steps as per your shipping date. Enjoy
hassle-free shopping !
                        </li>

                        <li>
                           Try before Buy and save your time and money.It not only saves your time, money, and effort, but it
allows experts to create and style the fancied requirements, be it outfits, accessories.
                        </li>

                        <li>
                            Our expert stylists , with their expertise and the latest technology, help you to transform and evolve
your personal styles on Plus size.
                        </li>

                        <li>
                            Receive a box monthly or quarterly.Choose your frequency. Skip or Cancel anytime.
                        </li>
                        <li>
                            Shipping is free both ways.Pick your delivery date. You have 5 days to buy or return.After 5 days,
you are only charged for what you keep.
                        </li>
                    </ul>
                </div>
            </div> 

        </div>
    </div>
</section>

<section class="brand">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="brand-heading">
                    <h2>Brands are Ready for you</h2>
                    <p>We are working with many brands.According to your selection we will ship a complete FIT Box that will FIT under your budget.</p>
                </div>            
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="brand-image">
                    <ul>
                        <li>
                            <div class="small-images">
                                <img src="<?= HTTP_ROOT . MAN ?>penguin.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="small-images">
                                <img src="<?= HTTP_ROOT . MAN ?>nike.png" alt="">
                            </div>
                        </li>

                        <li>
                            <div class="big-images">
                                <img src="<?= HTTP_ROOT . MAN ?>scotch.png" alt="">
                            </div>
                        </li>

                        <li>
                            <div class="small-images">
                                <img src="<?= HTTP_ROOT . MAN ?>gap.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="small-images">
                                <img src="<?= HTTP_ROOT . MAN ?>pata.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="big-images">
                                <img src="<?= HTTP_ROOT . MAN ?>tommy.png" alt="">
                            </div>
                        </li>

                        <li>
                            <div class="small-images">
                                <img src="<?= HTTP_ROOT . MAN ?>boss.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="small-images">
                                <img src="<?= HTTP_ROOT . MAN ?>vineyard.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="small-images">
                                <img src="<?= HTTP_ROOT . MAN ?>vans.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="small-images">
                                <img src="<?= HTTP_ROOT . MAN ?>hurley.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="small-images">
                                <img src="<?= HTTP_ROOT . MAN ?>brooks.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="small-images">
                                <img src="<?= HTTP_ROOT . MAN ?>zara.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="small-images">
                                <img src="<?= HTTP_ROOT . MAN ?>levis.png" alt=""
                            </div>
                        </li>
                        <li>
                            <div class="small-images">
                                <img src="<?= HTTP_ROOT . MAN ?>armour.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="small-images">
                                <img src="<?= HTTP_ROOT . MAN ?>bonobos.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="small-images">
                                <img src="<?= HTTP_ROOT . MAN ?>landsend.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="small-images">
                                <img src="<?= HTTP_ROOT . MAN ?>jcrew.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="small-images">
                                <img src="<?= HTTP_ROOT . MAN ?>oldnavy.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="small-images">
                                <img src="<?= HTTP_ROOT . MAN ?>uniqlo.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="small-images">
                                <img src="<?= HTTP_ROOT . MAN ?>northface.png" alt="">
                            </div>
                        </li>
                        <!-- <li>
                            <div class="small-images">
                                <img src="<?= HTTP_ROOT . MAN ?>h&m.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="small-images">
                                <img src="<?= HTTP_ROOT . MAN ?>eagle.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="small-images">
                                <img src="<?= HTTP_ROOT . MAN ?>ragnbone.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="small-images">
                                <img src="<?= HTTP_ROOT . MAN ?>bensharma.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="small-images">
                                <img src="<?= HTTP_ROOT . MAN ?>express.png" alt="">
                            </div>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>
<?php if ($this->request->session()->read('Auth.User.id') == '') { ?>
    <script>
        $(document).ready(function () {
            $('#email-error_women').hide();
        });
    </script>
    <section class="signup-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">           
                    <?php echo $this->Form->create('', ['data-toggle' => "validator", 'novalidate' => "true", 'id' => 'womenuserformsignup', 'class' => "men-sign-up-section", 'url' => ['action' => 'userregistration']]); ?>
                    <div class="sign-up-page">
                        <h1>New to Drape Fit</h1>                  
                        <p class="last-para">Already have an Account ? <a href="#" onclick="document.getElementById('id01').style.display = 'block'"> Sign In </a> here.</p>
                    </div>
                    <div class="sign-up-form">
                        <input type="text" placeholder="First Name" name="fname" required>
                        <input type="text" placeholder="Last Name" name="lname" required>
                        <input type="text" placeholder="Enter Email" name="email"  class="eml"  required>
                        <label id="email-error_women" class="error" for="email"></label>
                        <input type="hidden"  name="gender" value="women" required>
                        <div class="show-password">
                            <input type="password" placeholder="Enter Password" name="pwd" required id="women4">
                            <span id="women4psw" onclick="women4psw()">show</span>
                        </div>
                    </div>
                    <script type="text/javascript">
                        function women4psw()
                        {
                            var x = document.getElementById("women4");
                            if (x.type === "password")
                            {
                                x.type = "text";
                                $('#women4psw').html('hide');
                            } else
                            {
                                x.type = "password";
                                $('#women4psw').html('show');
                            }
                        }
                    </script>
                    <div class="clearfix"><button type="submit" class="signupbtn">Sign Up</button></div>
                    <?= $this->Form->end(); ?>
                </div>
            </div>    
        </div>
    </section>
    <script>
        function menFromSubmit() {
            $('#loaderPyament').show();
            return true;
        }
    </script>
    <script>
        $("#womenuserformsignup").validate({
            submitHandler: function () {
                menFromSubmit();
                return true;
            },
            rules: {
                fname: "required",
                lname: "required",
                password: {
                    required: true,
                    minlength: 5
                },
                email: {
                    required: true,
                    email: true,
                    check_email_women: true,
                },
            },
            messages: {
                fname: "Please enter your first name",
                lname: "Please enter your last name",
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                email: {
                    required: "Please enter your email address",
                    check_email_women: "An account already exists with this email address. Please choose an alternative email.",
                },
            },
        });


        jQuery(document).ready(function ($) {
            jQuery.validator.addMethod('check_email_women', function (value, element, param) {
                return this.optional(element) || !checkEmailExistUser_women(value);
            });
        });


        function checkEmailExistUser_women(input) {
            var pageurl = '<?= HTTP_ROOT; ?>';
            var lookup = {'email': input};
            //var img = pageurl + 'img/loader2.gif';
            var email_invalid = false;

            // $("#eloader").html("<img src='" + img + "' style='height: 18px;'>").show();
            $.ajax({
                type: 'POST',
                url: pageurl + 'users/ajaxCheckEmailAvail',
                data: JSON.stringify(lookup),

                success: function (response) {
                    if (response.status == 'error') {

                        $('#email-error_women').show();
                        $('#email-error_women').attr('style', 'color:red;');
                        $('#email-error_women').html(response.msg);
                        //$('.eml').val('');

                    }
                    if (response.status == 'success') {

                        $('#email-error_women').attr('style', 'color:green !important;');
                        $('#email-error_women').html(response.msg).show();

                    }
                },

                dataType: 'json'
            });
            return email_invalid;
        }



    </script>
<?php } ?>