<?php

class alumnoDAOExt extends alumnoDAO {

    public function agregar(\alumno $alumno) {
        $sql = 'INSERT INTO r_persona (per_nombre, per_apellidos, per_genero, per_direccion, per_telefono, per_celular, per_correo, per_rh, per_acudiente, per_celacu, per_grado) VALUES (:id, :cedula, :nombre, :apellidos, :genero, :direccion, :telefono, :celular, :correo, :rh, :acudiente, :celacu, :grado)';
        $params = array(
            ':id' => $alumno->getId(),
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
        );
        return $this->execute($sql, $params);
    }

}
