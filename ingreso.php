<?php

include 'funciones\session.php';
include 'funciones\database.php';


$usuario= $_POST['usuario'];
$password= $_POST['password'];


if (!empty($_POST['usuario']) or !empty($_POST['password'])) {
		
		$consulta="
			SELECT *
			FROM usuario
			WHERE mail='".$usuario."' and password='".$password."';
		";

		$resultado=db_query($consulta);
		//si hay algun usuario con esa contrasena
		if(count($resultado)==1){
		/*$consulta2="
			SELECT pf.idfuncion 
			FROM usuario u 
			inner join perfil_funcion pf on u.id_perfil=pf.idrol 
			where u.idusuario='".$usuario."';
		";
		$permisos=db_query($consulta2);
		session_set("permisos",$permisos);   */

		foreach($resultado as $fila){

					session_set("usuario",$usuario);
					session_var_unset("error");
					header("Location: NuevoProducto.php");
		
			
		}
			
		}else{
			
			echo "<p id='error'>el usuario o contraseña son incorrectos</p>";
			echo "<br><a href='login.php'>>>Volver a inicio<<</a><br><br>";
		}
	}else{
			echo "<p id='error'>Debe ingresar un nombre de usuario y contraseña para ingresar!</p>";
			echo "<br><a href='login.php'>>>Volver a inicio<<</a><br><br>";
	}



?>