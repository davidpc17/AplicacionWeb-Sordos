
<?php
require 'inc/header.php';  
include('../controller/load.php');
$obligatorio = 1;
if ($obligatorio) $requerido = "required";
else $requerido = "";
if(isset($_POST['ok']))
{
  $u =strtolower($_POST['email']);

    $p = $_POST['clave'];
    $sql = "SELECT clave FROM user WHERE email ='$u'";
  list($a,$asociar,$e)=select($sql);
 
  $pass= $asociar['clave'];
 $desencriptar = SED::decryption($pass); // METODO DE DESENCRiptado


  $sql1= "SELECT * FROM user WHERE email = '$u'";
list($a,$asociar,$e)=select($sql1);
  $comprar = $asociar['id_estado'];
  echo $comprar;
 if($comprar == 1){
    if ($p==$desencriptar) {
header('location:../file/index.php');
$_SESSION["clave"] = $desencriptar;
$_SESSION["email"] = $u;
}else{
$erro = " <font color='#FF0000'> Usuario o Contraseña no validos";
}
}else{
	header('location:../file/administrator.php');
}


}


if(isset($_SESSION["email"]) && isset($_SESSION["clave"])){

	$u = $_SESSION["email"];
	$p = $_SESSION["clave"];
    $sql = "SELECT clave FROM user WHERE email ='$u'";
  list($a,$asociar,$e)=select($sql);
 
  $pass= $asociar['clave'];
 $desencriptar = SED::decryption($pass);
	 $estado = $_SESSION["email"];
  $sql1= "SELECT * FROM user WHERE email = '$estado'";
list($a,$asociar,$e)=select($sql1);
  $comprar = $asociar['id_estado'];
  echo $comprar;
  if($comprar == 1){
    if ($p==$desencriptar) {
header('location:../file/index.php');

}
}
	
}else{


?>

<div style="width: 100%; background: linear-gradient(to right, #1c3643 0%, #273b47 25%, #1e5372 100%); color: rgb(255, 255, 255); text-align: 
center; padding: 16px 0px;">
<p style="margin: 0px auto; width: 1356px; max-width: 80%;">Este es un proyecto dirigido por la Universidad del Atlantico</p>
</div>

<section class="hero is-fullheight">
        <div class="hero-body">
            <div class="container ">
                <div class="column is-4 is-offset-4">
                    <div class="login_01">
                    <h1 class="title is-1 has-text-centered animate__animated animate__backInLeft">Inicia Sesion</h1>
              <h2 class="subtitle colored is-4 has-text-centered">Aplicacion NombreAPP</h2>
              <p class="has-text-centered">Inicia sesion y disfruta de todo el contenido</p>
              </div>
                    <div class="box">
                        <form>
                            <div class="field">
                                <div class="control">
                                <label for="" class="label">Correo Electronico</label>
                                    <input class="input" type="email" name="email" placeholder="Your Email" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                <label for="" class="label">Contraseña</label>
                                    <input class="input" type="password" name="clave" placeholder="Your Password">
                                </div>
                            </div>
                            <button class="button is-block is-primary is-fullwidth is-medium" name="ok">Entrar
                            <i class="fas fa-sign-in" aria-hidden="true"></i></button>
                        </form>
                        <div class="has-text-grey">– or –</div>
                        <a class="button is-medium is-fullwidth is-size-6" href="">
                            <span class="google-button__icon">
                            <i class="fab fa-google"></i>
                            </span>
                              REGISTRATE
                            </a>
                    </div>
                    <p class="has-text-grey-light has-text-centered">
                        <a href="register2.php">Registrate</a> &nbsp;·&nbsp;
                        <a href="../">¿Olvidaste la Contraseña?</a>
                        BY ©2020
                    </p>
                </div>
            </div>
        </div>
    </section>
    
<?php
}
?>