<?php

class guardarUsuario extends controllerExtends {

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

            $usuarioDAO = new usuarioDAOExt($this->getConfig());
            $respuesta1 = $usuarioDAO->insert($usuario);

            if (count($respuesta1) > 0) {
                $respuesta1 = $usuarioDAO->select();
                $respuesta2 = array(
                    'code' => 200,
                    'datos' => $respuesta1
                );
            } else {
                $respuesta2 = array(
                    'code' => 500,
                    'datos' => $respuesta1
                );
            }

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
