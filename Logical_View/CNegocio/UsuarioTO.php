<?php

class UsuarioTO
{
    /**
     *
     */
    public function __construct()
    {
    }
    private $id;
    private $pass;
    private $nombre;
    private $apellidoP;
    private $apellidoM;
    private $DNI;
    private $telefono;
    private $fechadecreacion;
    private $tipo;

    public function getId()
    {
        return $this->id;
    }
        

    public function setId($value)
    {
        $this->id = $value;
    }

    public function getPass()
    {
        return $this->pass;
    }

    public function setPass($value)
    {
        $this->pass = $value;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($value)
    {
        $this->nombre = $value;
    }

    public function getApellidoP()
    {
        return $this->apellidoP;
    }

    public function setApellidoP($value)
    {
        $this->apellidoP = $value;
    }

    public function getApellidoM()
    {
        return $this->apellidoM;
    }

    public function setApellidoM($value)
    {
        $this->apellidoM = $value;
    }

    public function getDNI()
    {
        return $this->DNI;
    }

    public function setDNI($value)
    {
        $this->DNI = $value;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($value)
    {
        $this->telefono = $value;
    }

    public function getFechadecreacion()
    {
        return $this->fechadecreacion;
    }

    public function setFechadecreacion($value)
    {
        $this->fechadecreacion = $value;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($value)
    {
        $this->tipo = $value;
    }
}
