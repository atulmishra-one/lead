// JavaScript Document
$(document).ready(function(e) {
	
	$('.loader').css('margin-left','350px');
	$('.loader').css('margin-top','100px');
	
	$('#edit_lead1').submit(function(e) {
        
		$('.loader').show();
		
    });
	
	/******************************************/
		//submit the form //
	/******************************************/
	
	$('#edit_lead1').ajaxForm(function(data){
		
		
		if(data == '1')
			{
				window.location.hash = '#success';
				$('#edit_lead1')[0].reset();
				$('.loader').hide();
				$('#res').html('<div class="success">Lead Edited Successully!.</div>');
				
				
			}
			else
			{
				$('.loader').hide();
				alert(data);
				
			}
		
	});
	
});