<?php $page='categorias'; require 'inc/header.php' ?>
<title>Materiales | </title>
<?php require 'inc/menu.php' ?>

<section class="hero is-danger">
<div class="hero-body"  style="margin-bottom: -20px;">
    <div class="container">
      <div class="columns is-vcentered">
        <div class="column">
          <p class="title has-text-centered-mobile is-size-4 is-bold">
            Materiales
          </p>
          <p class="subtitle has-text-centered-mobile is-size-7">
            Everything you need to start with Bulma-extensions.
          </p>
        </div>
        <div class="column has-text-right">
          <p class="has-text-centered-mobile">
            <img src="img/undraw_press_play_bx2d.svg" width="120px" height="auto" style="margin-bottom: -40px;">
          </p>
        </div>
      </div>
    </div>
  </div> 
  
<div class="hero-foot">
<nav class="tabs is-boxed">
        <div class="container">
          <ul>
            <li class="tab is-active" onclick="openTab(event,'mate1')">
                <a><span class="icon is-small">
                    <i class="fa fa-tasks" aria-hidden="true"></i></span><span>Caja Petri</span>
                </a>
            </li>
            <li class="tab" onclick="openTab(event,'mate2')">
                <a><span class="icon is-small">
                    <i class="far fa-file-alt" aria-hidden="true"></i></span><span>Micropipeta</span>
                </a>
            </li>
            <li class="tab" onclick="openTab(event,'mate3')">
                <a><span class="icon is-small">
                    <i class="fa fa-comments" aria-hidden="true"></i></span><span>Asa recta o en hilo</span>
                </a>
            </li>
            <li class="tab" onclick="openTab(event,'mate4')">
                <a><span class="icon is-small">
                    <i class="fa fa-comments" aria-hidden="true"></i></span><span>Sensidiscos</span>
                </a>
            </li>
          </ul>
        </div>
      </nav>
  </div>
</section>


