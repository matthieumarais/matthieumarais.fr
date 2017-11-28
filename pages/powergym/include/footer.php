<footer>
  <div id="backToTop"><img src="img/backToTop.png" /></div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <ul>
          <li><a href="index.php">Accueil</a></li>
          <li><a href="presentation.php">Présentation</a></li>
          <li><a href="equipements.php">&Eacute;quipements</a></li>
          <li><a href="tarifs.php">Tarifs</a></li>
          <li><a href="preinscription.php">Pré-inscription</a></li>
          <li><a href="mentions.php">Mentions légales</a></li>
          <li><a href="mailto:powergym974@icloud.com">Contact</a></li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-md-offset-4 footerLogo"><img src="img/logo-powergym.png" alt="powergym" title="powergym" /></div>
      <div class="col-md-4">
        <div class="row">
          <div class="col-xs-2 social fb"><a target="_blank" href="https://www.facebook.com/Powergym974"><img src="img/facebook.png" alt="facebook" title="facebook" /></a></div>
          <div class="col-xs-2 social youtube"><a target="_blank" href ="https://www.youtube.com/channel/UCNHDeN8GC7Exe9aT2RvQO1g"><img src="img/youtube.png" alt="youtube" title="youtube" /></a></div>
          <div class="col-xs-2 social instagram"><a target="_blank" href="https://www.instagram.com/powergym974/"><img src="img/instagram.svg" alt="instagram" title="instagram" /></a></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3">
        <p>&copy; 2017 - Tous droits réservés - Powergym</p>
      </div>
    </div>
  </div>
</footer>
<script>function cookie_expiry_callback(){return 31536000;}</script> 
<script type="text/javascript" id="cookiebanner" src="js/cookiebanner.min.js" data-expires="cookie_expiry_callback" data-message="Nous utilisons les cookies pour améliorer votre expérience. en continuant à visiter ce site, vous acceptez notre utilisation des cookies." data-linkmsg="En savoir plus" data-moreinfo="http://www.cnil.fr/vos-droits/vos-traces/les-cookies/"></script> 
<script type="text/javascript" src="js/jquery.js"></script> 
<script src="js/jquery.bxslider.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/scrollReveal.min.js"></script> 
<script type="text/javascript" src="js/jquery.cookie.js"></script> 
<script type="text/javascript">
$(document).ready(function(){
	/*Burger*/
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
	
	
	
	/*Faire repartir le bxslider*/
	/*Permet quand on clic sur un bullet que le slide reparte sinon il reste fixe*/	
	/*$('.bx-pager-link').click(function () {
		var i = $(this).attr('data-slide-index');
		slider.goToSlide(i);
		slider.stopAuto();
		slider.startAuto();
		return false;
	});*/
	<!--BXSLIDER-->
  $('.slider1').bxSlider({
    slideWidth: 300,
    minSlides: 1,
    maxSlides: 4,
    slideMargin: 5,
	auto:true,
	moveSlides:1,
	controls:false,
	pager:false
  })
	
	/*SCROLLREVEAL*/
	window.scrollReveal = new scrollReveal();
	
	
	
	
	
	/*RETOUR EN HAUT*/
    $("#backToTop").hide();
 
    $(window).scroll(function () {
        if ($(this).scrollTop() > 1000) {
            $('#backToTop').fadeIn();
        } else {
            $('#backToTop').fadeOut();
        }
    });
 
 
    $('#backToTop').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
});

	/*SCROLL DANS LA PAGE*/
	/*Permet d'activer le menu en scrollant dans la page*/
var lastId,
    topMenu = $("#menu_scroll"),
    topMenuHeight = topMenu.outerHeight()+20,
    menuItems = topMenu.find("a"),
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

menuItems.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
  $('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, 500);
  e.preventDefault();
});

$(window).scroll(function(){
   var fromTop = $(this).scrollTop()+topMenuHeight;
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";
   
   if (lastId !== id) {
       lastId = id;
       menuItems
         .parent().removeClass("active")
         .end().filter("[href=#"+id+"]").parent().addClass("active");
   }                   
});
	  
});
</script> 
<script>
function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
    center: {lat: 48.8749971, lng: 2.3012643},
	disableDefaultUI: true

  });

  var image = 'img/favicon.png';
  var beachMarker = new google.maps.Marker({
    position: {lat: 48.8749971, lng: 2.3012643},
    map: map,
    icon: image,
	title:"Multivote - 23 rue Balzac 75010 Paris"
  });
}

    </script> 
<script>

    /* ==============================================
    GOOGLE MAP & IFRAME SCROLL OFF
    =============================================== */
    $('.box-iframe > iframe').addClass('scrolloff');     
    // set the mouse events to none when doc is ready
     
    $('.box-iframe').on("mouseup",function(){               
        // lock it when mouse up
        $(this).children('iframe').addClass('scrolloff');
    });
     
    $('.box-iframe').on("mousedown",function(){             
        // when mouse down, set the mouse events free
        $(this).children('iframe').removeClass('scrolloff');
    });
     
    $('.box-iframe > iframe').mouseleave(function () {       
        // because the mouse up doesn't work... 
        $(this).addClass('scrolloff');                   
        // set the pointer events to none when mouse leaves the map area
        // or you can do it on some other event
    });
</script>
</body></html>