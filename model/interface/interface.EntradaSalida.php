<?php

/**
 * Interface para la tabla r_entrada
 */
interface IEntradaSalida {

    /**
     *  Metodo para seleccionar todos los datos de la tabla
     */
    public function select();

    /**
     *  Metodo para seleccionar un Registro buscado por el id
     * @param integer $id_ent
     */
    public function selectById($id_ent);

    /**
     *  Metodo para insertar el  registro del alumno en la BD
     * @param personal $rentrada
     */
    public function insert(rentrada $rentrada);

    /**
     * Metodo para actualizar un registro por el id
     * @param  $id_persona
     */
    public function update($id_persona);

    /**
     * Método para el borrado lógico o físico de un registro.
     * @param type integer $id
     */
    public function delete($id);
}
