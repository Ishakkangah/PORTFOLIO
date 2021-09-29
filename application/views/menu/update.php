<div class="jumbotron">
<div class="container">
	<div class="row">
		<div class="col-md-6">



<!-- BAGIAN TITLE -->
<h4 class="font-weight-bolder text-white mt-5"><?= $title; ?></h5>
<?php echo form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        
<form action="" method="post">
  <div class="form-group">
  	<input type="hidden" name="id" id="id" value="<?= $detail['id']; ?>">
  </div>

  <div class="form-group font-weight-bolder">
    <label for="menu">Update new menu</label>
    <input type="text" class="form-control" id="menu" name="menu" aria-describedby="emailHelp"
    value="<?= $detail['menu']; ?>" autofocus>
    <?php echo form_error('menu', '<small class="text-danger">', '</small>'); ?>
  </div>


      <div class="form-group">
        <a href="<?= base_url('menu'); ?>" class="btn btn-secondary font-weight-bolder" data-dismiss="modal">Close</a>
        <button type="submit" class="btn btn-primary font-weight-bolder text-white">update new menu</button>
      	</form>
      </div>
    </div>
  </div>
</div>
</div>