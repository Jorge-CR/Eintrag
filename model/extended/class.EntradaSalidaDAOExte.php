<?php

class EntradaSalidaDAOExte extends EntradaSalidaDAO {
   
    public function select() {
        $sql = 'SELECT per_cedula, per_nombre, per_apellidos, per_genero, per_grado FROM r_persona';
        return $this->query($sql);
        
    } 
    public function search($id) {
    $sql = 'SELECT per_id, rsalida FROM r_entrada WHERE ent_rent=:entrada AND en_rsal=:salida ';
    $params = array(
        ':id' => $id,
        ':entrada' => $rentrada->getRentrada(),
        ':salida' => $rentrada->getRsalida()
    );
    return $this->query($sql, $params);
  }
}
