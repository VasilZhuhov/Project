$(document).ready(function(){
	

	if($( "#logShow" ).hide()){
		$( "#log" ).click(function() {
			$( "#logShow" ).show();
		});
	}
	
		$( "#exitLog" ).click(function() {
			$( "#logShow" ).hide();
		});

	if($( "#signShow" ).hide()){
		$( "#sign" ).click(function() {
			$( "#signShow" ).show();
		});
	}
	
	$( "#exitSign" ).click(function() {
		$( "#signShow" ).hide();
	});

	//var frmvalidator  = new Validator("register");

	$('span.toggleRegister').click(function(){
		
		$( "#logShow" ).hide();
		$( "#signShow" ).show();
	});
$('#carouselHacked').carousel();

 
});
