
<?php include 'includes/header.php'; ?>

<div class="container-lg pb-3">
    <div class="d-grid gap-3" style="grid-template-columns: 1fr 1fr;">
      
        <div class="bg-light border rounded-3">
            <?php include("includes/chart_container.php"); ?>
        </div>
      
      <div class="bg-light border rounded-3">
            <?php include("tables/incidents_table.php"); ?>     
      </div>

    </div>
  </div>

<?php
      include("charts/incidents_chart.php");
      include("includes/footer.php")  
?>
