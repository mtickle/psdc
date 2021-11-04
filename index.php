<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    include("response.php");
    $newObj = new Incident();
    $emps = $newObj->getIncidents();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>RPD Incidents</title>
</head>
<body>
  <div class="container">
    <div class="col-12" style="padding-top:50px;">
        <div class="well">
            <h2>RPD Incidents</h2>
        </div>
        <table id="employee_grid" class="table" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Block</th>
                    <th>District</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($emps as $key => $emp) :?>
                <tr>
                    <td><?php echo $emp['reported_date'] ?></td>
                    <td><?php echo $emp['crime_description'] ?></td>
                    <td><?php echo $emp['reported_block_address'] ?></td>
                    <td><?php echo $emp['district'] ?></td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
  </div>
</div>
</body>
</html>
