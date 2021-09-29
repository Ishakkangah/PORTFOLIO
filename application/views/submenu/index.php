<div class="jumbotron">
<div class="container">
	<div class="row">
		<div class="col">
<!-- BAGIAN TITLE -->
<h2 class="font-weight-bolder"><?= $title ?></h2>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#submenuModal">
  Insert new submenu
</button>

<!-- BAGIAN TABLE -->
<table class="table table-white font-weight-bolder bg-light my-1 mb-5">
  <thead class="bg-success text-white">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Menu</th>
      <th scope="col">Title</th>
      <th scope="col">Url</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	<?php $i=1; ?>	
  	<?php foreach( $submenu as $sm ) : ?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><?= $sm['menu']; ?></td>
      <td><?= $sm['title']; ?></td>
      <td><?= $sm['url']; ?></td>
      <td>
      	<a href="<?= base_url('menu/deleteSubmenu/') . $sm['id']; ?>" class="badge badge-danger"
      		onclick="return confirm('yakin');">delete</a>
      	<a href="<?= base_url('menu/detailSubmenu/') . $sm['id']; ?>" class="badge badge-primary">detail</a>
      	<a href="<?= base_url('menu/updateSubmenu/') . $sm['id']; ?>" class="badge badge-success">update</a>
      </td>
    </tr>	
	<?php endforeach; ?>
  </tbody>
</table>

		</div>
	</div>
</div>






<!-- Modal -->
<div class="modal fade" id="submenuModal" tabindex="-1" role="dialog" aria-labelledby="submenuModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content bg-success border border-white">
      <div class="modal-header">
        <h5 class="modal-title font-weight-bolder text-white" id="submenuModalLabel"> Insert new submenu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
<form action="<?= base_url('menu/submenu'); ?>" method="post">
 <div class="form-group">
   <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder="Insert new title">
  </div>


 <div class="form-group">
 	<select name="menu_id" id="menu_id" class="form-control font-weight-bolder text-primary">
    <option class="font-weight-bolder" value="">Select submenu</option>
    <?php foreach( $menu as $m ) : ?>
    <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
	<?php endforeach; ?>
	</select>
  </div>

  <div class="form-group">
   <input type="text" class="form-control" id="url" name="url" aria-describedby="emailHelp" placeholder="Insert new url">
  </div>

  <div class="form-group">
   <input type="text" class="form-control" id="icon" name="icon" aria-describedby="emailHelp" placeholder="Insert new icon">
  </div>

 <div class="form-check">
  <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" checked >
  <label class="form-check-label font-weight-bolder text-white " for="defaultCheck1">
    Is active ?
  </label>
 </div>


  


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary font-weight-bolder" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary font-weight-bolder">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>