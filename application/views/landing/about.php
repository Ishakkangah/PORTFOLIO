
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>landing</title>

    <!-- Custom fonts for this template-->
    <link href="http://localhost/latihan1/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- MY FONT GOOGLE -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">


    <link
        href="http://localhost/latihan1/assets/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="http://localhost/latihan1/assets/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- MY CSS -->
    <link href="http://localhost/latihan1/assets/css/style.css" rel="stylesheet">



</head>

<body id="page-top">


<!-- BAGIAN NAVBAR -->
<nav class="navbar navbar-expand-lg bg-info">
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

<!-- CONTENT -->
<div class="content" id="content">
  <div class="container">
    <div class=" card col-lg-12">
      <h3 class="text-center font-weight-bolder mb-5 pb-3">About</h3>
      <div class="row">
        <div class="poto col-md-5 mx-auto text-center pKiri">
          <img src="<?= base_url('assets/img/profile/') . $biodata['img']; ?>" class="1 rounded-circle my-5" width="150px" height="150px">

          <table class="float-left pKiri">
            <thead class="font-weight-normal">
              <tr>
                <th scope="col">City, date of birth</th>
                <th scope="col"><a href="https://en.wikipedia.org/wiki/Ogan_Komering_Ilir_Regency"><?= $biodata['city'] ?></a>, <?= $biodata['date']; ?> </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Religion</td>
                <td><?= $biodata['religion']; ?></td>
              </tr>
              <tr>
                <td>Gender</td>
                <td><?= $biodata['gender']; ?></td>
              </tr>
              <tr>
                <td>Weight</td>
                <td><?= $biodata['weight']; ?>kg</td>
              </tr>
              <tr>
                <td>Height</td>
                <td><?= $biodata['height']; ?>cm</td>
              </tr>
              <tr>
                <td>Address</td>
                <td class="pKiri">Jl.Merdeka, Kecamatan : <a href="https://id.wikipedia.org/wiki/Kota_Kayu_Agung,_Ogan_Komering_Ilir"><?= $biodata['address']; ?></a>,</td>
              </tr>
            </tbody>
          </table>


          <div class="card text-center bg-black">
                    <h4 class="card-header font-weight-bolder pb-1 pt-1">
                      Contact
                    </h4>

          <div class="container">
            <table class="float-left">
            <thead>
              <tr>
                <td><img src="../assets/img/web/whatsapp.jpg" class="img-thumbnail my-1" width="40%"></td>
                <td class="a"><a href="https://wa.me//<?= $contact['whatshapp']; ?>" style="display: table; font-family: sans-serif; text-decoration: none; margin: 1em auto; color: #fff; font-size: 0.9em; padding: 1em 2em 1em 3.5em; border-radius: 2em; font-weight: bold; background: #25d366 url('https://tochat.be/click-to-chat-directory/css/whatsapp.svg') no-repeat 1.5em center; background-size: 1.6em;">Chatt development</a></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><img src="../assets/img/web/Email.png" class="img-thumbnail my-1"  width="40%"></td>
                <td class="font-weight-bolder a"><a href="<?= $contact['email']; ?>"><?= $contact['email']; ?></a></td>
              </tr>
              <tr>
                <td><img src="../assets/img/web/facebook1.jpg" class="img-thumbnail my-1"  width="40%"></td>
                <td class="font-weight-bolder a"><a href="http://www.facebook.com/<?= $contact['facebook'] ?>">Follow me on facebook</a></td>
              </tr>
              <tr>
                <td><img src="../assets/img/web/instagram.png" class="img-thumbnail my-1"  width="40%"></td>
                <td class="font-weight-bolder a"><?= $contact['instagram']; ?></td>
              </tr>    
            </tbody>
          </table>
          </div>

          <div class="container mt-5">
            <div class=" card text-center">
                <h4 class="card-header font-weight-bolder pb-1 pt-1 mb-5">
                   Hobby
                </h4>

                <table class="float-left font-weight-bolder">
                  <tbody>
                    <?php foreach( $hobby as $h ) : ?>
                    <tr>
                      <th class="pKiri"><a href="https://en.wikipedia.org/wiki/Computer_programming" class="pKiri"><?= $h['hobby']; ?></a></th>
                    </tr>
                    <?php endforeach;?>
                  </tbody>
                </table>
            </div>
          </div>

        </div>
      </div>



<div class="col-md-5 mx-auto text-center">
  <section class="content" id="content">
    <div class="card mt-5">
      <img src="../assets/img/web/Mouse.jpg" class="card-img"  alt="Mouse">
      <h2 class="font-weight-bolder pKiri"> <?= $biodata['name']; ?> </h2>
      <H3 class="pKiri"> <?= $biodata['work']; ?> </H3>
    </div>
  </section>


<div class="card">
     <h4 class="card-header font-weight-bolder pb-1 pt-1 mb-5">
           Profile
     </h4>
      <p class="font-weight-normal pKiri"><?= $biodata['Note'] ?>
      </p>

<div class="card">
     <h4 class="card-header font-weight-bolder pb-1 pt-1 mb-5">
           Education
     </h4>
      <table class="table-hover">
        <?php foreach( $education as $e ) : ?>
        <tbody>
          <tr>
            <th scope="col" class="pKiri"><?= $e['education']; ?></th>
          </tr>
        </tbody>
        <?php endforeach; ?>
      </table>
</div>

<div class="card">
     <h4 class="card-header font-weight-bolder pb-1 pt-1 mb-5">
           Work Experience
     </h4>
      <table class="table-hover">
        <tbody>
          <?php foreach( $experience as $ex ) : ?>
          <tr>
            <th scope="col" class="pKiri"><a href="https://www.facebook.com/PT-Bumi-Pasir-Putih-394105274016168"><?= $ex['experience']; ?></a></th>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
</div>

</div>
      </div>
    </div>
  </div>
</div>
<!-- AKHIR CONTENT -->











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


  $(window).on('load', function(){
    $('.pKiri').addClass('pMuncul');
    
  }); 






  // Skills
$(window).scroll(function (){ 
  
  var wScroll = $(this).scrollTop();
  if ( wScroll > $('.content').offset().top -50 ) {
    $('.content .card-img').each( function(i) {

      setTimeout(function() {
    $('.content .card-img').eq(i).addClass('muncul');

      }, 500 * (i+1) );

    });


    //Bagian Jumbotron
  $('.poto img').css({
    'transform' : 'translate( 0px,'+ wScroll/12 +'% )',
    'box-shadow' : '1px 1px 1px rgba(0,0,0,0.5)'
  });


  $('.poto .a').css({
    'transform' : 'translate( 0px,'+ wScroll/13 +'% )'
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