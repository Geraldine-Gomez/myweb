<?php 

if(isset($_POST['btn-register'])){

	$genre = $_POST['genre'];
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$password = $_POST['password'];
	$conf_pass = $_POST['conf_pass'];

	//Validar el genero
	if ($genre == 'genero'){-
		//error 3 = 'Debe seleccionar un genero!'
		header('Location: http://localhost/correo/index.php?error=3');
	}

	if($conf_pass == $password){

		include ('../../../views/front/login.php');
	}
	else{
		//error 1 = 'Las contraseñas no coinciden!'
		header('Location: http://localhost/correo/index.php?error=1');
	}
}

//area de usuarios registrados
if(isset($_POST['btn-login'])){

	$genre = $_POST['genre'];
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$password = $_POST['password'];
	$correo_log = $_POST['correo_log'];
	$pass_log = $_POST['pass_log'];

	if ($correo_log == $correo && $pass_log == $password){

		if (!isset($_GET['inicio'])){

			//Creamos sesión
			session_start();

			//Almacenamos el nombre de usuario en una variable de sesión usuario
			$_SESSION['usuario'] = $_POST['nombre'];
			$_SESSION['genero'] = $_POST['genre'];
			$_SESSION['email'] = $_POST['correo'];
			$_SESSION['pass'] = $_POST['password'];
		
			include ('../../../views/admin/index.php');
		}

	}
	else{
		
		//error 2 = 'Los datos de acceso no coinciden!'
		header('Location: http://localhost/correo/index.php?error=2');
	}
}

//Mensaje enviasdo
if(isset($_POST['enviar_mensaje'])){
	
	$to = $_POST['to'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	if(isset($to)){

		//Creamos sesión
		session_start();
		
		include ('../../../views/admin/inbox.php');
	}
}

//Leer mensaje
if(isset($_POST['btn-read'])){
	
	$to = $_POST['to'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	if(isset($to)){

		//Creamos sesión
		session_start();
		
		include ('../../../views/admin/read.php');
	}
}

if(isset($_GET['data'])){

	session_start();

	//Almacenar contraseña
	

	include('../../../views/admin/data.php');
}

?>