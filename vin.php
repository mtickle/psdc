<?php include 'includes/header.php'; ?>


<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    Data
                </div>
                <div class="card-body">

                    <form action="vin_decode.php" method="get">
                        <div class="form-group">
                            <label for="exampleInputEmail1">VIN</label>
                            <input type="text" class="form-control" id="vin" name="vin" aria-describedby="vin" placeholder="1C4RJFBM2GC306164">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>
</div>
<?php
      include("includes/footer.php")
?>