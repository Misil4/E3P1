<?php
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
require  __DIR__ . "/../controller/Controller.php";
require  __DIR__ . "/../PHPMAILER/PHPMailer.php";
require  __DIR__ . "/../PHPMAILER/Exception.php";
require  __DIR__ . "/../PHPMAILER/SMTP.php";
$lang = $_POST['custom'];
//   $pattern = ",";
//   $pieces = explode($pattern,$custom, 2);
//   // 3 is how many custom fields there are
//   $lang = $pieces[0];
//   $produktu_kopuru = $pieces[1];
//Recogemos los datos
$email = "e3p1talde1@2021e3p1talde1.aegcloud.pro";
 $receiver_email = $_POST['receiver_email'];
        $price          = $_POST['mc_gross'];
        $currency       = $_POST['mc_currency'];
        $item_number    = $_POST['item_number'];
        $paymentStatus  = $_POST['payment_status'];
$name = $_POST['first_name'] . " " . $_POST['last_name'];
$itemName = $_POST['item_name'];
$cEmail = $_POST['payer_email'];
$payment_date = $_POST['payment_date'];
$transakzioKodea = $_POST['txn_id'];
$row =$eskaerak->getEskaeraKodea($payer_email);
$Ipn->insertPaypalData($transakzioKodea,$paymentStatus,$price,$currency,$payment_date,$row['eskaeraKodea']);

if ($lang == "es") {
    $title = "Resumen de tu Compra";
    $message = "Gracias por tu compra <br> Aqui tienes los detalles de los articulos que has comprado <br>".$itemName."<p>".$item_number." X1 ".$price."€ <br><br> Kberry";
}
else if ($lang == "en") {
    $title = "Your purchase Details";
    $message = "Thanks for your purchase <br> Here you have the items you purchased <br>".$item_number." X1 ".$price."€<br><br> Kberry";
}
else if ($lang == "eus") {
    $title = "Zure erosketaren Informazioa";
    $message = "Eskerrik asko erosteagatik <br> Hemen daukazu erositako artikuluen xehetasunak <br>".$item_number." X1 ".$price."€<br><br> Kberry";
}
//Comprobamos el email del vendedor
 $row =$Ipn->getLastColumn();
    //Comprobamos la divisa, el precio, el código de item y el estatus del pago
    if ($currency == $row['txanponMota'] && $price == $row['prezioTotala'] && $paymentStatus == $row['ordaintzeEgoera']) {
        // Instantiation and passing `true` enables exceptions
      $mail = new PHPMailer(true);
    try
    {
       $mail->SMTPDebug = 0;
            $mail->isSMTP();  
            $mail->Host       = "2021e3p1talde1.aegcloud.pro";                    
            $mail->Port       = 465;            
            $mail->SMTPAuth   = true;      
            $mail->Username   = "e3p1talde1@2021e3p1talde1.aegcloud.pro";        
            $mail->Password   = "Newepsilon1";    // Business email password                           
            $mail->SMTPSecure = 'ssl';        
            $mail->setFrom("e3p1talde1@2021e3p1talde1.aegcloud.pro", "Kberry");
            $mail->addAddress($cEmail, $name);
            $mail->isHTML(true);
            $mail->Subject = $title;
            
            $mail->Body = $message;

        if (!$mail->send()) {
            file_put_contents("test.txt", 'No se pudo enviar el mensaje');
        } else {
              $handle = fopen("test.txt", 'r+');
        foreach ($_POST as $key => $value)
        {
            fwrite($handle, "$key => $value \r\nMessage sent successfully");
        }

        fclose($handle);
        }

    } catch (Exception $e) {
        $handle = fopen("test.txt", 'r+');
        foreach ($_POST as $key => $value)
        {
            fwrite($handle, "$key => $value \r\n".$mail->ErrorInfo);
        }

        fclose($handle);
        echo $mail->ErrorInfo;
    }
}