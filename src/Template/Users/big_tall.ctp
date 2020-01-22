<?= $this->Flash->render() ?>
<section class="men-banner big-tall-banner">
    <div class="container"> 
        <div class="row">
            <div class="col-md-12">
                <div class="men-banner-text">
                    <h2><a href="<?= HTTP_ROOT; ?>men" style="color: #ff6c00;">Men’s BIG & TALL FIT</a></h2>
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

<section class="working big-tall-how-it-work">
    <div class="container"> 
        <div class="row">
            <div class="col-md-12">
                <h2>HOW IT WORKS</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="how-it-works">
                    <div class="image-style"></div>              
                    <h4>1. Fill out the Quiz</h4>
                    <p>Start personalizing your style by sharing your exact size, shape, and budget with our expert Stylist.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="how-it-works">
                    <div class="image-style1"></div>
                    <h4><a href="<?= HTTP_ROOT; ?>men/big-tall" style="color: #ff6c00; text-decoration: none;">2. Get a FIT Box</a></h4>
                    <p>Receive a FIT  Box in accordance with your big size and length to meet your styling needs. Our experts will handpick the perfect  outfits for you to send you the perfect FIT Box.</p>
                </div>
            </div>


            <div class="col-md-3">
                <div class="how-it-works">
                    <div class="image-style2"></div>
                    <h4>3. Keep What You Love</h4>
                    <p>Simply try on everything from home and only pay for what you keep and return what you don’t.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="how-it-works">
                    <div class="image-style3"></div>
                    <h4>4. Easy Return</h4>
                    <p>Drape Fit  offers a flexible return and exchange policy . It’s Free Shipping , Return & Exchanges.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section class="mens-fit">
    <div class="container"> 
        <div class="row">
            <div class="col-md-6">
                <div class="mens-fit-image">
                    <img src="<?= $this->Url->image('big-tall-men5.jpg'); ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mens-fit-text">
                    <h2>A style for the Big and Tall Fit</h2>
                    <ul>
                        <li>
                           Drape Fit Stylist knew how difficult it is to get the best fitting, especially if you are a big and tall sized man. But don't worry now as our expert Stylists  will personally select the outfits meeting your big and tall size. 
                        </li>

                        <li>
                            We carry Men’s sizes XS-3XL, 28-48-inch waists, 28-36-inch inseams, and shirts and blazers in tall sizes.
                        </li>
                        <a href="<?= HTTP_ROOT; ?>help-center/find-your-size">See our full men's sizes »</a>
                        <li>
                            With Drape Fit, you don't have to compromise on your styling due to your tall size. You will receive the perfect outfit in accordance to your style ,shape and budget.
                        </li>

                        <li>
                            With the perfect attire, you can be more confident in your own self. Our experienced stylist will provide you the overall look as they also handpicked the matching accessories goes well with your perfect Fit.
                        </li>

                        <li>
                            You can try out the different looks more confidently with our professional  Stylists as they advise or picks the best for you.
                        </li>
                        <li>
                            Save your money on alterations, save your energy on finding the Perfect Fit for your big and tall size with our Drape Fit Stylists.
                        </li>
                        <li>
                            Wear your best  FIT as per the season and occasions.
                        </li>
                        <li>
                            You can even select your own shipping date and time for your FIT Box to reach.
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
                    <?php echo $this->Form->create('', ['data-toggle' => "validator", 'novalidate' => "true", 'id' => 'menuserformsignup', 'class' => "men-sign-up-section", 'url' => ['action' => 'userregistration']]); ?>
                    <div class="sign-up-page">
                        <h1>New to Drape Fit</h1>                  
                        <p class="last-para">Already have an Account ? <a href="#" onclick="document.getElementById('id01').style.display = 'block'"> Sign In </a> here.</p>
                    </div>
                    <div class="sign-up-form">
                        <input type="text" autocomplete="off" placeholder="First Name" name="fname" required='required'>
                        <input type="text"  autocomplete="off" placeholder="Last Name" name="lname" required>
                        <input type="text"  autocomplete="off" placeholder="Enter Email" name="email" class="eml" required>
                        <label id="email-error_women" class="error" for="email"></label>
                        <input type="hidden"  name="gender" value="men" required>
                        <div class="show-password">
                            <input type="password" autocomplete="off" placeholder="Enter Password" name="pwd" required id="men4">
                            <span id="men4psw" onclick="men4psw()">show</span>
                        </div>
                    </div>
                    <script type="text/javascript">
                        function men4psw()
                        {
                            var x = document.getElementById("men4");
                            if (x.type === "password")
                            {
                                x.type = "text";
                                $('#men4psw').html('hide');
                            } else
                            {
                                x.type = "password";
                                $('#men4psw').html('show');
                            }
                        }
                    </script>
                    <div class="clearfix"><button type="submit" class="signupbtn">Sign Up</button></div>
                    <?= $this->Form->end(); ?>
                </div>
            </div>    
        </div>
    </section>
<?php } ?>
<script>
    function menFromSubmit() {
        $('#loaderPyament').show();
        return true;
    }
</script>

<script>
    $("#menuserformsignup").validate({
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
