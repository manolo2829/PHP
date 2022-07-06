<?php

    /* ---------------------------------- CLASE --------------------------------- */

    class Persona{

        public $nombre; //propiedades


        public function asignarNombre($nuevoNombre){ //acciones o metodos de la clase

            $this->nombre=$nuevoNombre;

        }

        public function imprimirNombre(){
            echo "Hola soy ".$this -> nombre;
        }


    }


    $objPersona = new Persona(); //Instancia o creacion de un objeto

    $objPersona -> asignarNombre("Oscar"); //Llamamos un metodo

    echo $objPersona->nombre; //Imprimimos una propiedad

    echo "<br/>";

    $objPersona2 = new Persona(); 
    $objPersona2 -> asignarNombre("Manuel");
    echo $objPersona2-> imprimirNombre(); 

    echo "<br/>";

    class Alumno {

        public $nombre;
        // Private: Este dato va a accederse directamente en la clase. Esta propiedad solo puede ser utilizada o modificada por los metodos de la clase
        private $edad;
        // Protected: Solo se puede acceder desde la misma clase y desde las clases heredadas
        protected $altura;

        public function asignarNombre($nuevoNombre){
            $this->nombre=$nuevoNombre;
        }

        public function imprimirEdad(){
            $this -> edad = 20;
            echo "Mi edad es ".$this -> edad."<br/>";
        }

    }


    $objAlumno = new Alumno();
    $objAlumno -> asignarNombre("Nico");
    echo "Mi nombre es ".$objAlumno->nombre."<br/>"; 
    // Como edad es un dato privado no se puede acceder
    // echo "Mi edad es ".$objAlumno->edad."<br/>"; 
    echo $objAlumno-> imprimirEdad(); 
 
?>