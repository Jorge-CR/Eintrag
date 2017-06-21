<?php
class EntradaSalidaDAO extends dataSource implements IEntradaSalida{
    
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

    public function select() {
        $sql = 'SELECT per_cedula, per_nombre, per_apellidos, per_genero, per_grado FROM r_persona';
        return $this->query($sql);
    }

    public function selectById($id_persona) {
        $sql = 'SELECT per_cedula, per_nombre, per_apellidos, per_genero, per_grado FROM r_persona WHERE r_persona WHERE per_id = :id_persona';
        $params = array(
            ':id_persona' => $id_persona
        );
        return $this->query($sql, $params);
    }

}

