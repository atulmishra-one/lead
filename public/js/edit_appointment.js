// JavaScript Document
$(document).ready(function(e) {
    
	
	$('.loader').css('margin-left','350px');
	
	$('#frm').submit(function(e) {
        
		$('.loader').show();
    });
	
	/******************************************/
		//submit the form //
	/******************************************/
	
	
   $('#frm').ajaxForm(function(data){
		
		
		if(data == '1')
			{
				window.location.hash = '#success';
				$('#frm')[0].reset();
				$('.loader').hide();
				$('#res').html('<div class="success">Appointment Edited Successully!.</div>');
				
				
			}
			else
			{
				$('.loader').hide();
				alert(data);
				
			}
		
	});
	
	
});// JavaScript Document