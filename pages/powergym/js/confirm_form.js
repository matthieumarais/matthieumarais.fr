$(function(){
		$("#contact_form2").submit(function(){
			valid=true;
			if($("#nom").val()==""){
				$("#nom").css("border-color","#ff0000");
				$("#nom").next(".error-message").text("*Thank you to indicate your last name");
				valid=false;
			}
			else{
				$("#nom").css("border-color","#000");
				$("#nom").next(".error-message").text("");
				}
			
			if($("#prenom").val()==""){
				$("#prenom").css("border-color","#ff0000");
				$("#prenom").next(".error-message").text("*Thank you to indicate your first name");
				valid=false;
			}
			else{
				$("#prenom").css("border-color","#000");
				$("#prenom").next(".error-message").text("");
				}
			
			
			if($("#mail").val()==""){
				$("#mail").css("border-color","#ff0000");
				$("#mail").next(".error-message").text("Thank you to provide your e-mail");
				valid=false;
			}
			else{
				if(!$("#mail").val().match(/^[a-z0-9\-_.]+@[a-z0-9\-_.]+\.[a-z]{2,3}$/i)){
						$("#mail").css("border-color","#ff0000");
						$("#mail").next(".error-message").text("Thank you to provide your e-mail valid");
						valid=false;
					}
				else{
						$("#mail").css("border-color","#000");
						$("#mail").next(".error-message").text("");
					}
				}				
				
			if(valid==false)
			{

			}
			else
			{
            
                var prenom = $.trim($('#prenom').val());
                var nom = $.trim($('#nom').val());
				var mail = $.trim($('#mail').val());
               
                $.ajax({

                    type: "POST",
                    data: {
                           "prenom":prenom, 
                           "nom":nom,
						   "mail":mail,
                        },
					url:'traitement.php',
					success: function(){
						$('.popup_validation').css('display','block')
					}
                  });
            }					
				
			return false;
						
		});	
		
	});
	
		
$(".fermeture_popup").click(function() {
    window.location.href = "booking.php"; 
});
	
	
$(document).ready(function() {
	// input phone number
	$('body').delegate('input.only_phone_number','keyup',function(){
		if(!$(this).val().match(/^\+?[0-9 ]*$/))	// +numbers or space
			remove_last_input(this);
	});

}); // end of document.ready


function remove_last_input(elm) {
	var val = $(elm).val();
	var cursorPos = elm.selectionStart;
	$(elm).val(	val.substr(0,cursorPos-1) +			// before cursor - 1
				val.substr(cursorPos,val.length)	// after  cursor
	)
	elm.selectionStart = cursorPos-1;				// replace the cursor at the right place
	elm.selectionEnd   = cursorPos-1;
}