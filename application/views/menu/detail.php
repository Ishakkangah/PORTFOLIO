<div class="jumbotron">
<div class="container">
	<div class="row">
		<div class="col-md-6">
			
<!-- BAGIAN TITLE -->
<H2 class="font-weight-bolder text-white mt-5"><?= $title; ?></H2>
<!-- BAGIAN TABLE -->
<table class="table table-white border border-white font-weight-bolder my-1">
  <thead>
    <tr class="bg-success border">
      <th scope="col">#</th>
      <th scope="col">Menu</th>
    </tr>
  </thead>
  <tbody class="bg-light">
    <tr>
      <th scope="row"><?= $detail['id']; ?></th>
      <td><?= $detail['menu']; ?></td>
      </td>
    </tr>
    <a href="<?= base_url('menu'); ?>" class="btn btn-primary font-weight-bolder"> Back to menu </a>
  </tbody>
</table>

		</div>
	</div>
</div>
</div>