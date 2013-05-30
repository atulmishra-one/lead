<h2>View Lead</h2>

<fieldset>
	<legend><?= $v[0]['fname']?>&nbsp;<?= $v[0]['lname']?></legend>
    <table class="display-table" cellpadding="6">
     <tr>
    	<td width="88"><b>Customer Id</b></td>
        <td colspan="7"><?= $v[0]['customers_id']?></td>
    </tr>
    <tr>
    	<td><b>Lead Id</b></td>
        <td colspan="7"><?= $v[0]['customer_leads_id']?></td>
    </tr>
    	<tr>
        	<td><strong>First name</strong></td>
            <td width="0"><?= $v[0]['fname']?></td>
            <td width="80"><strong>Last name</strong></td>
            <td width="0"><?= $v[0]['lname']?></td>
            <td width="131" colspan="3"></td>
        </tr>
        
        <tr>
 
            <td><strong>Telephone</strong></td>
            <td> <?= $v[0]['telephone']?></td>
            <td><strong>Mobile</strong></td>
            <td><?= $v[0]['mobile']?></td>
           
           
        </tr>
        <tr>
         <td><strong>Email</strong></td>
            <td><?=$v[0]['email']?></td>
        	
            
        </tr>
        <tr>
        	<td></td>
        </tr>
        <tr>
        	<td><strong>Lead Priority</strong></td>
            <td><?= $v[0]['lead_priority']?></td>
            <td><strong>Lead Status</strong></td>
            <td><?= $v[0]['lead_status']?></td>
            <td colspan="4"></td>
            
        </tr>
      
        <tr>
        	<td><strong>Date:</strong></td>
            <td><?= $v[0]['date']?></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
        	<td><strong>Assigned to</strong></td>
            <td></td>
        </tr>
        
        <tr>
        	<td><strong>Summary</strong></td>
            <td colspan="6"><?= $v[0]['summary']?></td>
        </tr>
        
    </table>
    
    
</fieldset>