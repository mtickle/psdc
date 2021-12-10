    
<?php
include_once("classes/incident.php");
$objIncident = new Incident();
$makes = $objIncident->getMakes();
?>
    
    <table id="charge_grid" class="table" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Make ID</th>
                <th>Make Name</th>
                <th>Count</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($makes as $key => $make) :?>
            <tr>
                <td><?php echo $make['make_id'] ?></td>
                <td><?php echo $make['make_name'] ?></td>
                <td><a href="models.php?make_id=<?php echo $make['make_id'] ?>"><?php echo $make['recordcount'] ?></a></td>
        	</tr>
        <?php endforeach;?>
        </tbody>
    </table>
