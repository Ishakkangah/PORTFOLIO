<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ishakk_Angah</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


    <!-- MY FONT GOOGLE -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">


    <link
        href="<?= base_url('assets/'); ?>https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <!-- MY CSSS -->
    <link href="<?= base_url('assets/'); ?>Css/style.css" rel="stylesheet">

</head>

<body id="page-top">











<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand pKiri" href="<?= base_url('landing'); ?>">Ishakk<span class="brand">An</span></a>
    <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        <a class="nav-item nav-link" href="<?= base_url('landing'); ?>">Home</a>
        <a class="nav-item nav-link" href="<?= base_url('landing/Portfolio'); ?>">Portfolio</a>
        <a class="nav-item nav-link" href="<?= base_url('landing/about'); ?>">About</a>
        <a class="nav-item btn btn-success tombol" href="<?= base_url('auth'); ?>">Login</a>
      </div>
    </div>
  </div>
</nav>


<!-- JUMBOTRON -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <?= form_error('name','<div class="alert alert-danger">','</div>'); ?>
    <?= form_error('contact','<div class="alert alert-danger">','</div>'); ?>
    <?= form_error('message','<div class="alert alert-danger">','</div>'); ?>
        <marquee behavior="" direction="right"><h1 class="display-4 pKiri"> we are ready to build your <span class="text-danger">Website</span>/App web</h1></marquee>
      <?= $this->session->flashdata('flash'); ?>
    <marquee><h1 class="font-weight-bolder text text-success">Callme : +62896-6603-5046  </h1></marquee>
  </div>
</div>
<!-- JUMBOTRON -->



<!-- BAGAIAN INFO PANEL -->
<div class="row justify-content-center">
    <div class="col-10 info-panel mb-5">
        <div class="row pKiri">
            <div class="col-sm-4">
                <img src="assets/img/web/employee.png" alt="employee.png" class="float-left mx-4">
                <h4 class="font-weight-bold">Employee.</h4>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="col-sm-4">
                <img src="assets/img/web/hires.png" alt="hires.png" class="float-left mx-4">
                <h4 class="font-weight-bold">Hight-res.</h4>
                <p>Lorem ipsum dolor, sit amet.</p>
            </div>
            <div class="col-sm-4">
                <img src="assets/img/web/security.png" alt="security.png" class="float-left mx-4">
                <h4 class="font-weight-bold">Security.</h4>
                <p>Lorem ipsum dolor, sit amet.</p>
            </div>
        </div>
</div>

<div class="section skills" id="skills">
  <div class="container">
    <div class="jarak row justify-content-centermt-5">
     

     <div class="col-md-5">
        <a class="thumbnail">
         <img src="assets/img/web/2.jpg" class="card-img" alt="...">
        </a>
      </div>
      <div class="col-md-5">
        <div class="card-body">
          <h5 class="card-title pKiri">You <span class="font-weight-bolder">work </span> like at <span class="font-weight-bolder">home</span></h5>
          <p class="card-text font-weight-light pKiri">Jika harapan tak seindah kenyataan, maka bangunlah harapan sesuai kenyataan</p>
          <a class="nav-item btn btn-success tombol mt-2" href="<?= base_url('landing/galery'); ?>"> GALERY </a>
          <p class="card-text"><small class="text-muted pKiri">Building since Apr-01-2021</small></p>
        </div>
      </div>




    </div>
  </div>
</div>









<!-- skill -->
  <div class="container">
  <div class="card text-center">
    <h4 class="card-header font-weight-bolder">
      Skills
    </h4>
  </div>

<section class="skills" id="skills">
      <div class="card-deck text-center pt-5">
          <div class="card justify-content-center">
            <a class="thumbnail">
              <img src="assets/img/web/HTML.png" class="card-img-top mt-5" alt="HTML">
            </a>
          </div>
        
          <div class="card justify-content-center">
            <a class="thumbnail">
              <img src="assets/img/web/PHP.png" class="card-img-top mt-5" alt="PHP">
            </a>
          </div>

          <div class="card justify-content-center">
            <a class="thumbnail">
              <img src="assets/img/web/CSS.png" class="card-img-top mt-5" alt="CSS">
            </a>
          </div>
      </div>

      <div class="card-deck text-center mt-5">
        <div class="card">
          <a class="thumbnail">
            <img src="assets/img/web/BOOTSTAP.png" class="card-img-top mt-5" alt="BOOTSTAP">
          </a>
        </div>
        <div class="card">
          <a class="thumbnail">
            <img src="assets/img/web/CI.png" class="card-img-top mt-5" alt="CI">
          </a>
        </div>
        <div class="card">
          <a class="thumbnail">
            <img src="assets/img/web/SQL.png" class="card-img-top mt-5" alt="SQL">
          </a>
        </div>
      </div>
  </div>
  </div>
