<?php
class obtenerRepAlumno extends controllerExtends {
  public function main(\request $request) {
    try {
      $this->loadTablealumno();
      $alumnoDAO = new alumnoDAOExt($this->getConfig());
      $respuesta1 = $alumnoDAO->reporteAlumno();
      $respuesta2 = array(
          'code' => (count($respuesta1) > 0) ? 200 : 500,
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