<?php

class r_persona {

    private $id;
    private $cedula;
    private $nombre;
    private $apellidos;
    private $genero;
    private $direccion;
    private $telfijo;
    private $celular;
    private $correo;
    private $rh;
    private $acudiente;
    private $celacu;
    private $grado;
    private $updated_at;
    private $created_at;
    private $deleted_at;

    function getId() {
        return $this->id;
    }

    function getCedula() {
        return $this->cedula;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function getGenero() {
        return $this->genero;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getTelfijo() {
        return $this->telfijo;
    }

    function getCelular() {
        return $this->celular;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getRh() {
        return $this->rh;
    }

    function getAcudiente() {
        return $this->acudiente;
    }

    function getCelacu() {
        return $this->celacu;
    }

    function getGrado() {
        return $this->grado;
    }

    function getUpdated_at() {
        return $this->updated_at;
    }

    function getCreated_at() {
        return $this->created_at;
    }

    function getDeleted_at() {
        return $this->deleted_at;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCedula($cedula) {
        $this->cedula = $cedula;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    function setGenero($genero) {
        $this->genero = $genero;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setTelfijo($telfijo) {
        $this->telfijo = $telfijo;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setRh($rh) {
        $this->rh = $rh;
    }

    function setAcudiente($acudiente) {
        $this->acudiente = $acudiente;
    }

    function setCelacu($celacu) {
        $this->celacu = $celacu;
    }

    function setGrado($grado) {
        $this->grado = $grado;
    }

    function setUpdated_at($updated_at) {
        $this->updated_at = $updated_at;
    }

    function setCreated_at($created_at) {
        $this->created_at = $created_at;
    }

    function setDeleted_at($deleted_at) {
        $this->deleted_at = $deleted_at;
    }

}
