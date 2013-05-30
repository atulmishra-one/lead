<fieldset>
	<legend>Book Appointments</legend>
    
    <?=form_open('', array('id'=>'frm'))?>
    <table class="display-table" cellpadding="6" cellspacing="0">
    
    	<tr>
        	<td>Name</td><td><input type="text" name="name" size="30" /></td>
        </tr>
        
        <tr>
        	<td>Type</td><td><select name="type"><option value="0">Call</option><option value="1">Meeting</option></select></td>
            <td>
            	Status
            </td>
            <td>
            	<select name="status">
                	<option>Planned</option>
                    <option>Held</option>
                    <option>Not Held</option>
                </select>
            </td>
        </tr>
        
        <tr>
        	<td>Assinged to</td>
            <td><select name="assigned_to">
            </select></td>
        </tr>
        
        <tr>
        	<td>Date</td>
            <td><input type="text" name="date" /></td>
            <td>Time</td>
            <td><input type="time" name="time" /></td>
        </tr>
        <tr>
        	<td>
            	Description
            </td>
            <td colspan="4">
            	<textarea name="details" cols="60" rows="3"></textarea>
            </td>
        </tr>
        <tr>
        	<td>
            	<label for="rem">Send Reminder SMS</label>
            </td>
            <td>
            	<input type="checkbox" value="1" name="reminder" id="rem" />
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