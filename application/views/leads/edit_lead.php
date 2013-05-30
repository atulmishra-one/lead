<fieldset>
	<legend>Edit Lead ID [<?=$v[0]['leads_id']?>]</legend>
 <div class="loader"><img src="<?=base_url()?>public/images/ajax-loader.gif" />&nbsp;&nbsp;Proccessing.....</div>
        <?=form_open('', array('id'=>'edit_lead'))?> 
            <table border="0" cellspacing="0" cellpadding="6" width="100%" class="display-table">
  <tr>
    <td>First name: </td>
    <td><input type="text" name="fname" value="<?=$v[0]['fname']?>" /></td>
    <td>Last name: </td>
    <td><input type="text" name="lname" value="<?=$v[0]['lname']?>" /></td>
    <td>Designation: </td>
    <td><input type="text" name="designation" value="<?=$v[0]['designation']?>" /></td>
  </tr>
  <tr>
    <td>Telephone:</td>
    <td><input type="text" name="telephone" value="<?=$v[0]['telephone']?>" /></td>
    <td>Mobile: </td>
    <td><input type="text" name="mobile" value="<?=$v[0]['mobile']?>" /></td>
    <td>Email: </td>
    <td><input type="text" name="email" value="<?=$v[0]['email']?>" /></td>
  </tr>
  <tr>
    <td>Website: </td>
    <td><input type="text" name="website" value="<?=$v[0]['website']?>" /></td>
    <td>Company: </td>
    <td><input type="text" name="company" value="<?=$v[0]['company']?>" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Lead Source:</td>
    <td><select name="lead_source">
    	<option <?=($v[0]['lead_source'] == 'Newspaper')? 'selected':''?>>Newspaper</option>
        <option <?=($v[0]['lead_source'] == 'Internet')? 'selected':''?>>Internet</option>
        <option <?=($v[0]['lead_source'] == 'Email')? 'selected':''?>>Email</option>
        <option <?=($v[0]['lead_source'] == 'Self')? 'selected':''?>>Self</option>
        <option <?=($v[0]['lead_source'] == 'Televison ADS')? 'selected':''?>>Television ADS</option>
        <option <?=($v[0]['lead_source'] == 'Employee')? 'selected':''?>>Employee</option>
        <option <?=($v[0]['lead_source'] == 'Word of Mouth')? 'selected':''?>>Word of Mouth</option>
        <option <?=($v[0]['lead_source'] == 'Others')? 'selected':''?>>Others</option>
    </select></td>
    <td>Contact Mode:</td>
    <td><select name="contact_mode">
    	<option <?=($v[0]['contact_mode'] == 'Phone Call')? 'selected':''?>>Phone Call</option>
        <option <?=($v[0]['contact_mode'] == 'SMS')? 'selected':''?>>SMS</option>
        <option <?=($v[0]['contact_mode'] == 'Chat')? 'selected':''?>>Chat</option>
        <option value="walkin" <?=($v[0]['contact_mode'] == 'walkin')? 'selected':''?>>Walk in</option>
        <option value="bycompany" <?=($v[0]['contact_mode'] == 'bycompany')? 'selected':''?>>Contacted By Company</option>
        <option>Others</option>
    </select></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Lead Status:</td>
    <td><select name="lead_status">
    	<option <?=($v[0]['lead_status'] == 'Open')? 'selected':''?>>Open</option>
        <option value="inprocess" <?=($v[0]['lead_status'] == 'inprocess')? 'selected':''?>>In Process</option>
        <option <?=($v[0]['lead_status'] == 'Dead')? 'selected':''?>>Dead</option>
    </select></td>
    <td>Lead priority:</td>
    <td><select name="lead_priority">
    	<option <?=($v[0]['lead_priority'] == 'Urgent')? 'selected':''?>>Urgent</option>
        <option <?=($v[0]['lead_priority'] == 'Normal')? 'selected':''?>>Normal</option>
        <option <?=($v[0]['lead_priority'] == 'Low')? 'selected':''?>>Low</option>
    </select></td>
    <td>Date: </td>
    <td><input type="text" name="date" value="<?=$v[0]['date']?>" /></td>
  </tr>
  <tr>
    <td>Referred by:</td>
    <td><input type="text" name="referred_by" value="<?=$v[0]['referred_by']?>" /></td>
    <td>Assigned to:</td>
    <td><select name="assinged_to">
    	<option></option>
    </select></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Lead Summary</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="4">
    <textarea name="summary" cols="90" rows="6"><?=$v[0]['summary']?></textarea>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" name="btn" value="Submit" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

<?=form_close()?>

        </fieldset>