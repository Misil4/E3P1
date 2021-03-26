<?php
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require "./PHPMailer/PHPMailer.php";
require "./PHPMailer/Exception.php";
require "./PHPMailer/SMTP.php";

//Recogemos los datos
$receiver_email = $_POST['receiver_email'];
$price = $_POST['mc_gross'];
$currency = $_POST['mc_currency'];
$item_number = $_POST['item_number'];
$paymentStatus = $_POST['payment_status'];

$name = $_POST['first_name'] . " " . $_POST['last_name'];
$cEmail = $_POST['payer_email'];

//Comprobamos el email del vendedor
if ($receiver_email == "2021.e3p1.talde.1.business@gmail.com") {
    //Comprobamos la divisa, el precio, el código de item y el estatus del pago
    if ($item_number == "Prueba" && $currency == "EUR" &&
        $paymentStatus == "Completed" && $price == 12) {

        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);
        try
        {
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true,
                ),
            );

            $mail->SMTPDebug = 2;
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 587;
            $mail->SMTPAuth = true;
            $mail->Username = $receiver_email;
            $mail->Password = "Newepsilon1"; // Business email password
            $mail->SMTPSecure = 'tls';
            $mail->setFrom($receiver_email, "Kberry, zure kosmetika korearra denda");
            $mail->addAddress($cEmail, $name);
            $mail->isHTML(true);
            $mail->Subject = "Erosketaren xehetasunak";

            $mail->Body = "
            Kaixo, <br> <br>
            Eskerrik asko erosteagatik. Eranskinean nire Wordpress Plugin Harrigarria aurkituko duzu. <br> <br>

            Agur bero bat,

            Kberry.

            ";

            if (!$mail->send()) {
                file_put_contents("test.txt", 'No se pudo enviar el mensaje');
            } else {
                file_put_contents("test.txt", 'Message sent successfully');
            }

        } catch (Exception $e) {
            file_put_contents("test.txt", 'Message could not be sent: ' . $mail->ErrorInfo);
        }
    } else {
        //Error en el email recibido
        file_put_contents("test.txt", "El email del vendedor es incorrecto. Pago enviado a: " . $receiver_email);
    }
}