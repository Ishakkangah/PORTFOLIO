<div class="jumbotron">
<div class="container">
  <div class="row">
    <div class="col-md-8">
      

<!-- BAGIAN TITLE  -->
<h2 class="font-weight-bolder text-white mt-5"><?= $title; ?></h2>
<!-- BAGIAN FORM -->
<form action="<?= base_url('user/changepassword'); ?>" method="post">
  <div class="form-group font-weight-bolder text-white">
    <label for="current">Current password</label>
    <input type="text" class="form-control" id="current" name="current" aria-describedby="emailHelp" autofocus>
    <?php echo form_error('current', '<small class="text-danger">','</small>'); ?>
  </div>
    <div class="form-group font-weight-bolder text-white">
    <label for="password1">New password</label>
    <input type="text" class="form-control" id="password1" name="password1" aria-describedby="emailHelp">
  	<?php echo form_error('password1', '<small class="text-danger">','</small>'); ?>
  </div>
    <div class="form-group font-weight-bolder text-white">
    <label for="password2">Repeat password</label>
    <input type="text" class="form-control" id="password2" name="password2" aria-describedby="emailHelp">
  	<?php echo form_error('password2', '<small class="text-danger">','</small>'); ?>
  </div>
  <div class="form-group font-weight-bolder text-white">
  	<button type="submit" class="btn btn-primary font-weight-bolder float-right">Change save</button>
  </div>
 </form>


	 </div>
  </div>
</div>
</div>