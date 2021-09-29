<div class="container">
    <div class=" card col-lg-12">
      <h3 class="text-center font-weight-bolder">About</h3>




<h2 class="font-weight-bolder mt-5 mb-3"><?= $title; ?></h2>
<?php echo $this->session->flashdata('flash'); ?>
<?php echo form_open_multipart('landing/editBiodata');?>


  <div class="form-group row">
    <input type="hidden" id="id" name="id" value="<?= $biodata['id']; ?>">
  </div>

  <div class="form-group row">
    <label for="address" class="col-sm-2 col-form-label text-md-left">Picture</label>
    <div class="col-md-10">
      <div class="row">
        <div class="col-md-3">
          <img src="<?= base_url('assets/img/profile/') . $biodata['img']; ?>" class="img-thumbnail">
        </div>
        <div class="col-md-9">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="image" name="image">
            <label class="custom-file-label" for="image">Choose file</label>
          </div>
        </div>
      </div>
    </div>
    <?php echo form_error('image', '<small class="text-danger">', '</small>'); ?>
  </div>  

  <div class="form-group row">
    <label for="city" class="col-sm-2 col-form-label text-md-left">city born</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="city" name="city" value="<?= $biodata['city']; ?>">
      <?php echo form_error('city', '<small class="text-danger">', '</small>'); ?>
    </div>
  </div>

  <div class="form-group row">
    <label for="hbd" class="col-sm-2 col-form-label text-md-left">date born</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="hbd" name="hbd" value="<?= $biodata['date']; ?>">
      <?php echo form_error('hbd', '<small class="text-danger">', '</small>'); ?>
    </div>
  </div>

  <div class="form-group row">
    <label for="work" class="col-sm-2 col-form-label text-md-left">work</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="work" name="work" value="<?= $biodata['work']; ?>">
      <?php echo form_error('work', '<small class="text-danger">', '</small>'); ?>
    </div>
  </div>

  <div class="form-group row">
    <label for="religion" class="col-sm-2 col-form-label text-md-left">religion</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="religion" id="religion" value="<?= $biodata['religion']; ?>">
      <?php echo form_error('religion', '<small class="text-danger">', '</small>'); ?>
    </div>
  </div>

  <div class="form-group row">
    <label for="gender" class="col-sm-2 col-form-label text-md-left">gender</label>
    <div class="col-sm-10">
    <select class="form-control" id="gender" name="gender" <?= $biodata['gender'] ?>>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>
    </div>
  </div>

  <div class="form-group row">
    <label for="weight" class="col-sm-2 col-form-label text-md-left">weight</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="weight" name="weight" value="<?= $biodata['weight']; ?>">
      <?php echo form_error('weight', '<small class="text-danger">', '</small>'); ?>
    </div>
  </div>

  <div class="form-group row">
    <label for="height" class="col-sm-2 col-form-label text-md-left">height</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="height" name="height" value="<?= $biodata['height']; ?>">
      <?php echo form_error('height', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
  </div>

  <div class="form-group row">
    <label for="address" class="col-sm-2 col-form-label text-md-left">address</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="address" name="address" value="<?= $biodata['address']; ?>">
      <?php echo form_error('address', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-primary float-right mt-1 font-weight-bolder">update</button>
  </div>
</form>









<div class=" card col-md-12">
  <h4 class="card-header text-center font-weight-bolder mb-5">
     Sunting contact
  </h4>
  <form action="<?= base_url('landing/EditContact'); ?>" method="post">
    <div class="form-group">
      <input type="hidden" id="id" name="id" value="<?= $contact['id']; ?>">
    </div>
    <div class="form-group row">
      <label for="whatshapp" class="col-sm-3 col-form-label text-md-left">whatshapp</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="whatshapp" name="whatshapp" 
        value="<?= $contact['whatshapp']; ?>">
        <?php echo form_error('whatshapp', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
    </div>

    <div class="form-group row">
      <label for="email" class="col-sm-3 col-form-label text-md-left">email</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" name="email" value="<?= $contact['email']; ?>">
        <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
    </div>

    <div class="form-group row">
      <label for="facebook" class="col-sm-3 col-form-label text-md-left">facebook</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="facebook" name="facebook" value="<?= $contact['facebook']; ?>">
        <?php echo form_error('facebook', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
    </div>


    <div class="form-group row">
      <label for="instagram" class="col-sm-3 col-form-label text-md-left">instagram</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="instagram" name="instagram" value="<?= $contact['instagram']; ?>">
        <?php echo form_error('instagram', '<small class="text-danger">', '</small>'); ?>
      </div>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary float-right mt-1 font-weight-bolder">update</button>
    </div>
  </form>


<!-- EDIT HOBBY -->
<form action="<?= base_url('landing/EditHobby') ?>" method="post">
<div class=" card">
  <h4 class="card-header text-center font-weight-bolder mb-5">
     Insert Hobby
  </h4>
</div>

  <div class="form-group row">
    <label for="hobby" class="col-sm-2 col-form-label text-md-left">hobby</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="hobby" name="hobby">
      <?php echo form_error('hobby', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
  </div>
  <div class="form-group">
    <button href="submit" class="btn btn-primary float-right mt-1 font-weight-bolder">update</button>  
  </div>
</form>

<div class=" card text-center">
  <h4 class="card-header font-weight-bolder pb-5 pt-5">
    Hobby
  </h4>
    <table class="table table-hover font-weight-bolder">
      <thead>
        <tr>
          <th scope="col">Hobby</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach( $hobby as $h ) : ?>
        <tr>
          <th scope="row"><?= $h['hobby']; ?></th>
          <td>
            <a href="<?= base_url('landing/deleteHobby/') . $h['id']; ?>" class="badge badge-danger"
              onclick="return confirm('Are you sure ?');">delete</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>


<div class="card">
  <form action="<?= base_url('landing/editNote'); ?>" method="post">
    <div class=" card pt-5">
      <h4 class="card-header text-center font-weight-bolder mb-5">
         Sunting note
      </h4>
    </div>

    <div class="form-group row">
      <label for="whatshapp" class="col-sm-3 col-form-label text-md-left">Note</label>
         <div class="col-sm-9">
           <input type="text" class="form-control" id="whatshapp" name="whatshapp" 
            value="<?= $biodata['Note']; ?>">
            <?php echo form_error('whatshapp', '<small class="text-danger">', '</small>'); ?>
        </div>
    </div>
  </form>
</div>

<!-- SUNTING EDUCATAION -->
<div class="card">
    <div class=" card pt-5">
      <h4 class="card-header text-center font-weight-bolder mb-5">
         Insert education
      </h4>
    </div>

    <form action="<?= base_url('landing/editEducation'); ?>" method="post">
    <div class="form-group row">
      <label for="education" class="col-sm-3 col-form-label text-md-left">School</label>
         <div class="col-sm-9">
           <input type="text" class="form-control" id="education" name="education">
            <?php echo form_error('education', '<small class="text-danger">', '</small>'); ?>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary float-right mt-1">update</button>
    </div>
  </form>
</div>


<table class="table table-hover col-sm-6">
  <thead class="font-weight-bolder">
    <tr>
      <th scope="col">#</th>
      <th scope="col">School</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1; ?>
    <?php foreach( $education as $e ) : ?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><?= $e['education']; ?>  </td>
      <td>
        <a href="<?= base_url('landing/deleteEducation/') . $e['id']; ?>" class="badge badge-danger"
          onclick="return confirm('Are you sure ?');">delete</a>
      </td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>


<!-- SUNTING EXPERIENCE -->
<div class="card">
    <div class=" card pt-5">
      <h4 class="card-header text-center font-weight-bolder mb-5">
         Insert work experience
      </h4>
    </div>

    <form action="<?= base_url('landing/editExperience'); ?>" method="post">
    <div class="form-group row">
      <label for="experience" class="col-sm-3 col-form-label text-md-left">work experience</label>
         <div class="col-sm-9">
           <input type="text" class="form-control" id="experience" name="experience">
            <?php echo form_error('experience', '<small class="text-danger">', '</small>'); ?>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary float-right font-weight-bolder mt-1">update</button>
    </div>
  </form>
</div>  



<table class="table table-hover col-sm-6">
  <thead class="font-weight-bolder">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Work experience</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1; ?>
    <?php foreach( $experience as $e ) : ?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><?= $e['experience']; ?>  </td>
      <td>
        <a href="<?= base_url('landing/deleteExperience/') . $e['id']; ?>" class="badge badge-danger"
          onclick="return confirm('Are you sure ?');">delete</a>
      </td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>


  </div>
</div>












