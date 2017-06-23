<?php

class EntradaSalidaDAO extends dataSource implements IEntradaSalida {

    /**
     * Mètodo para el borrado de un registro.
     * @param Integer $id
     * @return Integer
     */
    public function delete($id) {
        $sql = 'DELETE FROM r_entrada WHERE per_id = :id';
        $params = array(
            ':id' => $id
        );
        return $this->execute($sql, $params);
    }
  /**
   * Metodo para insertar el registro de una persona en la BD.
   * @param \registroPersonal $rentrada
   * @return Integer
   */
    public function insert(\r_entrada $rentrada) {
        $sql = 'INSERT INTO r_entrada ( usu_id_entrada,usu_id_salida,per_id,ent_rent,ent_rsal) VALUES (:id_usuarioe, :id_usuariosa, :id_persona,:rentrada,:rsalida, now())';
        $params = array(
            'id_usuarioe' => $rentrada->getId_usuarioe(),
            ':id_usuariosa' => $rentrada->getId_usuariosa(),
            ':id_persona' => $rentrada->getId_persona(),
            ':rentrada' => $rentrada->getRentrada(),
            ':rsalida' => $rentrada->getRsalida(),
        );
        return $this->execute($sql, $params);
    }
  /**
   * Metodo para seleccionar todos los registros de la tabla.
   * @return array of stdClass
   */
    public function select() {
        $sql = 'SELECT per_cedula, per_nombre, per_apellidos, per_genero, per_grado FROM r_persona';
        return $this->query($sql);
    }
 /**
   * Metodo para seleccionar un registro que se busca por id.
   * @param Integer $id_persona
   * @return array of stdClass
   */
    public function selectById($id_persona) {
        $sql = 'SELECT per_cedula, per_nombre, per_apellidos, per_genero, per_grado FROM r_persona WHERE r_persona WHERE per_id = :id_persona';
        $params = array(
            ':id_persona' => $id_persona
        );
        return $this->query($sql, $params);
    }
  /**
   * Metodo para actualizar un registro de entrada y salida por id.
   * @param \registroPersonal $id_persona
   * @return Integer
   */
  public function update($id_persona) {
    $sql = 'UPDATE r_entrada SET rsalida = now() WHERE per_id = :id';
    $params = array(
        ':id' => $id_persona
    );
    return $this->execute($sql, $params);
  }
}

