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

    public function reporteGeneral() {
        $sql = "select p.per_created_at,p.per_cedula,p.per_nombre,p.per_apellidos,p.per_grado,e.ent_rent,ent_rsal from r_usuario as u
        inner join r_entrada as e on u.usu_id=e.usu_id_entrada 
        inner join  r_persona  as p on e.per_id=p.per_id";
        return $this->query($sql);
    }

}
