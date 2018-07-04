<?php


interface IProductoDAO
{

    public function disminuirStock($productoTO);

    public function incrementarStock($productoTO);

    public function listarProductos();
}
