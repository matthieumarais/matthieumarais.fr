<footer>
  <div class="bg_footer">
    <div class="container cf">
      <div class="infos">
        <ul>
          <li><a href="#">Informations légales</a></li>
          <li><a href="contact.php">Contactez-nous</a></li>
          <li><a href="contact.php">Inscription newsletter</a></li>
        </ul>
      </div>
      <div class="mentions">
        <ul>
          <li><a href="#">Mentions légales</a></li>
          <li><a href="#">CGV</a></li>
        </ul>
      </div>
      <div class="paypal">
        <p>PAIMENT S&Eacute;CURIS&Eacute;</p>
        <a target="_blank" href="https://www.paypal.com/fr/webapps/mpp/paypal-safety-and-security"><img src="img/logo_paypal.jpg" title="paypal" alt="paypal"/></a> </div>
      <div class="social">
        <ul>
          <li><a target="_blank" href="https://accounts.google.com/ServiceLogin?service=oz&passive=1209600&continue=https://plus.google.com/up/?continue%3Dhttps://plus.google.com/explore?hl%253Dfr%26gpsrc%3Dgplp0#identifier"><i class="icon-google-plus2"></i></a></li>
          <li><a target="_blank" href="https://fr-fr.facebook.com/login/"><i class="icon-facebook2"></i></a></li>
          <li><a target="_blank" href="https://twitter.com/login?lang=fr"><i class="icon-twitter"></i></a></li>
        </ul>
        <p>Recommandé par :</p>
        <a href="https://www.petitfute.com"><img src="img/petit_fute.svg" title="petit futé" alt="petit futé"/></a> </div>
    </div>
    <div id="arrow"><img src="img/fleche-top.svg" alt="#"></div>
  </div>
  <section class="mentions_marcorel">
    <div class="container">
      <p>Ce site est un exercice d’école dont la consultation est strictement restreinte par un accès protégé depuis le site www.marcorel.com, site web de l’organisme de formation Marcorel, 16 villa Frédéric Mistral 75015 Paris. La reproduction ou la représentation totale ou partielle d’un de ces éléments, sur quel que support que ce soit, est formellement interdite.</p>
    </div>
  </section>
</footer>
<script src="js/jquery-1.11.2.js"></script> 
<script src="js/jquery.bxslider.min.js"></script> 
<script type="text/javascript" src="js/scrollreveal.min.js"></script> 
<script src='https://maps.googleapis.com/maps/api/js?key=&sensor=false&extension=.js'></script>
<script type="text/javascript" id="cookiebanner" src="http://cookiebanner.eu/js/cookiebanner.min.js"></script>
<script>
	<!----------------------------------------------------  BX SLIDER  --------------------------------------------------> 
	
	$(document).ready(function(){
  $('.bxslider').bxSlider({
  	controls:false,
		auto:true,
  });
});

</script> 

<!----------------------------------------------------  GOOGLE MAP  --------------------------------------------------> 
<script>
    google.maps.event.addDomListener(window, 'load', init);
    var map;
    function init() {
        var mapOptions = {
            center: new google.maps.LatLng(44.786709,0.409697),
            zoom: 8,
            zoomControl: true,
            zoomControlOptions: {
                style: google.maps.ZoomControlStyle.DEFAULT,
            },
            disableDoubleClickZoom: true,
            mapTypeControl: true,
            mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
            },
            scaleControl: true,
            scrollwheel: false,
            panControl: true,
            streetViewControl: true,
            draggable : true,
            overviewMapControl: true,
            overviewMapControlOptions: {
                opened: false,
            },
            mapTypeId: google.maps.MapTypeId.ROADMAP,
        }
        var mapElement = document.getElementById('Meilhan');
        var map = new google.maps.Map(mapElement, mapOptions);
        var locations = [
['La ferme \"Meilhan\"', 'undefined', 'undefined', 'undefined', 'undefined', 43.779466, 0.17595499999993, 'https://mapbuildr.com/assets/img/markers/default.png']
        ];
        for (i = 0; i < locations.length; i++) {
			if (locations[i][1] =='undefined'){ description ='';} else { description = locations[i][1];}
			if (locations[i][2] =='undefined'){ telephone ='';} else { telephone = locations[i][2];}
			if (locations[i][3] =='undefined'){ email ='';} else { email = locations[i][3];}
           if (locations[i][4] =='undefined'){ web ='';} else { web = locations[i][4];}
           if (locations[i][7] =='undefined'){ markericon ='';} else { markericon = locations[i][7];}
            marker = new google.maps.Marker({
                icon: markericon,
                position: new google.maps.LatLng(locations[i][5], locations[i][6]),
                map: map,
                title: locations[i][0],
                desc: description,
                tel: telephone,
                email: email,
                web: web
            });
link = '';     }

}
<!----------------------------------------------------------------------------------------->
$("#compte").click(function(){
		$("#overlay-popup").fadeIn(500,function(){
			$("#block-popup").fadeIn(800);	
		});	
	});
	
	$("#close-popup,#bg-close").click(function(){
		$("#overlay-popup").fadeOut(500,function(){
			$("#block-popup").fadeOut(800);	
		});		
	})

$('#arrow').hide();
$(window).scroll(function(){
		if($(window).scrollTop() >= 1000){
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
<!---------------------------------------  SCROLLREVEAL  ------------------------------------------>
$(document).ready(function(){
	
	window.scrollReveal = new scrollReveal();
	
	$('#hamburger').click(function(){
		$('#burger_nav').toggleClass('burger_affiche')
		});
		
});
<!---------------------------------------------------  BURGER  ------------------------------------>

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

	
	
</script>
</body></html>