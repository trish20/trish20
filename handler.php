<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "lzd2@sun-jet.com.tw";
    $email_subject = "客戶 線上諮詢";
 
    function died($error) {
        // your error code can go here
        echo "非常抱歉，您提交的表單存在錯誤<br />";
        echo "這些錯誤如下所示。<br /><br />";
        echo $error."<br /><br />";
        echo "請回上一業並更正這些錯誤。<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['subject']) ||
        !isset($_POST['email']) ||
        !isset($_POST['phonenumber']) ||
        !isset($_POST['time']) ||
        !isset($_POST['message'])) {
        died('非常抱歉，您提交的表單存在錯誤');       
    }
 
     
 
    $name = $_POST['name']; // required
    $subject = $_POST['subject']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['phonenumber']; // required
    $time = $_POST['time'];
    $comments = $_POST['message']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= '您輸入的電子信箱無效。<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
    $error_message .= '您輸入的姓名無效.<br />';
  }

  if(!preg_match($string_exp,$subject)) {
    $error_message .= '您輸入的主旨無效.<br />';
  }
 
  if(!preg_match($string_exp,$telephone)) {
    $error_message .= '您輸入的聯絡電話無效.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= '您輸入的留言訊息無效<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "姓名: ".clean_string($name)."\n";
    $email_message .= "電子信箱: ".clean_string($email_from)."\n";
    $email_message .= "聯絡電話: ".clean_string($telephone)."\n";
    $email_message .= "方便聯絡時段: ".clean_string($time)."\n";
    $email_message .= "主旨: ".clean_string($subject)."\n";
    $email_message .= "Comments: ".clean_string($message)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
感謝您與我們聯繫。 我們將盡快與您聯繫。
 
<?php
 
}
?>