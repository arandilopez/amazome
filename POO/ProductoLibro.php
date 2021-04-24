<?php

include_once './Producto.php';
include_once './ProductoFrutasVerduras.php';

class ProductoLibro extends Producto
{
    protected $numPaginas = 0;

    public function __construct($titulo, $precio, $numPaginas)
    {
        parent::__construct($titulo, $precio);
        $this->numPaginas = $numPaginas;
    }

    public function informacion()
    {
        $parentInfo = parent::informacion();
        return "{$parentInfo} - {$this->numPaginas} páginas";
    }

    public function impuestos()
    {
        return $this->precio * self::IVA;
    }
}

echo "Almacen: " . Producto::$almacen . "<br>";

$libro1 = new ProductoLibro("La divina comedia", 150, 800);
echo $libro1->informacion() . "<br>";
echo "Impuestos: {$libro1->impuestos()}<br>";
echo "Precio neto: {$libro1->precioNeto()}<br>";

$manzana = new ProductoFrutasVerduras("Manzana por kilo", 30);
echo $manzana->informacion() . "<br>";
echo "Impuestos: {$manzana->impuestos()}<br>";
echo "Precio neto: {$manzana->precioNeto()}<br>";
