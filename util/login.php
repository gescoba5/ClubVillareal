<?php
    include ("../control/conexion.php");
	
    /* El query valida si el usuario ingresado existe en la tabla de administrador de la base de datos.
     * Se utiliza la función htmlentities para evitar inyecciones SQL.
     */
    $selectAdmin = mysql_query("SELECT usuario_admin FROM administrador WHERE
        usuario_admin = '".htmlentities(isset($_POST["usuario"])?$_POST["usuario"]:NULL)."'");
    $numAdmin = mysql_num_rows($selectAdmin);

    /* Si existe el usuario, validamos también la contraseña ingresada y el
     * estado del usuario.
     */
    //if ((isset($_POST["loginForm"])?$_POST["loginForm"]:NULL) == 1) {
	    if($numAdmin != 0) {
		    $sql = "SELECT * FROM administrador WHERE usuario_admin = '".htmlentities($_POST["usuario"])."'
				    AND clave_admin = '".md5(htmlentities($_POST["password"]))."'";
		    $claveUsuario = mysql_query($sql);
		    $numClaveUsuario = mysql_num_rows($claveUsuario);

		    /* Si el usuario y clave ingresado son correctos, se crea la sesión.*/
		     if($numClaveUsuario != 0){
			    session_start();
			
			    // Guardamos dos variables de sesión que nos auxiliará para saber
			    // si está o no "logueado" un usuario.
			    $_SESSION["autentica"] = "SIP";
			    $_SESSION["usuarioActual"] = mysql_result($claveUsuario, 0, 1) ." "
					.mysql_result($claveUsuario, 0, 4);
			    //Direcciona a la página principal.
			    header ("Location: ../panel/admin.php");
		     } else {
			    echo"<script>alert('La contrase\u00f1a del usuario no es correcta');
					    window.location.href=\"../index.html\"</script>";
		     }
	    } else {
		    echo"<script>alert('Usuario o Contrase\u00f1a err\u00f3neos');
				    window.location.href=\"../index.html\"</script>";
	    }
    //}
?>