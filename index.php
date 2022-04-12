<?php include 'includes/header.php'; ?>

<div class="container">

    <div class="row">

        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    Dashboard
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        <h5 class="card-title">Dashboard</h5>
                        <p class="card-text">Dashboard containing charts and graphs for incidents, arrests and calls.
                        </p>
                        <a href="dashboard.php" class="btn btn-primary">View Dashboard</a>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    RPD Incidents
                </div>
                <div class="card-body">
                    <div class="chart-container">

                        <h5 class="card-title">Daily Raleigh Police Incidents</h5>
                        <p class="card-text">Raleigh Police Department incidents reported yesterday using NIBRS.</p>
                        <a href="incidents.php" class="btn btn-primary">View Incidents</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <br />

    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    CCBI Arrest Inprocessing
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        <h5 class="card-title">City-County Bureau of Investigation</h5>
                        <p class="card-text">Metadata from CCBI arrest processing.</p>
                        <a href="arrests.php" class="btn btn-primary">View Arrests</a>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    911 Center Calls
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        <h5 class="card-title">Raleigh/Wake County Emergency Communications</h5>
                        <p class="card-text">Metdata from Wake County 911 Center calls.</p>
                        <a href="calls.php" class="btn btn-primary">View Calls</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <br />

    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    MVC Persons
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        <h5 class="card-title">Persons Involved in Crashes</h5>
                        <p class="card-text">Data from completed DMV-349 Crash Forms.</p>
                        <a href="crashes.php" class="btn btn-primary">View Data</a>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    Vehicle Make/Model Data
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        <h5 class="card-title">Vehicle Make and Model Data</h5>
                        <p class="card-text">Data from NHTSA Product Information Catalog.</p>
                        <a href="vehicles.php" class="btn btn-primary">View Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <br />
        <div class="row">
            <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    VIN Lookup
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        <h5 class="card-title">VIN Lookup</h5>
                        <p class="card-text">Try to decode a VIN.</p>
                        <a href="vin.php" class="btn btn-primary">VIN Lookup</a>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <div class="col-sm-6">
        
        </div>
    </div>

</div>



<?php
      //include("charts/arrests_chart.php"); 
      //include("charts/arrests_by_gender_chart.php");  
      include("includes/footer.php")
?>