
<?php
    include("classes/incident.php");
    $newObj = new Incident();
    $charges = $newObj->getTopCharges();
    include 'includes/header.php';
?>


  <div class="container">


<div class="chart-container" style="height:400px; width:800px">
    <canvas id="myChart"></canvas>
</div>
      

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

      </div>




<?php
      include("charts/arrests_chart.php");  
      include("includes/footer.php")
?>
