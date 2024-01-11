<?php

// clase avión en el que tiene atributos como NumAsientos, Plazas e ID.


class Avion
{
    //Atributos del avión
    protected const PLAZAS = 100;
    private $ID;
    public $nombreCompañia;

    //Constructor de la clase
    public function __construct(string $ID, string  $nombreCompañia)
    {
        $this->ID = $ID;
        $this->nombreCompañia = $nombreCompañia;
    }

    //Método estático para obtener el número total de plazas

    public static function getTotalPlazas()
    {
        return self::PLAZAS;
    }


    // Un get que te devuelve el valor del ID que introducimos

    public function getID()
    {
        return $this->ID;
    }

    // Un get que te devuelve el nombre de la compañia que introducimos

    public function getNombreCompañia()
    {
        return $this->nombreCompañia;
    }

    //Un set para poder modificar el ID

    public function setID($ID)
    {
        $this->ID = $ID;
    }

    //Un set para poder modificar el nombre de la compañia

    public function setNombreCompañia($nombreCompañia)
    {
        $this->nombreCompañia = $nombreCompañia;
    }


    //Calcular la ocupación del avión
    public function calcularOcupacion($asientosOcupados)
    {
        return ($asientosOcupados / self::PLAZAS) * 100;
    }

    //Mostrar información del avión

    public function mostrarInformacion()
    {
        echo "ID: " . $this->ID . "<br>";
        echo "Nombre de la compañía: " . $this->nombreCompañia . "<br>";
        echo "Número de plazas: " . self::PLAZAS . "<br>";
    }
}



class pasajeros extends Avion
{

    //Atributos de los pasajeros
    public $Nombre;
    public $Apellido;
    public $DNI;
    public $NumeroAsiento;


    public function __construct(string $ID, string $nombreCompañia, string $Nombre, string $Apellido, string $DNI, string $NumeroAsiento)
    {
        // Llama al constructor de la clase Avion para inicializar sus atributos
        parent::__construct($ID, $nombreCompañia);

        // Inicializa los atributos propios de la clase Pasajeros
        $this->Nombre = $Nombre;
        $this->Apellido = $Apellido;
        $this->DNI = $DNI;
        $this->NumeroAsiento = $NumeroAsiento;
    }

    //Devuelve el nombre del pasajero
    public function getNombre()
    {
        return $this->Nombre;
    }

    //Devuelve el apellido del pasajero

    public function getApellido()
    {
        return $this->Apellido;
    }

    //Devuelve el DNI del pasajero

    public function getDNI()
    {
        return $this->DNI;
    }

    //Devuelve el numero del asiento del pasajero

    public function getNumeroAsiento()
    {
        return $this->NumeroAsiento;
    }

    // Método que modifica el nombre
    public function setNombre($Nombre)
    {
        $this->nombreCompañia = $Nombre;
    }

    // Método que modifica el apellido
    public function setApellido($Apellido)
    {
        $this->nombreCompañia = $Apellido;
    }

    // Método que modifica el DNI
    public function setDNI($DNI)
    {
        $this->nombreCompañia = $DNI;
    }

    // Método que modifica el numero del asiento
    public function setNumeroAsiento($NumeroAsiento)
    {
        $this->nombreCompañia = $NumeroAsiento;
    }

    // Método de igualdad que compara DNIs
    public function esIgual($otroDni)
    {
        if ($this->DNI === $otroDni) {
            return "Ya hay una persona con el mismo DNI ({$this->DNI}). No se pueden repetir.";
        } else {
            return false;
        }
    }


    //Mostrar información del pasajero
    public function mostrarInformacion()
    {

        echo "Nombre y apellidos : " . $this->Nombre . $this->Apellido . "<br>";
        echo "DNI: " . $this->DNI . "<br>";
        echo "Número de asiento : " . $this->NumeroAsiento . "<br>";
        parent::mostrarInformacion();
    }
}


    



?>