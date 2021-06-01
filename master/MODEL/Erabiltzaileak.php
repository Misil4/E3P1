<?php

require_once "modelBase.php";

class Erabiltzaileak extends ModelBase
{
    public function __construct()
    {
        //Inicializamos el nombre de la tabla
        $this->table_name = 'erabiltzaileak';

        //Llamamos al constructor de la clase ModelBase
        parent::__construct();

    }
    public function Login($mail)
    {

        $query = $this->selectDB($this->table_name, "emaila,pasahitza", "emaila", $mail);
        $result = $this->conexion->query($query);
        $array = $this->createArray($result);
        return $array;
    }
    public function addAccount($array)
    {

        $query = $this->insertDB($this->table_name, $array);
        $result = $this->conexion->query($query);

    }
    public function Login_Crud($mail)
    {

        $query = $this->selectDB($this->table_name, "emaila,pasahitza,rol", "emaila", $mail);
        $result = $this->conexion->query($query);
        $array = $this->createArray($result);
        return $array;
    }
    public function getUser($mail)
    {
        $query = $this->selectDB($this->table_name, "izena", "emaila", $mail);
        $result = $this->conexion->query($query);
        $array = $this->createArray($result);
        return $array;
    }
    public function CheckRegisterEmail($mail)
    {
        $query = $this->selectDB($this->table_name, "emaila", "emaila", $mail);
        $result = $this->conexion->query($query);
        $array = $this->createArray($result);
        return $array;
    }
    public function ActivationCodeExists($code) {
        $query = "SELECT erabiltzaileKodea FROM erabiltzaileak WHERE emailAktibazioa='$code'";
        $result = $this->conexion->query($query);
        return $result;
    }
    public function SelectCodeToActivate($code) {
        $query = "SELECT erabiltzaileKodea FROM erabiltzaileak WHERE emailAktibazioa='$code' and desaktibatua='0'";
        $result = $this->conexion->query($query);
        return $result;
    }
    public function Activation($code) {
        $query = "UPDATE erabiltzaileak SET desaktibatua='1' WHERE emailAktibazioa='$code'";
        $result = $this->conexion->query($query);
    }
    public function GetEgoera($mail)
    {
        $query = $this->selectDB($this->table_name, "desaktibatua", "emaila", $mail);
        $result = $this->conexion->query($query);
        $array = $this->createArray($result);
        return $array;
    }
    public function GetDirections($mail)
    {
        $query = $this->selectDB($this->table_name, "helbidea", "emaila", $mail);
        $result = $this->conexion->query($query);
        if (mysqli_num_rows($result) < 1) {
            echo 'Introduzca una dirección para mostrarla';
        } else {
            foreach ($result as $row) {
                $helbidea = $row['helbidea'];
                echo "$helbidea";
            }
        }
    } 
    public function GetCode($mail)
    {
        $query = $this->selectDB($this->table_name, "emailAktibazioa", "emaila", $mail);
        $result = $this->conexion->query($query);
        $row =mysqli_fetch_assoc($result);
        return $row;
    }
    public function UpdatePassword($code,$pasahitza) {
        $query = 'UPDATE '.$this->table_name.' SET pasahitza="'.$pasahitza.'" WHERE emailAktibazioa="'.$code.'";';
        echo $query;
        $this->conexion->query($query);
    }
     public function GetErabiltzaileKode($mail) {
        $query = $this->selectDB($this->table_name, "erabiltzaileKodea", "emaila", $mail);
        $result = $this->conexion->query($query);
        $row =mysqli_fetch_assoc($result);
        return $row;
    }


    // Crud
    public function Todos_Datos()
    {
        $query = $this->selectDB($this->table_name, "*", "");
        $result = $this->conexion->query($query);
        $array = $this->createArray($result);
        return $array;
    }
    public function Todos_Datos_Filtro($Condicion)
    {
        $query = $this->SelectWithFilter($this->table_name, $Condicion);
        echo $query;
        $result = $this->conexion->query($query);
        $array = $this->createArray($result);
        return $array;
    }

    public function Activar_Desactivar_Usuario($Desactivar_Usuario,$Desactiva_Condicion,$Columna_Condicion = "erabiltzaileKodea")
    {
        $Fecha = date("Y-m-d");
        $query = $this->UpdateBD($this->table_name, $Desactivar_Usuario = "desaktibatua = " . $Desactivar_Usuario . ", desaktibatzeData = " . "'$Fecha'", $Columna_Condicion,$Desactiva_Condicion);
        echo $query;
        $result = $this->conexion->query($query);
    }

    public function Actualizar($Actualizar_Columna_Valor, $Columna_Condicion, $Columna_Condicion_Valor)
    {
        $query = $this->UpdateBD($this->table_name, $Actualizar_Columna_Valor, $Columna_Condicion, $Columna_Condicion_Valor);
        echo $query;
        $result = $this->conexion->query($query);
    }
    public function languageChoose()
    {
        if ($_SESSION['lang'] == "es") {
            $lang = "Es";
        } else if ($_SESSION['lang'] == "en") {
            $lang = "En";
        } else if ($_SESSION['lang'] == "eus") {
            $lang = "Eus";
        }
        return $lang;
    }
    public function Ver_Pedidos_Cliente($Email)
    {
        $lang = $this->languageChoose();
        $query = "SELECT eskaera_produktuak.produktuKodea, produktuak.izena" . $lang .", irudiak.ruta, eskaerak.erosketaData from eskaera_produktuak left join eskaerak on eskaera_produktuak.eskaeraKodea = eskaerak.eskaeraKodea join erabiltzaileak on erabiltzaileak.erabiltzaileKodea = eskaerak.erabiltzaileKodea join produktuak on eskaera_produktuak.produktuKodea = produktuak.produktuKodea join irudiak on irudiak.produktuKodea = eskaera_produktuak.produktuKodea where eskaeraEgoera = 'Completed' and erabiltzaileak.emaila = '"  . $Email . "';";
        $result = $this->conexion->query($query);
        $array = $this->createArray($result);
        return $array;
    }
}