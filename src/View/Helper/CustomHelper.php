<?php

namespace Cake\View\Helper;

use Cake\View\Helper;
use Cake\Datasource\ConnectionManager;
use Cake\I18n\FrozenTime;
use Cake\ORM\TableRegistry;


class CustomHelper extends Helper {

    public function parseEmotions($text = null) { 
       $table = TableRegistry::get('ChatCategoryImages');
        preg_match_all('/:(\\S+)/im', $text, $matches);
        $length = count($matches[1]);
        $shortcut = array();
        foreach ($matches[1] as $match) {
            $shortcut[] = "'" . $match . "'";
        }
        if (count($shortcut)) {

            $sql = $this->$table->find('all');
            foreach ($sql as $img) {
                if ($img['status']) {
                    $oldText = ':' . $img->shortcut;
                    if ($img->chat_category_id == 0) {
                        $newText = '<img title=":' . $img->shortcut . '"   src="' . $img->image_url . '" class="chat-emotions"  style="max-height:40px;" >';
                    }
                    $text = str_replace($oldText, $newText, $text);
                }
            }
        }
        return $text;
    }

    function dateDisplay($datetime) {
        if ($datetime != "" && $datetime != "NULL" && $datetime != "0000-00-00 00:00:00") {
            return date("M d, Y", strtotime($datetime));
        } else {
            return false;
        }
    }

    function dateDisplayTime($datetime) {
        if ($datetime != "" && $datetime != "NULL" && $datetime != "0000-00-00 00:00:00") {
            return date("M d, Y H:i:s", strtotime($datetime));
        } else {
            return false;
        }
    }

    public function shortLength($x, $length) {
        if (strlen($x) <= $length) {
            return $x;
        } else {
            $y = substr($x, 0, $length) . '...';
            return $y;
        }
    }

    public function bubbleSort(array $arr) {
        $n = sizeof($arr);
        $totalWidth = 0;
        for ($i = 0; $i < $n; $i++) {
            list($width) = getimagesize(POST_IMAGES . $arr[$i]['image']);
            $totalWidth = $totalWidth + $width;
        }
        for ($i = 1; $i < $n; $i++) {
            for ($j = $n - 1; $j >= $i; $j--) {
                list($width1) = getimagesize(POST_IMAGES . $arr[$j - 1]['image']);
                list($width2) = getimagesize(POST_IMAGES . $arr[$j]['image']);
                if ($width1 < $width2) {
                    $tmp = $arr[$j - 1];
                    $arr[$j - 1] = $arr[$j];
                    $arr[$j] = $tmp;
                }
            }
        }
        return ['arr' => $arr, 'total_width' => $totalWidth, 'count' => $n];
    }

    public static function makeSeoUrl($url) {
        if ($url) {
            $url = trim($url);
            $value = preg_replace("![^a-z0-9]+!i", "-", $url);
            $value = trim($value, "-");
            return strtolower($value);
        }
    }

    public static function getPostType($userType = null) {
        if ($userType == 4) { //For kid
            return [0 => 'Public', 1 => 'Private'];
        } else { //For School
            return [0 => 'Public', 1 => 'Private', 2 => 'Followers'];
        }
    }

    public static function getCommentTime($date) {
        $time = date("M d Y", $date) . " at " . date("H:i A ", $date);
        return $time;
    }

    public static function timeAgo($time_ago) {
        if (!is_numeric($time_ago)) {
            $time_ago = strtotime($time_ago);
        }
        $cur_time = time();
        $time_elapsed = $cur_time - $time_ago;
        $seconds = $time_elapsed;
        $minutes = round($time_elapsed / 60);
        $hours = round($time_elapsed / 3600);
        $days = round($time_elapsed / 86400);
        $weeks = round($time_elapsed / 604800);
        $months = round($time_elapsed / 2600640);
        $years = round($time_elapsed / 31207680);

        if ($seconds <= 60) {  // Seconds
            echo "$seconds seconds ago";
        } else if ($minutes <= 60) { //Minutes
            if ($minutes == 1) {
                echo "one minute ago";
            } else {
                echo "$minutes minutes ago";
            }
        } else if ($hours <= 24) { //Hours
            if ($hours == 1) {
                echo "an hour";
            } else {
                echo "$hours hours ago";
            }
        } else if ($days <= 7) { //Days
            if ($days == 1) {
                echo "yesterday";
            } else {
                echo "$days days ago";
            }
        } else if ($weeks <= 4.3) { //Weeks
            if ($weeks == 1) {
                echo "a week ago";
            } else {
                echo "$weeks weeks ago";
            }
        } else if ($months <= 12) { //Months
            if ($months == 1) {
                echo "a month ";
            } else {
                echo "$months months ago";
            }
        } else { //Years
            if ($years == 1) {
                echo "one year ago";
            } else {
                echo "$years years ago";
            }
        }
    }

