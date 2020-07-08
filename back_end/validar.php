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
  header( "refresh:0; ../file/index.php");

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
  header( "refresh:0; ../file/index.php");
}else{
echo '<script language="javascript">alert("usuario o clave invalida");</script>';
header( "refresh:0; ../file/login2.php");
}
}



?>