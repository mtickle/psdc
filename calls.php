<?php include 'includes/header.php';?>


<div class="container">
<div class="row">
        <div class="col-lg-12">
        <div class="card">
                <div class="card-header">
                    Calls Map
                </div>
                <div class="card-body">
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
             <?php include("tables/recent_calls_cards.php"); ?>
        </div>

        <div class="col-sm-3">

        </div>
    </div>
</div>


<?php include 'includes/footer.php';?>