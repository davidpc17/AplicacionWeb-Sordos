<?php
include('../controller/load.php');
?>
<div class="barra_superior">
  <i class="fa fa-bullhorn" aria-hidden="true"></i> 
  <a style="">Este es un proyecto dirigido por la <strong>Universidad del Atlantico.</strong></a>
</div>
<nav id="menu" class="navbar">
  <div class="container">
    <div class="navbar-brand">
      <a class="navbar-item" href="">
        <img src="img/1500x500.jpg" alt="logo" width="116" height="36">
      </a>
      <a class="navbar-item is-hidden-desktop" href="" target="_blank">
        <span class="icon" style="color: #333;">
          <i class="fab fa-github"></i>
        </span>
      </a>
      <a class="navbar-item is-hidden-desktop" href="" target="_blank">
        <span class="icon" style="color: #55acee;">
          <i class="fab fa-twitter"></i>
        </span>
      </a>
      <div class="navbar-burger burger" data-target="navMenubd-example">

        <a class="navbar-item">
            <div class="level is-mobile">
              <div class="level-left">
                <div class="level-item">
                  <p>
                    <strong>Menu</strong>
                  </p>
                </div>
              </div>
              <div class="level-right">
                    <span></span>
                    <span></span>
                    <span></span>
              </div>
            </div>
          </a>
      </div>
    </div>
    <div id="navMenubd-example" class="navbar-menu">
      <div class="navbar-start">
        <a class="<?php if($page=='inicio'){ echo 'navbar-item is-tab is-active';
          }else{ echo 'navbar-item';}?>" href="index.php">
          Inicio
        </a>
        <a class="<?php if($page=='nosotros'){ echo 'navbar-item is-tab is-active';
        }else{ echo 'navbar-item';}?>" href="nosotros.php">
          Sobre Nosotros
        </a>
        <div class="navbar-item has-dropdown is-hoverable">
          <div class="navbar-link">
            Categorias
          </div>
          <div id="blogDropdown" class="navbar-dropdown">
            <div class="is-fluid">
              <div class="container is-fluid">
                <img src="img/señas/unnamed.gif" alt="">
              </div>
              <a href="materiales.php" class="navbar-item">
                <span class="icon has-text-dark">
                  <i class="fas fa-check-square"></i>
                </span> Materiales 
                <span class="icon is-small"></span>
              </a>
              <a href="procedimiento.php" class="navbar-item">
                <span class="icon has-text-dark">
                  <i class="fas fa-check-square"></i>
                </span> Procedimientos
                <span class="icon is-small"></span>
              </a>
              <a class="navbar-item" href="microorganismo.php">
                <span class="icon has-text-dark">
                  <i class="fas fa-check-square"></i>
                </span> Microorganismos
                <span class="icon is-small"></span>
              </a>
              <a class="navbar-item" href="medio-cultivos.php">
                <span class="icon has-text-dark">
                  <i class="fas fa-check-square"></i>
                </span> Medios de Cultivos
                <span class="icon is-small"></span>
              </a>
              <a class="navbar-item" href="morfologia.bacteriana.php">
              <span class="icon has-text-dark">
                  <i class="fas fa-check-square"></i>
                </span>  Morfologia bacteriana
                <span class="icon is-small"></span>  
              </a> 
            </div>
          </div>    
        </div>
        <div class="navbar-item has-dropdown is-hoverable">
        <a class="<?php if($page=='question'){ echo 'navbar-item is-tab is-active';
        }else{ echo 'navbar-item';}?>" href="question2.php">
          &nbsp;Cuestionario
        </a>
        <div id="blogDropdown" class="navbar-dropdown">
            <div class="is-fluid">
              <div class="container is-fluid">
                <img src="img/señas/cuestionario.gif" alt="">
              </div>
            </div>
          </div>
        </div>
        <a class="<?php if($page=='sugerencias'){ echo 'navbar-item is-tab is-active';
        }else{ echo 'navbar-item';}?>" href="sugerencias.php">
            <i class="fa fa-envelope-open"></i>&nbsp; Sugerencias</a>
        <!-- <a class="navbar-item " href="sugerencias.php">
          <span class="bd-emoji">❤️</span> &nbsp;Sugerencias
        </a> -->
      </div>
      <div class="navbar-item">
              <form method="post" action="">
                <div class="field has-addons">
                    <div class="control">
                        <input class="input is-small" type="email" name="email" placeholder="Your email">
                    </div>
                    <div class="control">
                        <button type="submit" class="button is-primary is-small">
                            Buscar
                        </button>
                    </div>
                </div>
            </form>
            </div>
      <div class="navbar-end">
        <a class="navbar-item" href="">
        <span class="icon has-text-info">
                    <i class="fa fa-user"></i>
                  </span>&nbsp; <?php 
                  
                  $sql = "SELECT nombre FROM user WHERE email ='$SESSION'";
                  list($a,$asociar,$e)=select($sql);
                  $name= $asociar['nombre'];
                  echo ucwords($name)  ;
                  
                    ?></a>
        </a>
      <div class="navbar-item is-hoverable">
        <button class="button btn-circle" aria-haspopup="true" aria-controls="dropdown-menu6">
          <!-- <span>Right aligned</span> -->
          <span class="icon is-small">
            <i class="fas fa-angle-down" aria-hidden="true"></i>
          </span>
        </button>
        <div class="navbar-dropdown is-right">
          <a class="navbar-item" href="/documentation/overview/start/">
            <div class="level is-mobile">
              <div class="level-left">
                <div class="level-item">
                  <span class="icon has-text-info">
                    <i class="fa fa-user"></i>
                  </span>
                </div>
                <div class="level-item">
                  <p>
                    <strong>Mis Datos</strong>
                  </p>
                </div>
              </div>
            </div>
          </a>
          <a class="navbar-item " href="http://bulma.io/extensions/">
            <div class="level is-mobile">
              <div class="level-left">
                <div class="level-item">
                  <span class="icon has-text-info">
                    <i class="fa fa-plug"></i>
                  </span>
                </div>
                <div class="level-item">
                  <p>
                    <strong>Mis Respuestas</strong>
                    <br>
                    <small>Haz una vista rapida de tus respuestas</small>
                  </p>
                </div>
              </div>
            </div>
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item" href="../back_end/out.php">
            <div class="level is-mobile">
              <div class="level-left">
                <div class="level-item">
                  <span class="icon has-text-info">
                    <i class="fa fa-user"></i>
                  </span>
                </div>
                <div class="level-item">
                  <p>
                    <strong>Salir</strong>
                  </p>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>