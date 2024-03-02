<?php

class Modulo {
    private $nombre;
    private $calificacion;

    // Constructor de la clase Modulo
    public function __construct($nombre) {
        $this->nombre = $nombre;
        $this->calificacion = 0; // Se inicializa con calificación cero
    }

    // Función para asignar calificación al módulo
    public function asignarCalificacion($calificacion) {
        $this->calificacion = $calificacion;
    }

    // Función para obtener el nombre del módulo
    public function getNombre() {
        return $this->nombre;
    }

    // Función para obtener la calificación del módulo
    public function getCalificacion() {
        return $this->calificacion;
    }
}

class Alumno {
    private $nombre;
    private $modulos = array();

    // Constructor de la clase Alumno
    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    // Función para agregar un módulo al alumno
    public function agregarModulo($nombreModulo) {
        $modulo = new Modulo($nombreModulo);
        $this->modulos[] = $modulo;
    }

    // Función para asignar calificación a un módulo del alumno
    public function asignarCalificacion($nombreModulo, $calificacion) {
        foreach ($this->modulos as $modulo) {
            if ($modulo->getNombre() === $nombreModulo) {
                $modulo->asignarCalificacion($calificacion);
                break;
            }
        }
    }

    // Función para mostrar la información del alumno
    public function mostrarInformacion() {
        echo "Nombre del alumno: ".$this->nombre."<br>";
        echo "Módulos y calificaciones:<br>";
        foreach ($this->modulos as $modulo) {
            echo "Módulo de ". $modulo->getNombre().": ". $modulo->getCalificacion(). "<br>";
        }
    }
}

// Crear un objeto alumno
$alumno1 = new Alumno("Oliver Hernandez");

// Agregar módulos al alumno
$alumno1->agregarModulo("Redes");
$alumno1->agregarModulo("Programación");
$alumno1->agregarModulo("Inglés");

// Asignar calificaciones a los módulos
$alumno1->asignarCalificacion("Redes", 8);
$alumno1->asignarCalificacion("Programación", 9);
$alumno1->asignarCalificacion("Inglés", 7);

// Mostrar la información del alumno
$alumno1->mostrarInformacion();

?>
