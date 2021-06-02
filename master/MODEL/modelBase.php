<?php 

require_once (__DIR__."/../DB/Conexion.php");

class ModelBase extends Conexion
{
    protected $conexion;
    protected $table_name;
    
    function __construct() 
    {
        $this->conexion = parent::getInstance();
    }

    
    //Obtiene todos los elementos de la tabla
    function getAll()
    {
        $query = $this->selectDB($this->table_name);

        //echo "Table name: " . $this->table_name;
        $result = $this->conexion->query($query);

        //Creamos el array asociativo para devolver los datos
        $array = $this->createArray($result);

        $result->close();
        return $array;
    }

    
    //Obtiene todos los elementos de la tabla, filtrados por una valor de una columna
    function getAllByColumn($search_name, $search_value)
    {
        $query = $this->selectDB($this->table_name, "*", $search_name, $search_value);
        $result = $this->conexion->query($query);

        //Creamos el array asociativo para devolver los datos
        $array = $this->createArray($result);

        $result->close();
        return $array;

    }

    //Función que añade un elemento nuevo a la tabla
    function addNew($array)
    {
        $query = $this->insertDB($this->table_name, $array);

        $result = $this->conexion->query($query);
    }

    
    protected function createArray($data)
    {
        //Creamos el array para devolver los datos (Cada elemento será un array asociativo
        // correspondiente a una fila de la tabla)
        while ($row = $data->fetch_array(MYSQLI_ASSOC))
        {
            //Añadimos la siguiente fila 
            $array[] = $row;
        }

        return $array;
    }

    // Devuelve un Query de la forma "SELECT * FROM table WHERE author='Jane Austen'"
    // Parámetros: 
    // $table: Nombre de la tabla (FROM)
    // $columns: Columnas a extraer (SELECT). Si no se pasa este parámetro se entiende que se extraen todas (*)
    // $name, $value: condiciones de búsqueda(Nombre columna y valor) (WHERE). Si no se pasa este parámetro se entiende que no hay condición de búsqueda
    protected function selectDB($table, $columns = "*", $name = "", $value = "")
    {
        $query = "SELECT $columns FROM $table";
        if ($name != "" && $value != "")
            $query .= " WHERE $name = '$value'"; 

        return $query;
    }

    // Devuelve un Query de la forma "INSERT INTO table(author, title, category) VALUES ('JRR tolkien', 'Lord of the rings', 'Fiction')"
    // Parámetros: 
    // $table: Nombre de la tabla 
    // $array: Array asociativo con los pares (name, value) correspondientes al nombre de la columna y valor
    protected function insertDB($table, $array)
    {

        foreach ($array as $name => $value)
        {
            $insert_name[] = $name;
            $insert_value[] = $value;
        }

        $query = "INSERT INTO $table(";

        $num_elem = count($insert_name);
        for ($i = 0; $i < $num_elem; ++$i) 
        {
            $query .= "$insert_name[$i]";
            if ($i != $num_elem - 1)
                $query .= ", ";
            else
                $query .= ") ";

        }

        $query .= "VALUES(";
        for ($i = 0; $i < $num_elem; ++$i) 
        {
            $query .= "'$insert_value[$i]'";
            if ($i != $num_elem - 1)
                $query .= ", ";
            else
                $query .= ") "; 
        }
        
        return $query;
    }protected function SelectWithFilter($table, $Condiciones)
    {
        $query = "SELECT * ";
        $query .="FROM $table ";
        $query .="WHERE";
        
        foreach($Condiciones as $Nombre_Asociado => $Valor)
        {
            $query .= " " . $Nombre_Asociado . " = " . "'$Valor'" . " AND ";
        }

        $query = trim($query, 'AND ');
        return $query;
    }
    protected function BorrarBD($table, $Condition_Column, $Condition)
    {
        $query = "DELETE FROM $table ";
        $query .= "WHERE " . $Condition_Column . " = " . "'$Condition'";

        return $query;
    }

    protected function UpdateBD($table, $Actualizar_Columna_Valor, $Columna_Condicion, $Columna_Condicion_Valor)
    {
        $query = "UPDATE $table ";
        
            $query .= "SET ";
        
            $query .= $Actualizar_Columna_Valor;
            
            $query .= " WHERE " . $Columna_Condicion . " = " . $Columna_Condicion_Valor;
        
            return $query;
    }

    protected function UpdateBD_Multiple($table, $Array_Actualizar/*En el nombre que se le introducce al valor hay que poder el nombre del campo en la base de datos*/,$Columna_Condicion,$Columna_Condicion_Valor)
    {
        
        $query = "UPDATE $table ";
        
        $query .= "SET ";
        
        foreach($Array_Actualizar as $Campo => $Valor){$query .= $Campo . " = " . $Valor . ",";}
            
        $query = trim($query, ',');
        $query .= " WHERE " . $Columna_Condicion . " = " . "'$Columna_Condicion_Valor'";
        
        return $query;
    }
    
}

?>


}

?>