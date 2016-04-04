$(document).ready(function(){
	
	$('#play').click(function(){
		$( '.gameButtons' ).hide();
        $( '.menuImg' ).hide();
        $( '.menuImg1' ).hide();
		$( '.teamSelection' ).show();
	});
    $('#backToMenu').click(function(){
        $( '.teamSelection' ).hide();
        $( '.gameButtons' ).show();
        $( '.menuImg' ).show();
        $( '.menuImg1' ).show();
        
    });

    var elements = document.querySelectorAll('.changeImg');
   
    for(i=0; i<elements.length;i++)
    {
        elements[i].addEventListener('click',function(){
            
            var newUrl = this.getAttribute('data-href');
            var newStat = this.getAttribute('data-stats');
            document.getElementById('mainImg').src = newUrl;
            document.getElementById('mainStat').innerHTML = newStat;
          
        });
    }   
     
    var elements = document.querySelectorAll('.changeImg1');
    
    for(i=0; i<elements.length;i++)
    {
        elements[i].addEventListener('click',function(){
            
            var newUrl = this.getAttribute('data-href');
            var newStat = this.getAttribute('data-stats');
            document.getElementById('mainImg1').src = newUrl;
            document.getElementById('mainStat1').innerHTML = newStat;
          
    
        });
    }   
   

});