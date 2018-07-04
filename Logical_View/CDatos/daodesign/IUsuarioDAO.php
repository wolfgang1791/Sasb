<?php

namespace CDatos\dao_design;

/**
 *
 */
interface IUsuarioDAO
{
    public function obtenerUsuario():\CDatos\dao_component\UsuarioDAO
    /**
     *
     */
    public function registrarUsuario():String;

    /**
     *
     */
    public function actualizarUsuario():String;

    /**
     *
     */
    public function eliminarUsuario():String;
}
