<div class="jumbotron">
<div class="container">
	<div class="row">
		<div class="col-md-6">



<!-- BAGIAN TITLE -->
<h2 class="font-weight-bolder text-white mt-5"><?= $title; ?></h2>
<?php echo form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#menuModal">
  Insert new menu
</button>
<!-- BAGIAN FORM -->
<form action="<?= base_url('menu'); ?>" method="post">
<table class="table table-white font-weight-bolder bg-light my-1">
  <thead>
    <tr class="bg-success border border-white">
      <th scope="col">#</th>
      <th scope="col">Menu</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	<?php $i=1; ?>
  	<?php foreach( $menu as $m ) : ?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><?= $m['menu']; ?></td>
      <td>
      	<a href="<?= base_url('menu/delete/') . $m['id']; ?>" class="badge badge-danger"
      		onclick="return confirm('yakin');">delete</a>
      	<a href="<?= base_url('menu/detail/') . $m['id']; ?>" class="badge badge-primary">detail</a>
      	<a href="<?= base_url('menu/update/') . $m['id']; ?>" class="badge badge-success">update</a>
      </td>
    </tr>
	<?php endforeach; ?>
  </tbody>
</table>
</form>

		</div>
	</div>
</div>






<!-- Modal -->
<div class="modal fade" id="menuModal" tabindex="-1" role="dialog" aria-labelledby="menuModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content bg-success border border-white">
      <div class="modal-header">
        <h5 class="modal-title font-weight-bolder text-white" id="menuModalLabel">Insert new menu </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      	<form action="" method="post">
  <div class="form-group">
    <label for="menu">Insert new menu</label>
    <input type="text" class="form-control" id="menu" name="menu" aria-describedby="emailHelp">
  </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary font-weight-bolder text-white" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary font-weight-bolder text-white">Insert new menu</button>
      	</form>
      </div>
    </div>
  </div>
</div>
</div>