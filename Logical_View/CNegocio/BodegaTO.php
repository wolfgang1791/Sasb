<?php



class BodegaTO
{
    
    private $id;
    private $ubicacion;


    public function getId()
    {
        return $this->id;
    }

    public function setId($value)
    {
        $this->id=$value;
    }

    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    public function setUbicacion($value)
    {
        $this->ubicacion=$value;
    }
}
