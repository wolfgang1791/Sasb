<?php


/**
 *
 */
class OrdenTO
{
    
    
    private $id;
    private $fechacreacion;
    private $horacreacion;
    private $disponible;
    private $productos = array();

   
    public function anadirProducto($productoTO)
    {
        array_push($this->productos,$productoTO->getId());  
         
    }
    
    
    public function getId()
    {
        
        return $this->id;
    }

   
    public function setId($value)
    {
       $this->id=$value;    
    }

   
    public function getFechacreacion()
    {
        
       return $this->fechacreacion;
    }

    
    public function setFechacreacion($value)
    {
        $this->fechacreacion=$value;
    }

   
    public function getHoracreacion()
    {
        // TODO: implement here
        return $this->horacreacion;
    }

   
    public function setHoracreacion($value)
    {
        $this->horacreacion=$value;
    }

    public function getDisponible()
    {
        // TODO: implement here
        return $this->disponible;
    }

   
    public function setDisponible($value)
    {
        $this->disponible=$value;// TODO: implement here
    }

    public function getProductos()
    {
        // TODO: implement here
        return $this->productos;
    }

    public function setProductos($value)
    {
        $this->productos=$value;
    }
}
