    
<?php
include_once("classes/incident.php");
$objIncident = new Incident();
$makes = $objIncident->getMakes();
?>
    
    <table id="charge_grid" class="table" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Make Name</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($makes as $key => $make) :?>
            <tr>
                <td><?php echo $make['make_name'] ?></td>
        	</tr>
        <?php endforeach;?>
        </tbody>
    </table>
