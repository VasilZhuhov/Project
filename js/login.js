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

// ###################################################################################
// ###################################################################################
$('#signShow .validation').keyup(function(){
	var $this = $(this);
	var data = {
		"value": $this.val(),
		"name": $this.attr("name")
	}
	if(data["name"].indexOf("password") > -1){
		data["value"] = [$("input[name=password_sign]").val(), $("input[name=password_2]").val()];
	}
	$.ajax({
		url: "php/validation.php",
		type: "POST",
		data: data,
		success: function(result){
			console.log("result: ", result);
			var result = $.parseJSON(result);
			$this.parents(".white_space").find("label").text(result.text).css('color', result.color);
			if(result.status == 1){
				$this.removeClass('correct');
			}
			else{
				$this.addClass('correct');
			}
		}
	})
});

$("#signup").submit(function(){
	// ako ima greshno
	var correct_length = $(this).find(".correct").length;
	if(correct_length != 6)
	{
		alert("Fill the right fields.");
		return false;
	}
})
setInterval(function(){
     	var data = $('#logShow input[name=username_log]').val();
 	    $.ajax({

 	    	url: "php/Username.php",
 	    	type: "POST",
 	    	data: {data: data
 	    		},
 	    	 success: function(result){
 	    		if(result != '')
 	    		{
 	    			$('.logvalidation').css('color', '#2EE619');
 	    			$('.logvalidation').text(result);
					$('#logShow input[name=username_log]').addClass('correct') 	    			


 	    		}
 	    		else
 	    		{
 					$('.logvalidation').css('color','#F71111');
 					$('.logvalidation').text(" Inexistant username");
 					$('#logShow input[name=username_log]').removeClass('correct')
 					

 	    		}
 	    	}
 	    });
     }, 200);







  
            
    


}); // document ready

// ###################################################################################
// ###################################################################################

   // $(".facebook").animate({
   //      	width:'+60px',
   //      	height:'+60px'
   //      });
       
   //  });



// 	var hasError=true;
//     setInterval(function(){
//     	var data = $('#signShow input[name=username_sign]').val();
//     	//alert(data);
// 	    $.ajax({

// 	    	url: "php/Username.php",
// 	    	type: "POST",
// 	    	data: {data: data},
// 	    	 success: function(result){
// 	    		if(result != '')
// 	    		{
// 	    			$('.name_validation').css('color', '#F71111');
// 	    			$('.name_validation').text(result);
// 	    			$('#signShow input[name=username_sign]').removeClass('correct')
//      				hasError=true;


// 	    		}
// 	    		else
// 	    		{
// 					$('.name_validation').css('color','#2EE619');
// 					$('.name_validation').text("Correct!");
// 					$('#signShow input[name=username_sign]').addClass('correct')
// 					hasError=false;

// 	    		}
// 	    	}
// 	    });
//     }, 200);
    
//     setInterval(function(){
//     var password = $('#signShow input[name=password_sign]').val();
//     $.ajax({
//     	url:"php/Password.php",
//     	type:"POST",
//     	data:{password: password},
//     	success:function(result){
//     		if(result != '')
//     		{
//     		$('.pass_validation').css('color', '#F71111');
//     		$('.pass_validation').text(result);
//     		$('#signShow input[name=password_sign]').removeClass('correct')
//     		hasError=true;


//     		}
//     		else
//     		{

// 					$('.pass_validation').css('color','#2EE619');
// 					$('.pass_validation').text("Correct!");
// 					$('#signShow input[name=password_sign]').addClass('correct')
// 					hasError=false;
//     		}

//     	}
//     });
//     }, 200);
//     setInterval(function(){
//     var password_1 = $('#signShow input[name=password_sign]').val();
//     var password_2 = $('#signShow input[name=password_2]').val();
//     $.ajax({
//     	url:"php/PasswordConf.php",
//     	type:"POST",
//     	data:{
//     		password_1: password_1,
//     		  password_2: password_2},
//     	success:function(result){
//     		if(result != '')
//     		{
//     		$('.pass_2_validation').css('color', '#F71111');
//     		$('.pass_2_validation').text(result);
//     		$('#signShow input[name=password_2]').removeClass('correct')
//     		hasError=true;

