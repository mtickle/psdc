<?php include 'includes/header.php';?>


<div class="container">
<div class="row">
        <div class="col-sm-9">
        <div class="card">
                <div class="card-header">
                    Calls Map
                </div>
                <div class="card-body">
                    <h5 class="card-title">911 Calls Map</h5>
                    
                    <?php include("maps/calls_map.php"); ?>
                    
                </div>
            </div>
	<br/>
        </div>

        <div class="col-sm-3">

        </div>
    </div>    
<div class="row">
        <div class="col-sm-9">
        <div class="card">
                <div class="card-header">
                    Recent 911 Calls
                </div>
                <div class="card-body">
                    <h5 class="card-title">Recent 911 Calls</h5>
                    
                    <?php include("tables/recent_calls_table.php"); ?>
                    
                </div>
            </div>
	<br/>
        </div>

        <div class="col-sm-3">

        </div>
    </div>
</div>


<?php include 'includes/footer.php';?>
