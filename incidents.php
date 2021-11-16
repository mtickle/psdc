<?php include 'includes/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-sm-6">

            <div class="card">
                <div class="card-header">
                    Analysis
                </div>
                <div class="card-body">
                <h5>Arrests By Charges</h5>
                    <div class="chart-container" >
                        <canvas id="IncidentAnalysis"></canvas>
                    </div>  
			    <h5>Arrests By Gender</h5>
                    <div class="chart-container" >
                        <canvas id="IncidentsByDistrict"></canvas>
                    </div> 
                </div>
            </div>
        </div>
        <div class="col-sm-6">
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