<?php session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My first site</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
  <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

  <div class="loader"></div>
  <div id="myDiv">
    <!--HEADER-->
    <div class="header">
      <div class="bg-color">
        <header id="main-header">
          <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                
                <!-- <a href="https://t.me/karsu_academy"><img src="photo/karsu2.PNG" width="70px" height="70px" alt=""></a> -->
                
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <!--  -->
                <ul class="nav navbar-nav navbar-right">
                  <li class=""><a href="#main-header">Bas bet</a></li>
                  <li class=""><a href="#feature">Mag'liwmatlar</a></li>
                  <!-- <li class=""><a href="#service">Services</a></li> -->
                  <!-- <li class=""><a href="#portfolio">Portfolio</a></li> -->
                  <li class=""><a href="#portfolio">Jumislar</a></li>
                  <li class=""><a href="#testimonial">Idealar</a></li>
                  <li class=""><a href="#blog">Blog</a></li>
                  <li class=""><a href="#contact">Baylanis ushin</a></li>
                  <?php if(isset($_SESSION['id'])):?>
                  <li class=""><a href=""><?=$_SESSION['fname'];?></a></li>
                  <li class=""><a href="login-registr/logout.php">log out</a></li>
                  <?php else:?>
                  <li class=""><a href="login-registr/login.php">sign in</a></li>
                  <li class=""><a href="login-registr/registr.php">sign up</a></li>
                  <?php endif;?> 
                </ul>
                <!--  -->
              </div>
            </div>
          </nav>
        </header>
        <?php 
          require 'conn.php';
          $sql = 'SELECT * FROM home';
          $sql = $conn->prepare($sql);
          $sql -> execute();
          $posts = $sql->fetchAll();
        ?>
        <div class="wrapper">
          <div class="container">
            <div class="row">
              <div class="banner-info text-center wow fadeIn delay-05s">
                <h1 class="bnr-title">Sayt <span class="logo-dec">temasi</span></h1>
                <?php foreach($posts as $post) :?>
                <h2 class="bnr-sub-title"><?=$post['title'];?></h2>
                <p class="bnr-para"><?=$post['text'];?><div class="brn-btn">
                  <a href="home_index.php" class="btn btn-more">Tolig'iraq</a>
                <?php endforeach;?>
                </div>
                <div class="overlay-detail">
                  <a href="#feature"><i class="fa fa-angle-down"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ HEADER-->
    <!---->
    <!-- <section id="feature" class="section-padding wow fadeIn delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="item-img">
                <img src="img/ser01.png">
              </div>
              <h3 class="pad-bt15">Kreativ idealar</h3>
              <p>Sabaqlarda proekt jumisi berilgen waqitta sizge kreativ idealar menen birge islew beredi. A'lbette bul jerde ha'rbir adamnin' o'z fantaziyasi jumis isleydi. Kobirek fantaziyan'izdan maksimal paydalaniwdi qalesen'iz biz kutemiz.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="item-img">
                <img src="img/ser02.png">
              </div>
              <h3 class="pad-bt15">Takirarlanbas sabaqlar</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="item-img">
                <img src="img/ser03.png">
              </div>
              <h3 class="pad-bt15">Kompyuter arqasinan pul tabiw</h3>
              <p>Demek, kompyuter arqasinan pul tabiw.Siz proekt isleysiz ham oni satasiz! "Qanshag'a sataman?" deysizbe - Juda qimbat bahag'a. Bul tarawda biz sizge ja'rdem beremiz.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="item-img">
                <img src="img/ser04.png">
              </div>
              <h3 class="pad-bt15">Proektlerdin' qawipsizligin tamiyinlew</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!---->
    <!---->

    <?php 
      require 'conn.php';
      $id = $_GET['id'];
      $sql = "SELECT * FROM works";
      $sql = $conn->prepare($sql);
      $sql->execute();
      $posts = $sql->fetchAll(); 
    ?>
    <!-- <style>
      .vl {
        border-left: 6px solid green;
        height: 500px;
      }
    </style>
    <div class="vl">asd</div> -->
    <section id="portfolio" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15">Jumislar</h2>
            <p class="sub-title pad-bt15"></p>
            <hr class="bottom-line">
          </div>
    <?php foreach($posts as $post) :?>
          <a href="work_index.php?id=<?= $post['id']?>"><div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
            <figure>
              <img src="admin/upload_work/<?= $post['photo'];?>" class="img-responsive">
              <figcaption>
                <h2><?= $post['title'];?></h2>
                <p><?= $post['text'];?></p>
              </figcaption>
            </figure>
          </div>
          </a> 
      <?php endforeach;?>
        </div>
      </div>
    </section>
    <!---->
    <!---->
    <!-- <section id="testimonial" class="wow fadeInUp delay-05s">
      <div class="bg-testicolor">
        <div class="container section-padding">
          <div class="row">
            <div class="testimonial-item">
              <ul class="bxslider">
                <li>
                  <blockquote>
                    <img src="img/.png" class="img-responsive">
                    <p>KarSU IT akademiyasi bunshelli kushli uyretedi dep oylamag'an edim biraq "Men sonsha zatti 6 ay ishinde qalay uyrendim?" degen soraw payda boladi.</p>
                  </blockquote>
                  <small>Back-End kursi , Azizbek</small>
                </li>
                <li>
                  <blockquote>
                    <img src="img/thumb.png" class="img-responsive">
                    <p>KarSU IT akademiyasinda oqiwin'izdi usinis etemen , men u'yrengen bilimlerdi siz de uyrenin'. Siz bug'an ilayiqsiz.</p>
                  </blockquote>
                  <small>Kompyuter sawatlig'i kursi, Madina</small>
                </li>
                <li>
                  <blockquote>
                    <img src="img/thumb.png" class="img-responsive">
                    <p>Come a day there won't be room for naughty men like us to slip about at all. This job goes south, there well may not be another.</p>
                  </blockquote>
                  <small>Vivek Singh, Client</small>
                </li>
                <li>
                  <blockquote>
                    <img src="img/thumb.png" class="img-responsive">
                    <p>So here is us, on the raggedy edge. Don't push me, and I won't push you.</p>
                  </blockquote>
                  <small>John Doe, Client</small>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!---->
    <?php 
          require 'conn.php';
          $id = $_GET['id'];
          $sql = "SELECT * FROM blog ";
          $sql = $conn->prepare($sql);
          $sql->execute();
          $posts = $sql->fetchAll();
          
    ?>
    <section id="blog" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15">Bizde blog</h2>
            <p class="sub-title pad-bt15"></p>
            <hr class="bottom-line">
          </div>
          <?php foreach($posts as $post) :?>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="blog-sec">
              <div class="blog-img">
                <a href="blog_index.php?id=<?= $post['id']?>">
                  <img src="admin/upload_blog/<?=$post['photo']?>" class="img-responsive">
                </a>
              </div>
              <div class="blog-info">
                <h2><?= $post['title'];?></h2>
                <div class="blog-comment">
                </div>
                <p><?= $post['text'];?></p>
                <a href="blog_index.php?id=<?= $post['id']?>" class="read-more">Read more →</a>
              </div>
            </div>
          </div>
          <?php endforeach;?>
          
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!---->
    <section id="contact" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center white">
            <h2 class="service-title pad-bt15">Bizler menen baylanisiw ushin</h2>
            <p class="sub-title pad-bt15"></p>
            <hr class="bottom-line white-bg">
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">

            <?php
              require 'conn.php';
              $sql = "SELECT * FROM info";
              $sql = $conn->prepare($sql);
              $sql->execute();
              $posts = $sql->fetch();
            ?>
            <div class="loction-info white">
              <a style="color:white" href="https://www.google.com/maps/place/DIGITAL+SKILLS+ACADEMY+KSU/@42.4515165,59.6277819,18.26z/data=!4m6!3m5!1s0x41dd9b08c7bd90e7:0x9d3a510a25d3bcbf!8m2!3d42.4517357!4d59.6281048!16s%2Fg%2F11sqt903hm?entry=ttu"><p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i><?=$posts['address'];?></p></a>
              <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i><?=$posts['email'];?></p>
              <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>+<?=$posts['phone'];?></p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <!-- <h3><button type="button" class="btn btn-outline-secondary"><a href="login-registr/registr.php" style="text-decoration:none">Sign up</a></button></h3>
            <h3><button type="button" class="btn btn-outline-secondary"><a href="login-registr/login.php" style="text-decoration:none">Sign in</a></button></h3> -->
          </div>
        </div>
      </div>
    </section>
    <!---->
    <!---->
    
    <!---->
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>
</html>