<?php include 'includes/header2.php'; ?>


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">VIN Lookup</h1>
    </div>

    <div class="table-responsive">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Data
                    </div>
                    <div class="card-body">
                        <form action="vin_decode.php" method="post">

                        <div class="row g-3 align-items-center">
                            <div class="col-auto">
                                <label for="vin" class="col-form-label">VIN</label>
                            </div>    
                            <div class="col-auto">
                                <input type="text" id="vin" name="vin" class="form-control">
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary">Submit</button>&nbsp;
                                <a class="btn btn-primary" href="https://vingenerator.org/" target="_blank">VIN Generator</a>
                            </div>
                            </form>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
      include("includes/footer2.php")
?>