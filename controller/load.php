<?php 

require_once('../general/inc/config.php');
require_once('../general/inc/function.php');
require_once('../general/inc/session.php');
require_once('../general/inc/SED.php');

//DEFINIR ENRUTADO A BACKEND

$REGISTER="/back_end/register.php";
$VALIDAR_LOGIN="../back_end/validar.php";

//global
if(isset($_SESSION["email"]) && isset($_SESSION["clave"])){
$SESSION = $_SESSION['email'];
}
?>