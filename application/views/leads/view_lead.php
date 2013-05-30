<h2>View Lead</h2>

<fieldset>
	<legend><?= $v[0]['fname']?>&nbsp;<?= $v[0]['lname']?></legend>
    <table class="display-table" cellpadding="6">
    <tr>
    	<td><b>Lead Id</b></td>
        <td colspan="7"><?= $v[0]['leads_id']?></td>
    </tr>
    	<tr>
        	<td><strong>First name</strong></td>
            <td><?= $v[0]['fname']?></td>
            <td><strong>Last name</strong></td>
            <td><?= $v[0]['lname']?></td>
            <td colspan="3"></td>
        </tr>
        
        <tr>
        	<td><strong>Designation</strong></td>
            <td><?= $v[0]['designation']?></td>
            <td><strong>Telephone</strong></td>
            <td> <?= $v[0]['telephone']?></td>
            <td><strong>Mobile</strong></td>
            <td><?= $v[0]['mobile']?></td>
           
           
        </tr>
        <tr>
         <td><strong>Email</strong></td>
            <td><?=$v[0]['email']?></td>
        	<td><strong>Website</strong></td>
            <td><?= $v[0]['website']?></td>
            <td><strong>Company</strong></td>
            <td><?= $v[0]['company']?></td>
            
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
        	<td><strong>Lead Source</strong></td>
            <td><?= $v[0]['lead_source']?></td>
            <td></td>
            <td></td>
            <td><strong>Contact mode</strong></td>
            <td><?= ucfirst($v[0]['contact_mode'])?></td>
        </tr>
        <tr>
        	<td><strong>Date:</strong></td>
            <td><?= $v[0]['date']?></td>
            <td><strong>Referred by</strong></td>
            <td><?= $v[0]['referred_by']?></td>
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