<?php
include "../CDatos/dao_design/IOrdenDAO.php";
include "../CNegocio/OrdenTO.php";

setlocale(LC_ALL,"es_ES");
date_default_timezone_set('America/Bogota');

class OrdenDAO implements IOrdenDAO
{
   
    private $cn;

    public function __construct()
    {
        $this->cn = new Conexion();
    }




    public function crearOrden($productoTO)
    {
       
        
        try{
        $db=$this->cn->conectar();
        $collection = $db->selectCollection('orden');

        $ordenTO = new OrdenTO;
        $ordenTO->añadirProducto($productoTO);
        $ordenTO->setFechacreacion(date ("j/n/Y"));
        $ordenTO->setHoracreacion(date ("H:i:s"));
        $ordenTO->setDisponible(1);
       
        var_dump($ordenTO);
       
        $orden=array('fechacreacion' => $ordenTO->getFechacreacion(),'horacreacion' => $ordenTO->   

                            getHoracreacion(),'disponible'=>$ordenTO->getDisponible(),'productos'=>$ordenTO->getProductos());
       
        $collection->insert($orden); 
        }
        catch(MongoConnectionException $e){
        die($e->getMessage());
        }
    }

    public function actualizarOrden($ordenTO)
    {
        try{
        $db=$this->cn->conectar();
        $collection = $db->selectCollection('orden');

        $condicion = array('_id' => $ordenTO->getId());
        $nuevo = array('$set'=> array('productos'=>$ordenTO->getProductos()));
        $collection -> update($condicion,$nuevo); 
        }
        catch(MongoConnectionException $e){
        die($e->getMessage());
        }

    }

    
    public function ultimaDisponible()
    {
        
        try{
        $db=$this->cn->conectar();
        $collection = $db->selectCollection('orden');
        $consulta = array('disponible' => 1);
        $cursor = $collection->find($consulta);
        $resultado = $cursor->getNext();
            if($cursor->count() > 0){
            
                $o = new OrdenTO;
                $o->setId($resultado['_id']);
                $o->setFechacreacion($resultado['fechacreacion']);
                $o->setHoracreacion($resultado['horacreacion']);
                $o->setDisponible($resultado['disponible']);
                $o->setProductos($resultado['productos']);
                   
                return $o;
            }

            else{
           
            return null;
            }
        }

        catch(MongoConnectionException $e){
        die($e->getMessage());
        }

    }

    public function listarOrdenes()
        {
        
        try{
        $db=$this->cn->conectar();
        $collection = $db->selectCollection('orden');
        $cursor = $collection->find();

        $listaO = array();
             foreach ($cursor as $resultado) {
                $o = new OrdenTO;
                $o->setId($resultado['_id']);
                $o->setFechacreacion($resultado['fechacreacion']);
                $o->setHoracreacion($resultado['horacreacion']);
                $o->setDisponible($resultado['disponible']);
                $o->setProductos($resultado['productos']);
              array_push($listaO, $o);
             }
            return $listaO;
        }
        catch(MongoConnectionException $e){
             die($e->getMessage());
        }
       

        }



}
