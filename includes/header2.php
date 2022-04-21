<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    $page = basename($_SERVER['PHP_SELF']);
    $index_active = "";
    $incidents_active = "";
    $arrests_active = "";
    $about_active = "";	
    $calls_active = "";
    $crashes_active="";

    if ($page == "index.php"):
      $index_active = "active";
    elseif ($page == "incidents.php"):
        $incidents_active = "active";
   elseif ($page == "arrests.php"):
        $arrests_active = "active";
    elseif ($page == "calls.php"):
        $calls_active = "active"; 
    elseif ($page == "vehicles.php"):
        $vehicles_active = "active";     
    elseif ($page == "about.php"):
        $about_active = "active";
        elseif ($page == "crashes.php"):
            $crashes_active = "active";    
    endif;
    
    include("classes/incident.php");
?>
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