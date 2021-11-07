    
<?php
include("classes/incident.php");
$objIncident = new Incident();
$charges = $objIncident->getTopCharges();
?>
    
    <table id="charge_grid" class="table" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Charge</th>
                <th>Count</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($charges as $key => $charge) :?>
            <tr>
                <td><?php echo $charge['charge'] ?></td>
                <td><?php echo $charge['charge_count'] ?></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>