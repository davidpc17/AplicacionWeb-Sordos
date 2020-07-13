<footer class="footer ">
    <div class="container">
      <div class="columns">
        <div class="column">
          <div class="footer-logo">
          <figure class="image">
            <img src="img/logo-universidad-del-atlantico.png" alt="Logo">
          </figure>
          </div>
        </div>
        <div class="column">
          <div class="footer-logo">
          <figure class="image">
            <img src="img/2g5Zow6x.jpg" alt="Logo">
          </figure>
          </div>

        </div>
          <div class="column">
            <div class="footer-column">
              <div class="footer-header">
                  <p class="has-text-weight-semibold">Platform</p>
              </div>
              <ul class="link-list">
                <li>
                  <a href="https://pentos.co/" class="has-text-primary">
                    TikTok Analytics
                  </a>
                </li>
                <li>
                  <a href="https://pentos.co/tiktok-monitoring/" class="has-text-primary">
                    TikTok Monitoring
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="column">
            <div class="footer-column">
              <div class="footer-header">
                  <p class="has-text-weight-semibold">Free tools</p>
              </div>
              <ul class="link-list">
                <li>
                  <a href="https://pentos.co/free-tools/tiktok-virality-evaluator/" class="has-text-primary">
                    TikTok Virality Evaluator
                  </a>
                </li>
                <li>
                  <a href="https://pentos.co/free-tools/user-engagement-rate/" class="has-text-primary">
                    Tiktok Engagement Rate Calculator
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="column">
            <div class="footer-column">
              <div class="footer-header">
                  <p class="has-text-weight-semibold">Company</p>
              </div>
              <ul class="link-list">
                <li>
                  <a href="https://pentos.co/blog/" class="has-text-primary">
                    Blog
                  </a>
                </li>
                <li>
                  <a href="https://pentos.co/about/" class="has-text-primary">
                    About
                  </a>
                </li>
              </ul>
            </div>
          </div>
        <div class="column">
          <div class="footer-column">
            <div class="footer-header">
              <p class="has-text-weight-semibold">Follow Us</p>
              <nav class="level is-mobile">
                <div class="level-left">
                  <a class="level-item" href="https://www.twitter.com/pentos_co" alt="Pentos twitter">
                    <span class="icon has-text-primary"><i class="fab fa-twitter"></i></span>
                  </a>
                  <a class="level-item" href="https://www.twitter.com/pentos_co" alt="Pentos twitter">
                    <span class="icon has-text-primary"><i class="fab fa-facebook"></i></span>
                  </a>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <div class="content container has-text-centered">


        <p>
            Say hello at <a href="mailto:hello@pentos.co" class="has-text-primary">hello@pentos.co</a> !
        </p>
        <p>
            Construido con
            <span class="icon has-text-primary">
              <i class="fas fa-coffee"></i>
            </span>
            y
            <span class="icon has-text-danger">
              <i class="fas fa-heart"></i> 
            </span>
            en Colombia
            <br>
        </p>
    </div>
<!--     <div class="has-text-centered">
        <p class="is-size-7	">
            <a href="/privacy/" alt="Privacy Policy">Privacy Policy</a> / <a href="/tos/" alt="Terms of Service">Terms of Service </a>
        </p>
    </div> -->
  </div>
  </footer>
    <div class="has-background-link-light has-text-dark">
      <div class="container is-fluid">
        <div class="columns">
          <div class="column has-text-left">
              <p class="has-text-centered-mobile is-size-7	">© 2020 Todos los derechos reservados.</p>
          </div>
          <div class="column has-text-right">
              <p class="has-text-centered-mobile is-size-7	">Desarrollado por David Perez & Romario Miranda.</p>
          </div>
        </div>
      </div>
    </div> 

<script src="https://vjs.zencdn.net/7.8.2/video.js"></script>
<script type="text/javascript" src="js/video-player.js"></script>

<script type="text/javascript">

function openTab(evt, tabName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("content-tab");
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tab");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" is-active", "");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " is-active";
}
</script>

<script type="text/javascript">
$(document).ready(function(){
	$(".modal-button").click(function(){
		$(".modal").toggleClass("is-active");
	})
	$(".modal-close, .modal-background").click(function(){
		$(".modal").toggleClass("is-active");
	})
})

/* $(document).keyup(function(e){
    if(e.which==27) {
      $(".modal").toggleClass("is-active");
    }
}); */
</script>

<!-- <script type="text/javascript">
$('#menu a').on('click', fuction(){
    $('a .is-tab').removeClass('is-tab');
    $(this).addClass('is-tab');
});
</script> -->

<script type="text/javascript">
$(document).ready(function(){
	var current = 1,current_step,next_step,steps;
	steps = $("fieldset").length;
	$(".next").click(function(){
		current_step = $(this).parent();
		next_step = $(this).parent().next();
		next_step.show();
		current_step.hide();
		setProgressBar(++current);
	});
	$(".previous").click(function(){
		current_step = $(this).parent();
		next_step = $(this).parent().prev();
		next_step.show();
		current_step.hide();
		setProgressBar(--current);
	});
	setProgressBar(current);
	// Change progress bar action
	function setProgressBar(curStep){
		var percent = parseFloat(100 / steps) * curStep;
		percent = percent.toFixed();
		$(".progress-bar")
			.css("width",percent+"%")
			.html(percent+"%");		
	}
});
</script>
</body>
</html>