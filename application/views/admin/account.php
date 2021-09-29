<div class="jumbotron">
<div class="container">
  <div class="row">
    <div class="col-md-5">
     <?php echo $this->pagination->create_links(); ?>
    </div>
  </div>
</div>



<div class="container">
	<div class="row">
		<div class="col-md bg-white">


<form action="" method="post">
<div class="input-group mb-3 mt-5">
  <input type="text" class="form-control col-md-6" placeholder="Seach.." aria-label="Recipient's username" aria-describedby="button-addon2" id="keyword" name="keyword">
  <div class="input-group-append">
    <input class="btn btn-success" type="submit" name="submit">
  </div>
</div>
</form>




<h5 class="font-weight-bolder"> Result : <?= $result; ?></h5>
<!-- BAGIAN ADMIN -->
<h2 class="font-weight-bolder"><?= $title; ?></h2>
<?php foreach( $user1 as $u ) : ?>
<div class="card mb-3 col-md">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?= base_url('assets/img/profile/') . $u['img']; ?>" class="img-thumbnail shadow-none p-3 mb-5 bg-light rounded">
    </div>
    <div class="col-md-8">
<table class="table border border-white font-weight-bolder text-center">
  <thead>
    <tr class="bg-success">
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?= ++$start;; ?></th>
      <td><?= $u['name']; ?></td>
      <td><?= $u['email'] ?></td>
      <td>
      	<a href="<?= base_url('admin/deleteAccount/') . $u['id']; ?>" class="badge badge-danger"
      		onclick="return confirm('yakin ?')">delete</a>
      	<a href="<?= base_url('admin/detailAccount/') . $u['id']; ?>" class="badge badge-success">detail</a>
      </td>
    </tr>
  </tbody>
</table>

<div class="card">
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?= $u['Live']; ?>
    	<span class="badge badge-primary">Sunting</span>
    </li>
    <li class="list-group-item"><?= $u['jabatan']; ?>
    	<span class="badge badge-primary">Sunting</span>
    </li>
    <li class="list-group-item"><?= $u['Hoby']; ?>
		<span class="badge badge-primary">Sunting</span>    	
    </li>
  </ul>
</div>

    </div>
  </div>
</div>
<?php endforeach; ?>

		</div>
	</div>
</div>
</div>