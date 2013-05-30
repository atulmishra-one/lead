// JavaScript Document
$(document).ready(function(e) {
	
	$('.loader').css('margin-left','350px');
	
	$('#edit_lead').submit(function(e) {
        
		$('.loader').show();
    });
	
	$('#edit_lead').ajaxForm(function(data){
		
		
		if(data == '1')
			{
				window.location.hash = '#success';
				$('#edit_lead')[0].reset();
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