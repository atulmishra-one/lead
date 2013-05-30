<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<script src="<?=base_url()?>public/js/jquery-1.6.2.min.js"></script>
<!--<script src="<?=base_url()?>SpryAssets/SpryAccordion.js" type="text/javascript"></script>-->
<link href="<?=base_url()?>public/css/common.css" rel="stylesheet" type="text/css">
<link href="<?=base_url()?>public/SexyButtons/sexybuttons.css" rel="stylesheet" type="text/css">
<link href="<?=base_url()?>SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css">
<link href="<?=base_url()?>SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css">

<script src="<?=base_url()?>public/js/jquery.form.js"></script>
<link rel="stylesheet" href="<?=base_url()?>public/selectbox/jquery.selectBox.css" />
<script src="<?=base_url()?>public/selectbox/jquery.selectBox.js"></script>
<link rel="stylesheet" href="<?=base_url()?>public/radio/css/zebra_transform.css" />
<script src="<?=base_url()?>public/radio/javascript/zebra_transform.js"></script>
<script src="<?=base_url()?>public/js/delete.js"></script>
<script src="<?=base_url()?>public/js/formToWizard.js"></script>
<script>
	$(document).ready(function(e) {
		$('.prev').addClass('sexybutton sexysimple sexyred');
        $("select").selectBox();
		 //var transform = new $.Zebra_TransForm();
		 //$.Zebra_TransForm($('input[type="checkbox"], input[type="radio"]'));
		 $.Zebra_TransForm($('input[type="radio"]'));
		// $('input.datepicker').Zebra_DatePicker();
		$('#ad_cus_frm').formToWizard({ submitButton: 'Add Customer' })
    });
</script>
<?php if(isset($scripts ) ):
	
	foreach($scripts as $js ):
	?>
	
        <script src="<?=$js?>"></script>
        
			
	<?php 
	endforeach;
