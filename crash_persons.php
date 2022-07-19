<?php include 'includes/header2.php'; ?>


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Crash Persons</h1>
    </div>


    <div class="container-fluid">

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
        <br />
       
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        Crash Factors by Person
                    </div>
                    <div class="card-body">
                        <?php include("tables/crash_factors_table.php"); ?>
                    </div>
                </div>
            </div>
        </div>

        <br />
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        Last 20 Crash Persons
                    </div>
                    <div class="card-body">
                        <?php include("tables/crash_persons_table.php"); ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
<?php
      include("charts/crash_drivers_by_age_chart.php"); 
      include("charts/crash_drivers_by_gender_chart.php");  
      include("includes/footer2.php")
?>