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
    
	require_once '../back_end/PHPMailer/PHPMailerAutoload.php';
		
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
		
    	$mensaje ="<font color='#FF0000'> usuario no registrado por que el ".$name."direccion de correo no existente por favor corraborar y volver a intentar";
		echo 'Mailer Error: ' . $mail->ErrorInfo;
		echo '<script language="javascript">alert("ERROR DE SERVIDOR DE CORREO");</script>';
    
		$mensaje ='
		<div class="alert alert-warning" role="alert">
		<strong>Intente nuevamente,</strong> este correo ya existe!
	  </div>';
	 // header("refresh:0; ../file/register.php");

	} else {
		
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
  //header( "location; ../file/register.php");
		}
	
	
	}
}
}
}
?>
<?php require 'inc/header.php' ?>

<section class="hero is-fullheight">

<div style="width: 100%; background: linear-gradient(to right, #1c3643 0%, #273b47 25%, #1e5372 100%); color: rgb(255, 255, 255); text-align: 
center; padding: 16px 0px;">
<p style="margin: 0px auto; width: 1356px; max-width: 80%;">Este es un proyecto dirigido por la Universidad del Atlantico</p>
</div>

<div class="hero-body">
    <div class="container">
        <div class="caja_principal">
            <div class="caja">
                <div class="login100-form-title" style="background-image: url(img/bg-01.jpg);">
					<span class="login100-form-title-1">
						Registrate
					</span>
				</div>
                <form action="" method="post">
                <div class="box">
                    <p>Inscríbete y comienza a aprender.</p>
                <form action="">
                    <div class="columns"> 
                    
                        <div class="column"> 
                            <!-- <img src="img/undraw_alien_science_nonm.svg" alt=""> -->
                            <div class="field">
                                    <label for="" class="label">Nombre</label>
                                    <input type="text" name="nombre" placeholder="e.g. David" class="input" required>
                                </div>
                                <div class="field">
                                    <label for="" class="label">Ciudad</label>
                                    <input type="text" name="ciudad" placeholder="e.g. David" class="input" required>
                                </div>
                        </div>    
                        <div class="column">
                            
                                
                                <div class="field">
                                    <label for="" class="label">Email</label>
                                    <div class="control has-icons-left">
                                        <input type="email" name="email" placeholder="e.g. tucorreo@gmail.com" class="input" required>
                                        <span class="icon is-small is-left">
                                        <i class="fa fa-envelope"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="field">
                                    <label for="" class="label">Password</label>
                                    <div class="control has-icons-left">
                                        <input type="password" name="clave" placeholder="*******" class="input" required>
                                        <span class="icon is-small is-left">
                                        <i class="fa fa-lock"></i>
                                        </span>
                                    </div>
                                </div>
                        </div>
                    </div>

                                <div class="field is-grouped">
                                    <div class="control">
                                        <button class="button is-link" name="Registrar">Entrar </button>
                                    </div>
                                    <div class="control">
                                        <button class="button is-link is-light">Cancelar</button>
                                    </div>
                                </div>
                                <div class="field">
                                    <p>¿Ya tienes una cuenta? <a href="login2.php">Iniciar sesión</a></p>
                                </div>
                                <?php if(isset($_POST['Registrar']))
						{
							echo $mensaje;
						
						} ?>
                    </form>
                </div>
            </div>
        </div>
        <div class="content has-text-centered">
            <div class="copy">
                <p><strong>Biology Sings</strong> &copy; 2020 Todos los derechos reservados.<br>
                Desarrollado por David Perez & Romario Miranda</p>
            </div>
        </div>
    </div>
</div>
</section>
