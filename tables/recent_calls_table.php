    
<?php
include_once("classes/incident.php");
$objIncident = new Incident();
$calls = $objIncident->getRecentCalls();
?>
    
    <table id="charge_grid" class="table" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Agency</th>
                <th>Incident</th>
		<th>Location</th>
		<th>Date Time</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($calls as $key => $call) :?>
            <tr>
                <td><?php echo $call['agency'] ?></td>
                <td><?php echo $call['incident'] ?></td>
		 <td><?php echo $call['location'] ?></td>
		<td><?php echo $call['call_date'] ?> <?php echo $call['call_time'] ?></td>

	</tr>
        <?php endforeach;?>
        </tbody>
    </table>
