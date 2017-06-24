<?php

class agregarAlumno extends controllerExtends {

  public function main(\request $request) {
    try {
      $this->loadTablealumno();

      $alumno = new alumno();
      $alumno->setcedula($request->getParam('cedula'));
      $alumno->setnombre($request->getParam('nombre'));
      $alumno->setapellidos($request->getParam('apellidos'));
      $alumno->setgenero($request->getParam('genero'));
      $alumno->setdireccion($request->getParam('direccion'));
      $alumno->setTelfijo($request->getParam('telfijo'));
      $alumno->setcelular($request->getParam('celular'));
      $alumno->setcorreo($request->getParam('correo'));
      $alumno->setrh($request->getParam('rh'));
      $alumno->setacudiente($request->getParam('acudiente'));
      $alumno->setcelacu($request->getParam('celacu'));
      $alumno->setgrado($request->getParam('grado'));

      
      $alumnoDAO = new alumnoDAOExt($this->getConfig());
      $respuesta1 = $alumnoDAO->insert($alumno);
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