    function defaultImage($image) {

        return $image;
    }

    function getStatus($status) {
        $status = "Enabled";
        if ($status == 0) {
            $status = "Disabled";
        }
        return $status;
    }

/////////////////////////////ENCRYPTION AND DECRYPTION CODE/////////////////////////////////////
    public function encryptor($action, $string) {
        $output = false;
        $encrypt_method = "AES-256-CBC";
        //pls set your unique hashing key
        $secret_key = 'chinu';
        $secret_iv = 'uk';

        // hash
        $key = hash('sha256', $secret_key);

        // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
        $iv = substr(hash('sha256', $secret_iv), 0, 16);

        //do the encyption given text/string/number
        if ($action == 'encrypt') {
            $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
            $output = base64_encode($output);
        } else if ($action == 'decrypt') {
            //decrypt the given text/string/number
            $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
        }

        return $output;
    }

    function dateDisplaysaprate($datetime) {

        if ($datetime != "" && $datetime != "NULL" && $datetime != "0000-00-00 00:00:00") {

            return date("M-d-Y, H:i:s", strtotime($datetime));
        } else {

            return false;
        }
    }

    function holidayDateDisplay($datetime) {
        if ($datetime != "" && $datetime != "NULL" && $datetime != "0000-00-00 00:00:00") {
            return date("l, M jS. Y", strtotime($datetime));
        } else {
            return false;
        }
    }

    function eventDateDisplay($datetime) {
        if ($datetime != "" && $datetime != "NULL" && $datetime != "0000-00-00 00:00:00") {
            return date("jS M Y, l", strtotime($datetime));
        } else {
            return false;
        }
    }

    function getYoutubeId($url) {
        if ($url) {
            parse_str(parse_url($url, PHP_URL_QUERY), $my_array_of_vars);
            $url = $my_array_of_vars['v'];
            return $url;
        }
    }

    function downloadReport($payments, $fileDetail) {

        $customFields = json_decode($fileDetail->custom_fields);

        $objPHPExcel = new PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);

        $style = [
            'alignment' => [
                'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            ]
        ];

        $objPHPExcel->getActiveSheet()->getStyle('A1:J1')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle("A1:J1")->applyFromArray($style);
//    $objPHPExcel->getActiveSheet()->getColumnDimension("A1:J1")->setAutoSize(true);

        foreach (range('A', 'J') as $columnID) {
            $objPHPExcel->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);
        }



        ///SetHeading//

