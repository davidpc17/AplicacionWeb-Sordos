<?php
include('../controller/load.php');
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
	}else{$obligatorio = 1;
if ($obligatorio) $requerido = "required";
else $requerido = "";
require_once 'PHPMailer/PHPMailerAutoload.php';
	if(isset($_POST['enviar']))
{	
		$mail = new PHPMailer();
		$mail->isSMTP();
		$mail->SMTPAuth = true;
		$mail->SMTPDebug = 0;
		$mail->Debugoutput = 'html';
		$mail->SMTPSecure = 'tls';
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = '587';
		
		$mail->Username = 'electivaprogweb.luis@gmail.com';
		$mail->Password = '19pruebaslp2019';  
   $mail->setFrom('electivaprogweb.luis@gmail.com', 'No-reply');

    $u = $_POST['email'];
     $sql = "SELECT email FROM usuario WHERE email ='$u'";
  list($a,$asociar,$e)=select($sql);

  $correo= $asociar['email'];
  if ($u==$correo) {
      
    $mail->addAddress($u,$u); 
       
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Recuperacion de contraseña';
    $codigo_rand = rand(100000,999999);
    $sql = "UPDATE `user` SET `code_uptdate`='$codigo_rand' WHERE email = '$u'";
  ejecutar($sql);
    $mail->Body    = 'Su codigo de recuperacion es'. ' '. $codigo_rand. ' '. 'de click aqui para ir al link donde ingresara este codigo'.' '."http://52.170.185.100/parcial/ingresecode.php";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if(!$mail->send()) {
    	echo 'El mensaje no pudo ser enviado.';
    	echo 'Mailer Error: ' . $mail->ErrorInfo;
    	$enviado = "<font color='#FF0000'> error este correo no existe ".$u." "."corrija y vuelva a intentar";
	} else {
    	echo 'Mensaje ha sido enviado';
    	$enviado = "<font color='#0BAF38'> Su codigo ha sido enviado con exito al sigt. email ".$u. "de click en tengo mi codigo";
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
					<img src="images/img-02.png" alt="IMG">
				</div>

				<form class="login100-form validate-form"  class="form" action="" method="post">
        
					<span class="login100-form-title">
						Olvide mi Contraseña 
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email" <?php echo $requerido ?>>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					
					
					<div class="container-login100-form-btn">
						<input type="submit" value="Obtener codigo" name="enviar" class="login100-form-btn" >
							
						
					</div>
<?php
if(isset($_POST['enviar']))
{
echo $enviado;
}
?>
					<div class="text-center p-t-12">
						<span class="txt1">
							
						</span>
						<a class="txt2" href="index.php">
							Deseo logearme ?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="ingresecode.php">
							Ya tengo mi codigo :) -->
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