<div class="section hero is-white">
  <div class="container">
    <div id="mate1" class="content-tab">
      <div class="columns">
        <div class="column is-5">
          <div class="video-container">
            <video class="embed-container video-mask image" controls muted autoplay preload="auto" >
              <source src="videos/caja-petri.mp4" type="video/mp4" />
            </video> 
          </div>  
        </div>
        <div class="column">
          <div class="card">
            <header class="card-header">
              <p class="card-header-title" >
                Caja Petri
              </p>
              <div class="card-actions">
                <p class="card-header-title">
                  <a class="button is-danger is-outlined is-rounded is-small modal-button" data-keyboard="true">
                    <span class="icon">
                      <i class="fa fa-video"></i>
                    </span>
                    <span><strong>Ver Seña</strong></span>
                  </a>
                </p>
              </div>
              <div class="modal">
                <div class="modal-background"></div>
                  <div class="modal-content">
                    <div class="video-container">
                      <video class="embed-container video-mask image" controls muted autoplay preload="auto" >
                        <source src="videos/micropipeta.mp4" type="video/mp4" />
                      </video> 
                    </div>
                  </div>
                <button class="modal-close is-large" aria-label="close"></button>
              </div>
            </header>
            <div class="card-content">
              <div class="content">
                <div class="columns">
                  <div class="column">
                    <h2 class="subtitle is-6">Descripcion</h2>
                    <p class="is-size-7">Recipiente redondo, hecho de vidrio o de plástico, posee diferentes diámetros, es de fondo bajo, 
                    con una cubierta de la misma forma que la placa, pero un poco más grande de diámetro, ya que se 
                    puede colocar encima y cerrar el recipiente, como una tapa.</p>
                  </div>
                  <div class="column menu-label">
                    <figure class="image is-16by9">
                      <img class="image" src="img/caja-petri.jpg">
                    </figure>                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="mate2" class="content-tab" style="display:none">
    <div class="container">
      <div class="columns">
        <div class="column is-5">
          <div class="video-container">
            <video class="embed-container video-mask image" controls muted autoplay preload="auto" >
              <source src="videos/micropipeta.mp4" type="video/mp4" />
            </video> 
          </div>  
        </div>
        <div class="column">
          <div class="card">
            <header class="card-header">
              <p class="card-header-title">
                Micropipeta
              </p>
              <div class="card-actions">
                <p class="card-header-title">
                  <a class="button is-danger is-outlined is-rounded is-small modal-button" data-keyboard="true">
                    <span class="icon">
                      <i class="fa fa-video"></i>
                    </span>
                    <span><strong>Ver Seña</strong></span>
                  </a>
                </p>
              </div>
              <div class="modal">
                <div class="modal-background"></div>
                  <div class="modal-content">
                    <div class="video-container">
                      <video class="embed-container video-mask image" controls muted autoplay preload="auto" >
                        <source src="videos/micropipeta.mp4" type="video/mp4" />
                      </video> 
                    </div>
                  </div>
                <button class="modal-close is-large" aria-label="close"></button>
              </div>
            </header>
            <div class="card-content">
              <div class="content">
                <div class="columns">
                  <div class="column">
                    <h2 class="subtitle is-6">Descripcion</h2>
                    <p class="is-size-7">Es un instrumento común del laboratorio utilizado para la transferencia de 
                      microvolúmenes de soluciones líquidas. Micropipetas vienen en una gama de tamaños para el 
                      movimiento exacto de los volúmenes entre 0,5 y 5000 μl y cada instrumento requiere uno de tres 
                      diferentes tamaños de puntas desechables.</p>
                  </div>
                  <div class="column menu-label">
                    <figure class="image is-16by9">
                      <img class="image" src="img/caja-petri.jpg">
                    </figure>                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="mate3" class="content-tab" style="display:none">
    <p>
      test3 <br>  
      sirve para trasladar una sola colonia a medios de identificación o subcultivos
  </div>
  <div id="mate4" class="content-tab" style="display:none">
    <p>
      test3 <br>  
      Son pequeños discos de papel impregnados con concentraciones conocidas de la sustancia a probar; una vez 
      sembrado el microorganismo en un cultivo sólido, se colocan los sensidiscos y después de un tiempo de 
      incubación se mide el halo de inhibición de crecimiento, el cual se compara con tablas.
    </div>
</div>

    

    <section id="newsletter" class="hero is-primary">
    <div class="hero-body">
      <div class="container">
        <!-- Begin MailChimp Signup Form -->
        <div id="mc_embed_signup" class="columns is-vcentered">
          <div class="column is-one-third is-left">
            <p class="title">Bulma <strong>Newsletter</strong></p>
            <p class="subtitle">Get notified when v1 is ready!</p>
          </div>

          <div class="column">
            <form action="https://bbxdesign.us3.list-manage.com/subscribe/post?u=b43b93fe633f0560b2a72a69c&amp;id=52585e8803" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
              <div id="mc_embed_signup_scroll">
                <div class="field is-grouped">
                  <div class="control has-icons-left is-expanded">
                    <input type="email" value="" name="EMAIL" class="input is-flat required email" id="mce-EMAIL" placeholder="email address" required>
                    <span class="icon is-small is-left">
                    <i class="fa fa-envelope"></i>
                  </span>
                  </div>
                  <div class="control">
                    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button is-white is-outlined">
                  </div>
                </div>
                <div id="mce-responses">
                  <div class="notification is-danger response" id="mce-error-response" style="display:none"></div>
                  <div class="notification is-success response" id="mce-success-response" style="display:none"></div>
                </div>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                  <input type="text" name="b_b43b93fe633f0560b2a72a69c_52585e8803" tabindex="-1" value="">
                </div>
              </div>
            </form>
          </div>
        </div>
        <!--End mc_embed_signup-->
      </div>
    </div>
  </section>
<?php require 'inc/footer.php' ?>