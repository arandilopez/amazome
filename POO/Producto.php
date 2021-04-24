<?php

include_once './Cobrable.php';

abstract class Producto implements Cobrable
{
    const IVA = 0.16;
    public static $almacen = 'MERIDA';
    public $titulo = '';
    public $precio = 0;

    public static function all()
    {
        return [];
    }

    public function __construct($titulo, $precio)
    {
        $this->titulo = $titulo;
        $this->precio = $precio;
    }

    public function informacion()
    {
        return "{$this->titulo} - {$this->precio}";
    }

    public abstract function impuestos();

    public function precioNeto()
    {
        return $this->precio + $this->impuestos();
    }
}
