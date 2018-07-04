<?php
include "../CDatos/dao_design/IUsuarioDAO.php";
include "../CNegocio/UsuarioTO.php";

class UsuarioDAO implements IUsuarioDAO
{
    private $cn;

    public function __construct()
    {
        $this->cn = new Conexion();
    }
    /**
     *
     */
    public function registrarUsuario()
    {
        // TODO: implement here
    }

    /**
     *
     */
    public function actualizarUsuario()
    {
        // TODO: implement here
    }

    /**
     *
     */
    public function eliminarUsuario()
    {
        // TODO: implement here
    }

    /**
     * @param int $id
     * @param String $pass
     */
    public function obtenerUsuario($id, $pass)
    {
        $db=$this->cn->conectar();
        $collection = $db->selectCollection('usuario');
        $consulta = array(  'id' => $id,
                            'pass' => $pass);
        $cursor = $collection->find($consulta);
        if($cursor->count() == 0){
            echo "es cero";
            return null;
        }
        else {
            $usuarioTO = new UsuarioTO;
            foreach ($cursor as $resultado) {
                $usuarioTO->setId($resultado['id']);
                $usuarioTO->setPass($resultado['pass']);
                $usuarioTO->setNombre($resultado['nombre']);
                $usuarioTO->setApellidoP($resultado['apellidoP']);
                $usuarioTO->setApellidoM($resultado['apellidoM']);
                $usuarioTO->setDNI($resultado['dni']);
                $usuarioTO->setTelefono($resultado['telefono']);
                $usuarioTO->setFechadecreacion($resultado['fechacreacion']);
                $usuarioTO->setTipo($resultado['tipo']);
            }
            return $usuarioTO;
        }
    }

}
