<?php



/**
 *
 */
interface IOrdenDAO
{
    /**
     *
     */
    public function crearOrden($productoTO);
    public function actualizarOrden($ordenTO);
    public function ultimaDisponible();
    public function listarOrdenes();
}
