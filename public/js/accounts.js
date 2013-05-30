// JavaScript Document
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
		$('.loader').hide();
		
			if(data == 'u')
			{
				alert("Oops! Something went wrong ! Please refresh");
			}
			else if(data == 'e')
			{
				alert("Oops! Something went wrong ! Please refresh");
			}
			else
			{
				window.location.hash = '#success';
				$('#frm')[0].reset();
				$('#res').html('<div class="success">Account added Successully!.<br />Username: '+data+' &nbsp;<br />Password: '+data+'</div>');
				
			}
		
	});
	
	
});