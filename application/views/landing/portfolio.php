<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

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
    <link href="<?= base_url('assets/'); ?>css/style.Css" rel="stylesheet">

</head>

<body id="page-top">











<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url('landing'); ?>">Ishakk<span class="brand">An</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        <a class="nav-item nav-link" href="http://localhost/latihan1/landing">Home</a>
        <a class="nav-item nav-link" href="http://localhost/latihan1/landing/portfolio">Portfolio</a>
        <a class="nav-item nav-link" href="<?= base_url('landing/about'); ?>">About</a>
        <a class="nav-item btn btn-success tombol" href="http://localhost/latihan1/auth">Login</a>
      </div>
    </div>
  </div>
</nav>


<!-- BAGIAN PORTFOLIO -->
<section class="portfolio" id="portfolio">
<div class="container">
    <div class="card text-center">
          <h4 class="card-header font-weight-bolder">
            Portfolio
          </h4>
                
          <section class="skills" id="skills">
            <div class="row pt-5 mt-5">
                <?php foreach( $poto as $p) : ?>
                <div class="col-sm-4">
                    <a href="<?= base_url('landing/poto/') . $p['id']; ?>" class="thumbnail">
                        <img src="<?= base_url('assets/img/profile/') . $p['img'] ?>" width="200px" height="200px">
                          <footer class="blockquote-footer"><?= $p['title'] ?> <cite title="Source Title">
                            <?= date('d M Y', $p['date_created']) ?></cite></footer>

                        </blockquote>
                    </a>
                </div>
                <?php endforeach; ?>    
            </div>
          </section> 
    </div>
</div>
</section>
<!--  Akhir portfolio -->






<!-- Message -->
<div class="container">
    <div class=" card text-center mt-5 ">
      <h4 class="card-header font-weight-bolder">
        Message
      </h4>
    </div>


<form action="" method="post">
  <div class="form-group pt-5">
    <label for="name">Name</label>
    <input type="text"  class="form-control" id="name" name="name" aria-describedby="emailHelp">
      </div>
    <div class="form-group">
    <label for="contact">Contact</label>
    <input type="text"  class="form-control" id="contact" name="contact" aria-describedby="emailHelp">
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
  $(window).on('load', function(){
    $('.pKiri').addClass('pMuncul');
    
  }); 



  // Skills
$(window).scroll(function (){ 
  
  var wScroll = $(this).scrollTop();
  if ( wScroll > $('.skills').offset().top -200 ) {
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