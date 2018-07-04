<?php

//namespace CDatos\dao_ds;

class Conexion
{
    private $db = null;

    function conectar(){
    try{
        $mongo = new Mongo();
        $this->db = $mongo->selectDB("Sasb");

    }
    catch(MongoConnectionException $e){
        die($e->getMessage());
    }
    return $this->db;
    }
}
