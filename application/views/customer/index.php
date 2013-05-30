<h2>Customers</h2>

	<div class="add">
     <?=anchor('customer/add_customer', ' <i class="add_icon"></i> Add Customer')?>
     
    </div>

<br>

<fieldset>
<legend>Total - <?=$total?></legend>

		<form style="float:right;" action="">
        	<input type="text" name="keyword" size="30" placeholder="Search..." />
        </form>
	
    	<table border="0" cellspacing="0" width="100%" class="display-table" >
        	<thead>
            	<th>
                	Customer Id
                </th>
                <th>
                	Name
                </th>
                <th>
                	Telephone
                </th>
                <th>
                	Mobile
                </th>
                <th>
                	Email
                </th>
                <th>
                	Status
                </th>
                <th>
                	Action
                </th>
            </thead>
            
            <tbody>
            <?php foreach($customers as $c) : ?>
            	<tr id="bar<?= $c['customers_id']?>">
                	<td><?= $c['customers_id']?></td>
                    <td> <?=$c['fname']?>&nbsp; <?=$c['lname']?></td>
                    <td> <?= $c['telephone']?></td>
                    <td> <?= $c['mobile']?></td>
                    <td> <?= $c['email']?></td>
                    <td> <?=($c['status'] == 0)? anchor('customer/status/1/'.$c['customers_id'],'Active', array('class'=>'edit')): anchor('customer/status/0/'.$c['customers_id'], 'InActive', array('class'=>'delete'))?></td>
                    <td>
                    <?=anchor('customer/view/'.$c['customers_id'].'/j', 'View', array('class'=>'view'))?> &nbsp;
                    <?=anchor('customer/edit/'.$c['customers_id'].'/j', 'Edit', array('class'=>'edit'))?> &nbsp;
                    <?=anchor('customer/delete/'.$c['customers_id'], 'Delete', array('class'=>'del', 'id'=>$c['customers_id']))?>
                    
                    </td>
                </tr>
             <?php endforeach;?>
            </tbody>
        </table>
	
    
	<?=$pagination?>


</fieldset>

</div>