<style>
 .error{
  font-size: 14px !important;
  font-weight: 300;
  color:#ff464e;
 }
 .inquiryForm div{
  margin-bottom: 25px;
  width: 48.66%;
  float: left;
 }
 .inquiryForm div:nth-child(odd){
  float: right;
 }
 .inquiryForm div input{
  width: 100% !important;
  margin-bottom: 0 !important;
 }
 .g-recaptcha,
 .g-recaptcha div {
  float: none !important;
  margin-bottom: 0 !important;
 }
 .map iframe {
  vertical-align: bottom;
 }
</style>
<script src="<?php echo HTTP_ROOT ?>jqvalidations/dist/jquery.validate.js"></script>
<section class="breadcrumbMenu">
 <div class="wrapper">
  <ul>
   <li><a href="<?php echo HTTP_ROOT ?>">Home</a></li>
   <li class="active"><?php echo $pageDetails->page_title; ?></li>
  </ul>
 </div>
</section>
<section class="textureOne contactPage">
 <div class="wrapper">
  <?php echo $pageDetails->description ?>
  <div class="map">
   <?php echo $map->code; ?>
  </div>
  <div class="inquiryForm" tyle="width: 100%; margin: 10px 0;">
   <h3>MAKE AN INQUIRY</h3>

   <?php echo $this->Form->create(@$user, ['url' => ['action' => 'contactUs'], 'data-toggle' => "validator", 'novalidate' => "true", 'id' => 'personalInfofrm']); ?>
   <div><label for="firstName">First Name</label>
    <input type="text" name="firstName" id='firstName' required = 'required' placeholder="First Name" />
   </div>
   <div>
    <label for="lastName">First Name</label>
    <input type="text" name="lastName"  id='lastName' required = 'required' placeholder="Last Name" />
   </div>
   <div>
    <label for="phoneNo">First Name</label>
    <input type="text" name="phoneNo" id='phoneNo' required = 'required' placeholder="Phone Number" />
   </div>
   <div>
    <label for="emailAddress">First Name</label>
    <input type="text" name="emailAddress"  id='emailAddress' required = 'required' placeholder="Email Address" />
   </div>
   <div style="width: 100%;">
    <label for="subject">Subject</label>
    <input type="text" name="subject" id='subject' required = 'required' placeholder="Subject" />
   </div>
   <br/>
   <div style="width: 100%; margin-bottom: 0;">
    <label>Message</label>
    <textarea rows="4"  name='message' id="message" required = 'required' placeholder="Message"></textarea>
   </div>
   <br/>
   <div style="width: 100%;">
    <div class="g-recaptcha" data-sitekey="6Lcx91YUAAAAAKNZMU1bnKO334sLab5cRTMtdKE0"></div>
   </div>
   <button type="submit">SUBMIT</button>
   <?php echo $this->Form->end(); ?>

  </div>
 </div>
</section>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
 $(function(){
  $("#personalInfofrm").validate({
   ignore:[],
   onkeyup:function(element){
    if(element.name=='email'){
     return false;
    }
   },
   rules:{
    firstName:"required",
    lastName:"required",
    phoneNo:"required",
    emailAddress:"required",
    subject:"required",
    message:"required",
    emailAddress: {
     required:true,
     email:true,
    },
   },
   messages:{
    firstName:"Please enter your first name",
    lastName:"Please enter your last name",
    phoneNo:"Please enter your mobile number",
    emailAddress:{
     required:"Please enter your email address",
     email:"Please enter your valid email address",
    },
    subject:"Please enter your subject",
    message:"Please enter your message",
   }
  });
  $('#phoneNo').keypress(function(event){
   var keycode=event.which;//var x=event.keyCode;
   if(!(event.shiftKey==false&&(keycode==46||keycode==8||keycode==37||keycode==39||keycode==43||(keycode>=48&&keycode<=57)))){
    event.preventDefault();//stops the default action of an element from happening.
   }
  });

 });
</script>