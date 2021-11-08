<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    $page = basename($_SERVER['PHP_SELF']);
    $index_active = "";
    $incidents_active = "";
    $arrests_active = "";
    $about_active = "";	

    if ($page == "index.php"):
      $index_active = "active";
    elseif ($page == "incidents.php"):
      $incidents_active = "active";
   elseif ($page == "arrests.php"):
     $arrests_active = "active";
    elseif ($page == "about.php"):
      $about_active = "active";
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
                        <li class="nav-item"><a href="incidents.php"
                                class="nav-link <?php echo $incidents_active;?>">Incidents</a></li>
                        <li class="nav-item"><a href="arrests.php"
                                class="nav-link <?php echo $arrests_active;?>">Arrests</a></li>
                        <li class="nav-item"><a href="about.php" class="nav-link <?php echo $about_active;?>">About</a>
                        </li>
                    </ul>
                    <form>
                        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                    </form>
                </div>
            </div>
        </nav>

        <br />
