<?php
require __DIR__ . "/../controller/Controller.php";
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
require __DIR__ . "/../PHPMAILER/PHPMailer.php";
require __DIR__ . "/../PHPMAILER/Exception.php";
require __DIR__ . "/../PHPMAILER/SMTP.php";


// Archivos de funciones para la validacion
require "./Validacion/Comprobar_Existe_Usuario.php";
require "./Validacion/Comprobar_Dominio.php";
require "./Validacion/Contraseña_Valida.php";
require "./Validacion/Quitar_String.php";


$base_url = "https://2021e3p1talde1.aegcloud.pro/";
$receiver_email = "e3p1talde1@2021e3p1talde1.aegcloud.pro";
$NewErabiltzaile['emaila'] = htmlspecialchars($_POST['username']);
$NewErabiltzaile['pasahitza'] = htmlspecialchars($_POST['pass']);
$Pasahitza_konfirmazio = htmlspecialchars($_POST['con-pass']);


// Test de validación
echo "<br>" . "Test de Validación" . "<br>";

// Variables necesarias
$Puntuación_Validación = 0;

// Comprobar que el correo no este ya registrado
$Puntuación_Validación = $Puntuación_Validación + Comprobar_Existe_Usuario(array("DB" =>$erabiltzaileak->CheckRegisterEmail($NewErabiltzaile['emaila'])[0]['emaila'], "Formulario" => $NewErabiltzaile['emaila']));
echo $Puntuación_Validación;
// Comprobar que es un correo y que tenga dominio gmail y hotmail
$Puntuación_Validación = $Puntuación_Validación + Comprobar_Dominio($NewErabiltzaile['emaila']);
echo $Puntuación_Validación;
//Comprobar que las contraseñas son validas
$Puntuación_Validación = $Puntuación_Validación + Contraseña_Valida($NewErabiltzaile['pasahitza']);
echo $Puntuación_Validación;
//Comprobar que las contraseñas son iguales
if($NewErabiltzaile['pasahitza'] != $Pasahitza_konfirmazio)
{
    if($_GET['Crud'] != 1){echo '<script type="text/javascript">alert("Las contraseñas son diferentes");window.open("./../register.php","_self");</script>';}
    else{echo '<script type="text/javascript">alert("Las contraseñas son diferentes");window.open("./../Crud/Crud.php","_self");</script>';}
}
else{echo "<br>" . "Las contraseña son iguales"; $Puntuación_Validación = $Puntuación_Validación + 1;}

// Introduccir los usuarios
if($Puntuación_Validación == 4)
{
    $NewErabiltzaile['emailAktibazioa'] = md5($NewErabiltzaile['pasahitza'] . time());
    $NewErabiltzaile['pasahitza'] = password_hash($NewErabiltzaile['pasahitza'], PASSWORD_BCRYPT);
    $result = $erabiltzaileak->addAccount($NewErabiltzaile);
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
        $mail->Subject = "Zure emaila berifikatu";

        $mail->Body = '
                Kaixo, <br> <br>
                Eskerrik asko erregistratzeagatik. Klikatu behean dagoen linkean zure kontua aktibatzeko. <br> <br><a href="' . $base_url ."activation.php?code=".$NewErabiltzaile['emailAktibazioa'] . '">' . $base_url . 'activation.php?code="' . $NewErabiltzaile['emailAktibazioa'] . '"</a>' . "<br><br>Eskerrik asko <br> Kberry";

        if (!$mail->send()) {
            file_put_contents("test.txt", 'No se pudo enviar el mensaje');
        } else {
            file_put_contents("test.txt", 'Message sent successfully');
        }

    } catch (Exception $e) {
        file_put_contents("test.txt", 'Message could not be sent: ' . $mail->ErrorInfo);
    }
    if($_GET['Crud'] != 1){echo '<script type="text/javascript"> window.open("../login.php","_self");</script>';}
    else{echo '<script type="text/javascript">alert("Las contraseñas son diferentes");window.open("./../Crud/Crud.php","_self"); </script><h1>dsadasasddssda</h1>';}
}