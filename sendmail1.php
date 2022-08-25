<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//添加公共函数库文件
//require "function.php";

//添加自动加载支持
require "vendor/autoload.php";

//try{
 //   $users = array('tianyu@wku.edu.cn');
 //   $title = '测试标题';
 //   $content = '测试邮箱内容！';
  //  sendMail($users,$title,$content);
//}catch(Exception $e){
  //  var_dump($e->getMessage());
//}

$receiver="tianyu@wku.edu.cn";

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'sassc2019@gmail.com';                 // SMTP username
    $mail->Password = '@kean1855';                           // SMTP password
    $mail->SMTPSecure = 'STARTTLS';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($receiver, 'sassc2019');
    $mail->addAddress($receiver, 'Coco');     // Add a recipient
    $mail->addAddress($receiver);               // Name is optional
   // $mail->addReplyTo('tianyu@wku.edu.cn', 'Information');
   // $mail->addCC('cc@example.com');
   // $mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Do not Reply';
    $mail->Body    = 'This is an automatic email to remind you there is a new order!</b>';
   

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}




echo "test";




?>