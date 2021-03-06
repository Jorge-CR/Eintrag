<?php

class EntradaSalida extends controllerExtended {

  public function main(\request $request) {
    try {
      $this->loadTablealumno();

      $Entrada = new r_entrada();
      $Entrada->setId_usuarioe($request->getParam('id_usuarioe'));
      $Entrada->setId_usuariosa($request->getParam('id_usuariosa'));
      $Entrada->setId_persona($request->getParam('id_persona'));
      $Entrada->setRentrada($request->getParam('rentrada'));
      $Entrada->setRsalida($request->getParam('rsalida'));
    

      $EntradaSalidaDAO = new EntradaSalidaDAOExte($this->getConfig());
      $respuesta1 = $EntradaSalidaDAO->insert($Entrada);
      $respuesta2 = array(
          'code' => ($respuesta1 > 0) ? 200 : 500,
          'datos' => $respuesta1
      );

      $this->setParam('rsp', $respuesta2);
      $this->setView('imprimirJson');
    } catch (Exception $exc) {
      echo $exc->getMessage();
    }
  }

  private function loadTablealumno() {
    require $this->getConfig()->getPath() . 'model/table/table.alumno.php';
    require $this->getConfig()->getPath() . 'model/interface/interface.alumno.php';
    require $this->getConfig()->getPath() . 'model/DAO/class.alumnoDAO.php';
    require $this->getConfig()->getPath() . 'model/extended/class.alumnoDAOExt.php';
  }

}