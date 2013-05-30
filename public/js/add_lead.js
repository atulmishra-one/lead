// JavaScript Document
$(document).ready(function(e) {
    
	$('#r2').click(function(e) {
        $('#existing').hide();
		$('#new').fadeIn("slow");
    });
	
	$('#r1').click(function(e) {
        $('#new').hide();
		$('#existing').fadeIn("slow");
    });
	
	/*****************************************/
	
	$('.loader').css('margin-left','350px');
	
	$('#add_lead').submit(function(e) {
        
		$('.loader').show();
    });
	
	/******************************************/
		//submit the form //
	/******************************************/
	
	$('#add_lead').ajaxForm(function(data){
		
		
		if(data == '1')
			{
				window.location.hash = '#success';
				$('#add_lead')[0].reset();
				$('.loader').hide();
				$('#res').html('<div class="success">Lead added Successully!.</div>');
				
				
			}
			else
			{
				$('.loader').hide();
				alert(data);
				
			}
		
	});
	/****************************************************************************/
	
	$('#add_lead1').submit(function(e) {
        
		$('.loader').show();
    });
	
	/******************************************/
		//submit the form //
	/******************************************/
	
	$('#add_lead1').ajaxForm(function(data){
		
		
		if(data == '1')
			{
				window.location.hash = '#success';
				$('#add_lead1')[0].reset();
				$('.loader').hide();
				$('#res').html('<div class="success">Lead added Successully!.</div>');
				
				
			}
			else
			{
				$('.loader').hide();
				alert(data);
				
			}
		
	});
	
	
	
});