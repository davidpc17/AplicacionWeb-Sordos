<!--------------back end---------->
<?php

include('../controller/load.php');

if(isset($_SESSION["email"]) && isset($_SESSION["clave"] )){
?>

<!------------- DISEÑO------------->
<?php 
  $page='inicio'; 
  require 'inc/header.php' 
?>
<title>Home | SordosApp </title>
<?php require 'inc/menu.php' ?>


<section class="hero is-primary is-medium is-bold">
  <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title">Lorem ipsum dolor sit amet, consectetur adipiscing elit et dolore magna aliqua</h1>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="columns is-mobile">
      <div class="column">
        <aside class="menu">
          <p class="menu-label">
            Universidad
          </p>
          <figure class="image is-2by1">
  <img src="img/LOGOTIPO-HORIZONTAL.jpg">
</figure>

          <ul class="menu-list">
            <li>
              <a><span class="icon has-text-info">
                <i class="fas fa-home"></i></span> Dashboard</a>
            </li>
            
          </ul>
          <p class="menu-label">
            Fundacion
          </p>
          <figure class="image is-2by1">
  <img src="img/bg-01.jpg">
</figure>
  <ul class="menu-list">
    
    <li><a><span class="icon has-text-warning">
  <i class="fas fa-exclamation-triangle"></i>
</span> Payments</a></li>
  </ul>
</aside>
  </div>
  <div class="column is-three-fifths">
<section class="articles">
  <div class="box article">
    <article class="media">
      <div class="media-content">
        <div class="content">
          <strong >Introducion</strong> 
            <div class="container-all">
            <!-- <img src="img/logo.png" alt=""> -->
              <video class="embed-container video-mask image" controls muted autoplay preload="auto" >
                <source src="videos/lengua-señas.mp4" type="video/mp4" />
              </video> 
              <!--  <h1 class="sub-title">Canon EOS 80D</h1> -->
              <p>En el presente proyecto se expone la elaboración y diseño de un vocabulario en Lengua
              de Señas Colombiana (LSC) para la asignatura de Microbiología tanto en la parte
              teórica como práctica, con el cual se busca mitigar la barrera de comunicación entre la
              población sorda y la población oyente que está familiarizada con esta asignatura
              específicamente entre estudiantes y docentes; tomando como referencia la terminología
              más utilizada en esta. Este proyecto de investigación parte de la necesidad que al
              momento de que ingrese un estudiante sordo en cualquier programa que incluya en su
              carga académica la asignatura Microbiología cuente con un vocabulario previo, de esta
              manera, se busca que al tratar nuevas temáticas, ya estén establecidas las señas
              correspondientes y así lograr una mayor compresión por parte del estudiante sordo y
              que el proceso de interpretación de la información sea más clara y precisa, además de
              posibilitar el bilingüismo para la población sorda enriqueciendo a la Lengua De Señas
              Colombiana y de esta manera se busca que la población sorda se interese por la ciencia
              específicamente en la microbiología.</p>
              <p>El vocabulario que se busca implementar consta de una clasificación en cuatro
              categorías las cuales son: materiales, reactivos, sepas y morfología bacteriana; en cada
              categoría está la terminología más utilizada en Microbiología, cada categoría contiene
              de tres a cuatro términos que lo representa. En ese orden de ideas se espera por parte de
              las personas sordas sus comentarios y sugerencias respecto al proyecto, las cuales
              servirán de ayuda para enriquecer y retroalimentar este trabajo y así beneficiar a la
              población sorda.</p>   
            </div>
        </div> 
      </div>
    </article>
  </div>
</section>
  </div>
  <div class="column">

<nav class="panel is-link">
  <p class="panel-heading">
    Link
  </p>
  <p class="panel-tabs">
    <a class="is-active">All</a>
    <a>Public</a>
    <a>Private</a>
    <a>Sources</a>
    <a>Forks</a>
  </p>
  <div class="panel-block">
    <p class="control has-icons-left">
      <input class="input is-link" type="text" placeholder="Search">
      <span class="icon is-left">
        <i class="fas fa-search" aria-hidden="true"></i>
      </span>
    </p>
  </div>
  <a class="panel-block is-active">
    <span class="panel-icon">
      <i class="fas fa-book" aria-hidden="true"></i>
    </span>
    bulma
  </a>
  <a class="panel-block">
    <span class="panel-icon">
      <i class="fas fa-book" aria-hidden="true"></i>
    </span>
    marksheet
  </a>
  <a class="panel-block">
    <span class="panel-icon">
      <i class="fas fa-book" aria-hidden="true"></i>
    </span>
    minireset.css
  </a>
  <a class="panel-block">
    <span class="panel-icon">
      <i class="fas fa-book" aria-hidden="true"></i>
    </span>
    jgthms.github.io
  </a>
</nav>

  </div>
</div>
</section>

<?php require 'inc/footer.php'  ?>
<?php
}else{

 header('location: ../file/login2.php');
}

?>