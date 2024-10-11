<?php 

class ConexionBd{
    var $conexion;

    //Se inicializa la variable conexion como vacía
    public function __construct() {
        $this->conexion = null;
    }

    //Metodo para abrir conexion a la base de datos
    public function abrirConexion($servidor, $usuario, $password, $dbName, $port) {
        try{
            //abre conexion a la base de datos con mysqli enviando todos los datos que son globales
            $this->conexion = new mysqli($servidor, $usuario, $password, $dbName, $port);
            //acaba el proceso con el die si la conexion tiene error
            if($this->conexion->connect_errno) {
                die("Conexion fallida".$this->conexion->connect_errno);
            }
        }
        //maneja la excepcion si el intento de conexion al servidor falla
        catch(Exception $e){
            echo "Conexion fallida al servidor".$e->getMessage();
        }
    }

    public function cerrarConexion(){
        try{
            //cierra conexion a la base de datos con close()
            $this->conexion->close();
        }
        //maneja la excepcion si el intento de conexion al servidor falla
        catch(Exception $e){
            echo "Conexion fallida al servidor".$e->getMessage();
        }
    }

    public function ejecutarComandoSql($comandoSql){
        try{
            //ejecuta una sentencia en SQL, la sentencia esta alamacenada en $comandoSql
            $this->conexion->query($comandoSql);
        }
        //maneja la excepcion si el intento de conexion al servidor falla
        catch(Exception $e){
            echo "No se realizaron los registros"-$e->getMessage();
        }
    }

    public function ejecutarSelectSql($comandoSql){
        try{
            //ejecuta un select en SQL y almacena los datos del select en $recordSet, la sentencia esta alamacenada en $comandoSql
            $recordSet= $this->conexion->query($comandoSql);
        }
        //maneja la excepcion si el intento de conexion al servidor falla
        catch(Exception $e){
            echo "Error".$e->getMessage();
        }
        //devuelve los datos de la consulta almacenados en $recordSet
        return $recordSet;
    }
}

?>