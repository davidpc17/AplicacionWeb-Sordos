<?php
require('includes/load.php');
if(isset($_SESSION["email"]) && isset(($_SESSION["clave"] ))){

	$u = $_SESSION["email"];
	$p = $_SESSION["clave"];
    $sql = "SELECT clave FROM user WHERE email ='$u'";
  list($a,$asociar,$e)=select($sql);
 
  $pass= $asociar['clave'];
 $desencriptar = SED::decryption($pass);
	
	if ($p==$desencriptar) {
header('location:portal.php');

}
}else{
//----------------------------------------------------------------------------
	
$obligatorio = 1;
if ($obligatorio) $requerido = "required";
else $requerido = "";
//----------------------------------------------------------------------------
if(isset($_POST['enviar']))
{
$cadena_de_texto = $_POST['email'];
$cadena_buscada ="@";	
$posicion_coincidencia = strrpos($cadena_de_texto, $cadena_buscada);
if($posicion_coincidencia === false){
	$mensaje = "<font color='#FF0000'>Se es necesario un correo electronico lo que ha ingresado  ". $_POST['email'] . "   No es un correo electronico </font>";
}
$encriptar =  SED::encryption($_POST['clave']);
$code = $_POST['code'];
$u = $_POST['email'];
$encriptar =  SED::encryption($_POST['clave']);
 $sql = "SELECT email FROM user WHERE email ='$u'";
  list($a,$asociar,$e)=select($sql);

  $correo= $asociar['email'];
  if ($u==$correo) {

$sql2= "UPDATE `user` SET `clave`= '$encriptar'  WHERE code_uptdate ='$code' AND email = '$u'";
$a=ejecutar($sql2);
$sql3= "UPDATE `user` SET `code_uptdate`= NULL WHERE code_uptdate ='$code' AND email = '$u'";
	ejecutar($sql3);
$p = $_POST['clave'];
    $sql = "SELECT clave FROM user WHERE email ='$u'";
  list($a,$asociar,$e)=select($sql);

  $pass= $asociar['clave'];
$desencriptar = SED::decryption($pass); // METODO DE DESENCRiptado
$uppercase =preg_match('@[A-Z]@', $p); $lowercase = preg_match('@[a-z]@', $p); $number = preg_match('@[0-9]@', $p); if(!$uppercase || !$lowercase || !$number || strlen($p) < 8) { $mensaje ="<font color='#FF0000'> Su clave debe contar con lo minimo con letras minusculas, mayuscula y numeros y tener mas de 8 caracteres"; }
else{
if ($p==$desencriptar) {


$mensaje = "<font color='#0BAF38'> Su credencial a sido restaurada";
}
else{
$mensaje = "<font color='#FF0000'> Los datos ingresados son errados porfavor verificar y volver a intentar";
}
}else{
	$mensaje =  "<font color='#FF0000'> Su correo es invalido intente nuevanmente";
}
}
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-04.png" alt="IMG">
				</div>

				<form class="login100-form validate-form"  class="form" action="" method="post">
        
					<span class="login100-form-title">
						Member Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email" <?php echo $requerido ?>>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
          <div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="number" name="code" placeholder="Codigo" <?php echo $requerido ?>>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="clave" placeholder="Password" <?php echo $requerido ?>>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<input type="submit" value="Recuperar" name="enviar" class="login100-form-btn" >
					<?php
						if(isset($_POST['enviar']))
{
echo $mensaje;
}	
	?>					
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							
						</span>
						<a class="txt2" href="index.php">
							Deseo logearme?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="registro.php">
							Crear una cuenta de acceso
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	


	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
<?php
}
?>