<?php
include('../controller/load.php');
$obligatorio = 1;
if ($obligatorio) $requerido = "required";
else $requerido = "";
if(isset($_POST['Registrar']))
{
$cadena_de_texto = $_POST['email'];
$cadena_buscada ="@";	
$posicion_coincidencia = strrpos($cadena_de_texto, $cadena_buscada);
if($posicion_coincidencia === false){
	$mensaje = "<font color='#FF0000'>Se es necesario un correo electronico lo que ha ingresado  ". $_POST['email'] . "   No es un correo electronico </font>";
}else{
	$uppercase =preg_match('@[A-Z]@', $_POST['clave']); $lowercase = preg_match('@[a-z]@', $_POST['clave']); $number = preg_match('@[0-9]@', $_POST['clave']); if(!$uppercase || !$lowercase || !$number || strlen($_POST['clave']) < 8) { $mensaje ="<font color='#FF0000'> Su clave debe contar con lo minimo con letras minusculas, mayuscula y numeros y tener mas de 8 caracteres"; } 
	else{
  $encriptar =  SED::encryption($_POST['clave']); //METODO PAR ENCRIPTACION
	$name=$_POST['email'];
	echo $name;
  $pass= $encriptar;
  $nombre=$_POST['nombre'];
$ciudad=$_POST['ciudad'];
$sql1= "SELECT email FROM user WHERE email ='$name'";
list($a,$asociar,$e)=select($sql1);
	$comprar = $asociar['email'];
	if($name == $comprar){
		$mensaje ="<font color='#FF0000'> este correo ya existe ";
	}else{
	$mensaje ="Usuario Registrado satisfatoriamente";
	require_once 'PHPMailer/PHPMailerAutoload.php';
		
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
		$mail->addAddress($name, $name);
		$mail->addAddress($_POST['email'],$_POST['email']);     // Add a recipient
    	$mail->isHTML(true);                                  // Set email format to HTML
    	$mail->Subject = 'REGISTRO';
    	$mail->Body    = 'Usted se ha registrado satifactoriamente</b>';
  //  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		$mail->IsHTML(true);
		

	if(!$mail->send()) {
		echo "0";
    	$mensaje ="<font color='#FF0000'> usuario no registrado por que el ".$name."direccion de correo no existente por favor corraborar y volver a intentar";
		echo 'Mailer Error: ' . $mail->ErrorInfo;
		echo '<script language="javascript">alert("este correo ya existe!, porfavor colocar un nuevo correo");</script>';
    
		$mensaje ='
		<div class="alert alert-warning" role="alert">
		<strong>Intente nuevamente,</strong> este correo ya existe!
	  </div>';
	  header("refresh:0; ../file/register.php");

	} else {
		echo "1";
    $sql= "INSERT INTO `persona`(`nombre`, `id_ciudad`) VALUES ('$nombre','$ciudad')";
  ejecutar($sql);
		$sql = "INSERT INTO `user`(`email`, `clave`) VALUES ('$name','$pass') ";
		ejecutar($sql);
		
  echo '<script language="javascript">alert(">Muy bien! Usuario Registrado satisfatoriamente");</script>';
  $mensaje ='<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Muy bien!</h4>
  <p>Usuario Registrado satisfatoriament.</p>
  <hr>
  </div>';
  header( "location; ../file/register.php");
		}
	
	
	}
}
}
}
  /*
  $sql= "INSERT INTO `persona`(`nombre`, `id_ciudad`) VALUES ('$nombre','$ciudad')";
  ejecutar($sql);
  $sql = "INSERT INTO `user`(`email`, `clave`)  VALUES ('$name','$pass') ";
  ejecutar($sql);  
  header( "refresh:0; ../file/register.php");
  }
}

*/
?>


