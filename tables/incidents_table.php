
<?php
include("classes/incident.php");
$newObj = new Incident();
$incidents = $newObj->getIncidents();
?>

<table id="incidents_grid" class="table" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Address</th>
                    <th>District</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($incidents as $key => $incident) :?>
                <tr>
                    <td><?php echo $incident['reported_date'] ?></td>
                    <td><?php echo $incident['crime_description'] ?></td>
                    <td><?php echo $incident['reported_block_address'] ?></td>
                    <td><?php echo $incident['district'] ?></td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>