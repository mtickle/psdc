<?php include 'includes/header.php'; ?>


<div class="container">
    <div class="row">
        <div class="col-sm-6">

            <div class="card">
                <div class="card-header">
                    Analysis
                </div>
                <div class="card-body">
                    <?php include("includes/chart_container.php"); ?>
                </div>
            </div>


        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    Data
                </div>
                <div class="card-body">
                    <?php include("tables/arrests_table.php"); ?>
                </div>
            </div>
      </div>
    </div>
</div>

<?php
      include("charts/arrests_chart.php");  
      include("includes/footer.php")
?>
