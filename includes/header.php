<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    $page = basename($_SERVER['PHP_SELF']);
    $active = "";

    if ($page == "index.php"):
      $active = "active";
    elseif ($page == "incidents.php"):
      $active = "active";
    elseif ($page == "arrests.php"):
      $active = "active";
    elseif ($page == "about.php"):
      $active = "active";
    else:
      $active = "";
    endif;

?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Raleigh/Wake LE Data</title>

    <!-- CSS only -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>
    <main>

        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap" />
                    </svg>
                    <span class="fs-4">Local Public Safety Data Analysis</span>
                </a>

                <ul class="nav nav-pills">



                    <li class="nav-item"><a href="index.php" class="nav-link <?php echo $active;}?>">Home</a></li>
                    <li class="nav-item"><a href="incidents.php" class="nav-link <?php echo $active;}?>">Incidents</a></li>
                    <li class="nav-item"><a href="arrests.php" class="nav-link <?php echo $active;}?>">Arrests</a></li>
                    <li class="nav-item"><a href="about.php" class="nav-link <?php echo $active;}?>">About</a></li>
                </ul>
            </header>
        </div>