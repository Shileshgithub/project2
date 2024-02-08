
<?php include('header.php');?>
   <div class="container" style="margin-top: 20px;">
   <h1>Admin form</h1>
   <?php echo form_open('admin/index');?>
   <div class="row">
      <div class="col-lg-6">
      <div class="form-group">
      <label for="Username">Username:-</label>
      <?php echo form_input(['class'=>'form-control','placeholder'=>
      'Enter Username' ,'name'=>'uname','value'=>set_value('uname')]);?>
   </div>
   </div>
   <div class="col-lg-6" style="margin-top:40px;">
      <?php echo form_error('uname');?>
  </div>
  </div>  
   <div class="row">
   <div class="col-lg-6"   style="margin-top:40px;">
   <div class="form-group">
    <label for="pwd">PassWord:-</label>
    <?php echo form_password(['class'=>'form-control','placeholder'=>'Enter Password','name'=>'pass','value'=>set_value('pass')]);?>
   </div>
   </div>
   <div class="col-lg-6" style="margin-top:40px;">
   <?php echo form_error('pass');?>
    </div>
    <div>
   <?php echo form_submit(['type'=>'submit','class'=>'btn btn-default','value'=>'submit']);?>
   <?php echo form_reset(['type'=>'reset','class'=>'btn btn-default','value'=>'reset']);?>
    </div>
    
    







   <?php  include('footer.php');?>