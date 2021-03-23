<?php
<<<<<<< HEAD
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require "./PHPMailer/PHPMailer.php";
require "./PHPMailer/Exception.php";
require "./PHPMailer/SMTP.php";

        //Recogemos los datos
        $receiver_email = $_POST['receiver_email'];
        $price          = $_POST['mc_gross'];
        $currency       = $_POST['mc_currency'];
        $item_number    = $_POST['item_number'];
        $paymentStatus  = $_POST['payment_status']; 

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
            $mail->setFrom($receiver_email, "John Doe's Test Store");
            $mail->addAddress($cEmail, $name);
            $mail->isHTML(true);
            $mail->Subject = "Your purchase Details";

            $mail->Body = "
                Hi, <br><br>
                Thank you for purchase. In the attachment you will find my Amazing Wordpress Plugin. <br><br>

                Kind regards,

                Julius Gwiny.

            ";

            if (!$mail->send()) {
                file_put_contents("test.txt", 'No se pudo enviar el mensaje');
            } else {
                file_put_contents("test.txt", 'Message sent successfully');
            }

        } catch (Exception $e) {
            file_put_contents("test.txt", 'Message could not be sent: ' . $mail->ErrorInfo);
=======

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: index.php');
    exit();
}

// Read the IPN message sent from PayPal
// POST IPN data back to PayPal to validate
$ch = curl_init('https://ipnpb.sandbox.paypal.com/cgi-bin/webscr');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "cmd=_notify-validate&" . http_build_query($_POST));
curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close'));

$res = curl_exec($ch);

curl_close($ch);

// Sacamos la respuesta por fichero para ver si es VERIFIED
//file_put_contents("test.txt", $res);
// Comentamos la siguiente línea ya que hemos visto que nos ha devuelto VERIFIED

//file_put_contents("test.txt", $res);

//Añadimos lo siguiente a continuación
if ($res == "VERIFIED") // Datos validados
{
    //Recogemos los datos
    $receiver_email = $_POST['receiver_email'];
    $price = $_POST['mc_gross'];
    $currency = $_POST['mc_currency'];
    $item_number = $_POST['item_number'];
    $paymentStatus = $_POST['payment_status'];

    //Comprobamos el email del vendedor
    if ($receiver_email == "2021.e3p1.talde.1.business@gmail.com") {
        //Comprobamos la divisa, el precio, el código de ítem y el estatus del pago
        if ($item_number == "Cart-01-WordPlug" && $currency == "USD" &&
            $paymentStatus == "Completed" && $price == 99) {
            file_put_contents("test.txt", "Pago completado correctamente");
        } else {
            $data = "$price\r\n$currency\r\n$paymentStatus\r\n$item_number\r\n";
            file_put_contents("test.txt", "Error en el pago. Datos recibidos: \n" . $data);
>>>>>>> cc8ebfdd0c56b51269bef50fa68deeb4dfb5a053
        }
    } else {
        //Error en el email recibido
        file_put_contents("test.txt", "El email del vendedor es incorrecto. Pago enviado a: " . $receiver_email);
    }
}