
<?php
    include("classes/incident.php");
    $newObj = new Incident();
    $charges = $newObj->getTopCharges();
    include 'includes/header.php';
?>

  <div class="container-lg pb-3">
    <div class="d-grid gap-3" style="grid-template-columns: 1fr 1fr;">
      <div class="bg-light border rounded-3">
            <div class="chart-container" style="height:400px; width:800px">
                <canvas id="myChart"></canvas>
            </div>      
      </div>
      
      <div class="bg-light border rounded-3">
      
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
    </div>
  </div>




      

  
      </div>




<?php
      include("assets/arrests_chart.php");  
      include("includes/footer.php")
?>
