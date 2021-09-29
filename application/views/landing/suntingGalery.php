<div class="contaier">
    <div class="col-md-12">
        <div class="row">
            

<!-- BAGIAN Galery -->
<div class="container">
    <div class="card text-center">
        <?= form_error('title','<div class="alert alert-danger">','</div>') ?>
        <?= form_error('subject','<div class="alert alert-danger">','</div>') ?>
        <?= $this->session->flashdata('flash'); ?>
          <h4 class="card-header font-weight-bolder">
            Galery
          </h4>
                
            <div class="row pt-5 mt-5 mb-5">
                <?php foreach( $galery as $g) : ?>
                <div class="col-sm-4">
                    <a href="<?= base_url('landing/potoGalery/') . $g['id']; ?>" class="thumbnail">
                        <img src="<?= base_url('assets/img/profile/') . $g['img'] ?>" width="150px" height="150px">
                          <footer class="blockquote-footer"><?= $g['title'] ?> <cite title="Source Title">
                            <?= date('d M Y', $g['date_created']) ?></cite></footer>
                        </blockquote>
                    </a>
                    <a href="<?= base_url('landing/deleteGalery/') . $g['id']; ?>" class="badge badge-danger mb-3" onclick="return confirm('Are you sure ?');">delete</a>

                </div>
                <?php endforeach; ?>
            </div>
    </div>
    <div class="justify-content-center text-center"> 
        <button type="button" class="btn btn-primary font-weight-bolder mt-2 col-3 border border-danger" data-toggle="modal" data-target="#potoModal">
      Insert new poto
        </button>
    </div>
    
    </div>
</div>
<!--  Akhir Galery -->


        </div>
    </div>
</div>













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
        


<?php echo form_open_multipart('landing/suntingGalery');?>

 <div class="form-group font-weight-bold">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
  </div>
  <div class="form-group font-weight-bold">
    <label for="subject">Subject</label>
    <input type="text" class="form-control" id="subject" name="subject" aria-describedby="emailHelp">
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

