<?php $page='question';  require 'inc/header.php' ?>
<title>Preguntas |  </title>

<?php require 'inc/menu.php' ?>
<section class="section">

<div class="container">
<div class="progress">
    <div class="progress-bar progress-bar-striped progress-bar-warning" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<form id="regiration_form" novalidate action="action.php"  method="post">
<fieldset class="has-text-centered">
  <h1 class="subtitle has-text-centered">Pregunta 1: ¿Aqui va la pregunta?</h1>
    <div class="form-group">
        <div class="columns">
            <div class="column is-5">
                <div class="video-container">
                    <video class="embed-container video-mask image" controls muted autoplay preload="auto" >
                        <source src="videos/lengua-señas.mp4" type="video/mp4" />
                    </video> 
                </div>  
            </div>
            <div class="column">
            <div class="field">    
            <label class="label">Preguntas</label>
                <p>¿Conoce usted personas sordas que trabajen en un laboratorio científico?</p> 
                </div>
                <div class="field">
                    <div class="radio_boton">       
                    <ul>
                        <li>
                            <input type="radio" id="f-option" name="pregun1">
                            <label for="f-option">SI</label>
                            <div class="check"></div>
                        </li>
                        <li>
                            <input type="radio" id="s-option" name="pregun1">
                            <label for="s-option">NO</label>
                            <div class="check"><div class="inside"></div></div>
                        </li>  
                    </ul>
                </div>

<!--                 <div class="burmanRadio">
            <input type="radio" class="burmanRadio__input" id="radio-1" name="burmanRadio" checked>
            <label for="radio-1" class="burmanRadio__label">Solution was not clear/correct</label>
            </div>
            
            <div class="burmanRadio">
            <input type="radio" class="burmanRadio__input" id="radio-2" name="burmanRadio">
            <label for="radio-2" class="burmanRadio__label">Solution was not available</label>
            </div> -->


       <!--          <input class="is-rtl" type="radio" name="pregunta1" checked="checked">
                <label for="pregunta1">SI</label>
                <input class="is-rtl" type="radio" name="pregunta1">
                <label for="pregunta1">NO</label> -->
                </div>
            </div>
        </div>                                                  
    </div><br>
     
            <input type="button" id="input01" name="data[password]" class="next button is-primary" value="Siguiente" />  
        
     
</fieldset>
<fieldset class="has-text-centered">
    <h1 class="subtitle has-text-centered">Pregunta 2: ¿Aqui va la pregunta?</h1>
    <div class="form-group">
        <div class="columns">
            <div class="column is-5">
                <div class="video-container">
                    <video class="embed-container video-mask image" controls muted autoplay preload="auto" >
                        <source src="videos/lengua-señas.mp4" type="video/mp4" />
                    </video> 
                </div>  
            </div>
            <div class="column">
            <div class="field">    
                <p>¿Considera que es necesario la elaboración de un vocabulario específico en Lengua
                de Señas Colombiana en los laboratorios para adquirir un aprendizaje
                significativo para las diferentes temáticas a tratar?</p> 
                </div>
				<div class="field">
                    <div class="radio_boton">       
                    <ul>
                        <li>
                            <input type="radio" id="opcion1_pregunta2" name="pregun2">
                            <label for="opcion1_pregunta2">Acuerdo</label>
                            <div class="check"></div>
                        </li>
                        <li>
                            <input type="radio" id="opcion2_pregunta2" name="pregun2">
                            <label for="opcion2_pregunta2">Desacuerdo</label>
                            <div class="check"><div class="inside"></div></div>
                        </li>  
                    </ul>
                </div>
            </div>
        </div>  
    </div>
	</div>
   
    <input type="button" name="previous" class="previous button is-primary" value="Previo" />
    <input type="button" name="next" class="next button is-info" value="Siguiente" />

        

</fieldset>
<fieldset class="has-text-centered">
<h1 class="subtitle has-text-centered">Pregunta 3: ¿Aqui va la pregunta?</h1>
    <div class="form-group">
        <div class="columns">
            <div class="column is-5">
                <div class="video-container">
                    <video class="embed-container video-mask image" controls muted autoplay preload="auto" >
                        <source src="videos/lengua-señas.mp4" type="video/mp4" />
                    </video> 
                </div>  
            </div>
            <div class="column">
            <div class="field">    
                <p>¿Cree usted que hay poca población sorda laborando en lo referente a las ciencias?</p> 
                </div>
                <div class="field">
                    <div class="radio_boton">       
                    <ul>
                        <li>
                            <input type="radio" id="opcion1_pregunta3" name="pregun3">
                            <label for="opcion1_pregunta3">Acuerdo</label>
                            <div class="check"></div>
                        </li>
                        <li>
                            <input type="radio" id="opcion2_pregunta3" name="pregun3">
                            <label for="opcion2_pregunta3">Desacuerdo</label>
                            <div class="check"><div class="inside"></div></div>
                        </li>  
                    </ul>
                </div>
            </div>
        </div>  
    </div>
	</div>
    <input type="button" name="previous" class="previous button is-warning" value="Previo" />
    <input type="button" name="next" class="next button is-info" value="Siguiente" />
</fieldset>
<fieldset class="has-text-centered">
<h1 class="subtitle has-text-centered">Pregunta 4: ¿Aqui va la pregunta?</h1>
    <div class="form-group">
        <div class="columns">
            <div class="column is-5">
                <div class="video-container">
                    <video class="embed-container video-mask image" controls muted autoplay preload="auto" >
                        <source src="videos/lengua-señas.mp4" type="video/mp4" />
                    </video> 
                </div>  
            </div>
            <div class="column">
            <div class="field">    
                <p>¿Cree usted que la creación de estas señas propicia la inclusión asertiva de la
                comunidad sorda en el entorno de formación académica superior?
                </p> 
                </div>
                <div class="field">
                    <div class="radio_boton">       
                    <ul>
                        <li>
                            <input type="radio" id="opcion1_pregunta4" name="pregun4">
                            <label for="opcion1_pregunta4">Acuerdo</label>
                            <div class="check"></div>
                        </li>
                        <li>
                            <input type="radio" id="opcion2_pregunta4" name="pregun4">
                            <label for="opcion2_pregunta4">Desacuerdo</label>
                            <div class="check"><div class="inside"></div></div>
                        </li>  
                    </ul>
                </div>
            </div>
        </div>  
    </div>
	</div>
    <input type="button" name="previous" class="previous button is-warning" value="Previo" />
    <input type="submit" name="submit" class="submit button is-success" value="Enviar" id="submit_data" />
</fieldset>
</form>



</div>

</section>


<?php require 'inc/footer.php' ?>




