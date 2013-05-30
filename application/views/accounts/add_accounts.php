<fieldset>
	<legend>Add a New Account</legend>
    
    <?=form_open('', array('id'=>'frm'))?>
    
    <table class="display-table" cellpadding="6" cellspacing="0">
    
    	<tr>
        	<td>Name</td><td><input type="text" name="name" size="30" value="" /></td>
        </tr>
        
        <tr>
        	<td>Mobile</td><td>
            	<input type="text" name="mobile" size="30" />
            </td>
            <td>
            	Email
            </td>
            <td>
            	<input type="email" name="email" size="30" />
            </td>
        </tr>
        
        
        <tr>
        	<td>
            	Notes
            </td>
            <td colspan="4">
            	<textarea name="details" cols="60" rows="3"></textarea>
            </td>
        </tr>
        <tr>
        	<td>
            	
            </td>
            <td>
            	
            </td>
        </tr>
        
        <tr>
        	<td></td>
            <td><input type="submit" name="btn" value="Submit" /></td>
            <td></td>
        </tr>
    
    
    </table>
    <?=form_close()?>
</fieldset>