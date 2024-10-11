<?php
    class ControlCliente{
        var $objCliente;
        function __construct($objCliente){
            $this->objCliente=$objCliente;
        }

        function guardarCliente(){
            $cedula= $this->objCliente->getCedula();
            $nombre= $this->objCliente->getNombre();
            $celular= $this->objCliente->getCelular();
            $email= $this->objCliente->getEmail();
            $direccion= $this->objCliente->getDireccion();
            $telefono= $this->objCliente->getTelefono();

            $sql = "INSERT INTO clientes_dya (IDENTIFICACION_CLIENTE, NOMBRE_COMPLETO_CLIENTE, NUMERO_CELULAR_CLIENTE, EMAIL_CLIENTE, DIRECCION_CLIENTE, NUMERO_TELEFONO_CLIENTE) VALUES ('".$cedula."', '".$nombre."', '".$celular."', '".$email."', '".$direccion."', '".$telefono."')";

            $conexion = new ConexionBd();

            $conexion->abrirConexion($_SERVER, $);
        }
    }
?>