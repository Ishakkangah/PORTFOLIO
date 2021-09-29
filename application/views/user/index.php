<div class="jumbotron">
<div class="container">
  <div class="row">
    <div class="col-md bg-light mt-5">
      
<!-- BAGIAN TITLE -->
<!-- BAGIAN ADMIN -->
<h2 class="font-weight-bolder text-white mt-2"><?= $title; ?></h2>
<div class="card mb-3 col-md">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?= base_url('assets/img/profile/') . $user['img']; ?>" class="img-thumbnail shadow-none p-3 mb-5 bg-light rounded">
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
    <?php $i=1; ?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><?= $user['name']; ?></td>
      <td><?= $user['email'] ?></td>
      <td>
        <a href="<?= base_url('admin/deleteAccount/') . $user['id']; ?>" class="badge badge-danger"
          onclick="return confirm('yakin ?')">delete</a>
        <a href="<?= base_url('admin/detailAccount/') . $user['id']; ?>" class="badge badge-success">detail</a>
      </td>
    </tr>
  </tbody>
</table>

    </div>
  </div>
</div>



    </div>
  </div>
</div>
</div>