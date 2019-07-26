<?php include('header.php');?>

<div class="container" style="margin-top:50px;">
<h1>Register Form</h1>
<?php if($error=$this->session->flashdata('user_notadd')):?>
<div class="row">
<div class="col-lg-4">
<div class="alert alert-danger">
<?php echo $error; ?> 
</div>
</div>
</div>
<?php endif;?>





<?php echo form_open_multipart('user/submit');?>
<div class="row">
<div class="col-lg-6">
  <div class="form-group">
    <label for="Username">Name:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter name','name'=>'username',
    'value'=>set_value('username')]);?>
    
  </div>
  </div>
  
  <div class="col-lg-6" style="margin-top:30px;">
  <?php echo form_error('username');?> 
  </div>
  </div>

  <div class="row">
<div class="col-lg-6">
  <div class="form-group">
    <label for="Aadhar">Username(Aadhar no):</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Aadhar no','name'=>'Aadhar',
    'value'=>set_value('Aadhar')]);?>
    
  </div>
  </div>
  
  <div class="col-lg-6" style="margin-top:30px;">
  <?php echo form_error('Aadhar');?> 
  </div>
  </div>

  <div class="row">
<div class="col-lg-6">
  <div class="form-group">
    <label for="dob">DOB:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter DOB','name'=>'dob',
    'value'=>set_value('dob')]);?>
    
  </div>
  </div>
  
  <div class="col-lg-6" style="margin-top:30px;">
  <?php echo form_error('dob');?> 
  </div>
  </div>

  <div class="row">
<div class="col-lg-6">
  <div class="form-group">
    <label for="mobile_no">Mobile No:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Mobile no','name'=>'mobile_no',
    'value'=>set_value('mobile_no')]);?>
    
  </div>
  </div>
  
  <div class="col-lg-6" style="margin-top:30px;">
  <?php echo form_error('mobile_no');?> 
  </div>
  </div>

  <div class="row">
<div class="col-lg-6">
  <div class="form-group">
    <label for="Email">Email:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Email','name'=>'email',
    'value'=>set_value('email')]);?>
    
  </div>
  </div>
  
  <div class="col-lg-6" style="margin-top:30px;">
  <?php echo form_error('email');?> 
  </div>
  </div>


  <div class="row">
<div class="col-lg-6">
  <div class="form-group">
    <label for="pwd">Password:</label>
   
    <?php echo form_password(['class'=>'form-control','type'=>'password','placeholder'=>'Password','name'=>'password'
    ,'value'=>set_value('password')]);?>
  </div></div>
  <div class="col-lg-6" style="margin-top:30px;">
  <?php echo form_error('password');?> 
  </div> </div>

  
  <div class="row">
<div class="col-lg-6">
  <div class="form-group">
    <label for="pwd1">Confirm Password:</label>
   
    <?php echo form_password(['class'=>'form-control','type'=>'password','placeholder'=>'confirm Password','name'=>'cpassword'
    ,'value'=>set_value('cpassword')]);?>
  </div></div>
  <div class="col-lg-6" style="margin-top:40px;">
  <?php echo form_error('cpassword');?> 
  </div> </div>

  <div class="row">
<div class="col-lg-6">
  <div class="form-group">
    <label for="address">Address:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Address','name'=>'address',
    'value'=>set_value('address')]);?>
    
  </div>
  </div>
  
  <div class="col-lg-6" style="margin-top:30px;">
  <?php echo form_error('address');?> 
  </div>
  </div>

  <div class="row">
<div class="col-lg-6">
  <div class="form-group">
    <label for="body">Select Image:</label>
    <?php echo form_upload(['name'=>'userfile']);?>
    
  </div>
  </div>
  

  
  <div class ="text-danger">
  <div class="col-lg-6" style="margin-top:30px;">
  <?php if(isset($upload_error)){echo $upload_error;}?> 
</div>
  </div>
</div>

 <?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary','value'=>'submit']);?>
 
 <?php echo form_reset(['type'=>'reset','class'=>'btn btn-dark','value'=>'Reset']);?>


 
</div>


<?php include('footer.php');?>