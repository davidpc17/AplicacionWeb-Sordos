<!--------------back end---------->
<?php

include('../controller/load.php');

if(isset($_SESSION["email"]) && isset($_SESSION["clave"] )){
?>

<!------------- DISEÑO------------->
<?php require 'inc/header.php' ?>
<?php require 'inc/menu.php' ?>

<section class="section">
  <div class="container">
    <div class="columns is-mobile">
      <div class="column">
        <aside class="menu">
          <p class="menu-label">
            General
          </p>
          <ul class="menu-list">
            <li>
              <a><span class="icon has-text-info">
                <i class="fas fa-home"></i></span> Dashboard</a>
            </li>
            <li><a><span class="icon has-text-success">
              <i class="fas fa-check-square"></i>
              </span> Customers</a>
            </li>
          </ul>
          <p class="menu-label">
            Administration
          </p>
          <p class="menu-label">
            Transactions
          </p>
  <ul class="menu-list">
    <li><a><span class="icon has-text-warning">
  <i class="fas fa-exclamation-triangle"></i>
</span> Payments</a></li>
    <li><a><span class="icon has-text-danger">
  <i class="fas fa-ban"></i>
</span> Transfers</a></li>
    <li><a>Balance</a></li>
  </ul>
</aside>
  </div>
  <div class="column is-three-fifths">
  <nav class="breadcrumb is-small" aria-label="breadcrumbs">
  <ul>
    <li><a href="#">Bulma</a></li>
    <li><a href="#">Documentation</a></li>
    <li><a href="#">Components</a></li>
    <li class="is-active"><a href="#" aria-current="page">Breadcrumb</a></li>
  </ul>
</nav>
<div class="box">
  <article class="media">
    <div class="media-content">
      <div class="content">
        <p>
          <strong>John Smith</strong> <small>@johnsmith</small> <small>31m</small>
          <br>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa.</p>

       
      </div>
      
      <video id="videoPlayer" class="video-js vjs-big-play-centered" data-setup="{}">
          <source src="videos/lengua-señas.mp4" type="video/mp4" />
          <p class="vjs-no-js">
      To view this video please enable JavaScript, and consider upgrading to a
      web browser that
      <a href="https://videojs.com/html5-video-support/" target="_blank"
        >supports HTML5 video</a
      >
    </p>
        </video>
    </div>
  </article>
</div>
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