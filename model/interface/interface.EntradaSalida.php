<?php

interface IEntradaSalida {

  public function select();

  public function selectById($id_ent);

  public function insert(rentrada $rentrada);

}

