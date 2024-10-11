<?php
    class Cliente{
        var $cedula;
        var $nombre;
        var $celular;
        var $email;
        var $direccion;
        var $telefono;

        public function __construct($cedula, $nombre, $celular, $email, $direccion, $telefono) {
            $this->cedula = $cedula;
            $this->nombre = $nombre;
            $this->celular = $celular;
            $this->email = $email;
            $this->direccion = $direccion;
            $this->telefono = $telefono;
        }

        function setCedula($cedula){
            $this->cedula = $cedula;
        }

        function getCedula(){
            return $this->cedula;
        }

        function setNombre($nombre){
            $this->nombre = $nombre;
        }

        function  getNombre(){
            return $this->nombre;
        }

        function setCelular($celular){
            $this->celular = $celular;
        }

        function  getCelular(){
            return $this->celular;
        }

        function setEmail($email){
            $this->email = $email;
        }

        function  getEmail(){
            return $this->email;
        }

        function setDireccion($direccion){
            $this->direccion = $direccion;
        }

        function  getDireccion(){
            return $this->direccion;
        }

        function setTelefono($telefono){
            $this->telefono = $telefono;
        }

        function  getTelefono(){
            return $this->telefono;
        }
    }
?>