<?php

class usuarioDAO extends dataSource implements IUsuario {

    public function delete($id, $logico = true) {
        if ($logico === true)  {
           $sql = 'UPDATE r_usuario SET usu_deleted_at = now() WHERE usu_id = :id';
            $params = array(
                ':id' => $id
            );
            return $this->execute($sql, $params);
        } else if ($logico === false) {
            $sql = 'DELETE FROM r_usuario WHERE usu_id = :id AND usu_deleted_at IS NULL';
            $params = array(
                ':id' => (integer) $id
            );
            return $this->execute($sql, $params);
        }
    }
    public function insert(\usuario $usuario) {
        $sql = 'INSERT INTO r_usuario ( usu_cedula, usu_nombre, usu_direccion, usu_telfijo, usu_celular, usu_correo, usu_contraseña, rol_id, usu_created_at) VALUES (:cedula, :nombre, :direccion, :telfijo, :celular, :correo, :pass, :rol_id, now())';
        $params = array(
           
            ':cedula' => $usuario->getCedula(),
            ':nombre' => $usuario->getNombre(),
            ':direccion' => $usuario->getDireccion(),
            ':telfijo' => $usuario->getTelfijo(),
            ':celular' => $usuario->getCelular(),
            ':correo' => $usuario->getCorreo(),
            ':pass' => $usuario->getContrasena(),
            ':rol_id' => $usuario->getRolId(),
        );
        return $this->execute($sql, $params);
    }

    public function select() {
        $sql = 'SELECT usu_id, usu_cedula, usu_nombre, usu_direccion, usu_telfijo, usu_celular, usu_correo, rol_id FROM r_usuario WHERE usu_deleted_at IS NULL';
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
        $sql = 'UPDATE r_usuario SET usu_cedula = :cedula, usu_nombre = :nombre, usu_direccion = :direccion, usu_telfijo = :telfijo, usu_celular = :celular, usu_correo = :correo, rol_id = :rolid WHERE usu_id = :id';
        $params = array(
            ':cedula' =>$usuario->getCedula(),
            ':nombre' => $usuario->getNombre(),
            ':direccion' => $usuario->getDireccion(),
            ':telfijo' => $usuario ->getTelfijo(),
            ':celular' => $usuario->getCelular(),
            ':correo' => $usuario->getCorreo(),
            ':id' => $usuario->getId(),
            ':rolid' => $usuario->getRolId()
                
        );
        return $this->execute($sql, $params);
    }

}
