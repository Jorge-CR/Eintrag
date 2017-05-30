<?php

class usuario {

    /**
     * Llave Principal y campo autoincrementable de la tabla Usuario	
     * @var integer 
     */
    private $id;

    /**
     * Nombre del usuario con el cual se hara el ingreso al aplicativo
     * @var string 
     */
    private $usuario;

    /**
     * Se utliza para el ingreso a la aplicación y verificar el usuario		
     * @var string
     */
    private $contrasena;

    /**
     * Numero de Identificacion del Personal (C.C / T.I)	
     * @var string 
     */
    private $cedula;

    /**
     * Nombre del usuario	
     * @var string 
     */
    private $nombre;

    /**
     * Direccion del usuario	
     * @var string 
     */
    private $direccion;

    /**
     * Numero de telefono del usuario (Opcional)	
     * @var string
     */
    private $telfijo;

    /**
     * Numero del celular del usuario (Opcional)	
     * @var string
     */
    private $celular;

    /**
     * Direccion del correo electronico para el contacto	
     * @var string 
     */
    private $correo;

    /**
     * se divide en 2 (admin-Invitado) el admin puede agregar los invitados y controlar la base de datos, el invitado solo puede controlar la aplicación	
     * @var integer
     */
    private $rol_id;

    /**
     * se utiliza para saber cuando se creo el usuario	
     * @var string 
     */
    private $create_at;

    /**
     * se utiliza para saber cuando se hace un update en el usuario	
     * @var string 
     */
    private $update_at;

    /**
     * se utiliza para saber cuando se elimina el usuario	
     * @var string
     */
    private $delete_at;

    /**
     * Obtiene el ID del registro
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Obtiene el USUARIO del registro
     * @return string
     */
    public function getUsuario() {
        return $this->usuario;
    }

    /**
     * Obtiene la CONTRASENA del registro
     * @return string
     */
    public function getContrasena() {
        return $this->contrasena;
    }

    /**
     * Obtiene la CEDULA del registro
     * @return string
     */
    public function getCedula() {
        return $this->cedula;
    }

    /**
     * Obtiene el NOMBRE del registro
     * @return string
     */
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * Obtiene el CELULAR del registro
     * @return string
     */
    public function getDireccion() {
        return $this->direccion;
    }

    /**
     * Obtiene el CELULAR del registro
     * @return string
     */
    public function getTelfijo() {
        return $this->telfijo;
    }

    /**
     * Obtiene el CELULAR del registro
     * @return string
     */
    public function getCelular() {
        return $this->celular;
    }

    /**
     * Obtiene el CORREO del registro
     * @return string
     */
    public function getCorreo() {
        return $this->correo;
    }

    /**
     * Obtiene el ROL del registro
     * @return integer
     */
    public function getRol_id() {
        return $this->rol_id;
    }

    /**
     * Obtiene el CREATE_AT del registro
     * @return string
     */
    public function getCreate_at() {
        return $this->create_at;
    }

    /**
     * Obtiene el UPDATE_AT del registro
     * @return string
     */
    public function getUpdate_at() {
        return $this->update_at;
    }

    /**
     * Obtiene el DELETE_AT del registro
     * @return string
     */
    public function getDelete_at() {
        return $this->delete_at;
    }

    /**
     * Setea el Id del registro
     * @param type $id
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * Setea el usuario del registro
     * @param type $usuario
     */
    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    /**
     * setea la contrasena del registro
     * @param type $contrasena
     */
    public function setContrasena($contrasena) {
        $this->contrasena = $contrasena;
    }

    /**
     * setea la cedula del registro
     * @param type $cedula
     */
    public function setCedula($cedula) {
        $this->cedula = $cedula;
    }

    /**
     * setea el nombre del registro
     * @param type $nombre
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    /**
     * setea la direccion del registo
     * @param type $direccion
     */
    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    /**
     * setea el telefono del registro 
     * @param type $telfijo
     */
    public function setTelfijo($telfijo) {
        $this->telfijo = $telfijo;
    }

    /**
     * setea el celular del registro
     * @param type $celular
     */
    public function setCelular($celular) {
        $this->celular = $celular;
    }

    /**
     * setea el correo del registro
     * @param type $correo
     */
    public function setCorreo($correo) {
        $this->correo = $correo;
    }

    /**
     * setea el rol del registro
     * @param type $rol_id
     */
    public function setRol_id($rol_id) {
        $this->rol_id = $rol_id;
    }

    /**
     * setea el create_at del registro
     * @param type $create_at 
     */
    public function setCreate_at($create_at) {
        $this->create_at = $create_at;
    }

    /**
     * setea el update_at del registro
     * @param type $update_at
     */
    public function setUpdate_at($update_at) {
        $this->update_at = $update_at;
    }

    /**
     * setea el delete_at del registro
     * @param type $delete_at
     */
    public function setDelete_at($delete_at) {
        $this->delete_at = $delete_at;
    }

}