</section>


<!-- BAGIAN PESAN -->
<div class="container mt-5">
    <div class="card text-center">
      <h4 class="card-header font-weight-bolder">
        Contact person
      </h4>
    </div>
<section class="skills" id="skills">
  <div class="card-deck text-center">
    <div class="card justify-content-center">
      <a class="thumbnail">
        <img src="assets/img/web/Email.png" class="card-img-top" alt="Email">
      </a>
      <div class="card-body">
        <h5 class="font-weight-bolder"><a href="mailto:Ishakkangah@gmail.com">Ishakkangah@gmail.com</a></h5>
      </div>
    </div>
    <div class="card">
      <a class="thumbnail">
      <img src="assets/img/web/whattshap.png" class="card-img-top" alt="wa">
      </a>
      <div class="card-body">
        <h5 class="font-weight-bolder"><a href="https://wa.me//+6289666035046" style="display: table; font-family: sans-serif; text-decoration: none; margin: 1em auto; color: #fff; font-size: 0.9em; padding: 1em 2em 1em 3.5em; border-radius: 2em; font-weight: bold; background: #25d366 url('https://tochat.be/click-to-chat-directory/css/whatsapp.svg') no-repeat 1.5em center; background-size: 1.6em;">Chatt development</a></h5>
    </div>
    </div>
    <div class="card">
      <a class="thumbnail">
      <img src="assets/img/web/facebook.png" class="card-img-top" alt="facebook">
      </a>
      <div class="card-body">
        <h5 class="font-weight-bolder"><a href="http://www.facebook.com/iironii2">Follow me on facebook</a></h5>
      </div>
    </div>
  </div>
  </div>
</section>
<!-- Message -->
<div class="container">
    <div class=" card text-center">
      <h4 class="card-header font-weight-bolder">
        Message
      </h4>
    </div>


<form action="<?= base_url('landing'); ?>" method="post">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text"  class="form-control" id="name" name="name">
      </div>
    <div class="form-group">
    <label for="contact">Contact</label>
    <input type="text"  class="form-control" id="contact" name="contact">
      </div>
  <div class="form-group">
    <label for="message">Get message</label>
    <textarea class="form-control" id="message" name="message" rows="3"></textarea>
      </div>
  <div class="form-group">
    <button type="submit" class="btn btn-success tombol"> Send message</button>
  </div>
</form>

    </div>
</div>


<!-- Footer -->
<footer class="sticky-footer bg-primary mt-5">
       <div class="copyright text-center text-light">
           <span class="font-weight-bolder">Copyright &copy; Building since 2021</span><br>
           <span>From Ishakk_angah.com</span><br>
           <span>Kayuagung-Ogan komering Ilir-South Sumatra </span><br>
           <span>All Rights Reserved.</span>
        </div>
 </footer>
<!-- End of Footer -->





































    <!-- Bootstrap core JavaScript-->
    <script src="http://localhost/latihan1/assets/vendor/jquery/jquery.min.js"></script>
    <script src="http://localhost/latihan1/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="http://localhost/latihan1/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="http://localhost/latihan1/assets/js/sb-admin-2.min.js"></script>

    <!-- MY SCRIPT -->
    <script>



//paralex
//about
  $(window).on('load', function(){
    $('.pKiri').addClass('pMuncul');
    
  }); 


//akhir about


  // Skills
$(window).scroll(function (){ 
  
  var wScroll = $(this).scrollTop();
  if ( wScroll > $('.skills').offset().top -100 ) {
    $('.skills .thumbnail').each( function(i) {

      setTimeout(function() {
    $('.skills .thumbnail').eq(i).addClass('muncul');

      }, 500 * (i+1) );

    });


      }
    });
  // Akhir Skills









        $('.custom-file-input').on('change', function() {
            let filename = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass('selected').html(filename);


        });

        
            $('.form-check-input').on('click', function() { 

            const menuId = $(this).data('menu');
            const roleId = $(this).data('role');

            $.ajax({
                url: "http://localhost/latihan1/admin/changeAccess",
                type: 'post',
                data: {
                    roleId : roleId, 
                    menuId : menuId
                }, 

                success: function() {
                    document.location.href = "http://localhost/latihan1/admin/access/" + roleId;
                }


            });
        });

    </script>
</body>

</html>