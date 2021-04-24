<?php

class Perro
{
    private $color;
    private $nombre;
    private $edad;

    public function __construct($nombre, $edad, $color)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->color = $color;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function ladrar()
    {
        echo "Woof! Soy {$this->nombre}<br>";
    }
}

// En otro archivo...

$firulais = new Perro('firulais', 2, 'negro');
echo $firulais->getNombre();
$firulais->ladrar();

$fido = new Perro('fido', 1, 'cafe');
echo $fido->getNombre();
$fido->ladrar();
