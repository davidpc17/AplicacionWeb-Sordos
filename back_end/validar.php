<?php
include('../controller/load.php');
/*
session_start();



$_SESSION['email']  = $_POST['email'];
$_SESSION['clave'] = $_POST['clave'];
$desencriptar = SED::decryption($_SESSION['clave']);
echo $_SESSION['email'];
// Funciona si la cookie de sesión fue aceptada
if ($_SESSION['email'] && $desencriptar ){
 header('location:Drag-Drop-Completo/draganddrog.php') ;

}
else{
// O quizás pasar el id de sesión, si fuera necesario


$obligatorio = 1;
if ($obligatorio) $requerido = "required";
else $requerido = "";
*/
if(isset($_POST['ok']))
{
  $u =strtolower($_POST['email']);
    $p = $_POST['clave'];
    $sql = "SELECT clave FROM user WHERE email ='$u'";
  list($a,$asociar,$e)=select($sql);

  $pass= $asociar['clave'];
$desencriptar = SED::decryption($pass); // METODO DE DESENCRiptado
if ($p==$desencriptar) {
header('location:Drag-Drop-Completo/draganddrog.php');
}else{
echo " error verifique datos";
}
}
}


?>