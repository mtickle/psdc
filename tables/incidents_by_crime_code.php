
<?php
$objIncident = new Incident();
$incidents = $objIncident->getIncidentsByCrimeCode($_GET["crime_code"]);
?>

<table id="incidents_grid" class="table" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Code</th>
                    <th>District</th>
                    <th>Date</th>
                    <th>Hour</th>
                    <th>Description</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($incidents as $key => $incident) :?>
                <tr>
                    <td><?php echo $incident['crime_code'] ?></td>
                    <td><?php echo $incident['district'] ?></td>
                    <td><?php echo $incident['reported_date'] ?></td>
                    <td><?php echo $incident['reported_hour'] ?></td>
                    <td><?php echo $incident['crime_description'] ?></td>
                    <td><?php echo $incident['reported_block_address'] ?></td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>

        <br />

<a class="btn btn-primary btn-sm" href="crime_code_explorer.php">Back to Codes</a>
