<div class="jumbotron">
<div class="container">
	<div class="row">
		<div class="col-md-8 bg-success">
<!-- BAGIAN TITLE -->
<h2 class="font-weight-bolder my-4"><?= $title ?></h2>
<!-- Button trigger modal -->
       
<form action="" method="post">
<div class="form-group">
   <input type="hidden" id="id" name="id" value="<?= $detail['id']; ?>">
  </div>

 <div class="form-group">
   <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder="Insert new title" value="<?= $detail['title']; ?>">
  </div>


 <div class="form-group">
 	<select name="menu_id" id="menu_id" class="form-control font-weight-bolder">
 	<option class="font-weight-bolder" value="<?= $detail['menu_id']; ?>">Select submenu</option>
    <?php foreach( $menu as $m ) : ?>
    <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
	<?php endforeach; ?>
	</select>
  </div>

  <div class="form-group">
   <input type="text" class="form-control" id="url" name="url" aria-describedby="emailHelp" placeholder="Insert new url" value="<?= $detail['url']; ?>" >
  </div>

  <div class="form-group">
   <input type="text" class="form-control" id="icon" name="icon" aria-describedby="emailHelp" placeholder="Insert new icon" value="<?= $detail['icon']; ?>">
  </div>

 <div class="form-check">
  <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" checked >
  <label class="form-check-label font-weight-bolder text-white " for="is_active">
    Is active ?
  </label>
 </div>


  


        <a href="<?= base_url('menu/submenu'); ?>" class="btn btn-secondary font-weight-bolder float-right ml-1 mb-5" data-dismiss="modal">Close</a>
        <button type="submit" class="btn btn-primary font-weight-bolder float-right ml-1">Save changes</button>
    	</div>
    	</form>
    </div>
</div>
</div>