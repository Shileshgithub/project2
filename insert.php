<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
            <title></title>
        </head>
    <body>

    <div class="container">
        <div class = "row mt-5" >
        <div class="col-md-12 col-lg-12">
        <?php echo form_open_multipart('Crudcontroller/add_data');?>
                    <div class="col-md-6 col-lg-6 mb-3">
                        <label>Full Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Full name">
                        <?=form_error('name')?>
                    </div>
                    <div class="col-md-6 col-lg-6 mb-3">
                        <label>Gender</label>
                        <div class="form-group">
                        <input type="radio" name="gender" value="Male">Male
                        <input type="radio" name="gender" value="Female">Female
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 mb-3">
                        <label>City</label>
                        <select calss="form-control" name="city">
                                <option value="">select</option>
                                <option value="JABALPUR">JABALPUR</option>
                                <option value="DAMOH">DAMOH</option>
                                <option value="INDORE">INDORE</option>
                        </select>
                          </div>
                          <div class="col-md-6 col-lg-6 mb-3">
                        <label>Hobby</label>
                        <div class="form-group">
                        <input type="checkbox" name="hobby" value="singing">singing
                        <input type="checkbox" name="hobby" value="Dancing">Dancing
                        </div>
                          <input type="submit" name="" class="btn btn-info">
                          <?php echo form_close();?>
                           </div>
         </div>
      </div>
  </body>
</html>