    <?php
include_once("classes/incident.php");
$objIncident = new Incident();
$calls = $objIncident->getRecentCalls();
?>


<?php foreach($calls as $key => $call) :?>
    <div class="card">
        <div class="card-header">
            Analysis
        </div>
        <div class="card-body">
            <h5><?php echo $call['incident'] ?></h5>
            <ul>
            <li><?php echo $call['agency'] ?></ul>
                <ul><?php echo $call['incident'] ?></ul>
                <ul><?php echo $call['location'] ?></ul>
                <ul><?php echo $call['call_date'] ?> <?php echo $call['call_time'] ?></ul>
            </ul>
        </div>
    </div>
    <?php endforeach;?>

