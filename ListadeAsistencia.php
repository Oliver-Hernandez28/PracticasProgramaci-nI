<?php
//programa para pasar lista a alumnos utilizando POO
// Primer paso crear la clase Alumnos
class Alumno{
    private $nombre;
    private $presente;

    //Segundo paso crear el constructor
    public function __construct($nombre){
        $this->nombre = $nombre;
        $this->presente = false;

    }
// tercer paso crear las funciones
public function getNombre(){
    return $this->nombre;
}
public function marcarPresnete(){
    $this->presente = true;
}
public function estarpresente(){
    return $this->presente;
}
}
//crear la clase lista de asitencia
class ListadeAsitencia{
  private $alumnos;
  //crear constructor
  public function __construct(){
    $this->$alumnos =[];
  }
  public function agregarAlumno(){
    $alumno = new Alumno($nombre);
    $this-> alumnos[]=$alumno;
  }
  public function marcarPresente($nombre){
    foreach($this->$alumnos as $alumno){
        if($alumno->getNombre() ==$nombre){
            $alumno->marcarPresente();
            break;
        }
    }
  }
public function imprimir(){
    foreach($this->alumnos as $alumno){
        echo $alumno->getNombre()." - ".($alumno->estarPresente()? "Presente" : "Ausente")."<br>";
    }
}
}
//objeto lista
$lista = new ListadeAsitencia();
$lista->agregarAlumno("Josue");
$lista->agregarAlumno("Oliver");
$lista->agregarAlumno("Luis");

$lista->marcarPresente("Josue");
$lista->marcarPresente("Oliver");

$lista->imprimir();

?>