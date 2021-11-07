
<?php
    include("incident.php");
    $newObj = new Incident();
    $charges = $newObj->getTopCharges();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <title>RPD Incidents</title>
</head>
<body>
  <div class="container">

    <div class="col-sm-12" style="padding-top:50px;">
        <div class="well">
            <h2>CCBI Arrests</h2>
        </div>

<div class="chart-container" style="height:400px; width:800px">
    <canvas id="myChart"></canvas>
</div>
      

  <table id="employee_grid" class="table" width="100%" cellspacing="0">
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


<!-- 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
-->


<?php
      include("arrests_chart.php");  
?>

</body>
</html>
