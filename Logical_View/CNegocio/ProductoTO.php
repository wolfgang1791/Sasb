<?php


class ProductoTO
{
    private $id;
    private $nombre;
    private $categoria;
    private $peso;
    private $stock;
    private $precio;
    private $limitestock;

    public function getId()
    {
        return $this->id;
    }

    public function setId($value)
    {
        $this->id = $value;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($value)
    {
        $this->nombre = $value;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setCategoria($value)
    {
        $this->categoria = $value;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($value)
    {
        $this->peso = $value;
    }

    public function getStock()
    {
        return $this->stock;
    }

    public function setStock($value)
    {
        $this->stock = $value;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function setPrecio($value)
    {
        $this->precio = $value;
    }

    public function getLimitestock()
    {
        return $this->limitestock;
    }

    public function setLimitestock($value)
    {
        $this->limitestock = $value;
    }
}
