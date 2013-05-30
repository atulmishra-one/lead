<h2>View Appointment</h2>

<fieldset>
		<legend><?=$v[0]['name']?>
        </legend>
        
        <table class="display-table" cellpadding="6">
        	
            	<tr>
                	<td><strong>Appointment Id</strong></td>
                    <td><?=$v[0]['appointments_id']?></td>
                </tr>
                
                <tr>
                	<td>
                    	<strong>Name</strong>
                    </td>
                    <td><?=$v[0]['name']?></td>
                    <td></td>
                    <td></td>
                </tr>
                
                <tr>
                	<td><strong>Type</strong></td>
                    <td><?= ($v[0]['type'] == 0) ? 'Call': 'Meeting'?></td>
                    <td><strong>Status</strong></td>
                    <td><?=$v[0]['status']?></td>
                    <td><strong>Assigned to</strong></td>
                    <td><?=$v[0]['assigned_to']?></td>
                </tr>
             
                <tr>
                	<td><strong>Date</strong></td>
                    <td><?=$v[0]['date']?></td>
                    <td><strong>Time</strong></td>
                    <td><?=$v[0]['time']?></td>
                </tr>
        		
                <tr>
                	<td><strong>Details</strong></td>
                    <td colspan="4"><?=$v[0]['details']?></td>
                   
                    <td></td>
                </tr>
                
               
                
                <tr>
                	<td><strong>Reminder SMS</strong></td>
                    <td><?=($v[0]['reminder'] == 1)? 'Yes':'No'?></td>
                    <td></td>
                    <td></td>
                </tr>
        		
              
        </table>
    
</fieldset>