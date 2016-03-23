$(document).ready(function(){
	//alert(1);

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

    setInterval(function(){
    	var data = $('#signShow input[name=username_sign]').val();
    	//alert(data);
	    $.ajax({

	    	url: "../php/DeleteMeLater.php",
	    	type: "POST",
	    	data: {data: data},
	    	success: function(result){
	    		$('.removeLater').text(result);
	    	}
	    });
    }, 200);



});
