<h2>Appointments</h2>

	<div class="add">
     <?=anchor('appointments/book', ' <i class="add_icon"></i> Book Appointment')?>
     
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
                	Appointment Id
                </th>
                <th>
                	Name
                </th>
                <th>
                	Type
                </th>
                <th>
                	Status
                </th>
                <th>
                	Date
                </th>
                <th>
                	Time
                </th>
                <th>
                	Action
                </th>
            </thead>
            
            <tbody>
            <?php foreach($appoint as $a) : ?>
            	<tr id="bar<?= $a['appointments_id']?>">
                	<td><?= $a['appointments_id']?></td>
                    <td> <?=$a['name']?></td>
                    <td> <?= ($a['type'] == 0) ? 'Call': 'Meeting'?></td>
                    <td> <?= $a['status']?></td>
                    <td> <?= $a['date']?></td>
                    <td> <?=$a['time']?></td>
                    <td>
                    <?=anchor('appointments/view/'.$a['appointments_id'].'/j', 'View', array('class'=>'view'))?> &nbsp;
                    <?=anchor('appointments/edit/'.$a['appointments_id'].'/j', 'Edit', array('class'=>'edit'))?> &nbsp;
                    <?=anchor('appointments/delete/'.$a['appointments_id'], 'Delete', array('class'=>'del', 'id'=>$a['appointments_id']))?>
                    
                    </td>
                </tr>
             <?php endforeach;?>
            </tbody>
        </table>
	
    
	<?=$pagination?>


</fieldset>

</div>