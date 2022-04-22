<?php include 'includes/header2.php'; ?>


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Incidents</h1>
    </div>


    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Incidents Map
                    </div>
                    <div class="card-body">
                        <?php include("maps/incidents_map.php"); ?>
                    </div>
                </div>
            </div>
        </div>
        <br />


        <div class="row">
            <div class="col-lg-6">
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

            <div class="col-lg-6">
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
        <br />
        <div class="row">
            <div class="col-lg-12">
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

</main>

<?php
      include("maps/incidents_map.php");
      include("charts/incidents_chart.php");
      include("charts/incidents_by_district_chart.php");
      include("includes/footer2.php")  
?>