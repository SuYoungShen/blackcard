<?php
require 'mail/src/Exception.php';
require 'mail/src/PHPMailer.php';
require 'mail/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// if (isset($_POST["name"]) && !empty($_POST['name']) &&
//     isset($_POST["email"]) && !empty($_POST['email']) &&
//     isset($_POST["message"]) && !empty($_POST['message'])) {

      $name = $_POST['name']="s";
      $email = $_POST['email']="d7339803@gmail.com";
      $phone = $_POST['phone']="s";
      $message = $_POST['message']="s";


      $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
      try {
        //Server settings
        $mail->SMTPDebug = 0;                                 // 2=顯示錯誤；0=不要顯示錯誤
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'wanwanton958@gmail.com';                 // 寄信的信箱
        $mail->Password = 'vhukjhtqppjreahc';                           // 寄信信箱的密碼
        $mail->SMTPSecure = 'ssl';                            // ssl = 465; tls = 587
        $mail->Port = 465;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom($email, '客戶-'.$name);                     //由哪個信箱寄，客戶 = 寄件人姓名
        $mail->addAddress('k90218104@gcloud.csu.edu.tw', '旺旺通形象網站');     // 收件者給誰, 收件者姓名
        // $mail->addAddress('ellen@example.com');               // Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        date_default_timezone_set("Asia/Taipei");

        //Content
        $mail->isHTML(true);                                    // Set email format to HTML
        $mail->Subject = '透過黑卡介紹網站來信';                // 信箱裡的Title
        $mail->Body    =
        '發問者姓名：'.$name.
        '<br/>發問者信箱：'.$email.
        '<br/>發問者電話：'.$phone.
        '<br/>詢問內容：'.$message.
        '<br/>信件發送時間：'.date('Y/m/d-H:i:s');                     // 信件內容
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->setLanguage('zh');//設定語言
        $mail->CharSet = 'UTF-8'; // 編碼
        $mail->SMTPOptions = array(
          'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
          )
        );
        if($mail->send()){
          echo "寄信成功，會盡快回覆給您!!!";
        }

      } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
      }
// }


?>