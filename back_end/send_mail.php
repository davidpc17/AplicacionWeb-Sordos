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

