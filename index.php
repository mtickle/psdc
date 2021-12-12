<?php include 'includes/header.php'; ?>


<div class="container">

    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    RPD Incidents
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        container
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    CCBI Arrest Inprocessing
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        container
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    911 Center Calls
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        container
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    MVC Persons
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        container
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    Vehicle Make/Model Metadata
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        container
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
          
        </div>
    </div>

</div>
<?php
      include("charts/arrests_chart.php"); 
      include("charts/arrests_by_gender_chart.php");  
      include("includes/footer.php")
?>