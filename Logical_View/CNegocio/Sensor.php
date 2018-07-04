<?php
include "../CDatos/componenteDAO/DAOFactory.php";
class Sensor
{
    static private $dao;
    static private $pesoActual = 0;
    static private $productos;
    private $productoDAO;
    private $ordenDAO;

    public function __construct()
    {
        self::$dao = DAOFactory::getInstance();
        $this->productoDAO = self::$dao->getProductoDAO();
        self::$productos = $this->productoDAO->listarProductos();
        for($i=0;$i<count(self::$productos);$i++){
            self::$pesoActual = (int)(self::$pesoActual + (self::$productos[$i]->getPeso() * self::$productos[$i]->getStock()));
        }
        //echo self::$pesoActual;
    }

    public function calcularCambio($pesoRecibido){
        //var_dump(self::$productos);
        $productoTO=null;
        if(self::$pesoActual > $pesoRecibido){
            $aux = self::$pesoActual - $pesoRecibido;
            for($i=0; $i<count(self::$productos); $i++){
                if($aux == self::$productos[$i]->getPeso()){
                    $productoTO = self::$productos[$i];
                }
            }
            if($productoTO!=null){
                $stock = $productoTO->getStock()-1;
                $productoTO->setStock($stock);
                $this->productoDAO->disminuirStock($productoTO);
                self::$pesoActual = $pesoRecibido;
               
                if($stock <= $productoTO->getLimitestock()){
                    $this->ordenDAO = self::$dao->getOrdenDAO();
                    $ordenTO = $this->ordenDAO->ultimaDisponible();
                  
                    if($ordenTO!=null){
                        $ordenTO->anadirProducto($productoTO);
                        $this->ordenDAO -> actualizarOrden($ordenTO);                       
                    }
                    else{           
                        $this->ordenDAO->crearOrden($productoTO);
                    }
                }
            }

        }
        else {
            $aux = $pesoRecibido - self::$pesoActual;
            for($i=0; $i<count(self::$productos); $i++){
                if($aux == self::$productos[$i]->getPeso()){
                    $productoTO = self::$productos[$i];
                }
            }
            if($productoTO!=null){
                $stock = $productoTO->getStock()+1;
                $productoTO->setStock($stock);
                $this->productoDAO->incrementarStock($productoTO);
                self::$pesoActual = $pesoRecibido;
            }
        }

    }
}
