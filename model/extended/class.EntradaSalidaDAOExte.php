<?php

class EntradaSalidaDAOExte extends EntradaSalidaDAO {
    public function select() {
        $sql = 'SELECT per_cedula, per_nombre, per_apellidos, per_genero, per_grado FROM r_persona';
        return $this->query($sql);
    }
}
