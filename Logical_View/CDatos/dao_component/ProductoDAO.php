<?php
include "../CDatos/dao_design/IProductoDAO.php";
include "../CNegocio/ProductoTO.php";

class ProductoDAO implements IProductoDAO
{
    private $cn;

    public function __construct()
    {
        $this->cn = new Conexion();
    }

    public function disminuirStock($productoTO)
    {   

        try{
        $db=$this->cn->conectar();
        $collection = $db->selectCollection('productos');
        $consulta = array('id' => $productoTO->getId());
        $insertar = array('$set' => array('stock'=>$productoTO->getStock()));
        $collection->update($consulta,$insertar);
        }
        
        catch(MongoConnectionException $e){
        die($e->getMessage());
        }

    }

    public function incrementarStock($productoTO)
    {   
        try{
        $db=$this->cn->conectar();
        $collection = $db->selectCollection('productos');
        $consulta = array('id' => $productoTO->getId());
        $insertar = array('$set' => array('stock'=>$productoTO->getStock()));
        $collection->update($consulta,$insertar);
        }
        catch(MongoConnectionException $e){
        die($e->getMessage());
        }
    }

    public function listarProductos()
    {
        
        try{
        $db=$this->cn->conectar();
        $collection = $db->selectCollection('productos');
        $cursor = $collection->find();

        $listaP = array();
        foreach ($cursor as $resultado) {
            $p = new ProductoTO;
            $p->setId($resultado['_id']);
            $p->setNombre($resultado['nombre']);
            $p->setCategoria($resultado['categoria']);
            $p->setPeso($resultado['peso']);
            $p->setStock($resultado['stock']);
            $p->setPrecio($resultado['precio']);
            $p->setLimitestock($resultado['limite']);
            array_push($listaP, $p);
        }
        return $listaP;
        }
        catch(MongoConnectionException $e){
        die($e->getMessage());
        }

    }



}
