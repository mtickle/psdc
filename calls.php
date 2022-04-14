<?php include 'includes/header.php';?>


<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Recent Calls Map
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
            <div class="card">
                <div class="card-header">
                    Calls for Assistance
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5 class="card-title">Calls by Type</h5>
                            <div class="chart-container">
                                <canvas id="CallsByTypeChart"></canvas>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h5 class="card-title">Calls by Agency</h5>
                            <div class="chart-container">
                                <canvas id="CallsByAgencyChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br />

    <br />
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Calls for Assistance
                </div>
                <div class="card-body">
                <?php include("tables/recent_calls_table.php"); ?>
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


    <?php 
        include("tables/recent_calls_table.php");
        include("charts/call_types_chart.php");
        include("charts/call_agencies_chart.php");
        include("includes/footer.php");
    ?>