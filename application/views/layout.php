<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Lead Manager</title>
<link rel="stylesheet" href="<?=site_url()?>public/css/common.css" />
<link rel="stylesheet" href="<?=site_url()?>public/css/layout.css" />
<script src="<?=base_url()?>public/js/jquery-1.6.2.min.js"></script>
<script src="<?=base_url()?>public/js/jquery.form.js"></script>
<link rel="stylesheet" href="<?=base_url()?>public/selectbox/jquery.selectBox.css" />
<script src="<?=base_url()?>public/selectbox/jquery.selectBox.js"></script>
<link rel="stylesheet" href="<?=base_url()?>public/radio/css/zebra_transform.css" />
<script src="<?=base_url()?>public/radio/javascript/zebra_transform.js"></script>
<script src="<?=base_url()?>public/js/delete.js"></script>


<?php if(isset($scripts ) ):
	
	foreach($scripts as $js ):
	?>
	
        <script src="<?=$js?>"></script>
        
			
	<?php 
	endforeach;
endif;	
?>
<script>
	$(document).ready(function(e) {
        $("select").selectBox();
		 //var transform = new $.Zebra_TransForm();
		 //$.Zebra_TransForm($('input[type="checkbox"], input[type="radio"]'));
		 $.Zebra_TransForm($('input[type="radio"]'));
		// $('input.datepicker').Zebra_DatePicker();
    });
</script>
</head>


<body>
<div id="header">
    <div class="logo"><strong>Lead Manager</strong></div>
    <div class="right-nav">
    	<ul>
        	<li><a href="">My Account</a></li>
            <li><a href="">Change Password</a></li>
            <li><a href="">Logout</a></li>
        </ul>
    </div>
</div>

<div id="left">
    <div class="l-header"><span>Menu list</span></div>
    <div id="ul-left-nav">
    	
        	<li><?=anchor('leads', 'Leads')?></li>
            <li><?=anchor('leads/create_lead', 'Create Lead')?></li>
            <li><?=anchor('customer', 'Customers')?></li>
            <li><?=anchor('customer/add_customer', 'Add new Customer')?></li>
            
       
    </div>
</div>

<div id="middle">
    
    	<div class="m-nav">
        	
        </div>
        
        <div class="content">
        
        	<div>
        		
                <?=$content?>
                
                
            </div>
        </div>
    
    
</div>



<div id="footer">
    	<p>Copyright &copy; 2013</p>
</div>


</body>

</html>

