<?= $this->Flash->render() ?>
<script>
    $("#last-para2").bind("click", (function ()
    {
        alert("Button 2 is clicked!");
        $("#button1").trigger("click");
    }));
</script>
<section class="women-banner maternity-banner">
    <div class="container"> 
        <div class="row">
            <div class="col-md-12">
                <div class="men-banner-text">
                    <h2><a href="<?= HTTP_ROOT; ?>women/maternity" style="color: #ff6c00;">Personalized Maternity FIT</a></h2>
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
<section class="working maternity-how-it-work">
    <div class="container"> 
        <div class="row">
            <div class="col-md-12">
                <h2>HOW IT WORKS</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="how-it-works">
                    <div class="image-style4"></div>              
                    <h4>1. Fill Out The Quiz</h4>
                    <p>Share your  size, pregnancy needs and budget with our stylist and fashionably enjoy your maternity unique style.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="how-it-works">
                    <div class="image-style5"></div>
                    <h4>2. Get A FIT Box</h4>
                    <p>Our Stylist selects hand picked best outfits to support  your pregnancy style through every stage and send you a perfect FIT Box.</p>
                </div>
            </div>


            <div class="col-md-3">
                <div class="how-it-works">
                    <div class="image-style6"></div>
                    <h4>3. Keep What You Love</h4>
                    <p>Don't worry; keep what you love and return the rest.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="how-it-works">
                    <div class="image-style7"></div>
                    <h4>4. Easy Return</h4>
                    <p>Our customer-friendly policy offers free Shipping to and from. Return the FIT  Box in easy steps.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section class="mens-fit maternity-fit">
    <div class="container"> 

        <div class="row">

            <div class="col-md-6">
                <div class="mens-fit-image">
                    <img src="<?= $this->Url->image('maternity-women5.jpg'); ?>">
                </div>
            </div>

            <div class="col-md-6">
                <div class="mens-fit-text">
                    <h2>What a Fit for Maternity period</h2>
                    <ul>
                        <li>
                            Drape Fit Stylist helps you to create personal styled outfits for moms to be.
                        </li>
                        <li>
                            We carry Women’s size <a href="<?= HTTP_ROOT; ?>help-center/find-your-size">See our full women's sizes »</a>
                        </li>

                        <li>
                            Outfits are available for all trimesters and even for post-pregnancy. Our  Personal Stylist keep the essential details like-fabric, comfort lining, airy and stretchy materials in mind and select the best pieces to complete your look.
                        </li>

                        <li>
                           Happily flaunt your baby bump by leaving behind your anxieties to be taken care of by our experienced  Stylists and the selected items will be delivered to your doorstep.
                        </li>

                        <li>
                          Try out new looks by saving time, money, and energy.
                        </li>

                        <li>
                          The well-designed unique  outfits, along with other accessories are hand picked by our Stylist, allows a new makeover.
                        </li>
                        <li>
                          Select the time and date for your FIT  Box to be delivered at your convenience.
                        </li>
                        <li>
                          Pamper yourself with what you want and return rest within 5 days.
                        </li>
                        <li>
                           No shipping charges for return, but explore more options.
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
    <section class="maternity-box">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12 col-md-12">
                    <h2>Maternity FAQ</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-lg-12 col-md-12">
                    <div aria-multiselectable="true" class="panel-group" id="accordion" role="tablist">
<div class="panel panel-default">
<div class="panel-heading active" id="headingOne" role="tab">
<h4 class="panel-title"><a aria-controls="collapseOne" aria-expanded="true" data-parent="#accordion" data-toggle="collapse" href="#collapseOne" role="button">How to dress your bump During The First Trimester?</a></h4>
</div>
<div aria-labelledby="headingOne" class="panel-collapse collapse in" id="collapseOne" role="tabpanel">
<div class="panel-body">
    <p>The first trimester is tricky when it comes to getting dressed.Here are 4 strategies to style your growing belly during the first trimester.</p>
<ul class="bullet">
    <li>DON'T WEAR TIGHT CLOTHES.</li>
    <li>HIGHLIGHT OTHER PARTS OF YOUR BODY.</li>
    <li>STAY COMFORTABLE.</li>
    <li>SHOW THE BUMP OFF!</li>
