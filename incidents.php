
<?php
   include("classes/incident.php");
    $newObj = new Incident();
    $incidents = $newObj->getIncidents();
    include 'includes/header.php';
?>

<div class="container">

        <div class="chart-container" style="height:400px; width:800px">
            <canvas id="myChart"></canvas>
        </div>
     

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
   
      </div>


<?php
      include("assets/incidents_chart.php");
      include("includes/footer.php")  
?>
