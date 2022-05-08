<?php include 'includes/header2.php'; ?>


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Crime Code Explorer</h1>
    </div>


    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Crime Codes
                    </div>
                    <div class="card-body">
                        <?php include("tables/crime_code_table.php"); ?>
                    </div>
                </div>
            </div>
        </div>


    </div>

</main>

<?php
      include("includes/footer2.php")  
?>