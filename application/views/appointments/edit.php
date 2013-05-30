<fieldset>
	<legend>Edit Appointments ID [<?=$v[0]['appointments_id']?>]</legend>
    
    <?=form_open('', array('id'=>'frm'))?>
    <table class="display-table" cellpadding="6" cellspacing="0">
    
    	<tr>
        	<td>Name</td><td><input type="text" name="name" value="<?=$v[0]['name']?>" size="30" /></td>
        </tr>
        
        <tr>
        	<td>Type</td><td>
            <select name="type">
            <option value="0" <?=($v[0]['type'] == 0)? 'selected':''?>>Call</option>
            <option value="1" <?=($v[0]['type'] == 1)? 'selected':''?>>Meeting</option>
            </select></td>
            <td>
            	Status
            </td>
            <td>
            	<select name="status">
                	<option <?=($v[0]['status'] == 'Planned')? 'selected':''?>>Planned</option>
                    <option <?=($v[0]['status'] == 'Held')? 'selected':''?>>Held</option>
                    <option <?=($v[0]['status'] == 'Not Held')? 'selected':''?>>Not Held</option>
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
            <td><input type="text" name="date" value="<?=$v[0]['date']?>" /></td>
            <td>Time</td>
            <td><input type="time" name="time" value="<?=$v[0]['time']?>" /></td>
        </tr>
        <tr>
        	<td>
            	Description
            </td>
            <td colspan="4">
            	<textarea name="details" cols="60" rows="3"><?=$v[0]['details']?></textarea>
            </td>
        </tr>
        <tr>
        	<td>
            	<label for="rem">Send Reminder SMS</label>
            </td>
            <td>
            	<input type="checkbox" value="1" name="reminder" id="rem" <?=($v[0]['reminder'] == 1)? 'checked':''?> />
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