<?php include 'includes/header.php'; ?>


<div class="container">

    <div class="row">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header">
                   Crash Drivers by Age
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        <canvas id="CrashDriverAgeAnalysis"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header">
                    Crash Drivers by Gender
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        <canvas id="CrashDriversByGenderChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
</div>
        <br /><br />
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
      include("charts/crash_drivers_by_age_chart.php"); 
      include("charts/crash_drivers_by_gender_chart.php");  
      include("includes/footer.php")
?>