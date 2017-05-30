/**
 * middleware el cual comprueba si hay una session con el rol de admin en linea
 * 
 */function middlewareComprobarPermisoDeAdmnistracion($this, $sessionStorage, rolAdmin) {
    console.log($sessionStorage.usuario.rol_id);
    if ($sessionStorage.usuario.rol_id == rolAdmin) {
        $this.next();
    } else {   
        $this.redirectTo('/MenuPrincipal');
    }
}
