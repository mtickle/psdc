    
<?php
include_once("classes/incident.php");
$objIncident = new Incident();
$makes = $objIncident->getModels($_GET["make_id"]);
?>
    
    <table id="charge_grid" class="table" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Model Name</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($models as $key => $model) :?>
            <tr>
                <td><?php echo $model['model_name'] ?></td>
        	</tr>
        <?php endforeach;?>
        </tbody>
    </table>
