<?php
class Email extends Data {

	public function SI_SendMail($email, $message, $subject)
	{
		require 'app/class/phpmailer/PHPMailerAutoload.php';
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPDebug = 0;
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = "ssl";
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 465;
		$mail->AddAddress($email);
		$mail->Username = EMAIL_ADDRESS;
		$mail->Password = EMAIL_PASS;
		$mail->SetFrom('fikriyogi@gmail.com', APP_NAME);
		$mail->AddReplyTo("fikriyogi@gmail.com", APP_NAME);
		$mail->Subject = $subject;
		$mail->MsgHTML($message);
		$mail->Send();
	}

}