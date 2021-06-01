<?php
use PHPMailer\PHPMailer\PHPMailer;

require "./PHPMailer/PHPMailer.php";
require "./PHPMailer/Exception.php";
require "./PHPMailer/SMTP.php";
class MyMail extends PHPMailer
{
    public function Send_Mail($to, $subject, $body)
    {
        $from = "2021.e3p1.talde.1.business@gmail.com";
        $this->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true,
            ),
        );
        $this->IsSMTP(true); // use SMTP
        $this->IsHTML(true);
        $this->SMTPAuth = true; // enable SMTP authentication
        $this->Host = "smtp.gmail.com"; // SMTP host
        $this->Port = 587; // set the SMTP port
        $this->Username = "2021.e3p1.talde.1.business@gmail.com"; // SMTP  username
        $this->Password = "Newepsilon1"; // SMTP password
        $this->SMTPSecure = 'tls';
        $this->SetFrom($from, 'Kberry');
        $this->AddReplyTo($from, 'From Name');
        $this->Subject = $subject;
        $this->MsgHTML($body);
        $address = $to;
        $this->AddAddress($address, $to);
        return $this->send();
        echo "Sended Succesfull";
    }
}