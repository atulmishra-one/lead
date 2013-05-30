
<div class="form">


		<fieldset>
        	<legend><h2>Add New Lead</h2></legend>
        <div class="loader"><img src="<?=base_url()?>public/images/ajax-loader.gif" />&nbsp;&nbsp;Proccessing.....</div>
      
        <div>
       
        	<div style="width:476px; background:#FFF; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight:bold; padding:10px;">
            
            	<span style="float:left;">
            <label for="r1">Lead from Existing Customer </label>
           <input type="radio" value="0" name="exist" checked="checked" id="r1" /> &nbsp;
           </span>
           <span style="float:right;">
               <label for="r2">Lead from New Source </label>

                <input type="radio" value="1" name="exist" id="r2" />
			</span>
               <div style="clear:both"></div>
            </div>
        </div>
       
        <div id="existing">
        <?=form_open('', array('id'=>'add_lead1'))?>  
        		<table border="0" cellspacing="0" cellpadding="6" width="100%" class="display-table">
                
  <tr>
    <td>Customer <sup>*</sup></td>
    <td>
    	<select name="customer">
				
					<option value="0" disabled="disabled" selected="selected">-Customer name-</option>
					<?php foreach($customers as $c): ?>
                    
                    	<option value="<?=$c['customers_id']?>"><?=$c['fname']?>&nbsp;<?=$c['lname']?></option>
                    
                    <?php endforeach; ?>
				</select>
    
    </td>
    <td>Lead Status: </td>
    <td>
    <select name="lead_status">
    	<option>Open</option>
        <option value="inprocess">In Process</option>
        <option>Dead</option>
    </select>
    </td>
  </tr>
  <tr>
    <td>Lead Priority: </td>
    <td><select name="lead_priority">
    	<option>Urgent</option>
        <option>Normal</option>
        <option>Low</option>
    </select></td>
    <td>Date: </td>
    <td><input type="text" name="date" class="datepicker" />
 
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
    <td colspan="3"><textarea name="summary" cols="90" rows="8"></textarea></td>
   	
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><button type="submit" name="btn1" value="1" class="sexybutton sexysimple sexyteal">Submit</button></td>
    
    <td>&nbsp;</td>
  </tr>
</table>

<?=form_close()?>

        </div>
        
        <div id="new" style="display:none;">
        <?=form_open('', array('id'=>'add_lead'))?> 
            <table border="0" cellspacing="0" cellpadding="6" width="100%" class="display-table">
  <tr>
    <td>First name: </td>
    <td><input type="text" name="fname" /></td>
    <td>Last name: </td>
    <td><input type="text" name="lname" /></td>
    <td>Designation: </td>
    <td><input type="text" name="designation" /></td>
  </tr>
  <tr>
    <td>Telephone:</td>
    <td><input type="text" name="telephone" /></td>
    <td>Mobile: </td>
    <td><input type="text" name="mobile" /></td>
    <td>Email: </td>
    <td><input type="text" name="email" /></td>
  </tr>
  <tr>
    <td>Website: </td>
    <td><input type="text" name="website" /></td>
    <td>Company: </td>
    <td><input type="text" name="company" /></td>
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
    	<option>Newspaper</option>
        <option>Internet</option>
        <option>Email</option>
        <option>Self</option>
        <option>Television ADS</option>
        <option>Employee</option>
        <option>Word of Mouth</option>
        <option>Others</option>
    </select></td>
    <td>Contact Mode:</td>
    <td><select name="contact_mode">
    	<option>Phone Call</option>
        <option>SMS</option>
        <option>Chat</option>
        <option value="walkin">Walk in</option>
        <option value="bycompany">Contacted By Company</option>
        <option>Others</option>
    </select></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Lead Status:</td>
    <td><select name="lead_status">
    	<option>Open</option>
        <option value="inprocess">In Process</option>
        <option>Dead</option>
    </select></td>
    <td>Lead priority:</td>
    <td><select name="lead_priority">
    	<option>Urgent</option>
        <option>Normal</option>
        <option>Low</option>
    </select></td>
    <td>Date: </td>
    <td><input type="text" name="date" /></td>
  </tr>
  <tr>
    <td>Referred by:</td>
    <td><input type="text" name="referred_by" /></td>
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
    <textarea name="summary" cols="90" rows="6"></textarea>
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
    <td><button type="submit" name="btn" value="1" class="sexybutton sexysimple sexyteal">Submit</button></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

<?=form_close()?>

        </div>    
            
            
        </fieldset>
        

</div>