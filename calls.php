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
        </div>
    </div>
        <br />
        <div class="row">
            <div class="col-lg-12">
                <?php include("tables/recent_calls_cards.php"); ?>
            </div>
        </div>


    <?php include 'includes/footer.php';?>