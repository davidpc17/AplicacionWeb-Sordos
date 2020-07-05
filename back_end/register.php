<?php
//cargar complementos

include('../controller/load.php');

//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;

if(isset($_POST['Registrar']))
{
  $encriptar =  SED::encryption($_POST['clave']); //METODO PAR ENCRIPTACION
  //$cc =$_POST['cedula'];
$nombre=$_POST['nombre'];
$ciudad=$_POST['ciudad'];
$name=$_POST['email'];
$pass= $encriptar;
$sql1= "SELECT email FROM user WHERE email ='$name'";
list($a,$asociar,$e)=select($sql1);
$comprar = $asociar['email'];
  if($name == $comprar){
    echo '<script language="javascript">alert("este correo ya existe!, porfavor colocar un nuevo correo");</script>';
    
    $mensaje ='
    <div class="alert alert-warning" role="alert">
    <strong>Intente nuevamente,</strong> este correo ya existe!
  </div>';
  header("refresh:0; ../file/register.php");
  }else{
    echo '<script language="javascript">alert(">Muy bien! Usuario Registrado satisfatoriamente");</script>';
  $mensaje ='<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Muy bien!</h4>
  <p>Usuario Registrado satisfatoriament.</p>
  <hr>
  </div>';
  
  $sql= "INSERT INTO `persona`(`nombre`, `id_ciudad`) VALUES ('$nombre','$ciudad')";
  ejecutar($sql);
  $sql = "INSERT INTO `user`(`email`, `clave`)  VALUES ('$name','$pass') ";
  ejecutar($sql);  
  header( "refresh:0; ../file/register.php");
  }
}


?>


