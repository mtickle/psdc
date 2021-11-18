<?php include 'includes/header.php'; ?>


<div class="container">

<div class="row">
        <div class="col-sm-4">hey</div>
        <div class="col-sm-4">hey</div>
        <div class="col-sm-4">hey</div>
</div>

    <div class="row">
        <div class="col-sm-6">

            <div class="card">
                <div class="card-header">
                    Analysis
                </div>
                <div class="card-body">
			<h5>Arrests By Charges</h5>
                    <div class="chart-container" >
                        <canvas id="ArrestsByChargeChart"></canvas>
                    </div>  
			<h5>Arrests By Gender</h5>
                    <div class="chart-container" >
                        <canvas id="ArrestsByGenderChart"></canvas>
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
                    <?php include("tables/arrests_table.php"); ?>
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
