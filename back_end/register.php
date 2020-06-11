<?php
//cargar complementos
include('../controller/load.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['Registrar']))
{ // inicia
$id_persona=$_POST['cedula'];
$tipo_doc=$_POST['tipo_doc'];
$p_nombre=$_POST['p_nombre'];
$s_nombre=$_POST['s_nombre'];
$p_apellido=$_POST['p_apellido'];
$s_apellido=$_POST['s_apellido'];
$fec_cumple=$_POST['fec_cumple'];
$id_sexo=$_POST['sexo'];
$celular=$_POST['celular'];
$direccion=$_POST['direccion'];
$ciudad=$_POST['ciudad'];
$encriptar =  SED::encryption($_POST['clave']); //METODO PAR ENCRIPTACION
$name=$_POST['email'];
$pass= $encriptar;

$sql= "INSERT INTO `persona`(`id_persona`, 'id_tipo_doc', `p_nombre`, `s_nombre`, `p_apelldio`, `s_apellido`, 'fec_cumple','id_sexo',`celular`, `direccion`, `id_ciudad`) VALUES ('$id_persona','$tipo_doc','$p_nombre','$s_nombre','$p_apellido','$s_apellido','$fec_cumple','$id_sexo',$celular','$direccion','$ciudad')";

ejecutar($sql);
$sql = "INSERT INTO `user`(`email`, `clave`) VALUES ('$name','$pass') ";
  ejecutar($sql);
if ($sql == 0) {


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

//Load Composer's autoloader
//require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'romariopater@gmail.com';                 // SMTP username
    $mail->Password = '';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('romariopater@gmail.com', 'Administrador');
    $mail->addAddress($_POST['email'],$_POST['email']);     // Add a recipient
   /* $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    //Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
*/
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'REGISTRO';
    $mail->Body    = 'Usted se ha registrado satifactoriamente</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', 
    $mail->ErrorInfo;
}

  echo "Registrado";

}else {
  echo "No registrado";
}
} // Termina aqui


?>


