<?php include 'includes/header.php'; ?>

<style>

.ArrestsByChargeChart { 
    height: 280px; 
    width: 100%;
  }

  .ArrestsByGenderChart { 
    height: 280px; 
    width: 100%;
  }
</style>

<div class="container">

    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    Arrests by Charges
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        <canvas id="ArrestsByChargeChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    Arrests by Gender
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        <canvas id="ArrestsByGenderChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        Data
                    </div>
                    <div class="card-body">
                        <?php include("tables/arrests_table.php"); ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php
      include("charts/arrests_chart.php"); 
      include("charts/arrests_by_gender_chart.php");  
      include("includes/footer.php")
?>