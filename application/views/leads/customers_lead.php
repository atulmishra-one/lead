<h2>Customers Leads</h2>
<div class="add">&nbsp;
     <?=anchor('leads/create_lead', ' <i class="add_icon"></i>Add new Lead')?>
    </div>
    <hr />
<div id="TabbedPanels1" class="TabbedPanels">


          	  <ul class="TabbedPanelsTabGroup">
          	    <li class="TabbedPanelsTab" tabindex="0"><?=anchor('leads', 'Leads')?></li>
          	    <li class="TabbedPanelsTabSelected TabbedPanelsTab" tabindex="0"><?=anchor('leads/customers_lead', 'Leads from Customers')?></li>
       	      </ul>
          	  <div class="TabbedPanelsContentGroup">
          	    <div class="TabbedPanelsContent">
                	
                    	<fieldset>
	<legend>Total- <?=$total?></legend>
	
    <form style="float:right;" action="">
        	<input type="text" name="keyword" size="30" placeholder="Search......." />
    </form>
    
    <table border="0" cellspacing="0" width="100%" class="display-table" >
        	<thead>
            	<th>
                	Lead Id
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
                	Lead Status
                </th>
                <th>
                	Action
                </th>
            </thead>
            
            <tbody>
            <?php foreach($leads as $l) : ?>
            	<tr id="bar<?=$l['customer_leads_id']?>">
                	<td><?= $l['customer_leads_id']?></td>
                    <td> <?=$l['fname']?>&nbsp; <?=$l['lname']?></td>
                    <td> <?= $l['telephone']?></td>
                    <td> <?= $l['mobile']?></td>
                    <td> <?= $l['email']?></td>
                    <td> <?= $l['lead_status']?></td>
                    <td>
                    <?=anchor('leads/cview/'.$l['customer_leads_id'].'/n', 'View', array('class'=>'view'))?> &nbsp;
                    <?=anchor('leads/edit_exist/'.$l['customer_leads_id'].'/j', 'Edit', array('class'=>'edit'))?> &nbsp;
                    <?=anchor('leads/cdelete/'.$l['customer_leads_id'], 'Delete', array('class'=>'del delete', 'id'=>$l['customer_leads_id']))?>
                    
                    </td>
                </tr>
             <?php endforeach;?>
            </tbody>
        </table>
        
        <?=$pagination?>

</fieldset>
                
                
                </div>
       	      </div>



</div>