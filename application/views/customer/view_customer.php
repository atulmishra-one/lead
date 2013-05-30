<h2>View Customer</h2>

<fieldset>
		<legend><?=$v[0]['fname']?>&nbsp;<?=$v[0]['lname']?> 
        <?php if($v[0]['status'] == 0):?>
        
        	<img src="<?=base_url()?>public/images/success.png" />
            
        <?php else:?>
        
        
        <?php endif;?>
        </legend>
        
        <table class="display-table" cellpadding="6">
        	
            	<tr>
                	<td><strong>Customer Id</strong></td>
                    <td><?=$v[0]['customers_id']?></td>
                </tr>
                
                <tr>
                	<td>
                    	<strong>First name</strong>
                    </td>
                    <td><?=$v[0]['fname']?></td>
                    <td><strong>Last name</strong></td>
                    <td><?=$v[0]['lname']?></td>
                </tr>
                
                <tr>
                	<td><strong>Telephone</strong></td>
                    <td><?=$v[0]['telephone']?></td>
                    <td><strong>Mobile</strong></td>
                    <td><?=$v[0]['mobile']?></td>
                    <td><strong>Email</strong></td>
                    <td><?=$v[0]['email']?></td>
                </tr>
                <tr>
                	<td><h2>Billing Details</h2></td>
                </tr>
                
                <tr>
                	<td><strong>Billing address</strong></td>
                    <td><?=$v[0]['billing_address']?></td>
                    <td><strong>Billing Po box</strong></td>
                    <td><?=$v[0]['billing_po_box']?></td>
                </tr>
        		
                <tr>
                	<td><strong>Billing City</strong></td>
                    <td><?=$v[0]['billing_city']?></td>
                    <td><strong>Billing State</strong></td>
                    <td><?=$v[0]['billing_state']?></td>
                    <td><strong>Billing Postal Code</strong></td>
                    <td><?=$v[0]['billing_post_code']?></td>
                </tr>
                
                <tr>
                	<td><h2>Shipping Details</h2></td>
                </tr>
                
                <tr>
                	<td><strong>Shipping address</strong></td>
                    <td><?=$v[0]['shipping_address']?></td>
                    <td><strong>Shipping Po box</strong></td>
                    <td><?=$v[0]['shipping_po_box']?></td>
                </tr>
        		
                <tr>
                	<td><strong>Shipping City</strong></td>
                    <td><?=$v[0]['shipping_city']?></td>
                    <td><strong>Shipping State</strong></td>
                    <td><?=$v[0]['shipping_state']?></td>
                    <td><strong>Shipping Postal Code</strong></td>
                    <td><?=$v[0]['shipping_post_code']?></td>
                </tr>
        </table>
    
</fieldset>