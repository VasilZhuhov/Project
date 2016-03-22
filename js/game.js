$(document).ready(function(){
	
	$('#play').click(function(){
		$( '.gameButtons' ).hide();
		$( '.teamSelection' ).show();
	});
    $('#backToMenu').click(function(){
        $( '.teamSelection' ).hide();
        $( '.gameButtons' ).show();
        
    });
   

});
        function setImage1(select){
            var image = document.getElementsByName("image-swap1")[0];
            image.src = select.options[select.selectedIndex].value;
        }
        function setImage(select){
            var image = document.getElementsByName("image-swap")[0];
            image.src = select.options[select.selectedIndex].value;
        }