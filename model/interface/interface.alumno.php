<?php

interface Ialumno {

    public function select();

    public function selectById($id);

    public function insert(alumno $alumno);

    public function update(alumno $alumno);

    public function delete($id, $logico);

    public function search($cedula);
}
