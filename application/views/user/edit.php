<div class="jumbotron">
<div class="container">
  <div class="row">
    <div class="col-md-8">
      

<!-- BAGIAN TITLE  -->
<h2 class="font-weight-bolder font-weight-bolder text-white mt-5 mb-5"><?= $title; ?></h2>
<!-- BAGIAN FORM -->
<?php echo form_open_multipart('user/edit');?>
  <div class="form-group row">
    <label for="Email" class="col-sm-2 col-form-label font-weight-bolder text-white">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control font-weight-bolder text text-primary" id="Email" name="email" value="<?= $user['email']; ?>" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label font-weight-bolder text-white">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control font-weight-bolder text text-primary" id="name" name="name" value="<?= $user['name']; ?>">
    </div>
  </div>
  <div class="form-group row">
      <div class="col-sm-2 col-form-label font-weight-bolder text-white">Picture </div>
        <div class="col-md-10 row">
          <div class="col-md-3">
            <img src="<?= base_url('assets/img/profile/') . $user['img']; ?>" class="img-thumbnail">  
          </div>
          <div class="custom-file col-md-9">
              <input type="file" class="custom-file-input" id="image" name="image">
              <label class="custom-file-label text-monospace" for="image">Choose file</label>
          </div>
      </div>  
  </div>
    <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label font-weight-bolder"></label>
    <div class="col-sm-2">
      <button type="submit" class="btn btn-primary font-weight-bolder">Change</button>
    </div>
  </div>
</form>



    </div>
  </div>
</div>
</div>