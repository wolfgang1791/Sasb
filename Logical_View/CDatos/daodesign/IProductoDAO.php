<?php

namespace CDatos\dao_design;

/**
 *
 */
interface IProductoDAO
{
    /**
     *
     */
    public function disminuirStock():void;

    /**
     *
     */
    public function incrementarStock():void;

    /**
     *
     */
    public function listarProductos():void;
}
