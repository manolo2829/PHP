<?php


    /* ------------------------------- CONSTRUCTOR ------------------------------ */

    class Persona{

        public $nombre; //propiedades
        protected $altura;
        private $edad;

        // Con el contructor recibimos los datos del objeto desde la creacion
        function __construct($nuevoNombre, $edad, $altura){

            $this->nombre = $nuevoNombre;
            $this->edad = $edad;
            $this->altura = $altura;
        }


        public function imprimirEdad(){
            $this -> edad = 20;
            echo "Mi edad es ".$this -> edad."<br/>";
        }

        public function imprimirPersona(){
            echo "Hola soy ".$this->nombre." tengo ".$this->edad." y mido ".$this->altura;

        }

        
    }

    // enviamos los datos del objeto para que el constructor lo cree
    $objPersona = new Persona("Oscar", 20, 1.89); 
    $objPersona -> imprimirPersona();

    /* ---------------------------- METODOS ESTATICOS --------------------------- */

    class UnaClase{

        // Son los metodos a los que se puede acceder sin crear un objeto, es decir, se puede acceder llamando a la clase sola

        public static function unMetodo(){

            echo "Hola soy un metodo estatico";

        }


    }

    echo"<br/>";
    $obj=new UnaClase();
    $obj->unMetodo();
    echo"<br/>";

    // Asi se llama un metodo estatico
    UnaClase::unMetodo();


?>