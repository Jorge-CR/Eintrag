<?php

class r_entrada {

    /**
     * Llave Principal y campo autoincrementable de la tabla Registro del Personal
     * @var Integer 
     */
    private $id_ent;

    /**
     * Registro de entrada segun la fecha y hora del momento.
     * @var string 
     */
    private $rentrada;

    /**
     * Registro de salida segun la fecha y hora del momento.
     * @var string 
     */
    private $rsalida;

    /**
     * Llave Foranea,Principal y campo autoincrementable de la tabla Personal.
     * @var Integer  
     */
    private $id_persona;
    private $id_usuarioe;
    private $id_usuariosa;

    /**
     * se utiliza para saber cuando se creo el registro	
     * @var string 
     */
    private $ent_created_at;

    /**
     * se utiliza para saber cuando se hace un update en el usuario	
     * @var string 
     */
    private $ent_updated_at;

    /**
     * se utiliza para saber cuando se elimina el usuario	
     * @var string
     */
    private $ent_deleted_at;

    /**
     * Obtiene el ID del registro
     * @return integer
     */
    function getId_ent() {
        return $this->id_ent;
    }

    /**
     * Obtiene la entrada del registro
     * @return string
     */
    function getRentrada() {
        return $this->rentrada;
    }

    /**
     * Obtiene la salida del registro
     * @return string
     */
    function getRsalida() {
        return $this->rsalida;
    }

    /**
     * Obtiene la llave foranea del registro
     * @return integer
     */
    function getId_persona() {
        return $this->id_persona;
    }

    function getId_usuarioe() {
        return $this->id_usuarioe;
    }

    function getId_usuariosa() {
        return $this->id_usuariosa;
    }

    /**
     * Obtiene el UPDATE_AT del registro
     * @return string
     */
    function getEnt_updated_at() {
        return $this->ent_updated_at;
    }

    /**
     * Obtiene el CREATE_AT del registro
     * @return string
     */
    function getEnt_created_at() {
        return $this->ent_created_at;
    }

    /**
     * Obtiene el DELETE_AT del registro
     * @return string
     */
    function getEnt_deleted_at() {
        return $this->ent_deleted_at;
    }

    /**
     * Setea el Id del registro
     * @param type $id_ent
     */
    function setId_ent($id_ent) {
        $this->id_ent = $id_ent;
    }

    /**
     * Setea la entrada del registro
     * @param type $rentrada
     */
    function setRentrada($rentrada) {
        $this->rentrada = $rentrada;
    }

    /**
     * Setea la salida del registro
     * @param type $rsalida
     */
    function setRsalida($rsalida) {
        $this->rsalida = $rsalida;
    }

    /**
     * Setea la llave foranea del registro
     * @param type $id_persona
     */
    function setId_persona($id_persona) {
        $this->id_persona = $id_persona;
    }

    function setId_usuarioe($id_usuarioe) {
        $this->id_usuarioe = $id_usuarioe;
    }

    function setId_usuariosa($id_usuariosa) {
        $this->id_usuariosa = $id_usuariosa;
    }

    /**
     * setea el ent_update_at del registro
     * @param type $ent_updated_at
     */
    function setEnt_updated_at($ent_updated_at) {
        $this->ent_updated_at = $ent_updated_at;
    }

    /**
     * setea el ent_created_at del registro
     * @param type $ent_created_at
     */
    function setEnt_created_at($ent_created_at) {
        $this->ent_created_at = $ent_created_at;
    }

    /**
     * setea el ent_deleted_at del registro
     * @param type $ent_deleted_at
     */
    function setEnt_deleted_at($ent_deleted_at) {
        $this->ent_deleted_at = $ent_deleted_at;
    }

}
