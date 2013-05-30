<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Lead Manager</title>
<link rel="stylesheet" href="<?=config_item('common_css')?>" media="screen" />
<script src="<?=base_url()?>public/js/jquery-1.6.2.min.js"></script>
<script src="<?=base_url()?>public/js/jquery.form.js"></script>
<script>
	$(document).ready(function(e) {
        
		$('#frm').submit(function(e) {
           
		   $('#loader').html('<img src="<?=base_url()?>public/images/ajax-loader.gif" />');
		    
        });
		
		$('#frm').ajaxForm(function(data){
			
			//$('#frm').resetForm();
			$('#loader').empty();
			if(data == 'u')
			{
				$('.error-username').html('<span class="error-text">Username doesnot exists.</span>');
				$('#frm').resetForm();
			}
			else
			{
				$('.error-username').empty();
			}
			if(data == 'p')
			{
				$('.error-password').html('<span class="error-text">Password not valid</span>');
			}
			else
			{
				$('.error-password').empty();
			}
			
			if(data == 's')
			{
				$('#frm').resetForm();
				$('#loader').html('<span class="success-text">Login Successfull....</div>');
				window.location = '<?=site_url('dashboard')?>';
			}
			
		});
    });
</script>
<style>
<!--
body{
	margin:0;
	background:#FFf;
}
.login-box{
	margin-top:100px;
	
}
table{
	border:1px solid #dbedf9;
	background:#f6fbff;
	width:400px;
	margin:auto;
}
table tbody tr td{
	padding:10px;
}
.header{
	font-family:Verdana, Geneva, sans-serif;
	color:#084e96;
	border:none;
	padding:0;
	word-spacing:0.1em;
}
.lt-header{
	background:#b4e1fe;
}
.line{
	border-top:1px solid #dbedf9;
}
-->
</style>
</head>

<body>
<div class="logo"></div>
	
    <div class="login-box">
    	
	<?=form_open('index/doLogin', array('id'=>'frm') )?>
    
    		<table cellpadding="6" cellspacing="0">
            	<tr class="lt-header">
                	<td colspan="4">
                    
                		<strong class="header">Sign into your account</strong>
                   
                    </td>
                </tr>
              <tbody>
                <tr>
                	
                	<td colspan="2"></td>
                    
                    <td>
                  	<strong class="form-label">Username:</strong> <br>

                    <input type="text" name="username" size="50" />
                 	<div class="error-username"></div>
                    </td>
                </tr>
                <tr>
                	<td colspan="2"></td>
                    
                    
                    
                    <td>
                    	<strong class="form-label">Password:</strong><br>

                    <input type="password" name="password" size="50" />
                    <div class="error-password"></div>
                    </td>
                </tr>
                <tr>
                
                    
                	<td colspan="4" align="right" class="line">
                   	<div id="loader" style="float:left;"></div>
                    <div style="float:right">
                    <input type="submit" name="btn" class="btn" value="Login" />
                    </div>
                   
                    </td>
                </tr>
               </tbody> 
            </table>
    </form>
</div>


</body>
</html>