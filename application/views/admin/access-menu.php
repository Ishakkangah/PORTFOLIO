<div class="jumbotron">
<div class="container">
	<div class="row">
		<div class="col-md-6">
			
<!-- BAGIAN TITLE -->
<H2 class="font-weight-bolder"> Role <?= $role['role']; ?></H2>
<!-- BAGIAN TABLE -->
<table class="table border border-white font-weight-bolder text-center">
  <thead>
    <tr class="bg-success">
      <th scope="col">#</th>
      <th scope="col">Menu</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody class="bg-light">
  	<?php $i=1; ?>
    <?php foreach( $menu as $m ) : ?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><?php echo $m['menu']; ?></td>
      <td>

 <div class="form-check">
  <input class="form-check-input" type="checkbox" <?= check_access($role['id'], $m['id']); ?> 
  data-role="<?= $role['id']; ?>"
  data-menu="<?= $m['id']; ?>"
  >
 </div>

      </td>
    </tr>
    <?php endforeach; ?>
    <tr>
      <a href="<?= base_url('admin/role'); ?>" class="btn btn-primary font-weight-bolder my-1"> Back to role </a>
  </tbody>
</table>




		</div>
	</div>
</div>
</div>