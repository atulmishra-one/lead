	<div class="form">
    <div class="loader"><img src="<?=base_url()?>public/images/ajax-loader.gif" />&nbsp;&nbsp;Proccessing.....</div>
    <?=form_open('', array('id'=>'ad_cus_frm', 'name'=>'frm'))?>
    
    
        	

<fieldset>
	<legend>Personal Details</legend>
    <table width="100%" border="0" cellpadding="6" cellspacing="0" class="display-table">
  <tr>
    <td>First name <sup> * </sup></td>
    <td><input type="text" name="fname" size="30" maxlength="16" /></td>
    <td>Last name <sup> * </sup></td>
    <td><input type="text" name="lname" size="30" maxlength="16" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td>Telephone <sup> *</sup></td>
    <td><input type="text" name="telephone" size="30" /></td>
    <td>Mobile <sup>*</sup></td>
    <td><input type="text" name="mobile" size="30" /></td>
    <td>Email <sup> * </sup></td>
    <td><input type="email" name="email" size="30" /></td>
  </tr>
  <tr>
    <td>Description: </td>
    <td colspan="3"><textarea name="details" cols="80" rows="5"></textarea></td>
    
    <td>Status:</td>
    <td><select name="status"><option value="0">Active</option><option value="1">InActive</option></select></td>
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
    <td>Billing address:</td>
    <td><textarea name="billing_address" cols="32" rows="3"></textarea></td>
    <td>Billing PO box:</td>
    <td><textarea name="billing_po_box" cols="32" rows="3"></textarea></td>
    <td>Billing city:</td>
    <td><input type="text" name="billing_city" size="30" /></td>
  </tr>
  <tr>
    <td>Billing state:</td>
    <td><input type="text" name="billing_state" size="30" /></td>
    <td>Billing Postal code</td>
    <td><input type="text" name="billing_postal_code" size="10" /></td>
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
    <td><textarea name="shipping_address" cols="32" rows="3"></textarea></td>
    <td>Shipping PO box:</td>
    <td><textarea name="shipping_po_box" cols="32" rows="3"></textarea></td>
    <td>Shipping city:</td>
    <td><input type="text" name="shipping_city" size="30" /></td>
  </tr>
  <tr>
    <td>Shipping state:</td>
    <td><input type="text" name="shipping_state" size="30" /></td>
    <td>Shipping postal code:</td>
    <td><input type="text" name="shipping_postal_code" size="10" /></td>
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
    
    	<button type="submit" name="btn" value="1" class="sexybutton sexysimple sexyteal">Add Customer</button>
    	<button type="button" value="1" id="cancel" class="sexybutton sexysimple sexyred">Cancel</button>
    </td>
    
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</fieldset>

                
     
      
      <?=form_close()?>
    </div>