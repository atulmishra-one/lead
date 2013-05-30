<fieldset>
	<legend>Edit Lead ID [<?=$v[0]['customer_leads_id']?>]</legend>
        <?=form_open('', array('id'=>'edit_lead1'))?>  
        <div class="loader"><img src="<?=base_url()?>public/images/ajax-loader.gif" />&nbsp;&nbsp;Proccessing.....</div>
        		<table border="0" cellspacing="0" cellpadding="6" width="100%" class="display-table">
                
  <tr>
    <td>Customer <sup>*</sup></td>
    <td>
    	<select name="customer">
				
					<option value="0" disabled="disabled" selected="selected">-Customer name-</option>
					<?php foreach($customers as $c): ?>
                    
                    	<option value="<?=$c['customers_id']?>" <?=($v[0]['customer_id'] == $c['customers_id'])? 'selected':''?>><?=$c['fname']?>&nbsp;<?=$c['lname']?></option>
                    
                    <?php endforeach; ?>
				</select>
    
    </td>
    <td>Lead Status: </td>
    <td>
    <select name="lead_status">
    	<option <?=($v[0]['lead_status'] == 'Open')? 'selected':''?>>Open</option>
        <option value="inprocess" <?=($v[0]['lead_status'] == 'inprocess')? 'selected':''?>>In Process</option>
        <option <?=($v[0]['lead_status'] == 'Dead')? 'selected':''?>>Dead</option>
    </select>
    </td>
  </tr>
  <tr>
    <td>Lead Priority: </td>
    <td><select name="lead_priority">
    	<option <?=($v[0]['lead_priority'] == 'Urgent')? 'selected':''?>>Urgent</option>
        <option <?=($v[0]['lead_priority'] == 'Normal')? 'selected':''?>>Normal</option>
        <option <?=($v[0]['lead_priority'] == 'Low')? 'selected':''?>>Low</option>
    </select></td>
    <td>Date: </td>
    <td><input type="text" name="date" class="datepicker" value="<?=$v[0]['date']?>" />
 
    </td>
  </tr>
  <tr>
    <td>Assigned to:</td>
    <td><select name="assigned_to">
    	<option></option>
    </select></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Lead Summary</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
  	<td></td>
    <td colspan="3"><textarea name="summary" cols="90" rows="8"><?=$v[0]['summary']?></textarea></td>
   	
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><input type="submit" name="btn1" value="Submit" /></td>
    
    <td>&nbsp;</td>
  </tr>
</table>

<?=form_close()?>

</fieldset>