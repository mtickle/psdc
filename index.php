<?php include 'includes/header2.php'; ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>


      <div class="table-responsive">

      <div class="card">
        <div class="card-header">
          Incidents
        </div>
        <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
               <h5 class="card-title">Incidents by Type</h5>
               <div class="chart-container" >
                    <canvas id="IncidentAnalysis"></canvas>
                 </div>  
            </div>
            <div class="col-sm-6">
                <h5 class="card-title">Incidents by District</h5>
                <div class="chart-container" >
                    <canvas id="IncidentsByDistrict"></canvas>
                </div> 
            </div>
            </div>
        </div>  
    </div>

    <p></p>
    
    <div class="card">
        <div class="card-header">
          Arrests
        </div>
        <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
               <h5 class="card-title">Arrests by Charge</h5>
               <div class="chart-container">
               <canvas id="ArrestsByChargeChart"></canvas>
           </div>
            </div>
            <div class="col-sm-6">
                <h5 class="card-title">Arrests by Gender</h5>
                <div class="chart-container">
                    <canvas id="ArrestsByGenderChart"></canvas>
                </div>
            </div>
            </div>
        </div>  
    </div>

    <p></p>
    
    <div class="card">
        <div class="card-header">
          Calls for Assistance
        </div>
        <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
               <h5 class="card-title">Calls by Type</h5>
               <div class="chart-container">
                <canvas id="CallsByTypeChart"></canvas>
            </div>
            </div>
            <div class="col-sm-6">
                <h5 class="card-title">Calls by Agency</h5>
                <div class="chart-container">
                    <canvas id="CallsByAgencyChart"></canvas>
                </div>
            </div>
            </div>
        </div>  
    </div>
     
      </div>
    </main>
  </div>
</div>


<?php
      include("charts/arrests_chart.php"); 
      include("charts/arrests_by_gender_chart.php");  
      include("charts/incidents_chart.php");
      include("charts/incidents_by_district_chart.php");
      include("charts/call_types_chart.php");
      include("charts/call_agencies_chart.php");
      include("includes/footer2.php");
?>
