<strong>Edit Customer ID [<?=$v[0]['customers_id']?>]</strong> 
	<div class="form">
    	
    <div class="loader"><img src="<?=base_url()?>public/images/ajax-loader.gif" />&nbsp;&nbsp;Proccessing.....</div>
    <?=form_open('', array('id'=>'ad_cus_frm', 'name'=>'frm'))?>
    
    
        	

<fieldset>
	<legend>Personal Details</legend>
    <table width="100%" border="0" cellpadding="6" cellspacing="0" class="display-table">
  <tr>
    <td width="11%">First name <sup> * </sup></td>
    <td width="24%"><input type="text" name="fname" size="30" value="<?=$v[0]['fname']?>" maxlength="16" /></td>
    <td width="11%">Last name <sup> * </sup></td>
    <td width="25%"><input type="text" name="lname" size="30" value="<?=$v[0]['lname']?>" maxlength="16" /></td>
    <td width="7%">&nbsp;</td>
    <td width="22%">&nbsp;</td>
  </tr>
  
  <tr>
    <td>Telephone <sup> *</sup></td>
    <td><input type="text" name="telephone" value="<?=$v[0]['telephone']?>" size="30" /></td>
    <td>Mobile <sup>*</sup></td>
    <td><input type="text" name="mobile" value="<?=$v[0]['mobile']?>" size="30" /></td>
    <td>Email <sup> * </sup></td>
    <td><input type="email" name="email" value="<?=$v[0]['email']?>" size="30" /></td>
  </tr>
  <tr>
    <td>Description: </td>
    <td colspan="3"><textarea name="details" cols="70" rows="5"><?=$v[0]['details']?></textarea></td>
    
    <td>Status:</td>
    <td><select name="status">
    <option value="0" <?=($v[0]['status'] == 0)? 'selected':''?>>Active</option>
    <option value="1" <?=($v[0]['status'] == 1)? 'selected':''?>>InActive</option>
    </select></td>
  </tr>
  </table>
  </fieldset>
  <fieldset>
	<legend>Billing Details</legend>
    <table width="100%" border="0" cellpadding="6" cellspacing="0" class="display-table">
  <tr>
    <td colspan="6" bgcolor="#FFFFCC">
    
    <span style="font-size:14px; color:#36F">Billing Details</span>
    
    </td>
  </tr>
  <tr>
    <td width="19%">Billing address:</td>
    <td width="23%"><textarea name="billing_address" cols="32" rows="3"><?=$v[0]['billing_address']?></textarea></td>
    <td width="5%">Billing PO box:</td>
    <td width="23%"><textarea name="billing_po_box" cols="32" rows="3"><?=$v[0]['billing_po_box']?></textarea></td>
    <td width="9%">Billing city:</td>
    <td width="21%"><input type="text" name="billing_city" value="<?=$v[0]['billing_city']?>" size="30" /></td>
  </tr>
  <tr>
    <td>Billing state:</td>
    <td><input type="text" name="billing_state" value="<?=$v[0]['billing_state']?>" size="30" /></td>
    <td>Billing Postal code</td>
    <td><input type="text" name="billing_postal_code" value="<?=$v[0]['billing_post_code']?>" size="10" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  </table>
  </fieldset>
  
   <fieldset>
	<legend>Shipping Details</legend>
    <table width="100%" border="0" cellpadding="6" cellspacing="0" class="display-table">
  
  <tr>
    <td colspan="6" bgcolor="#FFFFCC">
    
    <span style="font-size:14px; color:#36F">Shipping Details</span>
    
    </td>
  </tr>
  <tr>
    <td>Shipping address:</td>
    <td><textarea name="shipping_address" cols="32" rows="3"><?=$v[0]['shipping_address']?></textarea></td>
    <td>Shipping PO box:</td>
    <td><textarea name="shipping_po_box" cols="32" rows="3"><?=$v[0]['shipping_po_box']?></textarea></td>
    <td>Shipping city:</td>
    <td><input type="text" name="shipping_city" value="<?=$v[0]['shipping_city']?>" size="30" /></td>
  </tr>
  <tr>
    <td>Shipping state:</td>
    <td><input type="text" name="shipping_state" value="<?=$v[0]['shipping_state']?>" size="30" /></td>
    <td>Shipping postal code:</td>
    <td><input type="text" name="shipping_postal_code" value="<?=$v[0]['shipping_post_code']?>" size="10" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6">&nbsp;</td>
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
    <td colspan="2">
    
    	<input type="submit" name="btn" value="Edit Customer" />
    	<input type="button" value="Cancel" id="cancel" />
    </td>
    
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</fieldset>

                
     
      
      <?=form_close()?>
    </div>