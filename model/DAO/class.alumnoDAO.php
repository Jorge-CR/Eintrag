<?php

class alumnoDAO extends dataSource implements Ialumno {

    public function delete($id, $logico = true) {
        if ($logico === true) {
            $sql = 'UPDATE r_persona SET per_deleted_at = now() WHERE per_id = :id';
            $params = array(
                ':id' => $id
            );
            return $this->execute($sql, $params);
        } else if ($logico === false) {
            $sql = 'DELETE FROM r_persona WHERE per_id = :id AND per_deleted_at IS NULL';
            $params = array(
                ':id' => (integer) $id
            );
            return $this->execute($sql, $params);
        }
    }

    public function insert(\alumno $alumno) {
        $sql = 'INSERT INTO r_persona (per_cedula, per_nombre, per_apellidos, per_genero, per_direccion, per_telfijo, per_celular, per_correo, per_rh, per_acudiente, per_celacu, per_grado) VALUES (:cedula, :nombre, :apellidos, :genero, :direccion, :telefono, :celular, :correo, :rh, :acudiente, :celacu, :grado)';
        $params = array(
            ':cedula' => $alumno->getCedula(),
            ':nombre' => $alumno->getNombre(),
            ':apellidos' => $alumno->getApellidos(),
            ':genero' => $alumno->getGenero(),
            ':direccion' => $alumno->getDireccion(),
            ':telefono' => $alumno->getTelfijo(),            
            ':celular' => $alumno->getCelular(),
            ':correo' => $alumno->getCorreo(),
            ':rh' => $alumno->getRh(),            
            ':acudiente' => $alumno->getAcudiente(),            
            ':celacu' => $alumno->getCelacu(),            
            ':grado' => $alumno->getGrado(),            
            
        );
        return $this->execute($sql, $params);
    }

    public function search($cedula) {
        $sql = 'SELECT per_cedula, per_nombre, per_apellidos, per_genero, per_direccion, per_telfijo, per_celular, per_correo, per_rh, per_acudiente, per_celacu, per_grado FROM r_persona WHERE per_cedula = :cedula';
        $params = array(
            ':cedula' => $cedula
        );
        return $this->query($sql, $params);
    }

    public function select() {
        $sql = 'SELECT per_cedula, per_nombre, per_apellidos, per_genero, per_direccion, per_telfijo, per_celular, per_correo, per_rh, per_acudiente, per_celacu, per_grado FROM r_persona WHERE per_deleted_at IS NULL';
        return $this->query($sql);
    }

    public function selectById($id) {
        $sql = 'SELECT per_cedula, per_nombre, per_apellidos, per_genero, per_direccion, per_telfijo, per_celular, per_correo, per_rh, per_acudiente, per_celacu, per_grado FROM r_persona WHERE per_id = :id';
        $params = array(
            ':id' => $id
        );
        return $this->query($sql, $params);
    }

    public function update(\alumno $alumno) {
        $sql = 'UPDATE r_persona SET per_cedula = :cedula, per_nombre = :nombre, per_apellidos = :apellidos, per_genero = :genero, per_direccion = :direccion, per_telfijo = :telefono, per_celular = :celular, per_correo = :correo, per_rh = :rh, per_acudiente = :acudiente, per_celacu = :celacu, per_grado = :grado WHERE per_id = :id';
        $params = array(
            ':cedula' => $alumno->getCedula(),
            ':nombre' => $alumno->getNombre(),
            ':apellidos' => $alumno->getApellidos(),
            ':genero' => $alumno->getGenero(),
            ':direccion' => $alumno->getDireccion(),
            ':telefono' => $alumno->getTelefono(),            
            ':celular' => $alumno->getCelular(),
            ':correo' => $alumno->getCorreo(),
            ':rh' => $alumno->getRh(),            
            ':acudiente' => $alumno->getAcudiente(),            
            ':celacu' => $alumno->getCelacu(),            
            ':grado' => $alumno->getGrado(),
            ':id' => $alumno->getId()
        );
        return $this->execute($sql, $params);
    }

}