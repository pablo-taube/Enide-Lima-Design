<?php

$message_sent = false;
if(isset($_POST['email'] && $_POST['message']) != " ") {
	
	if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$name = $_POST['name'];
	$subject = "Contato através do site"
	$email = $_POST['email'];
	$message = $_POST['message'];

	$to = "pablo.taaube@gmail.com";
	$body = "";

	$body .= "Solicitação de contato enviada por ".$name. "\r\n";
	$body .= "Solicitação de contato enviada por ".$email. "\r\n";
	$body .= "Menssagem: ".$message. "\r\n";

	mail($to, $subject, $body);
	$message_sent = true;
	}

}

if ($message_sent) {
	mail($to, $subject, $body);
	echo "Obrigado, " .$name "! Entraremos em contato em breve.";
}

?>
