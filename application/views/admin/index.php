<div class="jumbotron">
<div class="container">
	<div class="row">
		<div class="col-md-8 mt-5">













<!-- BAGIAN TITLE -->
<H2 class="font-weight-bolder"> Message </H2>
<?php foreach( $message as $m ) : ?>
<div class="card mb-5 bg-white">
  <div class="card-header font-weight-bolder bg-success text-light">
   <p class="card-text"><small class="text-muted">Last <?= date('d M Y', $m['date_created']); ?></small></p>
  </div>
  <div class="card-body">
    <h5 class="card-title font-weight-bolder"><?php echo $m['name']; ?></h5>
    <div class="form-group">
    <label for="message">Example textarea</label>
    <textarea class="form-control" id="message" rows="3" readonly><?php echo $m['message']; ?></textarea>
  </div>


    <a href="<?= base_url('admin/deleteMessage/') . $m['id']; ?>" class="btn btn-danger font-weight-bolder" 
      onclick="return confirm('are you sure ?');">Delete</a>
  </div>
</div>
<?php endforeach; ?>




		</div>
	</div>
</div>
</div>