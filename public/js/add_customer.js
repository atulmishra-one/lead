// JavaScript Document
$(document).ready(function(e) {
    
	$('.loader').css('margin-left','350px');
	$('#ad_cus_frm').submit(function(e) {
        
		/*if(document.frm.fname.value == '')
		{
			document.frm.fname.focus();
			return false;	
		}*/
		$('.loader').show();
    });
	
	
/*******************************************************/

		// Submit the form //
	
/******************************************************/
	
	$('#ad_cus_frm').ajaxForm(function(data){
		
			//alert(data);
			
			
			if(data == '1')
			{
				window.location.hash = '#success';
				$('#ad_cus_frm')[0].reset();
				$('.loader').hide();
				$('#res').html('<div class="success">Customer added Successully!.</div>');
				
				
			}
			else
			{
				$('.loader').hide();
				alert(data);
				
			}
		
	});
});