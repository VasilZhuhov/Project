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
    $('#instructions').click(function(){
        $( '.gameButtons' ).hide();
        $( '.menuImg').hide();
        $( '.menuImg1' ).hide();
        $( '.instructions').show();
    });
    $('#Menu').click(function(){
        $( '.instructions' ).hide();
        $( '.gameButtons' ).show();
        $( '.menuImg' ).show();
        $( '.menuImg1' ).show();     
    });

    var elements = document.querySelectorAll('.changeImg');
   
    for(i=0; i<elements.length;i++)
    {
        elements[i].addEventListener('click',function(){
            
            var newUrl = this.getAttribute('data-href');
            var newAtt = this.getAttribute('data-att');
            var newMid = this.getAttribute('data-mid');
            var newDef = this.getAttribute('data-def');
            document.getElementById('mainImg').src = newUrl;
            document.getElementById('attTeam1').innerHTML = newAtt;
            document.getElementById('midTeam1').innerHTML = newMid;
            document.getElementById('defTeam1').innerHTML = newDef;
        });
    }   
    
    var elements = document.querySelectorAll('.changeImg1');
    
    for(i=0; i<elements.length;i++)
    {
        elements[i].addEventListener('click',function(){
            
            var newUrl = this.getAttribute('data-href');
            var newAtt = this.getAttribute('data-att');
            var newMid = this.getAttribute('data-mid');
            var newDef = this.getAttribute('data-def');
            document.getElementById('mainImg1').src = newUrl;
            document.getElementById('attTeam2').innerHTML = newAtt;
            document.getElementById('midTeam2').innerHTML = newMid;
            document.getElementById('defTeam2').innerHTML = newDef;
        });
    }  
    $('#select').change(function(){
        if ($(this).val() === $('#select1').val()) 
        {
            $('#check').attr('disabled',true);
        }
        else
        {
            $('#check').removeAttr('disabled');
        }
    });
    $('#select1').change(function(){
        if ($(this).val() === $('#select').val()) 
        {
           $('#check').attr('disabled',true);
        }
        else
        {
            $('#check').removeAttr('disabled');
        }
    });
});