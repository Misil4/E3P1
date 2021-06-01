<?php

require_once "modelBase.php";

class Ipn extends ModelBase
{
    public function __construct()
    {
        //Inicializamos el nombre de la tabla
        $this->table_name = 'ipn';

        //Llamamos al constructor de la clase ModelBase
        parent::__construct();
    }
    public function insertPaypalData($transakzioKodea,$OrdaintzeEgoera,$Prezio_Totala,$TxanponMota,$data,$EskaeraKodea) {
        $query = 'INSERT INTO '.$this->table_name.' (transakzioKodea,OrdaintzeEgoera,prezioTotala,txanponMota,data,eskaeraKodea) VALUES ("'.$transakzioKodea.'","'.$OrdaintzeEgoera.'","'.$Prezio_Totala.'","'.$TxanponMota.'","'.$data.'","'.$EskaeraKodea.'");';
        $result = $this->conexion->query($query);
    }
    public function getLastColumn()
    {
        $query = 'SELECT * FROM '.$this->table_name.' ORDER by eskaeraKodea DESC LIMIT 1';
        $result = $this->conexion->query($query);
        $array = mysqli_fetch_assoc($result);
        return $array;
    }
    public function IfDuplicate($txn_id) {
        $query = "SELECT transakzioKodea FROM ".$this->table_name." WHERE transakzioKodea='".$txn_id."'";
        $result = $this->conexion->query($query);
        return $result;
    }
}