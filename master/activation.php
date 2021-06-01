<?php


require "./controller/Controller.php";
$msg = '';
if (!empty($_GET['code']) && isset($_GET['code'])) {
    $code = mysqli_real_escape_string($connection, $_GET['code']);
    $c = $erabiltzaileak->ActivationCodeExists($code);
    if (mysqli_num_rows($c) > 0) {
        $count = $erabiltzaileak->SelectCodeToActivate($code);
        if (mysqli_num_rows($count) == 1) {
            $erabiltzaileak->Activation($code);
            $msg = "Kontua Aktibatuta";
            echo '<script type="text/javascript"> window.open("index","_self");</script>';
        } else {
            $msg = "Zure kontua aktibatuta dago, ez behar berriro egitea";
        }

    } else {
        $msg = "Kodea ez du balio.";
    }

}
?>
<?php echo $msg; ?>