<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Detail photo</title>

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

<!-- BAGIAN NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url('landing'); ?>">Ishakk<span class="brand">An</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon bg-info"></span>
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
<!-- AKHIR NAVBAR -->


<!-- BAGIAN PORTFOLIO -->
<div class="container">
    <div class="card text-center">
          <h4 class="card-header font-weight-bolder">
            My galery
          </h4>
                
            <div class="row pt-5 mt-5 text-center justify-content-center">
                <?php foreach( $galery as $g) : ?>
                <div class="card col-sm-5">
                    <a href="<?= base_url('landing/potoGalery/') . $g['id'] ?>" class="card-img">
                        <img src="<?= base_url('assets/img/profile/') . $g['img'] ?>" class="img-thumbanail" width="200px">
                          <footer class="blockquote-footer"><?= $g['title'] ?> <cite title="Source Title">
                            <?= date('d M Y', $g['date_created']) ?></cite></footer>

                        </blockquote>
                    </a>
                </div>
                <?php endforeach; ?>    
            </div>
    </div>
</div>
<!--  Akhir portfolio -->






<!-- FOOTER -->
<footer class="sticky-footer mt-5">
       <div class="copyright text-center text-dark">
           <span class="font-weight-bolder">Copyright &copy; Building since 2021</span><br>
           <span>From Ishakk_angah.com</span><br>
           <span>Kayuagung-Ogan komering Ilir-South Sumatra </span><br>
           <span>All Rights Reserved.</span>
        </div>
 </footer>
<!-- End OF FOOTER -->








    <!-- Bootstrap core JavaScript-->
    <script src="http://localhost/latihan1/assets/vendor/jquery/jquery.min.js"></script>
    <script src="http://localhost/latihan1/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="http://localhost/latihan1/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="http://localhost/latihan1/assets/js/sb-admin-2.min.js"></script>

    <!-- MY SCRIPT -->
    <script>

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