</ul>
<p><strong>Our Stylist can send non-maternity clothing that grows with you!</strong></p>
</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading" id="headingTwo" role="tab">
<h4 class="panel-title"><a aria-controls="collapseTwo" aria-expanded="false" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo" role="button">On Budget , How to get new styles During The Second Trimester? </a></h4>
</div>

<div aria-labelledby="headingTwo" class="panel-collapse collapse" id="collapseTwo" role="tabpanel">
<div class="panel-body">
<p>The main challenge during the second trimester , you feel like every few weeks </p>
<p>you’re a new size and don’t want to blow your budget on new clothes every month.</p>
<p><strong>What to do:</strong> Invest in a few items that will grow with you. Look for outfits  that have details like ruching, tie-backs, buttons or gathering at the sides, and wraps, which will let you adjust your clothing as your body grows and changes. What's more, they will let you flatteringly flaunt your bump, which usually pops out during this time.</p>
<p><strong>Our Stylist ’ll find some pregnancy style essentials that go with everything and you feel more comfy and classy!</strong></p>
</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading" id="headingThree" role="tab">
<h4 class="panel-title"><a aria-controls="collapseThree" aria-expanded="false" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseThree" role="button">How to manage from work to weekend During All Trimesters?</a></h4>
</div>

<div aria-labelledby="headingThree" class="panel-collapse collapse" id="collapseThree" role="tabpanel">
<div class="panel-body">
<p>You need a few essential FITS that will go from work to weekend without sacrificing comfort.Embrace the wrap outfits. Or rather, let the wrap dress – in a sleek solid color or a color-blocked pattern – embrace your curves. You'll look perfectly pulled together for the office and be comfortable and stylish for running weekend errands. </p>
<p>As your bump gets bigger and higher, simply change where you place the tie, eventually making the frock into an Empire-waisted clothes, giving much-needed definition between bosom and belly.Another versatile outfit to choose: a pair of dark denim maternity boot-cut jeans with the stretchy fabric built right into the waistband.</p>
<p></p><strong>Our Stylist ‘ll choose some cuts and colors , that  will flatter you throughout the entire pregnancy and work for almost any work or social situation.</strong></p>
</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading" id="headingfour" role="tab">
<h4 class="panel-title"><a aria-controls="collapsefour" aria-expanded="false" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapsefour" role="button">How to dress your last leg of your pregnancy During Third Trimester ?</a></h4>
</div>

<div aria-labelledby="collapsefour" class="panel-collapse collapse" id="collapsefour" role="tabpanel">
<div class="panel-body">
<p>You feel huge and uncomfortable. So during the Last Trimester , <strong>Our Stylist always choose something very stylish and comfy </strong>like  an Empire-waisted maxi dress – an    ankle-length flowing knit dress that you can wear even after the baby has arrived. You can try some Pair a tunic in a comfy knit fabric over maternity leggings.</p>
</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading" id="headingfive" role="tab">
<h4 class="panel-title"><a aria-controls="collapsefive" aria-expanded="false" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapsefive" role="button">How to manage your Postpartum Body ?</a></h4>
</div>

<div aria-labelledby="collapsefive" class="panel-collapse collapse" id="collapsefive" role="tabpanel">
<div class="panel-body">
<p>Once you give birth, that postpartum belly pooch is likely to linger and though it may not be as endearing, it's all good and completely normal! This beautiful body of yours just birthed your new little baby, and while things don't exactly feel as they once did, now is the time to celebrate it.</p>
<p><strong>Here our Stylist’s 5 style tips  that will help you dress your postpartum pooch in style and confidence -</strong></p>
<ul>
    <li>Wear Dark Colors.</li>
    <li>Wear Print.</li>
    <li>Keep Things Loose and Flowy.</li>
    <li>Embrace the mom jeans trend.</li>
    <li>Live in jumpsuits and dresses.</li>
</ul>
<p><strong>Our Stylists Will send all these comfy style Fits that are perfect for busy new moms.</strong></p>
</div>
</div>
</div>

</div>
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