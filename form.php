<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
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
          <div class="col-md-6">
              
         <!-- <?php echo form_open('homecontroller/my_func',['id'=>'my-form' ,'class'=>'my-form','method'=>'post', 'enctype'=>'multipart-formdata' ]);?>  -->
          
          <?php echo form_open_multipart('homecontroller/my_func');?>
           
               <input type="text" class="form-control" name="username" value="<?php echo 
               set_value('username')?>" placeholder="username">
                <?php echo form_error('username');?>
                <input type="password" name="userpass" value="<?php echo 
                set_value('userpass')?>" class="form-control" placeholder="password">
                <?php echo form_error('userpass');?>
                <input type="text" name="useremail" value="<?php echo 
                set_value('useremail')?>" class="form-control" placeholder="email">
                <?php echo form_error('useremail');?>
                <input type="file" name="document" value="document"   class="form-control"> 
                <?php echo form_error('document');?>
                <input type="submit" value="submit" class="btn btn-success">             
               <!-- <?php echo form_submit('submit','login',['class'=>'form-control w-25 mt-5 btn btn-success']);?> -->
               <?php echo form_close();?>
               </div>
         </div>
      </div>
  </body>
</html>