//     		}
//     		else
//     		{

// 					$('.pass_2_validation').css('color','#2EE619');
// 					$('.pass_2_validation').text("Correct!");
// 					$('#signShow input[name=password_2]').addClass('correct')
// 					hasError=false;
    		
//     		}

//     	}
//     });
//         }, 200);

// setInterval(function(){
//     	var email = $('#signShow input[name=email]').val();
//     	//alert(data);
// 	    $.ajax({

// 	    	url: "php/Email.php",
// 	    	type: "POST",
// 	    	data: {email: email},
// 	    	 success: function(result){
// 	    		if(result != '')
// 	    		{
// 	    			$('.email_validation').css('color', '#F71111');
// 	    			$('.email_validation').text(result);
// 	    			$('#signShow input[name=email]').removeClass('correct')
//     				hasError=true;


// 	    		}
// 	    		else
// 	    		{
// 					$('.email_validation').css('color','#2EE619');
// 					$('.email_validation').text("Correct!");
// 					$('#signShow input[name=email]').addClass('correct')
// 					hasError=false;
	    		
// 	    		}

// 	    	}
// 	    });
//     }, 200);

// setInterval(function(){
//     	var first_name = $('#signShow input[name=first_name]').val();
//     	//alert(data);
// 	    $.ajax({

// 	    	url: "php/Firstname.php",
// 	    	type: "POST",
// 	    	data: {first_name: first_name},
// 	    	 success: function(result){
// 	    		if(result != '')
// 	    		{
// 	    			$('.first_name_validation').css('color', '#F71111');
// 	    			$('.first_name_validation').text(result);
// 	    			$('#signShow input[name=first_name]').removeClass('correct')
//     				hasError=true;


// 	    		}
// 	    		else
// 	    		{
// 					$('.first_name_validation').css('color','#2EE619');
// 					$('.first_name_validation').text("Correct!");
// 					$('#signShow input[name=first_name]').addClass('correct')
// 					hasError=false;
	    		
// 	    		}
// 	    	}
// 	    });
//     }, 200);

// setInterval(function(){
//     	var second_name = $('#signShow input[name=second_name]').val();
//     	//alert(data);
// 	    $.ajax({

// 	    	url: "php/Secondname.php",
// 	    	type: "POST",
// 	    	data: {second_name: second_name},
// 	    	 success: function(result){
// 	    		if(result != '')
// 	    		{
// 	    			$('.second_name_validation').css('color', '#F71111');
// 	    			$('.second_name_validation').text(result);
// 	    			$('#signShow input[name=second_name]').removeClass('correct')
//     				hasError=true;


// 	    		}
// 	    		else
// 	    		{
// 					$('.second_name_validation').css('color','#2EE619');
// 					$('.second_name_validation').text("Correct!");
// 					$('#signShow input[name=second_name]').addClass('correct')
// 					hasError=false;
	    		
// 	    		}
// 	    	}
// 	    });
//     }, 200);

// setInterval(function(){
//     	var Image_validation = $('#signShow input[name=second_name]').val();
//     	//alert(data);
// 	    $.ajax({

// 	    	url: "php/Image_validation.php",
// 	    	type: "POST",
// 	    	data: {Image_validation: Image_validation},
// 	    	 success: function(result){
// 	    		if(result != '')
// 	    		{
// 	    			$('.Image_validation').css('color', '#F71111');
// 	    			$('.Image_validation').text(result);
// 	    			$('#signShow input[name=Image_validation]').removeClass('correct')
//     				hasError=true;


// 	    		}
// 	    		else
// 	    		{
// 					$('.Image_validation').css('color','#2EE619');
// 					$('.Image_validation').text("Correct!");
// 					$('#signShow input[name=Image_validation]').addClass('correct')
// 					hasError=false;
	    		
// 	    		}
// 	    		$('input[type="submit"]').prop('disabled', hasError);
// 	    	}
// 	    });
//     }, 200);
    	
		



