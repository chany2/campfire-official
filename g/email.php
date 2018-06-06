<?php

require 'libraries/class.phpmailer.php';

$mail = new PHPMailer();     

    //Server settings
    //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
    //$mail->isSMTP();                                      // Set mailer to use SMTP
    //$mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
    // $mail->SMTPAuth = true;                               // Enable SMTP authentication
    // //$mail->Username = 'user@example.com';                 // SMTP username
    // $mail->Password = 'secret';                           // SMTP password
    // $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    // $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('yau.h.chan@gmail.com', 'Gary Yau Chan');
    $mail->addAddress('yau.h.chan@gmail.com', 'Campfire');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    //$mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'New Campfire URL';
    //$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
    $mail->MsgHTML('http://mycampfirechat.com/g/result.php?url=https%3A%2F%2Fwww.nytimes.com%2F2018%2F05%2F25%2Ftravel%2Fseattle-glass-chihuly-tacoma-museum.html%3Fhp%26action%3Dclick%26pgtype%3DHomepage%26clickSource%3Dimage%26module%3Dphoto-spot-region%26region%3Dtop-news%26WT.nav%3Dtop-news&message1=hey&facebook-url=https%3A%2F%2Fwww.facebook.com%2Fgaryyau.chan&cta=https%3A%2F%2Fwww.m.me%2Fgaryyau.chan&iframe-type=iframely&iframe-content=%3Ciframe+src%3D%22https%3A%2F%2Fwww.nytimes.com%2Fsvc%2Foembed%2Fhtml%2F%3Furl%3Dhttps%253A%252F%252Fwww.nytimes.com%252F2018%252F05%252F25%252Ftravel%252Fseattle-glass-chihuly-tacoma-museum.html%22+scrolling%3D%22no%22+frameborder%3D%220%22+allowtransparency%3D%22true%22+style%3D%22border%3Anone%3Bmax-width%3A500px%3Bmin-width%3A300px%3Bmin-height%3A550px%3Bdisplay%3Ablock%3Bwidth%3A100%25%3B%22%3E%3C%2Fiframe%3E');
    if(!$mail->Send()) {
      echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
      echo "Message sent!";
    }



?>