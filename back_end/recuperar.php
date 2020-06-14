<?php
include('../controller/load.php');
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
     $sql = "SELECT email FROM user WHERE email ='$u'";
  list($a,$asociar,$e)=select($sql);

  $correo= $asociar['email'];
  if ($u==$correo) {
      
    $mail->addAddress($u,$u); 
       
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Recuperacion de contraseña';
    $codigo_rand = rand(100000,999999);
    $sql = "UPDATE `user` SET `codigo_up`='$codigo_rand' WHERE email = '$u'";
  ejecutar($sql);
    $mail->Body    = 'Su codigo de recuperacion es'. ' '. $codigo_rand. ' '. 'de click aqui para ir al link donde ingresara este codigo'.' '."http://40.114.45.209/TriageHSJM/ingresecode.php";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if(!$mail->send()) {
      $enviado = '<br><div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Mailer Error!</strong> ' . $mail->ErrorInfo;'.
      Este correo no existe '.$u.' Corrija y vuelva a intentar
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
 
	} else {
      $enviado = '<br><div class="alert alert-success" role="alert">
      <h4 class="alert-heading">My Bien!</h4>
      <p>Su codigo ha sido enviado con exito al siguiente Correo ELectronico: '.$u. ' </p>
      <hr>
      <p class="mb-0">A continuacion, de Click en <strong>Ya tengo mi codigo</strong>.</p>
    </div>';
      
}

}

}

?>