    
<?php
include_once("classes/incident.php");
$objIncident = new Incident();
$makes = $objIncident->getMakes();
?>
    
    <table id="charge_grid" class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Make ID</th>
                <th scope="col">Make Name</th>
                <th scope="col">Count</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($makes as $key => $make) :?>
            <tr>
                <th scope="row"><?php echo $make['make_id'] ?></th>
                <td><?php echo $make['make_name'] ?></td>
                <td><a href="models.php?make_id=<?php echo $make['make_id'] ?>"><?php echo $make['make_name'] ?></a></td>
        	</tr>
        <?php endforeach;?>
        </tbody>
    </table>
