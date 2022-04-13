<?php include 'includes/header.php'; ?>


<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    Data
                </div>
                <div class="card-body">



                <form action="vin_decode.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">VIN</label>
    <input type="text" id="vin" name="vin" class="form-control">
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