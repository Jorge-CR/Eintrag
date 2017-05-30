<?php

class usuarioDAOExt extends usuarioDAO {

    public function search($user, $password) {
        $sql = 'SELECT  usu_id, usu_cedula, usu_nombre, usu_direccion, usu_telfijo, usu_celular, usu_correo, rol_id FROM r_usuario WHERE usu_nombre = :user AND usu_contraseña = :pass';
        $params = array(
            ':user' => (string) $user,
            ':pass' => (string) $password
        );
        return $this->query($sql, $params);
    }

}
