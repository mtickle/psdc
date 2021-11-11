<?php include 'includes/header.php';?>


<div class="container">
    <div class="row">
        <div class="col-sm-8">
        <div class="card">
                <div class="card-header">
                    Recent 911 Calls
                </div>
                <div class="card-body">
                    <h5 class="card-title">Incident Data</h5>
                    
                    <?php include("tables/recent_calls_table.php"); ?>
                    
                </div>
            </div>
	<br/>
        </div>

        <div class="col-sm-4">


        <div class="card">
                <div class="card-header">
                    Raleigh Police Department
                </div>
                <div class="card-body">
                    <h5 class="card-title">Incident Data</h5>
                    <p class="card-text">Raleigh Police Department incidents reported yesterday.
                    </p>
                    <a href="incidents.php" class="btn btn-primary">View Incidents</a>
                </div>
            </div>

            <br />

            <div class="card">
                <div class="card-header">
                    Wake County CCBI
                </div>
                <div class="card-body">
                    <h5 class="card-title">Arrest Data</h5>
                    <p class="card-text">City-County Bureau of Investigation anonymized arrest data for the past 30
                        days.</p>
                    <a href="arrests.php" class="btn btn-primary">View Arrests</a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'includes/footer.php';?>
