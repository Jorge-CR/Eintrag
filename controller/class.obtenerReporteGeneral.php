<?php
class obtenerRepGeneral extends controllerExtended {
  public function main(\request $request) {
    try {
      $this->loadTablerentrada();
      $EntradaSaldaDAO = new EntradaSalidaDAOExt($this->getConfig());
      $respuesta1 = $EntradaSaldaDAO->reporteGeneral();
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
  private function loadTablerentrada() {
    require $this->getConfig()->getPath() . 'model/table/table.rentrada.php';
    require $this->getConfig()->getPath() . 'model/interface/interface.EntradaSalida.php';
    require $this->getConfig()->getPath() . 'model/DAO/class.EntradaSaldaDAO.php';
    require $this->getConfig()->getPath() . 'model/extended/class.EntradaSalidaDAOExt.php';
  }
}