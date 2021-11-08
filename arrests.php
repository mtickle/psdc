<?php include 'includes/header.php'; ?>


<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <?php include("includes/chart_container.php"); ?>
        </div>
        <div class="col-sm-6">
            <?php include("tables/arrests_table.php"); ?>
        </div>
    </div>
</div>

<?php
      include("charts/arrests_chart.php");  
      include("includes/footer.php")
?>