<?php 

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
ini_set('error_reporting', E_ALL);


class Persona{
    public $dni;
    public $nombre;
    public $edad;
    public $nacionalidad;
    public function imprimir(){}
    

};

class Alumno extends Persona{
    public $legajo;
    public $notaPortfolio;
    public $notaPhp;
    public $notaProyecto;
    public function __construct(){
        $this->notaPortfolio = 0.0;
        $this->notaPhp = 0.0;
        $this->notaProyecto = 0.0;
    }
    public function imprimir(){}
    public function calcularPromedio(){}

};

class Docente extends Persona{
    public $especialidad;
    public function imprimir(){}
    public function imprimirEspecialidadesHabilitadas(){}
};


$alumno1 = new Alumno();
$alumno1->nombre = "Juan Paz";
$alumno1->notaPortfolio = 8;
$alumno1->notaPhp = 9;
$alumno1->notaProyecto = 8.50;
print_r($alumno1);
exit;
$alumno2 = new Alumno();
$alumno1->nombre = "Micaela Ledezma";
$alumno1->notaPortfolio = 9;
$alumno1->notaPhp = 8;
$alumno1->notaProyecto = 9;

?>