<?php

class usuarioDAO extends dataSource implements IUsuario {

    public function delete($id) {
        $sql = 'DELETE FROM r_usuario WHERE id = :id';
        $params = array(
            ':id' => $id
        );
        return $this->execute($sql, $params);
    }

    public function insert(\usuario $usuario) {
        $sql = 'INSERT INTO r_usuario (usu_cedula,usu_nombre, usu_direccion, usu_telfijo, usu_celular, usu_correo, usu_usuario, usu_contrasena, rol_id, usu_create_at) VALUES (:cedula, :foto, :nombre, :celular, :correo, :user, :pass, :rol_id, now())';
        $params = array(
            ':cedula' => $usuario->getCedula(),
            ':nombre' => $usuario->getNombre(),
            ':direccion' => $usuario->getDireccion(),
            ':telfijo' => $usuario->getTelfijo(),
            ':celular' => $usuario->getCelular(),
            ':correo' => $usuario->getCorreo(),
            ':user' => $usuario->getUsuario(),
            ':pass' => $usuario->getContrasena(),
            ':rol_id' => $usuario->getRol_id(),
        );
        return $this->execute($sql, $params);
    }

    public function select() {
        $sql = 'SELECT usu_cedula, usu_nombre, usu_direccion, usu_telfijo, usu_celular, usu_correo, rol_id FROM r_usuario WHERE r_usuario';
        return $this->query($sql);
    }

    public function selectById($id) {
        $sql = 'SELECT usu_cedula, usu_nombre, usu_direccion, usu_telfijo, usu_celular, usu_correo, rol_id FROM r_usuario WHERE r_usuario WHERE usu_id = :id';
        $params = array(
            ':id' => $id
        );
        return $this->query($sql, $params);
    }

    public function update(\usuario $usuario) {
        $sql = 'UPDATE r_usuario SET usu_cedula = :cedula, usu_nombre = :nombre, usu_direccion = :direccion, usu_telfijo = :telfijo, usu_celular = :celular, usu_correo = :correo, usu_contrasena = :pass WHERE usu_id = :id';
        $params = array(
            ':cedula' => $usuario->getCedula(),
            ':nombre' => $usuario->getNombre(),
            ':direccion' => $usuario->getDireccion(),
            ':telfijo' => $usuario ->getTelfijo(),
            ':celular' => $usuario->getCelular(),
            ':correo' => $usuario->getCorreo(),
            ':contrasena' => $usuario->getContrasena(),
            ':user' => $usuario->getUsuario(),
            ':pass' => $usuario->getContrasena(),
            ':id' => $usuario->getId()
        );
        return $this->execute($sql, $params);
    }

}