        $head = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S'];
        $count = 0;
        $objPHPExcel->getActiveSheet()->SetCellValue($head[$count++] . '1', "Name");
        $objPHPExcel->getActiveSheet()->SetCellValue($head[$count++] . '1', "Email");
        $objPHPExcel->getActiveSheet()->SetCellValue($head[$count++] . '1', "Phone");
        foreach ($customFields as $key => $value) {
            $objPHPExcel->getActiveSheet()->SetCellValue($head[$count++] . '1', $value);
        }
        $objPHPExcel->getActiveSheet()->SetCellValue($head[$count++] . '1', "Total");
        $objPHPExcel->getActiveSheet()->SetCellValue($head[$count++] . '1', "Due Date");
        $objPHPExcel->getActiveSheet()->SetCellValue($head[$count++] . '1', "Status");
        $objPHPExcel->getActiveSheet()->SetCellValue($head[$count++] . '1', "Payment Date");
        //Set Content
        $rowCount = 2;
        $total = count($payments);
        for ($i = 0; $i < $total; $i++) {
            $count = -1;
            $objPHPExcel->getActiveSheet()->SetCellValue($head[++$count] . $rowCount, $payments[$i]['name']);
            $objPHPExcel->getActiveSheet()->SetCellValue($head[++$count] . $rowCount, $payments[$i]['email']);
            $objPHPExcel->getActiveSheet()->SetCellValue($head[++$count] . $rowCount, " " . $payments[$i]['phone']);
            $customFieldValues = json_decode($payments[$i]['custom_fields']);
            foreach ($customFields as $key => $value) {
                $objPHPExcel->getActiveSheet()->SetCellValue($head[++$count] . $rowCount, $customFieldValues->$key);
            }
            $objPHPExcel->getActiveSheet()->SetCellValue($head[++$count] . $rowCount, $payments[$i]['total_fee']);

            $objPHPExcel->getActiveSheet()->SetCellValue($head[++$count] . $rowCount, $payments[$i]['due_date']);
            $objPHPExcel->getActiveSheet()->getStyle($head[$count] . $rowCount)->applyFromArray($style);

            $objPHPExcel->getActiveSheet()->SetCellValue($head[++$count] . $rowCount, ($payments[$i]['status'] == 1) ? 'Paid' : 'Unpaid');
            $objPHPExcel->getActiveSheet()->getStyle($head[$count] . $rowCount)->applyFromArray($style);

            $objPHPExcel->getActiveSheet()->SetCellValue($head[++$count] . $rowCount, !empty($payments[$i]['payment_date']) ? $payments[$i]['payment_date'] : "");
            $objPHPExcel->getActiveSheet()->getStyle($head[$count] . $rowCount)->applyFromArray($style);

            $rowCount++;
        }
        $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
        $filename = "Payemnt-report.xlsx";
        $objWriter->save("temp_excel/$filename");
        return $filename;
    }

    function downloadCustomerReport($payments, $fileDetail) {

        $objPHPExcel = new PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);

        $style = [
            'alignment' => [
                'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            ]
        ];

        $objPHPExcel->getActiveSheet()->getStyle('A1:F1')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle("A1:F1")->applyFromArray($style);
        foreach (range('A', 'F') as $columnID) {
            $objPHPExcel->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);
        }


        $head = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S'];
        $count = 0;

        ///SetHeading//
        $objPHPExcel->getActiveSheet()->SetCellValue($head[$count++] . '1', "Ticket Id");
        $objPHPExcel->getActiveSheet()->SetCellValue($head[$count++] . '1', "Name");
        $objPHPExcel->getActiveSheet()->SetCellValue($head[$count++] . '1', "Phone");
        $objPHPExcel->getActiveSheet()->SetCellValue($head[$count++] . '1', "Purchase Dt.");
        $objPHPExcel->getActiveSheet()->SetCellValue($head[$count++] . '1', "Qty.");
        $objPHPExcel->getActiveSheet()->SetCellValue($head[$count++] . '1', "Total");
        $objPHPExcel->getActiveSheet()->SetCellValue($head[$count++] . '1', "Mode");
        $objPHPExcel->getActiveSheet()->SetCellValue($head[$count++] . '1', "Status");
        //Set Content
        $rowCount = 2;
        $total = count($payments);
        for ($i = 0; $i < $total; $i++) {
            $count = -1;
            $objPHPExcel->getActiveSheet()->SetCellValue($head[++$count] . $rowCount, $payments[$i]['ticket']);
            $objPHPExcel->getActiveSheet()->SetCellValue($head[++$count] . $rowCount, $payments[$i]['name']);
            $objPHPExcel->getActiveSheet()->SetCellValue($head[++$count] . $rowCount, $payments[$i]['phone']);
            $objPHPExcel->getActiveSheet()->SetCellValue($head[++$count] . $rowCount, $payments[$i]['purchase_date']);
            $objPHPExcel->getActiveSheet()->SetCellValue($head[++$count] . $rowCount, $payments[$i]['qty']);
            $objPHPExcel->getActiveSheet()->SetCellValue($head[++$count] . $rowCount, $payments[$i]['total']);
            $objPHPExcel->getActiveSheet()->SetCellValue($head[++$count] . $rowCount, $payments[$i]['mode']);
            $objPHPExcel->getActiveSheet()->SetCellValue($head[++$count] . $rowCount, $payments[$i]['status']);
            $objPHPExcel->getActiveSheet()->getStyle($head[$count] . $rowCount)->applyFromArray($style);
            $objPHPExcel->getActiveSheet()->getStyle($head[$count] . $rowCount)->applyFromArray($style);
            $rowCount++;
        }
        $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
        $filename = "encore-report.xlsx";
        $objWriter->save("files/temp_excel/$filename");
        return $filename;
    }
     function kidName($id) {
        $table = TableRegistry::get('KidsDetails');
        $query = $table->find('all')->where(['id' => $id])->first();
        $name = '';
        if (!empty($query->kids_first_name)) {
            $name = $query->kids_first_name;
        }
        
        return $name;
    }
     function rowCount($table) {
        $tablename = TableRegistry::get($table);
        $count = 0;
        $count = $tablename->find('all')->count();
        if (!empty($count)) {
            $count = $count;
        }
        
        return $count;
    }
     function notification($kidId) {
        $tablename = TableRegistry::get('Notifications');
        $count = 0;
        $count = $tablename->find('all')->where(['kid_id'=>$kidId,'is_read'=>0])->count();
        if (!empty($count)) {
            $count = $count;
        }
        
        return $count;
    }
    
    function notificationUser($Id) {
        $tablename = TableRegistry::get('Notifications');
        $count = 0;
        $count = $tablename->find('all')->where(['user_id'=>$Id,'kid_id'=>0,'is_read'=>0])->count();
        if (!empty($count)) {
            $count = $count;
        }
        
        return $count;
    }
    function removeDoller($string=null) {
        if (!empty($string)) {
            
            if($string =='I want the best'){
               
                return "";
            }else{
                 return "$"; 
            }
            
        }
        
        return "";
    }
    function previousStyleistName($userId=null,$paymenId,$count){
        $table = TableRegistry::get('PaymentGetways');
        $user = TableRegistry::get('Users');
        $query1 = $table->find('all')->where(['user_id' => $userId,'id'=>$paymenId,'count'=>$count])->first(); 
        
        if($query1->kid!=''){
            $query = $table->find('all')->where(['user_id' => $userId,'count'=>$count-1,'kid_id'=>$query1->kid_id])->first()->emp_id;  
        }else{
            $query = $table->find('all')->where(['user_id' => $userId,'count'=>$count-1,'kid_id'=>'0'])->first()->emp_id;  
        }
        
        
        //$query1 = $table->find('all')->where(['id'=>$paymenId,'count'=>$count])->first()->emp_id; 
       // var_dump($query); exit;
        $name = $user->find('all')->where(['id' =>$query])->first()->name; 
        if($name!=''){
         return $name;    
        }else{
            return "No yet";     
        }       
       return $query;
    }
    function getPaymentGetwayStatus($id) {
        $tablename = TableRegistry::get('PaymentGetways');
        $getstatus = $tablename->find('all')->where(['user_id'=>$id])->extract('status')->toArray();                
        return $getstatus;
    }
    
    function junkPaymentGetwayStatus($id) {
        $tablename = TableRegistry::get('PaymentGetways');
        $getstatus = $tablename->find('all')->where(['user_id'=>$id])->extract('status')->toArray();                
        return $getstatus;
       }
      
    
    function customerName($id) {
        $table = TableRegistry::get('Users');
        $query = $table->find('all')->where(['id' => $id])->first();
        $name = '';
        if (!empty($query->name)) {
            $name = $query->name;
        }
        
        return $name;
    }
    function customerEmail($id) {
        $table = TableRegistry::get('Users');
        $query = $table->find('all')->where(['id' => $id])->first();
        $email = '';
        if (!empty($query->email)) {
            $email = $query->email;
        }
        
        return $email;
    }
    function CardDetails($id) {
        $table = TableRegistry::get('PaymentCardDetails');
        $query = $table->find('all')->where(['id' => $id])->first();
        //pj($query); exit;
        $card_number = '';
        if (!empty($query->card_number)) {
            $card_number = $query->card_number;
        }
        
        return $card_number;
    }
    function requestDate($userId=null,$kid_id=null){
        $table = TableRegistry::get('DeliverDate');
       if($kid_id==0){
        $query = $table->find('all')->where(['user_id' => $userId,'kid_id'=>0])->first()->date_in_time; 
       }else{
           $query = $table->find('all')->where(['user_id' => $userId,'kid_id'=>$kid_id])->first()->date_in_time;   
       }
       
       return $query;
    }
    function payment_count_status($id) {
        $tablename = TableRegistry::get('PaymentGetways');
        $paidCount = $tablename->find('all')->where(['user_id'=>$id, 'status'=>1])->count(); 
        $unpaidCount = $tablename->find('all')->where(['user_id'=>$id, 'status'=>0])->count(); 
        $getstatus="Paid:-".$paidCount.' Unpaid:-'.$unpaidCount;
        return $getstatus;
    }
    
    
    function emailperference($userId=null,$kid_id=null){
        $table = TableRegistry::get('EmailPreferences');
        if($kid_id==0){
            $query = $table->find('all')->where(['user_id' => $userId,'kid_id'=>0])->first()->preferences; 
        }else{
           $query = $table->find('all')->where(['user_id' => $userId,'kid_id'=>$kid_id])->first()->preferences;   
        }       
       return $query;       
    }
    
    function categoryName($id) {
        $table = TableRegistry::get('BlogCategory');
        $query = $table->find('all')->where(['id' => $id])->first();        
        return  $query->category_name;        
    }
    
    function BlogName($id) {
        $table = TableRegistry::get('Blogs');
        $query = $table->find('all')->where(['id' => $id])->first();        
        return  $query->blog_title;        
    }
    
    function BlogRating($id){
        $table = TableRegistry::get('BlogRating');
        $query = $table->find('all')->where(['blog_id' => $id]);
        $count = $table->find('all')->where(['blog_id'=>$id])->count();
        $credit_balance = $table->find('all')->Select(['blog_rating' => 'SUM(rating)'])->where(['blog_id' => $id])->first();        
        $total_value = $credit_balance->blog_rating;        
        $avarating = $total_value/$count; 
        return  $avarating;
    }
    
    function comntReply($cmtId=null){
        $table = TableRegistry::get('CommentsReply');
        $query = $table->find('all')->where(['comment_id' => $cmtId])->order(['id'=>'DESC']);                
        return $query;
    }
    
    function comntscReply($relyId=null){
        $table = TableRegistry::get('CommentScndreply');
        $query = $table->find('all')->where(['reply_id' => $relyId])->order(['id'=>'DESC']);                
        return $query;
    }
}
