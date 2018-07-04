<?php

include "../CDatos/dao_ds/Conexion.php";
include '../CDatos/dao_component/OrdenDAO.php';
include '../CDatos/dao_component/BodegaDAO.php';
include '../CDatos/dao_component/ProductoDAO.php';
include '../CDatos/dao_component/UsuarioDAO.php';
include '../CDatos/dao_component/ProveedorDAO.php';

class DAOFactory
{
    static private $daofac;
    private function __construct()
    {
    }

    public static function getInstance(){
        if(self::$daofac){
            return self::$daofac;
        }
        else {
            self::$daofac = new DAOFactory;
            return self::$daofac;
        }

    }

    /**
     * @return \CDatos\dao_component\OrdenDAO
     */
    public function getOrdenDAO()
    {
        return new OrdenDAO;
    }

    /**
     * @return \CDatos\dao_component\ProductoDAO
     */
    public function getProductoDAO()
    {
        return new ProductoDAO;
    }

    /**
     * @return \CDatos\dao_component\UsuarioDAO
     */
    public function getUsuarioDAO()
    {
        return new UsuarioDAO;
    }

    public function getBodegaDAO()
    {
        return new BodegaDAO;
    }
}
