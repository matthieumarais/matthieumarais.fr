<footer>
  <div class="container">
  <div id="arrow"><img src="../img/fleche-top.svg" alt="#"></div>
    <nav class="footer">
      <ul class="cf">
        <li>
          <ul class="info">
            <li><a href="index.php">ACCUEIL</a></li>
            <li><a href="portfolio.php">PORTFOLIO</a></li>
            <li><a href="apropos.php">&Agrave; PROPOS</a></li>
            <li><a href="mailto:mqtthieu@gmail.com">@ E-mail</a></li>
          </ul>
        </li>
        <li> <img src="../img/logo_nav.svg" alt="logo nav" title="logo nav"> </li>
        <li>
          <ul class="social">
            <li><a href="https://twitter.com/MatthieuMarais" target="_blank">&#xf081;</a></li>
            <li><a href="https://plus.google.com/106518323139103861121" rel="publisher" target="_blank">&#xf0d4;</a></li>
            <li><a href="skype:darkhermes?chat" target="_blank">&#xf17e;</a></li>
            <li><a href="https://www.linkedin.com/in/matthieu-marais-515306132" target="_blank">&#xf08c;</a></li>
          </ul>
        </li>
      </ul>
      <p>Mentions légales - Tous droits réservés © 2017 - Matthieu MARAIS</p>
    </nav>
  </div>
</footer>

<script src="js/jquery-1.11.2.js"></script>
<script type="text/javascript" src="js/scrollreveal.min.js"></script>
<script type="text/javascript" src="js/zoombox.js"></script>
<script type="text/javascript">

	$(document).ready(function(){
		
		$("#hamburger").click(function(){
			$(".nav_pages").toggleClass("affiche-menu")
		});
	});
	
        jQuery(function($){
            $('a.zoombox').zoombox();

            /**
            * Or You can also use specific options
            $('a.zoombox').zoombox({
                theme       : 'zoombox',        //available themes : zoombox,lightbox, prettyphoto, darkprettyphoto, simple
                opacity     : 0.8,              // Black overlay opacity
                duration    : 800,              // Animation duration
                animation   : true,             // Do we have to animate the box ?
                width       : 600,              // Default width
                height      : 400,              // Default height
                gallery     : true,             // Allow gallery thumb view
                autoplay : false                // Autoplay for video
            });
            */
        });
     
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});


 var trigger = $('#hamburger'),
        isClosed = true;

    trigger.click(function () {
      burgerTime();
    });

    function burgerTime() {
      if (isClosed == true) {
     
		trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = false;
      } else {
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = true;
      }
    }
<!---------------------------------------  SCROLLREVEAL  ------------------------------------------>
$(document).ready(function(){
	
	window.scrollReveal = new scrollReveal();
	});
$('#arrow').hide();
$(window).scroll(function(){
		if($(window).scrollTop() >= 500){
			$('#arrow').fadeIn("slow");
		}else{
			$('#arrow').fadeOut("slow");
		}
	});
	
	$('#arrow').click(function(){
		$('body,html').animate({
			scrollTop: 0
		}, 1000);
		return false;	
	});

$("#send").click(function(){

	
	$("#close-popup,#bg-close").click(function(){
		$("#content-popup").fadeOut(500,function(){
			$("#popup").fadeOut(800);	
		});	
	});
});
</script>
</body>
</html>
