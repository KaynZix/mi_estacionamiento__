<?php 


switch($_POST['metodo']){	
    case "ingreso":			
      $usuario = $_POST['usuario'];
      $contrasena = $_POST['password'];
		
      if ($usuario=="admin" and $contrasena=="123") {
          echo('<script> location.href = "mis_estacionamientos.html" </script>');
      } if ($usuario=="cliente" and $contrasena=="123") {
          echo('<script> location.href = "courses.html" </script>');
      } else{
        echo('<script> alert("Usuario yo contraseña incorrecta!") </script>');
        echo('<script> location.href = "login.php" </script>');
      }

    break;
    };
?>