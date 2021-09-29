<div class=" jumbotron">
<div class="container">
	<div class="row">
		<div class="col-md-6">
			
<!-- BAGIAN TITLE -->
<H2 class="font-weight-bolder mt-5"> Halaman <?= $title; ?></H2>
<!-- BAGIAN TABLE -->
<table class="table border border-white bg-light font-weight-bolder text-center">
  <thead>
    <tr class="bg-success">
      <th scope="col">#</th>
      <th scope="col">Menu</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	<?php $i=1; ?>
  	<?php foreach( $role as $r ) : ?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><?= $r['role']; ?></td>
      <td>
      	<a href="<?= base_url('admin/access/') . $r['id']; ?>" class="badge badge-warning">access</a>
      	<a href="<?= base_url('admin/delete/') . $r['id']; ?>" class="badge badge-danger">delete</a>
      	<a href="<?= base_url('admin/update/') . $r['id']; ?>" class="badge badge-primary">update</a>
      </td>
    </tr>
	<?php endforeach; ?>
    <tr>
  </tbody>
</table>




		</div>
	</div>
</div>
</div>