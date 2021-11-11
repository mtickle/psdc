    
<?php
include("classes/incident.php");
$objIncident = new Incident();
$calls = $objIncident->getRecentCalls();
?>
    
    <table id="charge_grid" class="table" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Agency</th>
                <th>Incident</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($calls as $key => $call) :?>
            <tr>
                <td><?php echo $call['agency'] ?></td>
                <td><?php echo $call['incident'] ?></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>