
<?php
$objIncident = new Incident();
$incidents = $objIncident->getRecentIncidents();
?>

<table id="incidents_grid" class="table" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Hour</th>
                    <th>Description</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($incidents as $key => $incident) :?>
                <tr>
                    <td><?php echo $incident['reported_date'] ?></td>
                    <td><?php echo $incident['reported_hour'] ?></td>
                    <td><?php echo $incident['crime_description'] ?></td>
                    <td><?php echo $incident['reported_block_address'] ?></td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
