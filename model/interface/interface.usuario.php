<?php

/**
 * Interface para la tabla Usuario
 */
interface IUsuario {

     /**
   *  Metodo para seleccionar todos los datos de la tabla
   */
  public function select();
  /**
   *  Metodo para seleccionar un Registro buscado por el id
   * @param integer $id
   */
  public function selectById($id);
  /**
   *  Metodo para insertar el usuario en la BD
   * @param personal $usuario
   */
  public function insert(usuario $usuario);
 /**
   *  Metodo para actualizar el usuario en la BD
   * @param personal $usuario
   */
  public function update(usuario $usuario);
 /**
   *  Metodo para eliminar el usuario en la BD
   * @param personal $usuario
   */
  public function delete($id, $logico);
}
