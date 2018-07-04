<?php

interface IUsuarioDAO
{
    public function obtenerUsuario($id, $pass);

    public function registrarUsuario();

    public function actualizarUsuario();

    public function eliminarUsuario();
}
