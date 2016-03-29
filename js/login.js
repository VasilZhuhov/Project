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

	    	url: "php/Username.php",
	    	type: "POST",
	    	data: {data: data},
	    	 success: function(result){
	    		if(result != '')
	    		{
	    			$('.name_validation').css('color', '#F71111');
	    			$('.name_validation').text(result);
	    			$('#signShow input[name=username_sign]').removeClass('correct')


	    		}
	    		else
	    		{
					$('.name_validation').css('color','#2EE619');
					$('.name_validation').text("Correct!");
					$('#signShow input[name=username_sign]').addClass('correct')
	    		}
	    	}
	    });
    }, 200);
    
    setInterval(function(){
    var password = $('#signShow input[name=password_sign]').val();
    $.ajax({
    	url:"php/Password.php",
    	type:"POST",
    	data:{password: password},
    	success:function(result){
    		if(result != '')
    		{
    		$('.pass_validation').css('color', '#F71111');
    		$('.pass_validation').text(result);
    		$('#signShow input[name=password_sign]').removeClass('correct')
    		}
    		else
    		{

					$('.pass_validation').css('color','#2EE619');
					$('.pass_validation').text("Correct!");
					$('#signShow input[name=password_sign]').addClass('correct')
    		}

    	}
    });
    }, 200);
    setInterval(function(){
    var password_1 = $('#signShow input[name=password_sign]').val();
    var password_2 = $('#signShow input[name=password_2]').val();
    $.ajax({
    	url:"php/PasswordConf.php",
    	type:"POST",
    	data:{
    		password_1: password_1,
    		  password_2: password_2},
    	success:function(result){
    		if(result != '')
    		{
    		$('.pass_2_validation').css('color', '#F71111');
    		$('.pass_2_validation').text(result);
    		$('#signShow input[name=password_2]').removeClass('correct')
    		}
    		else
    		{

					$('.pass_2_validation').css('color','#2EE619');
					$('.pass_2_validation').text("Correct!");
					$('#signShow input[name=password_2]').addClass('correct')
    		}

    	}
    });
        }, 200);

setInterval(function(){
    	var email = $('#signShow input[name=email]').val();
    	//alert(data);
	    $.ajax({

	    	url: "php/Email.php",
	    	type: "POST",
	    	data: {email: email},
	    	 success: function(result){
	    		if(result != '')
	    		{
	    			$('.email_validation').css('color', '#F71111');
	    			$('.email_validation').text(result);
	    			$('#signShow input[name=email]').removeClass('correct')


	    		}
	    		else
	    		{
					$('.email_validation').css('color','#2EE619');
					$('.email_validation').text("Correct!");
					$('#signShow input[name=email]').addClass('correct')
	    		}
	    	}
	    });
    }, 200);



});
