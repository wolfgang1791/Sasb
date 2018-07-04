<?php
include "../CDatos/componenteDAO/DAOFactory.php";


$usuario = $_POST['user'];
$pass = $_POST['pass'];


//$login = new GUI_Login;
$datos = (array) GUI_Login::Autentificar($usuario,$pass);


class GUI_Login
{
    public function __construct()
    {
    }
    public static function Autentificar($id,$pass){
        $dao = DAOFactory::getInstance();
        $usuarioDAO = $dao->getUsuarioDAO();
        $usuarioTO = $usuarioDAO->obtenerUsuario($id,$pass);
        if($usuarioTO!=null){
            SESSION_START();
            $_SESSION['usuario'] = $usuarioTO->getId();
            echo "Bienvenido";
        }
        else {
            echo "Usuario incorrecto";
        }
        return $usuarioTO;
    }
}

//GUI_Login::Autentificar(2,'123');

if ($datos != null) {
    header('Location: selBodega.php');
}
else{
    header('Location: index.php');
}

?>
