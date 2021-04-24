<?php

include_once './Producto.php';

class ProductoFrutasVerduras extends Producto
{
    public function impuestos()
    {
        return 0;
    }
}