endif;	
?>
<style>
ul#nav {margin: 0 0 0 200px; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; width:85%; font-size:12px}
ul.drop a { display:block; color: #fff; font-family: Verdana; font-size: 14px; text-decoration: none; font-size:12px }
ul.drop, ul.drop li, ul.drop ul { list-style: none; margin: 0; padding: 0;  background: url(<?=base_url()?>public/images/bg.png) #555;  color: #fff;}
ul.drop { position: relative; z-index: 597; float: left; }
ul.drop li { float: left; line-height: 1.3em; vertical-align: middle; zoom: 1; padding: 5px 10px; }
ul.drop li.hover, ul.drop li:hover { position: relative; z-index: 599; cursor: default; background: #1e7c9a; }
ul.drop ul { visibility: hidden; position: absolute; top: 100%; left: 0; z-index: 598; width: 195px; background: #555; border: 1px solid #fff; }
ul.drop ul li { float: none; }
ul.drop ul ul { top: -2px; left: 100%; }
ul.drop li:hover > ul { visibility: visible }
/**************************************************/
body{
	margin:0;
	background:#FFF;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
}
.main-wrapper{
	border:1px solid #fff;
	box-shadow:0 0 2px #99FFCC;
	width:96%;
	margin:auto;
}
.clear{
	clear:both;
}
.main-left{
	float:left;
	width:200px;
}
.main-content{
	margin-top:20px;
	float:left;
	width:80%;
	margin-left:10px;
}
.main-utils{
	margin-top:30px;
	margin-left:200px;
	border:2px solid #FFC;
	padding:4px;
	background:#FFF;
}
#res{
	margin-left:200px;
}
.success{
border: 2px solid #BBDF8D;
padding: 10px;
padding-left: 35px;
background: url(<?=base_url()?>public/images/ico-done.gif) 10px 50% no-repeat #EAF7D9;
}
.add_icon{
	background:url(<?=base_url()?>public/images/add.png) center no-repeat;
	padding:12px;
}
.view_icon{
	background:url(<?=base_url()?>public/images/save-icon.gif) center no-repeat;
	padding:12px;
}
.account_icon{
	background:url(<?=base_url()?>public/images/user-white.png) center no-repeat;
	padding:12px;
}
.appoint_icon{
	background:url(<?=base_url()?>public/images/appointment.png) center no-repeat;
	padding:12px;
}
.display-table{
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:12px;
}
.display-table thead{
	text-align:left;
	background:url(<?=base_url()?>public/images/sidemenu-repeat-hover.jpg);
	
}
.display-table thead th{
	padding:6px;
	border-bottom:1px solid #D1D1D1;
}
.display-table tbody tr td{
	padding:6px;
}
.display-table tbody{
	background:#FFF;
}
fieldset{
	border:1px solid #903;
}
fieldset legend{
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-weight:bold;
}
.add{
	font-family:Tahoma, Geneva, sans-serif;
	font-size:14px;
	border:1px solid #4B4B4B;
	width:140px;
	padding:2px;
	background:#0C6
}
.add:hover{
	background:#FFF;
}
.add a{
	text-decoration:none;
	color:#000;
}
sup{
	color:#F00;
	font-weight:bold;
}
h2{
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:100%;
	color:#999;
	padding:0;
	margin:2px;
}
.loader{
	border:1px solid #999;
	height:20px;
	width:200px;
	margin-top:300px;
	position:absolute;
	background:#FFC;
	padding:10px;
	display:none;
}
.pagination ul li{
	display:inline;
	border-top:1px solid #CCC;
	border-bottom:1px solid #CCC;
	border-left:1px solid #CCC;
	padding:5px;
	background:#FFC
}
.pagination ul li a{
	padding:10px;
	color:#999;
	text-decoration:none;
}
.pagination ul li a:hover{
	color:#333;
}

.pagination ul .active a{
	color:#CCC;
}
.next, .prev{
	font-family:Tahoma, Geneva, sans-serif;
	padding:4px;
}
 #steps { list-style:none; width:100%; overflow:hidden; margin:0px; padding:0px; font-family:Tahoma, Geneva, sans-serif}
        #steps li {font-size:24px; float:left; padding:10px; color:#b0b1b3;}
        #steps li span {font-size:11px; display:block;}
        #steps li.current { color:#000;}
        #makeWizard { background-color:#b0232a; color:#fff; padding:5px 10px; text-decoration:none; font-size:18px;}
        #makeWizard:hover { background-color:#000;}
</style>
<!--<link href="../../SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
<script src="../../SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>-->
</head>

<body>
<a name="success"></a>
	<div class="main-wrapper">
    	<div class="main-top">
        
            <div class="main-nav">
            	<ul id="nav" class="drop">
  <li><?=anchor('dashboard', 'Home')?></li>
  <li>Leads
    <ul>
      <li><a href="#">Create New Lead</a></li>
      <li><a href="#">View Leads</a></li>
      <li><a href="#">View Customers Lead</a></li>
    </ul>
  </li>
  <li>Customers
    <ul>
      <li><a href="#">Add New Customer</a></li>
      <li><a href="#">View Customers</a></li>
    </ul>
  </li>
  <li>Settings
    <ul>
      <li class="dir"><a href="#">My Account</a></li>
      <li><a href="#">Change Password</a></li>
      <li><?=anchor('index/logout', 'Logout')?></li>
    </ul>
  </li>
  <li><?=anchor('index/logout', 'Logout')?></li>
</ul>
           </div>
            </div>
            
            	<div class="main-utils">
          
    
    
    
                </div>
                
                	<div id="res"><?=$this->session->flashdata('msg')?></div>
            
            <div class="clear"></div>
            
          <div class="main-left">
           
			  <div id="Accordion1" class="Accordion" tabindex="0">
			    <div class="AccordionPanel">
			      <div class="AccordionPanelTab">&nbsp;&nbsp;Leads</div>
			      <div class="AccordionPanelContent">
                  		<ul>
                        	<li >
                            <?=anchor('leads/create_lead', ' <i class="add_icon"></i>Create New Lead ')?> </li>
      <li><?=anchor('leads', ' <i class="view_icon"></i>View Leads ')?></li>
      <li><?=anchor('leads/customers_lead', ' <i class="view_icon"></i>View Customers Lead ')?></li>
                        </ul>
                  </div>
		        </div>
			    <div class="AccordionPanel">
			      <div class="AccordionPanelTab">&nbsp;&nbsp;Customers</div>
			      <div class="AccordionPanelContent">
                  	<ul>
                    	<li>
                        <?=anchor('customer/add_customer', ' <i class="add_icon"></i>Add New Customer ')?>
                        </li>
      <li>
      <?=anchor('customer', ' <i class="view_icon"></i>View Customers ')?>
      </li>
                    </ul>
                  </div>
		        </div>
                <div class="AccordionPanel">
			      <div class="AccordionPanelTab">&nbsp;&nbsp;Appointments</div>
			      <div class="AccordionPanelContent">
                  	<ul>
                    	<li>
                        <?=anchor('appointments', ' <i class="appoint_icon"></i>View Appointments ')?>
                        </li>
     					 <li><?=anchor('appointments/book',' <i class="add_icon"></i>Book Appointments')?></li>
                    </ul>
                  </div>
		        </div>
                
                <div class="AccordionPanel">
			      <div class="AccordionPanelTab">&nbsp;&nbsp;Accounts</div>
			      <div class="AccordionPanelContent">
                  	<ul>
                    	<li>
                        <?=anchor('accounts/add_account', ' <i class="add_icon"></i>Add New Account ')?>
                        </li>
     					 <li>
                         <?=anchor('accounts', ' <i class="view_icon"></i>View Account ')?>
                         </li>
                    </ul>
                  </div>
		        </div>
                
                
                
                <div class="AccordionPanel">
			      <div class="AccordionPanelTab">&nbsp;&nbsp;Settings</div>
			      <div class="AccordionPanelContent">
                  	<ul>
                    	<li>
                        <?=anchor('profile', ' <i class="account_icon"></i>My Account ')?>
                        </li>
     					 <li><a href="#">Change Password</a></li>
                    </ul>
                  </div>
		        </div>
		      </div>
            

          	
      </div>
          
          <!-- start main-content -->
          <div class="main-content">
          
          		<?=$content?>
       

          </div>
          
          
          <!-- close main-content-->
          
          <div class="clear"></div>
          
          
          <div class="footer">
          	<p> </p>
          	
          </div>
          
    </div>
<script type="text/javascript">
//var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
var Accordion1 = new Spry.Widget.Accordion("Accordion1");
</script>
</body>
</html>