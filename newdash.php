
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Dashboard Template · Bootstrap v5.1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

    <!-- Custom styles for this template -->
    <link href="includes/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Company name</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
  <!-- <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Sign out</a>
    </div>
  </div> -->
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">

        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php"><span data-feather="home"></span>Dashboard</a>
            </li>

          <li class="nav-item">
            <a class="nav-link" href="incidents.php"><span data-feather="file"></span>Incidents</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="arrests.php"><span data-feather="camera"></span>Arrests</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="calls.php"><span data-feather="alert-triangle"></span>Calls</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="crashes.php"><span data-feather="file"></span>Crashes</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="vehicles.php"><span data-feather="truck"></span>Vehicles</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="vin.php"><span data-feather="search"></span>VIN Lookup</a>
          </li>

        </ul>

      </div>
    </nav>


    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>


        
    </div>


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