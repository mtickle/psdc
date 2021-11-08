<?php include 'includes/header.php';?>


<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    Raleigh Police Department
                </div>
                <div class="card-body">
                    <h5 class="card-title">Incident Data</h5>
                    <p class="card-text">Raleigh Police Department incidents reported yesterday using the National
                        Incident Based Reporting System (NIBRS).
                    </p>
                    <a href="incidents.php" class="btn btn-primary">View Incidents</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
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