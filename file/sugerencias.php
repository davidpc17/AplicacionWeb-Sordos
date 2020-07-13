<?php $page='sugerencias';  require 'inc/header.php' ?>
<title>Sugerencias | SordosApp </title>

<?php require 'inc/menu.php' ?>
<section class="section">
    <div class="container">
    <h1 class="title has-text-centered">
        <span class="text-is-primary">Sugerencias</span>
      </h1>
      <p class="subtitle has-text-centered">
       Escribe aqui tus sugerencias para este proyecto
      </p>
  <div class="container has-text-centered">
    <div class="columns is-centered">
      <div class="column is-7 is-6-desktop">
        <form>
          <div class="field">
            <!-- <label class="label">Message</label> -->
            <div class="control">
                <textarea class="textarea is-primary" placeholder="Escribe tu mensaje..."></textarea>
            </div>
            </div>
          <div class="field is-grouped">
            <div class="control is-expanded">
              <button class="button is-danger is-outlined is-fullwidth">Cancelar</button>
            </div>
            <div class="control is-expanded">
              <button class="button is-primary is-fullwidth">Enviar Sugerencia</button>
            </div>
          </div>
          <p>By signing in you agree with the <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a>.</p>
        </form>
      </div>
    </div>
  </div>
</div>
</section>

<?php require 'inc/footer.php' ?>