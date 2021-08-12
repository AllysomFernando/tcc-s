<?php

	class Email{

		 function __construct(){
		
			$mail= new PHPMailer;
			$this->mailer->isSMTP();                                      // Set mailer to use SMTP
			$this->define->host=localhost;				  // Specify main and backup SMTP servers
			$this->mailer->SMTPAuth = true;                               // Enable SMTP authentication
			$this->mailer->Username = 'ruddystore666@gmail.com';                 // SMTP username
			$this->mailer->Password = 'allyvito123';                           // SMTP password
			$this->mailer->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
			$this->mailer->Port = 465;                                    // TCP port to connect to

			$mail->setFrom('ruddystore666@gmail.com', 'RuddyStore');
            $mail->addAddress('allysomted12@gmail.com', 'Allysom');

			$mail->isHTML(true);                                  //Set email format to HTML
			$mail->Subject = 'Parabéns pela sua compra aqui está seu código';
			$mail->Body    = '<b>código aleatorio</b>';
			$mail->AltBody = 'código aleatorio';
			if(!mail->send()){
				echo'Message could not be sent.';
				echo 'Mailer Error ' . $mail->ErrorInfo;
			}else{
				echo'Message has been sent';
			}
		}
 	 }

?>  