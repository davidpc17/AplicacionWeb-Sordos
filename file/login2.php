
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
						Plataforma web TESIS
					</span>
				</div>
                <form action="" method="post">
                <div class="box box_container">
                    <div class="columns is-centered"> 
                        <div class="column "> 
                            <img src="img/undraw_alien_science_nonm.svg" alt="">
                        </div>    
                        <div class="column ">
                            <h2>¡Inicia sesión con tu cuenta!</h2>
                            <form action="">
                                <div class="field">
                                    <label for="" class="label">Correo Electronico</label>
                                    <div class="control has-icons-left">
                                        <input type="email" name="email" id="email" placeholder="e.g. tucorreo@gmail.com" class="input" required>
                                        <span class="icon is-small is-left">
                                        <i class="fa fa-envelope"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="field">
                                    <label for="" class="label">Contraseña</label>
                                    <div class="control has-icons-left">
                                        <input type="password" name="clave" id="clave" placeholder="*******" class="input" required>
                                        <span class="icon is-small is-left">
                                        <i class="fa fa-lock"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="field is-grouped">
                                    <div class="control">
                                    
                                        <button class="button is-link" name="ok">Entrar </button>
                                    </div>
                                    <div class="control">
                                        <button class="button is-link is-light">Cancelar</button>
                                    </div>
                                </div>
                                <div class="field">
                            <p>¿No tienes una cuenta? <a href="register.php">Regístrate</a> </p>
                            </div>
                            </form>
                        
                        </div>
                    </div>
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
<?php
}
?>