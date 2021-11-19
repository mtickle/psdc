<?php include 'includes/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    Incidents
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        <canvas id="IncidentAnalysis"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                Incidents By District
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        <canvas id="IncidentsByDistrict"></canvas>
                    </div>
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
                    <?php include("tables/incidents_table.php"); ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
      include("charts/incidents_chart.php");
      include("charts/incidents_by_district_chart.php");
      include("includes/footer.php")  
?>
