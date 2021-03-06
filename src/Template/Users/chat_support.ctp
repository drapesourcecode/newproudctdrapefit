<style type="text/css">
    #message{height:340px;overflow-y:scroll}.chart-support{float:left;width:100%}.chart-support h3{font-size:20px;font-weight:bold;color:#111;margin-bottom:17px}.chart-support form{float:left;width:100%;position:relative}.chart-support form input[type="text"]{width:100%;border:1px solid #ccc;color:#000;font-size:16px;padding:12px 80px 12px 15px;border-radius:5px}.chart-support form input[type="text"]::placeholder{color:#000}.chart-support form input[type="submit"]{position:absolute;background:#d64ade;color:#fff;text-transform:uppercase;font-weight:bold;border:1px solid #d64ade;right:0;top:0;height:100%;padding:0 25px;border-top-right-radius:6px;border-bottom-right-radius:6px}.chart-support .contact-need{float:left;width:100%;background:#eaeaea;border:1px solid #cccc;padding:0 15px 25px;text-align:center;margin-top:31px}.contact-need ul{float:left;width:100%}.contact-need ul li{display:inline-block}.contact-need ul li a{display:inline-block;background:#111;padding:8px 21px;font-size:15px;color:#b9b9b9;border-radius:22px;margin:0}.contact-need ul li a:hover{background:#d64ade;color:#111}.about-sectio-box{float:left;width:100%}.about-sectio-box h4{font-size:21px;color:#d64ade;font-weight:bold;padding-bottom:10px}.about-sectio-box h4:after{content:"";position:absolute;height:3px;width:55px;background:#d64ade;left:15px;top:46px}.about-sectio-box ul{float:left;width:100%}.about-sectio-box ul li{display:inline-block;width:100%;border-bottom:1px solid #e6e2e2}.about-sectio-box ul li:last-child{border:none}.about-sectio-box ul li a{font-size:15px;color:#5a5a5a;padding:11px 0;display:inline-block}.about-sectio-box ul li a:hover{color:#d64ade}.live-chat{background:#000;position:fixed;bottom:0;right:0}.live-chat{background:#fff;position:fixed;bottom:0;right:0;border:1px solid #ccc;width:300px;border-top-left-radius:5px;border-top-right-radius:5px;z-index:11111;overflow:hidden;margin-bottom:0px;transition:500ms all ease-in-out 0s;height:100%;width:100%}.live-chat a.live-chat-top{background:#111;padding:4px 15px;color:#fff;font-size:14px;display:inline-block;width:101%;position:relative;font-weight:bold;letter-spacing:0.5px}.live-chat a .fa-angle-down{float:right;margin-top:4px}.chat-footer{float:left;width:100%;padding:4px 9px;border-top:1px solid #ccc}.chat-footer input[type="text"]{border:none;width:100%;color:#909090;font-size:13px}.chat-footer input[type="text"]:focus{outline:none}.chat-footer input[type="text"]::-webkit-input-placeholder{color:pink}.chat-footer input[type="text"]::-moz-placeholder{color:pink}.chat-footer input[type="text"]:-ms-input-placeholder{color:pink}.chat-footer input[type="text"]:-moz-placeholder{color:pink}.add-file-icon2{position:relative;overflow:hidden;display:inline-block;float:left;text-align:center;width:auto;margin-top:0;margin-left:0}.upload-btn-wrapper input[type=file]{font-size:100px;position:absolute;left:0;top:0;opacity:0}.chat-icon-box{float:left;width:100%}.chat-icon-box ul{float:left}.chat-icon-box ul li{display:inline-block;vertical-align:top}.chat-footer button{float:right;line-height:0;width:10%}.chat-icon-box ul li a{color:#676767;padding:0 3px;cursor:pointer}.chat-icon-box{float:left;width:100%;padding-top:6px}.chat-icon-box ul li label{margin-bottom:0}#photos_clearing{max-width:100px;overflow-x:scroll;min-width:100%;overflow-y:hidden}#photos_clearing li{display:inline-block;width:45px;height:55px;overflow:hidden;margin:0 5px;position:relative}#photos_clearing li img{width:100%}#photos_clearing li .remove{position:absolute;right:2px;top:-3px;color:red}.blue1{margin-bottom:0;transition:500ms all ease-in-out 0s}#message{height:79vh}.chat-box{float:left;width:100%;height:100%}.for-height{height:69vh !important}@media screen and (max-width: 767px){#message{height:71vh}.for-height{height:58vh !important}}.add-camera-icon2{position:relative;height:15px;width:20px}.add-camera-icon2 #came{position:absolute;left:0;top:0;opacity:0}#main-emo-popup{display:block;position:absolute;top:-47px;width:100%;left:0;min-height:50px;overflow-y:scroll}#main-emo-popup .emo-area li{display:inline-block;width:20px}#main-emo-popup .emo-area li a{display:inline-block}#main-emo-popup .emo-area li a img{width:100%}.chat-footer{position:relative}
