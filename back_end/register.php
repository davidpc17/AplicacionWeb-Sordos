<?php
//cargar complementos

include('../controller/load.php');

//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;

if(isset($_POST['Registrar']))
{
$cadena_de_texto = $_POST['email'];
$cadena_buscada ="@";	
$posicion_coincidencia = strrpos($cadena_de_texto, $cadena_buscada);
if($posicion_coincidencia === false){
  $mensaje = "<font color='#FF0000'>Se es necesario un correo electronico lo que ha ingresado  ". $_POST['email'] . "   No es un correo electronico </font>";
}else{

  $uppercase =preg_match('@[A-Z]@', $_POST['clave']); 
  $lowercase = preg_match('@[a-z]@', $_POST['clave']); 
  $number = preg_match('@[0-9]@', $_POST['clave']); 
  if(!$uppercase || !$lowercase || !$number || strlen($_POST['clave']) < 8) { 
    $mensaje ='<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Upps!</strong> Su clave debe contar con lo minimo con letras minusculas, mayuscula, numeros y tener mas de 8 caracteres.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
  </div>';
  } 
  else{
  $encriptar =  SED::encryption($_POST['clave']); //METODO PAR ENCRIPTACION
  //$cc =$_POST['cedula'];
$nombre=$_POST['nombre'];
$ciudad=$_POST['ciudad'];
$name=$_POST['email'];
$pass= $encriptar;
$sql1= "SELECT email FROM usuario WHERE email ='$name'";
list($a,$asociar,$e)=select($sql1);
$comprar = $asociar['email'];
  if($name == $comprar){
    $mensaje ='<div class="alert alert-warning" role="alert">
    <strong>Intente nuevamente,</strong> este correo ya existe!
  </div>';
  }else{

  $mensaje ='<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Muy bien!</h4>
  <p>Usuario Registrado satisfatoriament.</p>
  <hr>
  </div>';
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
    $mensaje ="<font color='#FF0000'> usuario no registrado por que el ".$name."direccion de correo no existente por favor corraborar y volver a intentar";
    echo 'Mailer Error: ' . $mail->ErrorInfo;
  } else {
  $sql= "INSERT INTO `persona`('nombre', `id_ciudad`) VALUES ('$nombre','$ciudad')";
  ejecutar($sql);
  $sql = "INSERT INTO `user`(`email`, `clave`)  VALUES ('$name','$pass') ";
  ejecutar($sql);
    $mensaje ="<font color='#0BAF38'> Registro Completado</font>";
    }
  
  }
}
}
}

?>


