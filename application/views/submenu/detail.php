<div class="jumbotron">
<div class="container">
	<div class="row">
		<div class="col-md">
			

<!-- BAGIAN TITLE -->
<h2 class="font-weight-bolder text-white mt-5"><?= $title ?></h2>
<!-- BAGIAN TABLE -->
<table class="table table-white font-weight-bolder my-1">
  <thead class="bg-success">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Menu</th>
      <th scope="col">Title</th>
      <th scope="col">Url</th>
      <th scope="col">Icon</th>
      <th scope="col">Is_active</th>
    </tr>
  </thead>
  <tbody class="bg-light">
    <tr>
      <th scope="row">1</th>
      <td><?= $submenu['menu']; ?></td>
      <td><?= $detail['title']; ?></td>
      <td><?= $detail['url']; ?></td>
      <td><?= $detail['icon']; ?></td>
      <td><?= $detail['is_active']; ?></td>
    </tr>	
  </tbody>
  <a href="<?= base_url('menu/submenu'); ?>" class="btn btn-primary font-weight-bolder">Back to submenu</a>
</table>


		</div>
	</div>
</div>
</div>