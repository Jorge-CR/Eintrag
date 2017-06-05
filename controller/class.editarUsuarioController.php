<?php

class editarUsuario extends controllerExtends {

    public function main(\request $request) {
        try {
            $this->loadTableusuario();

            $usuario = new usuario();
            $usuario->setCedula($request->getParam('cedula'));
            $usuario->setNombre($request->getParam('nombre'));
            $usuario->setDireccion($request->getParam('direccion'));
            $usuario->setTelfijo($request->getParam('telfijo'));
            $usuario->setCelular($request->getParam('celular'));
            $usuario->setRol_id($request->getParam('rol'));
            $usuario->setCorreo($request->getParam('correo'));
            $usuario->setContrasena($request->getParam('contrasena'), $this->getConfig()->getHash());
            $usuario->setId($request->getParam('id'));

            $usuarioDAO = new usuarioDAOExt($this->getConfig());
            $respuesta1 = $usuarioDAO->update($usuario);
            $respuesta2 = array(
                'code' => ($respuesta1 > 0) ? 200 : 500,
                'datos' => $respuesta1
            );

            $this->setParam('rsp', $respuesta2);
            $this->setView('imprimirJson');
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

    private function loadTableusuario() {
        require $this->getConfig()->getPath() . 'model/table/table.usuario.php';
        require $this->getConfig()->getPath() . 'model/interface/interface.usuario.php';
        require $this->getConfig()->getPath() . 'model/DAO/class.usuarioDAO.php';
        require $this->getConfig()->getPath() . 'model/extended/class.usuarioDAOExt.php';
    }

}
