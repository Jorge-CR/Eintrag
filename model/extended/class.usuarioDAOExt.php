<?php

class usuarioDAOExt extends usuarioDAO {

  public function search($user, $password) {
    $sql =     $sql = 'SELECT  usu_id,usu_usuario, usu_cedula, usu_nombre, usu_direccion, usu_telfijo, usu_celular, usu_correo, rol_id FROM r_usuario WHERE r_usuario = :user AND usu_contrasena = :pass';
    $params = array(
        ':user' => $user,
        ':pass' => $password
    );
    return $this->query($sql, $params);
  }

}
