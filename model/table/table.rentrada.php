<?php

class r_entrada {

    private $id_ent;
    private $rentrada;
    private $rsalida;
    private $id_persona;
    private $id_usuarioe;
    private $id_usuariosa;
    private $ent_updated_at;
    private $ent_created_at;
    private $ent_deleted_at;

    function getId_ent() {
        return $this->id_ent;
    }

    function getRentrada() {
        return $this->rentrada;
    }

    function getRsalida() {
        return $this->rsalida;
    }

    function getId_persona() {
        return $this->id_persona;
    }

    function getId_usuarioe() {
        return $this->id_usuarioe;
    }

    function getId_usuariosa() {
        return $this->id_usuariosa;
    }

    function getEnt_updated_at() {
        return $this->ent_updated_at;
    }

    function getEnt_created_at() {
        return $this->ent_created_at;
    }

    function getEnt_deleted_at() {
        return $this->ent_deleted_at;
    }

    function setId_ent($id_ent) {
        $this->id_ent = $id_ent;
    }

    function setRentrada($rentrada) {
        $this->rentrada = $rentrada;
    }

    function setRsalida($rsalida) {
        $this->rsalida = $rsalida;
    }

    function setId_persona($id_persona) {
        $this->id_persona = $id_persona;
    }

    function setId_usuarioe($id_usuarioe) {
        $this->id_usuarioe = $id_usuarioe;
    }

    function setId_usuariosa($id_usuariosa) {
        $this->id_usuariosa = $id_usuariosa;
    }

    function setEnt_updated_at($ent_updated_at) {
        $this->ent_updated_at = $ent_updated_at;
    }

    function setEnt_created_at($ent_created_at) {
        $this->ent_created_at = $ent_created_at;
    }

    function setEnt_deleted_at($ent_deleted_at) {
        $this->ent_deleted_at = $ent_deleted_at;
    }


}
