<?php

include "../CDatos/dao_design/IBodegaDAO.php";
include "../CNegocio/BodegaTO.php";



class BodegaDAO implements IBodegaDAO
{
  
    private $cn;

    public function __construct()
    {
        $this->cn = new Conexion();
    }

    public function listarBodegas(){
    	try{
        $db=$this->cn->conectar();
        $collection = $db->selectCollection('bodega');
        $cursor = $collection->find();

        $listaB = array();
             foreach ($cursor as $resultado) {
                $b = new BodegaTO;
                $b->setId($resultado['_id']);
                $b->setUbicacion($resultado['ubicacion']);
                array_push($listaB, $b);
             }
            return $listaB;
        }
        catch(MongoConnectionException $e){
             die($e->getMessage());
        }
       
	}



}
