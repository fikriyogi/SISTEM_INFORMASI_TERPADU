<?php

namespace src\Database;
use Db;

class Email extends Db
{
    public $Mailhost    = "smtp.gmail.com";
    public $MailAddress = EMAIL_ADDRESS;
    public $MailPass    = EMAIL_PASS;
    public $SMTPType    = "ssl";

    public function send_mail($email, $message, $subject)
    {
        require 'app/class/phpmailer/PHPMailerAutoload.php';
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = $this->SMTPType;
        $mail->Host = $this->Mailhost;
        $mail->Port = 465;
        $mail->AddAddress($email);
        $mail->Username = $this->MailAddress;
        $mail->Password = $this->MailPass;
        $mail->SetFrom('fikriyogi@gmail.com', APP_NAME);
        $mail->AddReplyTo("fikriyogi@gmail.com", APP_NAME);
        $mail->Subject = $subject;
        $mail->MsgHTML($message);
        if($mail->Send())                               //Send an Email. Return true on success or false on error
        {
            $message = '<label class="text-success">Register Done, Please check your mail.</label>';
        }
    }


}
