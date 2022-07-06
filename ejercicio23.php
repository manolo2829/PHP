<?php

    /* --------------------------- HERENCIA DE CLASES --------------------------- */

    class Persona{

        public $nombre; //propiedades
        protected $altura;
        private $edad;


        public function asignarNombre($nuevoNombre){ //acciones o metodos de la clase

            $this->nombre=$nuevoNombre;

        }

        public function imprimirNombre(){
            echo "Hola soy ".$this -> nombre;
        }

        public function imprimirEdad(){
            $this -> edad = 20;
            echo "Mi edad es ".$this -> edad."<br/>";
        }


    }
 

    $objPersona = new Persona(); 
    $objPersona -> asignarNombre("Oscar");
    echo $objPersona-> imprimirNombre();
    echo "<br/>";
    echo $objPersona-> imprimirEdad(); 


    // Estamos creando un clase heredada
    class Trabajador extends persona{
        // Estamos creando un trabajador apartir de las caracteristicas de una persona

        // Este trabajador tiene las mismas propiedades y clases que Persona

        public $puesto; // Propiedad nueva


        public function presentarseComoTrabajador(){
            // Utilizamos la herencia de la propiedad Nombre
            echo "Hola soy ".$this->nombre." y soy un ".$this->puesto;
        }

    }


    $objTrabajador = new Trabajador();
    $objTrabajador -> asignarNombre("Manuel Diez de Oñate");
    $objTrabajador -> puesto = "Tecnico";

    
    $objTrabajador -> presentarseComoTrabajador()
?>