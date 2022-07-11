<?php

    class Conexion {

        private $servidor = 'localhost';
        private $usuario = 'root';
        private $contraseña = '';
        private $conexion;


        public function __construct(){
            try {
                $this->conexion = new PDO("mysql:host=$this->servidor;dbname=database_album", $this->usuario, $this->contraseña);
                $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $error) {
                echo"Error en la conexion".$error;
            }
        }

        public function ejecutar($sql){ // Insertar | eliminar
            $this->conexion->exec($sql);
            return $this->conexion->lastInsertId();

        }

        public function consultar($sql){ // obtener datos

            $sentencia = $this->conexion->prepare($sql);
            $sentencia->execute();
            return $sentencia->fetchAll();

        }


    }

?>

