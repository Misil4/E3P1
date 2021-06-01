<?php 
require __DIR__ . "/../controller/Controller.php";
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
require __DIR__ . "/../PHPMAILER/PHPMailer.php";
require __DIR__ . "/../PHPMAILER/Exception.php";
require __DIR__ . "/../PHPMAILER/SMTP.php";
require "./Validacion/Comprobar_Existe_Usuario.php";
require "./Validacion/Comprobar_Dominio.php";
require "./Validacion/Contraseña_Valida.php";
$base_url = "https://2021e3p1talde1.aegcloud.pro/";
$receiver_email = "e3p1talde1@2021e3p1talde1.aegcloud.pro";
$NewErabiltzaile['emaila'] = htmlspecialchars($_POST['username']);
$Puntuación_Validación = 0;
$Puntuación_Validación = $Puntuación_Validación + Comprobar_Dominio($NewErabiltzaile['emaila']);
if($Puntuación_Validación == 1)
{
    $row = $erabiltzaileak->GetCode($NewErabiltzaile['emaila']);
    $NewErabiltzaile['emailAktibazioa'] = $row['emailAktibazioa'];
     if ($_POST['lang'] == "es") {
        $title = "Recupera tu contrasena";
        $message = 'Hola, <br> <br>
        Abajo encontraras un link para poder cambiar la contraseña de tu cuenta <br> <br><a href="'.$base_url.'ChangePassword.php?code='.$NewErabiltzaile['emailAktibazioa'].'">'.$base_url.'ChangePassword.php?code="'.$newErabiltzaile['emailAktibazioa'].'"</a> <br><br>Muchas gracias <br> Kberry';
    }
    else if ($_POST['lang'] == "en") {
        $title = "Renew your password";
        $message = 'Hi <br> Below you will find a link to change your password <br> <br><a href="'.$base_url.'ChangePassword.php/?code='.$NewErabiltzaile['emailAktibazioa'].'">'.$base_url.'ChangePassword.php?code="'.$newErabiltzaile['emailAktibazioa'].'"</a> <br><br>Thanks <br> Kberry';
    }
    else if ($_POST['lang'] == "eus") {
        $title = "Aldatu zure pasahitza";
        $message = 'Kaixo <br> Beheko partean linka bat daukazu zure pasahitza aldatzeko <br><a href="'.$base_url.'ChangePassword.php/?code='.$NewErabiltzaile['emailAktibazioa'].'">'.$base_url.'ChangePassword.php?code="'.$newErabiltzaile['emailAktibazioa'].'"</a> <br><br>Eskerrik asko <br> Kberry';
    }
    $mail = new PHPMailer(true);
    try
    {
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = "2021e3p1talde1.aegcloud.pro";
        $mail->SMTPAuth = true;
        $mail->Port = 465;
        $mail->Username = $receiver_email;
        $mail->Password = "Newepsilon1"; // Business email password
        $mail->SMTPSecure = 'ssl';
        $mail->setFrom($receiver_email, "Kberry");
        $mail->addAddress($NewErabiltzaile['emaila']);
        $mail->isHTML(true);
        $mail->Subject = $title;

        $mail->Body = $message;

        if (!$mail->send()) {
            file_put_contents("test.txt", 'No se pudo enviar el mensaje');
        } else {
            file_put_contents("test.txt", 'Message sent successfully');
        }

    } catch (Exception $e) {
        file_put_contents("test.txt", 'Message could not be sent: ' . $mail->ErrorInfo);
    }
    echo '<script type="text/javascript"> window.open("../login","_self");</script>';
}