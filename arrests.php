<?php include 'includes/header2.php'; ?>


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Arrests</h1>
    </div>


    <div class="table-responsive">

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

        <br />

        <div class="row">
            <div class="col-lg-12">
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
      include("includes/footer2.php")
?>