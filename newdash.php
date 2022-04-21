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
  
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
<script src="includes/dashboard.js"></script>
</body>
</html>