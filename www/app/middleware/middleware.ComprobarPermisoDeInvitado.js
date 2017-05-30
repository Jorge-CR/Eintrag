/**
 * middleware el cual comprueba si hay una session con el rol de celador en linea
 * 
 */
function middlewareComprobarPermisoDeInvitado($this, $localStorage, $sessionStorage, rolInvitado) {
  if ($sessionStorage.usuario.rol_id == rolInvitado) {
    $this.next();
  } else {
    $this.redirectTo('/logout');
  }
}

