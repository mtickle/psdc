    <?php
include_once("classes/incident.php");
$objIncident = new Incident();
$calls = $objIncident->getRecentCalls();
?>


<?php foreach($calls as $key => $call) :?>
    <div class="card">
        <div class="card-header">
            <?php echo $call['agency'] ?>
        </div>
        <div class="card-body">
            <h5 class="card-title"><?php echo $call['incident'] ?></h5>
	    <h6 class="card-subtitle mb-2 text-muted"><?php echo $call['location'] ?></h6>
            <p>
            <?php echo $call['call_date'] ?> <?php echo $call['call_time'] ?>
            </p>
        </div>
    </div>
<br />
    <?php endforeach;?>

