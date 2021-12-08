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
    endif;
    
    include("classes/incident.php");
?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Raleigh/Wake LE Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

</head>

<body>
    <main>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Container</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample07">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a href="index.php" class="nav-link <?php echo $index_active;?>">Home</a>
                        </li>
                        <li class="nav-item"><a href="incidents.php" class="nav-link <?php echo $incidents_active;?>">Incidents</a></li>
                        <li class="nav-item"><a href="arrests.php" class="nav-link <?php echo $arrests_active;?>">Arrests</a></li>
                        <li class="nav-item"><a href="calls.php" class="nav-link <?php echo $calls_active;?>">Calls</a></li>
                        <li class="nav-item"><a href="vehicles.php" class="nav-link <?php echo $vehicles_active;?>">Vehicles</a></li>
                        <li class="nav-item"><a href="about.php" class="nav-link <?php echo $about_active;?>">About</a>
                        </li>
                    </ul>                    
                </div>
            </div>
        </nav>

        <br />