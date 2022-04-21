<?php include 'includes/header2.php'; ?>


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Vehicle Models</h1>
    </div>

    <div class="table-responsive">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        Data
                    </div>
                    <div class="card-body">
                        <?php include("tables/models_table.php"); ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
<?php
      include("includes/footer2.php")
?>