</style>
<div class="live-chat" id="btn1" href="#">
    <a class="live-chat-top" onclick="togglemargin()">
        What can we help with? &nbsp;&nbsp; 
        <i class="fas fa-angle-down"></i>
    </a>
    <div class="chat-box"  style="position: relative;float: left;width: 100%; height: 100%;">
        <div id="online-msg">
            <table style="width:100%;text-align: center;">
                <thead>
                    <tr >
                        <th colspan="4" scope="col" style="text-align: center;"><strong id='chatRoom-<?php echo $userId; ?>'>Now online</strong></th>
                    </tr>

                </thead>
            </table>
            <div id="message" class="msg_container_base" style="border-bottom:1px solid #ddd;">
                <table id="chats-<?php echo $userId; ?>" class="table table-striped">
                    <tbody></tbody>
                </table>    
            </div>
            <div class="chat-footer"><span id="pic_msg"></span><ul id="photos_clearing" class="clearing-thumbs" data-clearing></ul>
                <span id="typigng-<?php echo $userId; ?>" style="position: absolute;left:10px; top:0"></span>
                <input type="text" class="form-control pm_textbox msg" id="msg-<?php echo $userId; ?>" name="msg" placeholder="Enter Message.." style="width: 84%;max-width: 100%;float: none;display: inline-block;border:0px;outline:0px;box-shadow:none !important;"></input>

                <div class="emo-popup" id="main-emo-popup" style="display: none;">
                    <ul class="emo-area">
                        <?php foreach ($getEmoticons as $getEmoticon) { ?>
                            <li><a href="javascript:;" onclick="insertEmoctions('<?php echo $getEmoticon->shortcut; ?>', 'msg-<?php echo $userId; ?>')" id="smile" ><img id="insert_smile"  src="<?php echo $getEmoticon->image_url ?>" title=":<?php echo $getEmoticon->shortcut; ?>"/></a></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="chat-icon-box">

                    <ul>
                        <li>
                            <div class="add-file-icon2 upload-btn-wrapper">
                                <label for='photos'><a href="#"><i class="fas fa-paperclip" style="outline:0px;"></i></a></label>
                                <input type="file" id="photos" name="photos[]" multiple/>
                            </div>
                        </li>

                        <li>
                            <div class="add-camera-icon2">
                                <label for='came'><a href="#"><i class="fa fa-camera" style="outline:0px;"></i></a></label>
                                <input type="file" id="came" name="came[]" capture="camera" accept="image/*" multiple/>

                            </div>
                        </li>
                        <li>
                            <div class="add-camera-icon2">
                                <label for='came'> <a style="text-decoration: none;" href="javascript:;" title="Emotions" onclick="$('#main-emo-popup').toggle();"  ><img style="margin-right: 20px" src="<?php echo HTTP_ROOT; ?>/img/emo-icon.png"></a></label>


                            </div>
                        </li>
                    </ul>


                    <button type="button"  id="send-<?php echo $userId; ?>" name="send" class="send"> <i class="fas fa-paper-plane" style="color:#d64ade;font-size:15px;transform: rotate(30deg);"></i>
                    </button>
                </div>

            </div>
        </div>

        <!--offline message div start here--> 
        <div id="offline-msg">
            <div>
                <table class="table table-striped" height="200">
                    <thead>
                        <tr>
                            <th colspan="4" scope="col"><strong>We says to sorry, we are closed now and available between 8 AM to 5 PM CST.</strong></th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>    
            </div>
        </div>
        <!--offline div end here-->

    </div>
</div>
<style>
    .come:after{  position: absolute;  height: 11px; width: 16px; background: #d2d6de;transform: rotate(53deg); content: "";left: -7px;top: 9px; }
    .send-go:after{ position: absolute; height: 12px; width: 11px;background: #d64ade;transform: rotate(36deg); content: "";right: -5px;top: 8px;}
    .table > tbody > tr > td{ border: none;}
</style>
<input type="hidden" id='userId' value="<?php echo $userId; ?>"/>
<input type="hidden" id='userName' value="<?php echo $userName; ?>"/>
<input type="hidden" id='myfile-recent' value=""/>
<img id='loading' src='<?php echo HTTP_ROOT ?>loading.gif' style='visibility: hidden;'>
<script type="text/javascript">
   function showLoading(){document.getElementById("loading").style="visibility: visible";} function hideLoading(){document.getElementById("loading").style="visibility: hidden";}
</script>
<script type="text/javascript">
    var conn;function init(){conn=new WebSocket('<?php echo WS_URL; ?>');conn.onopen=function(ev){}} $(document).ready(function(){function showUploadedItem(source){var list=document.getElementById("photos_clearing"),li=document.createElement("li"),img=document.createElement("img");img.src=source;li.appendChild(img);list.appendChild(li);} var ImgArr=[];var Imgname=[];$('#photos').on('change',function(e){$('#pic_msg').html("Loading your files...");var input=document.getElementById("photos"),formdata=false;if(window.FormData){formdata=new FormData();} var i=0,len=this.files.length,img,reader,file;for(;i<len;i++){file=this.files[i];if(!!file.type.match(/image.*/)){if(formdata){formdata.append("photos",file);} if(formdata){$.ajax({url:'<?= HTTP_ROOT; ?>'+'users/chat_fils_upload',type:"POST",data:formdata,processData:false,contentType:false,success:function(res){$('#pic_msg').html("");$('#message').addClass("for-height");showUploadedItem(JSON.parse(res).imgurl);ImgArr.push(JSON.parse(res).imgurl);Imgname.push(JSON.parse(res).imgname);}});}}}});$('#came').on('change',function(e){$('#pic_msg').html("Loading your files...");var input=document.getElementById("came"),formdata=false;if(window.FormData){formdata=new FormData();} var i=0,len=this.files.length,img,reader,file;for(;i<len;i++){file=this.files[i];if(!!file.type.match(/image.*/)){if(formdata){formdata.append("photos",file);} if(formdata){$.ajax({url:'<?= HTTP_ROOT; ?>'+'users/chat_fils_upload',type:"POST",data:formdata,processData:false,contentType:false,success:function(res){$('#pic_msg').html("");$('#message').addClass("for-height");showUploadedItem(JSON.parse(res).imgurl);ImgArr.push(JSON.parse(res).imgurl);Imgname.push(JSON.parse(res).imgname);}});}}}});init();conn.onmessage=function(e){var userId=$('#userId').val();var userName=$('#userName').val();var files=$('#myfile-recent').val();var URL='<?= HTTP_ROOT; ?>';var data=JSON.parse(e.data);var clientId=data.clientId;if(userName!=data.userName){$('#chatRoom-'+clientId).html(data.userName+' now is Online');} if(userId==data.userId){if(data.type=='open'){$('#btn1').addClass('blue1');check_cst_time();} if(data.type=="chat"){var mydata={userId:userId,userName:userName,reciveId:"admin",chat_message:data.msg,chat_type:1,files:files};$.ajax({type:"POST",url:'<?php echo HTTP_ROOT . 'users/websocket_message' ?>',data:mydata,dataType:'json',});}} if(data.type=="chat"){if(data.msg){data.msg=parseEmotions(data.msg);} if(userId==data.userId){var row='<tr><td valign="top" style="widht:100%;"><div class="send-go" style="float: right;text-align: left;width: 90%;font-size:12px;color: #fff;background: #d64ade;padding: 5px 10px;border-radius: 4px;position: relative;">'+data.msg+'</div><span style="float: right;text-align: right;width: 90%;font-size:9px !important;">'+data.timeChat+'</span></td>n</tr>';}else{var row='<tr><td valign="top" style="widht:100%;"><div style="float: left; width: 65px; text-transform: capitalize;"><strong>'+data.userName+':</strong></div><div class="come" style="float: left;font-style: italic;width: 73%;font-size: 12px;color: #535353;background: #d2d6de;padding: 5px 10px;position: relative;border-radius: 4px;">'+data.msg+'</div><span style="float: right;text-align: left;width: 90%;font-size:9px !important; " >'+data.timeChat+'</span></td>n</tr>';} $('#chats-'+clientId+' > tbody').append(row);$('#msg-'+clientId).val('');$('#msg-'+clientId).focus();$(".msg_container_base").stop().animate({scrollTop:$(".msg_container_base")[0].scrollHeight},1000);}else if(data.type=="writing"){if(userId!=data.userId){if(data.value==0){$('#typigng-'+clientId).hide().html('<i>'+data.userName+" typeing...</i>").fadeIn('slow');} if(data.value==200000){$('#typigng-'+clientId).hide().html(" ").fadeIn('slow');}}}} $('.send').click(function(){$('#message').toggleClass("for-height");var userId=$('#userId').val();var userName=$('#userName').val();var msg=$('#msg-'+userId).val();var img=ImgArr;var file=$('#photos');var URL='<?= HTTP_ROOT; ?>';var imgName;var msg1='';var complete=0;var msgSt="";if(img.length!=''){for(var j=0;j<img.length;j++){if(img.length-1==j){complete=1;msgSt=msg;} var ext=ImgArr[j].split('.');if(ImgArr[j]){if(ext[ext.length-1]=='png'||ext[ext.length-1]=='jpeg'||ext[ext.length-1]=='JPG'||ext[ext.length-1]=='gif'||ext[ext.length-1]=='jpg'){msg1=Imgname[j]+" <br>"+'<img src="'+ImgArr[j]+'" height="90" width="90"><a href="'+ImgArr[j]+'" download height="90" width="90" style="position: absolute;left: 11px;top: 60px;">'+'<i class="fa fa-download" aria-hidden="true" style="color: #fff;background-color: #3b333380;padding: 10px;"></i>'+'</a>';}else{msg1=Imgname[j]+'<a href="'+ImgArr[j]+'" download height="90" width="90" style="position: absolute;left: 11px;top: 60px;">'+'<i class="fa fa-download" aria-hidden="true" style="color: #fff;background-color: #3b333380;padding: 10px;"></i>'+'</a>';} var data={userId:userId,userName:userName,msg:msg1,type:'chat',timeChat:new Date().toLocaleTimeString(),clientId:userId,doc:ImgArr[j]};if(msg1!=''){conn.send(JSON.stringify(data));if(complete==1){$("#photos_clearing").empty();ImgArr=[];Imgname=[];if(msgSt!=''){var data={userId:userId,userName:userName,msg:msgSt,type:'chat',timeChat:new Date().toLocaleTimeString(),clientId:userId,doc:""};conn.send(JSON.stringify(data));}}}}} var img=$('#myfile-recent').val();}else{var data={userId:userId,userName:userName,msg:msg,type:'chat',timeChat:new Date().toLocaleTimeString(),clientId:userId,doc:img};if(msg!=''){conn.send(JSON.stringify(data));}}});$('.msg').keypress(function(e){var key=e.which;if(key==13){var userId=$('#userId').val();var userName=$('#userName').val();var msg=$('#msg-'+userId).val();var data={userId:userId,userName:userName,msg:msg,type:'chat',timeChat:new Date().toLocaleTimeString(),clientId:userId};if(msg!=''){conn.send(JSON.stringify(data));}}});});function typing(searchTimeout){var userId=$('#userId').val();var userName=$('#userName').val();var isTypingMsg={type:'writing',value:searchTimeout,userId:userId,userName:userName,clientId:userId};if(searchTimeout==0){conn.send(JSON.stringify(isTypingMsg));} if(searchTimeout==200000){conn.send(JSON.stringify(isTypingMsg));}} var searchTimeout=0 $(document).on('keypress','.msg',function(e){if(searchTimeout==0){typing(searchTimeout);searchTimeout=2;}});$(document).on('blur','.msg',function(e){typing(200000);searchTimeout=0;});

</script>
<script type="text/javascript">
    function togglemargin(){var myButtonClasses=document.getElementById("btn1").classList;if(myButtonClasses.contains("blue1")){myButtonClasses.remove("blue1");}else{myButtonClasses.add("blue1");startInterval();}}
</script>
<script>
    $(document).ready(function(){pastMessage();});function pastMessage(){check_cst_time();var userId=$('#userId').val();var userName=$('#userName').val();var clientId=userId;$.ajax({type:"POST",url:'<?php echo HTTP_ROOT . 'users/websocket_past_message' ?>',success:function(data){var i;for(i=0;i<=data.msg.length;i++){if(data.msg[i].chat_message){data.msg[i].chat_message=parseEmotions(data.msg[i].chat_message);} if(userId==data.msg[i].user_id){var row='<tr><td valign="top" style="widht:100%;"><div class="send-go" style="float: right;text-align: left;width: 90%;font-size: 13px;color: #fff;background: #d64ade;padding: 7px 12px;border-radius: 4px;position: relative;">'+data.msg[i].chat_message+'</div><span style="font-size:9px !important;float: left;text-align: right;width: 90%;">'+data.time[i]+'</span></td>n</tr>';}else{var row='<tr><td valign="top" style="widht:100%;"><div style="float: left; width: 65px; text-transform: capitalize;"><strong>'+data.msg[i].user.name+':</strong></div><div class="come" style="float: left;font-style: italic;width: 73%;font-size: 13px;color: #535353;background: #d2d6de;padding: 8px 9px;position: relative;border-radius: 4px;">'+data.msg[i].chat_message+'</div><span style="font-size:9px !important;,float: left;text-align: left;width: 90%;" >'+data.time[i]+'</span></td>n</tr>';} $('#chats-'+clientId+' > tbody').append(row);$(".msg_container_base").stop().animate({scrollTop:$(".msg_container_base")[0].scrollHeight},1000);}},dataType:'json'});} function check_cst_time(){$.ajax({type:"POST",url:'<?php echo HTTP_ROOT . 'users/check_cst_time' ?>',dataType:'json',success:function(data){if(data==1){document.getElementById("online-msg").style.display="none";document.getElementById("offline-msg").style.display="block";}else{document.getElementById("offline-msg").style.display="none";document.getElementById("online-msg").style.display="block";}},});} function startInterval(){setInterval(function(){var userId=$('#userId').val();var userName=$('#userName').val();var data={userId:userId,userName:userName,msg:'',type:'open',timeChat:new Date().toLocaleTimeString(),clientId:userId};conn.send(JSON.stringify(data));check_cst_time();},100000);} function insertEmoctions(shortcut,id){if(id){$("#"+id).val($("#"+id).val()+" :"+shortcut).focus();$(".emo-popup").hide();}} function parseEmotions(text){var images={'question':'https://cdn2.iconfinder.com/data/icons/fatcow/32x32/emotion_question.png','love':'https://cdn2.iconfinder.com/data/icons/fatcow/32x32/emotion_love.png','tire':'https://cdn2.iconfinder.com/data/icons/fatcow/32x32/emotion_tire.png','smile2':'https://cdn3.iconfinder.com/data/icons/fatcow/32x32_0400/emotion_smile.png','grin':'https://cdn3.iconfinder.com/data/icons/fatcow/32x32_0400/emotion_grin.png','hitler':'https://cdn2.iconfinder.com/data/icons/fatcow/32x32/emotion_hitler.png','monkey':'https://cdn2.iconfinder.com/data/icons/fatcow/32x32/emotion_face_monkey.png','baby':'https://cdn2.iconfinder.com/data/icons/fatcow/32x32/emotion_baby.png','clown':'https://cdn2.iconfinder.com/data/icons/fatcow/32x32/emotion_clown.png','cool':'https://cdn2.iconfinder.com/data/icons/fatcow/32x32/emotion_cool.png','bubblegum':'https://cdn2.iconfinder.com/data/icons/fatcow/32x32/emotion_bubblegum.png','crazy':'https://cdn2.iconfinder.com/data/icons/fatcow/32x32/emotion_crazy.png','unshaven':'https://cdn2.iconfinder.com/data/icons/fatcow/32x32/emotion_unshaven.png','facepanda':'https://cdn2.iconfinder.com/data/icons/fatcow/32x32/emotion_face_panda.png','spy':'https://cdn2.iconfinder.com/data/icons/fatcow/32x32/emotion_spy.png','rabbit':'https://cdn2.iconfinder.com/data/icons/fatcow/32x32/emotion_crazy_rabbit.png','ninja':'https://cdn2.iconfinder.com/data/icons/fatcow/32x32/emotion_ninja.png','red':'https://cdn2.iconfinder.com/data/icons/fatcow/32x32/emotion_red.png','sleep2':'https://cdn2.iconfinder.com/data/icons/fatcow/32x32/emotion_sleep.png','cold':'https://cdn2.iconfinder.com/data/icons/fatcow/32x32/emotion_cold.png','stupid':'https://cdn2.iconfinder.com/data/icons/fatcow/32x32/emotion_stupid.png','waii':'https://cdn3.iconfinder.com/data/icons/fatcow/32/emotion_waii.png'};var myarray=text.split(' ');var imgv='';for(var i=0;i<myarray.length;i++){var spilvalue=myarray[i].split(':');var img=spilvalue[1];if(images[img]){imgv+='<img src='+images[img]+''+'>';}else{imgv+=myarray[i];} imgv+=' ';} if(imgv){return imgv;}else{return imgv;}}
</script>

<!---
<script type="text/javascript">

    (function () {
        // Display the images to be uploaded.
        var multiPhotoDisplay;

        $('#photos').on('change', function (e) {
            return multiPhotoDisplay(this);
        });

        this.readURL = function (input) {
            var reader;

            // Read the contents of the image file to be uploaded and display it.

            if (input.files && input.files[0]) {
                reader = new FileReader();
                reader.onload = function (e) {
                    var $preview;
                    $('.image_to_upload').attr('src', e.target.result);
                    $preview = $('.preview');
                    if ($preview.hasClass('hide')) {
                        return $preview.toggleClass('hide');
                    }
                };
                return reader.readAsDataURL(input.files[0]);
            }
        };

        multiPhotoDisplay = function (input) {
            var file, i, len, reader, ref;

            // Read the contents of the image file to be uploaded and display it.

            if (input.files && input.files[0]) {
                ref = input.files;
                for (i = 0, len = ref.length; i < len; i++) {
                    file = ref[i];
                    reader = new FileReader();
                    reader.onload = function (e) {
                        var image_html;
                        image_html = `<li><span class="remove" ><i class="far fa-trash-alt"></i></span><a class="th" href="${e.target.result}"><img width="75" src="${e.target.result}"></a></li>`;
                        $('#photos_clearing').append(image_html);
                        if ($('.pics-label.hide').length !== 0) {
                            $('.pics-label').toggle('hide').removeClass('hide');
                        }
                        // return $(document).foundation('reflow');
                    };
                    reader.readAsDataURL(file);
                }
                window.post_files = input.files;
                if (window.post_files !== void 0) {
                    return input.files = $.merge(window.post_files, input.files);
                }
            }
        };

    }).call(this);


</script>
<script type="text/javascript">
    $(document).on('click', '.remove', function () {
        $(this).closest('li').toggleClass('strike').fadeOut('slow', function () {
            $(this).detach();
        });
    })
</script>

--->