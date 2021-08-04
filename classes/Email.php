<?php

      class Email {
            function __construct(){
                $mail = new PHPMailer;
                            try {
                                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                                $mail->isSMTP();                                            //Send using SMTP
                                $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
                                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                                $mail->Username   = 'ruddystore666@gmail.com';                     //SMTP username
                                $mail->Password   = 'allyvito123';                               //SMTP password
                                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                                //Recipients
                                $mail->setFrom('ruddystore666@gmail.com', 'RuddyStore');
                                $mail->addAddress('allysomted12@gmail.com', 'Allysom');     //Add a recipient
                                //$mail->addReplyTo('info@example.com', 'Information');
                                //$mail->addCC('cc@example.com');
                                //$mail->addBCC('bcc@example.com');

                                //Attachments
                                //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                               //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                                //Content
                                $mail->isHTML(true);                                  //Set email format to HTML
                                $mail->Subject = 'Parabéns pela sua compra aqui está seu código';
                                $mail->Body    = '<b>código aleatorio</b>';
                                $mail->AltBody = 'código aleatorio';

                                $mail->send();
                                echo 'Message has been sent';
                            } catch (Exception $e) {
                                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                            }
            }
        }
      
?>