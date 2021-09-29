


<a href="<?= base_url('admin'); ?>" class="float-left fontawesome-free">Back to dashboard</a>


<!-- BAGIAN PORTFOLIO -->
<div class="container col-12 mt-5">
<?= $this->session->flashdata('flash'); ?>

    <div class="text-center">
          <h4 class="card-header font-weight-bolder">
            Portfolio
          </h4>
                
            <div class="row mt-5">
                <?php foreach( $poto as $p) : ?>
                <div class="col-sm-4">
                    <a href="" class="thumbnail">
                        <img src="<?= base_url('assets/img/profile/') . $p['img'] ?>" width="150px" height="150px">
                        <p class="text-center font-weight-bolder mb-0"> <?= $p['title'] ?> </p>
                    </a>
                    <a href="<?= base_url('landing/deletePoto/') . $p['id']; ?>" class="badge badge-danger mb-5" onclick="return confirm('Are you sure ?');">delete</a>
                </div>
                <?php endforeach; ?>    
            </div>
    
<button type="button" class="btn btn-primary text-center font-weight-bolder mt-2 col-3" data-toggle="modal" data-target="#potoModal">
  Insert new portfolio
</button>
    </div>
</div>
<!--  Akhir portfolio -->















<!-- Modal -->
<div class="modal fade" id="potoModal" tabindex="-1" role="dialog" aria-labelledby="potoModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-bolder" id="potoModalLabel">Insert poto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        


<?php echo form_open_multipart('landing/Suntingportfolio');?>

 <div class="form-group font-weight-bold">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
 <div class="form-group font-weight-bold">
    <div class="row col-md-3"></div>
    <label for="image">Picture</label>
    <div class="custom-file">
      <input type="file" class="custom-file-input" id="image" name="image">
      <label class="custom-file-label" for="image">Choose file</label>
    </div>
 </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary font-weight-bolder" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary font-weight-bolder">Insert poto</button>
        </form>
      </div>
    </div>
  </div>
</div>

