<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Al Mazaya Islamic School</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/images/logo.png">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/animate.css">
    
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/ionicons.min.css">
    
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
    <style type="text/css">
      .jam_analog_malasngoding {
        background: url('assets/img/jam.png') center;
        position: relative;
        width: 300px;
        height: 300px;
        border: 8px solid #000;
        border-radius: 50%;
        padding: 10px;
        margin:10px auto;
      }

      .xxx {
        height: 100%;
        width: 100%;
        position: relative;
      }

      .jarum {
        position: absolute;
        width: 50%;
        background: #232323;
        top: 50%;
        transform: rotate(90deg);
        transform-origin: 100%;
        transition: all 0.05s cubic-bezier(0.1, 2.7, 0.58, 1);
      }

      .lingkaran_tengah {
        width: 12px;
        height: 12px;
        background: transparent;
        border: 2px solid #fff;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-left: -7px;
        margin-top: -7px;
        border-radius: 50%;
      }

      .jarum_detik {
        height: 2px;
        border-radius: 1px;
        background: #ff0000;
      }

      .jarum_menit {
        height: 2px;
        border-radius: 2px;
        background: #fff;
      }

      .jarum_jam {
        height: 4px;
        border-radius: 2px;
        width: 35%;
        left: 15%;
        background: #fff;
      }
    </style>
    <style type="text/css">
      .btn {
        cursor: pointer;
        -webkit-border-radius: 40px;
        -moz-border-radius: 40px;
        -ms-border-radius: 40px;
        border-radius: 40px;
        -webkit-box-shadow: none !important;
        box-shadow: none !important; }
        .btn:hover, .btn:active, .btn:focus {
          outline: none; }
          .btn.btn-primary1 {
          background: #c0c0c0;
          border: 1px solid #c0c0c0;
          color: #05084f; }
          .btn.btn-primary1:hover {
            border: 1px solid #c0c0c0;
            background: transparent;
            color: #c0c0c0; }
          .btn.btn-primary1.btn-outline-primary1 {
            border: 1px solid #c0c0c0;
            background: transparent;
            color: #c0c0c0; }
          .btn.btn-primary1.btn-outline-primary1:hover {
            border: 1px solid transparent;
            background: #c0c0c0;
            color: #05084f; }
    </style>
    <style type="text/css">
      .btn {
        cursor: pointer;
        -webkit-border-radius: 40px;
        -moz-border-radius: 40px;
        -ms-border-radius: 40px;
        border-radius: 40px;
        -webkit-box-shadow: none !important;
        box-shadow: none !important; }
        .btn:hover, .btn:active, .btn:focus {
          outline: none; }
          .btn.btn-primary2 {
          background: #c0c0c0;
          border: 1px solid #c0c0c0;
          color: #800000; }
          .btn.btn-primary2:hover {
            border: 1px solid #c0c0c0;
            background: transparent;
            color: #c0c0c0; }
          .btn.btn-primary2.btn-outline-primary2 {
            border: 1px solid #c0c0c0;
            background: transparent;
            color: #c0c0c0; }
          .btn.btn-primary2.btn-outline-primary2:hover {
            border: 1px solid transparent;
            background: #c0c0c0;
            color: #800000; }
    </style>
  </head>
  <body>   

<?php if ($this->session->flashdata('success') == TRUE): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-bottom: auto;">
      <h4 class="alert-heading">Success!</h4>
      <?= $this->session->flashdata('success') ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
<?php endif ?>
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(assets/images/1.png);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">Al Mazaya Islamic School</h1>
            <p>do you want to join us ?</p>
            <p><a href="#" class="btn btn-primary px-4 py-3 mt-3" data-toggle="modal" data-target=".pilih">Register Now</a></p>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(assets/images/2.png);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">Al Mazaya Islamic School</h1>
            <p>do you want to join us ?</p>
            <p><a href="#" class="btn btn-primary px-4 py-3 mt-3" data-toggle="modal" data-target=".pilih">Register Now</a></p>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(assets/images/3.png);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">Al Mazaya Islamic School</h1>
            <p>do you want to join us ?</p>
            <p><a href="#" class="btn btn-primary px-4 py-3 mt-3" data-toggle="modal" data-target=".pilih">Register Now</a></p>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(assets/images/4.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">Al Mazaya Islamic School</h1>
            <p>do you want to join us ?</p>
            <p><a href="#" class="btn btn-primary px-4 py-3 mt-3" data-toggle="modal" data-target=".pilih">Register Now</a></p>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(assets/images/5.jpeg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">Al Mazaya Islamic School</h1>
            <p>do you want to join us ?</p>
            <p><a href="#" class="btn btn-primary px-4 py-3 mt-3" data-toggle="modal" data-target=".pilih">Register Now</a></p>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(assets/images/6.jpeg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">Al Mazaya Islamic School</h1>
            <p>do you want to join us ?</p>
            <p><a href="#" class="btn btn-primary px-4 py-3 mt-3" data-toggle="modal" data-target=".pilih">Register Now</a></p>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(assets/images/7.jpeg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">Al Mazaya Islamic School</h1>
            <p>do you want to join us ?</p>
            <p><a href="#" class="btn btn-primary px-4 py-3 mt-3" data-toggle="modal" data-target=".pilih">Register Now</a></p>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(assets/images/8.jpeg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">Al Mazaya Islamic School</h1>
            <p>do you want to join us ?</p>
            <p><a href="#" class="btn btn-primary px-4 py-3 mt-3" data-toggle="modal" data-target=".pilih">Register Now</a></p>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(assets/images/9.jpeg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">Al Mazaya Islamic School</h1>
            <p>do you want to join us ?</p>
            <p><a href="#" class="btn btn-primary px-4 py-3 mt-3" data-toggle="modal" data-target=".pilih">Register Now</a></p>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(assets/images/10.jpeg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">Al Mazaya Islamic School</h1>
            <p>do you want to join us ?</p>
            <p><a href="#" class="btn btn-primary px-4 py-3 mt-3" data-toggle="modal" data-target=".pilih">Register Now</a></p>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(assets/images/11.jpeg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">Al Mazaya Islamic School</h1>
            <p>do you want to join us ?</p>
            <p><a href="#" class="btn btn-primary px-4 py-3 mt-3" data-toggle="modal" data-target=".pilih">Register Now</a></p>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(assets/images/12.jpeg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">Al Mazaya Islamic School</h1>
            <p>do you want to join us ?</p>
            <p><a href="#" class="btn btn-primary px-4 py-3 mt-3" data-toggle="modal" data-target=".pilih">Register Now</a></p>
          </div>
        </div>
        </div>
      </div>
    </section>

<section class="ftco-section ftco-counter img" id="section-counter" style="background-color: #fff;">
      <div class="container">
        <h2 class="mb-4" style="color: #fff"><center>REGISTRATION INFORMATION</center></h2>
        <div class="row justify-content-center mb-5 pb-2 d-flex">
          <div class="col-md-6 align-items-stretch d-flex">
              <div class="video justify-content-center">
                <h3 style="color: #fff">For Marketing Information:</h3>
                <h5 style="color: #fff">0811 5051 123 <b>(Admin)</b></h5>
                <h5 style="color: #fff">0815 6781 9988 <b>(Nurtajali)</b></h5>
              </div>
          </div>
          <div class="col-md-6 heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 pt-5">            
            <center>
              <h3 style="color: #fff">Download Brochure</h3>
              <p><a href="#" class="btn btn-primary px-4 py-3 mt-3" data-toggle="modal" data-target=".tamu">CLICK HERE!!!</a></p>
            </center>
          </div>
        </div> 
      </div>
    </section>

    <section class="ftco-services ftco-no-pb">
      <div class="container-wrap">
        <div class="row no-gutters">
          <div class="col-md-6 d-flex services align-self-stretch py-5 px-4 ftco-animate" style="background-color: #05084f;">
            <a href="http://junior.almazayaislamicschool.sch.id/">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <img src="<?= base_url()?>assets/img/icons/SMP2.png" width="40%;">
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Junior High School</h3>
                <button type="button" class="btn btn-primary1" data-target="http://junior.almazayaislamicschool.sch.id/">Click Here For Your Information <span class="ion-ios-arrow-round-forward"></span></button>
              </div>
            </div>
            </a>      
          </div>
          <div class="col-md-6 d-flex services align-self-stretch py-5 px-4 ftco-animate" style="background-color: #800000;">
            <a href="http://senior.almazayaislamicschool.sch.id/">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <img src="<?= base_url()?>assets/img/icons/SMA2.png" width="40%">
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Senior High School</h3>
                <button type="button" class="btn btn-primary2" data-target="http://senior.almazayaislamicschool.sch.id/">Click Here For Your Information <span class="ion-ios-arrow-round-forward"></span></button>
              </div>
            </div>
            </a>    
          </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-section ftco-no-pt ftc-no-pb">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
            <div class="img" style="background-image: url(assets/images/9.jpeg); border"></div>
          </div>
          <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
            <h2 class="mb-4">What We Offer</h2>
            <!-- <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p> -->
            <div class="row mt-5">
              <div class="col-lg-6">
                <a href="http://virtualclass.almazayaislamicschool.sch.id/">
                <div class="services-2 d-flex">
                  <div class="icon mt-2 d-flex justify-content-center align-items-center"><img src="assets/img/icons/virtual-class2.png" style="height: 100px; width: 100px;"></div>
                  <div class="text pl-3">
                    <h3>Virtual Class</h3>
                    <p style="color: #121010;">virtual class is a nested inner class whose functions and member variables can be overridden and redefined by subclasses of an outer class.</p>
                  </div>
                </div>
                </a>
              </div>
              <div class="col-lg-6">
                <a href="http://portal.almazayaislamicschool.sch.id/">
                <div class="services-2 d-flex">
                  <div class="icon mt-2 d-flex justify-content-center align-items-center"><img src="assets/img/icons/Portal2.png" style="height: 100px; width: 100px;"></div>
                  <div class="text pl-3">
                    <h3>Portal</h3>
                    <p style="color: #121010;">Portal that was built to provide convenience to users in online school academic administration activities</p>
                  </div>
                </div>
                </a>
              </div>
              <!-- <div class="col-lg-6">
                <a href="http://www.almazayaislamicschool.sch.id/formulir-penerimaan-peserta-didik-baru">
                <div class="services-2 d-flex">
                  <div class="icon mt-2 d-flex justify-content-center align-items-center"><img src="assets/img/icons/PPDB.png" style="height: 100px; width: 100px;"></div>
                  <div class="text pl-3">
                    <h3>PPDB Online</h3>
                    <p style="color: #121010;">A Service System designed to facilitate the automation of the implementation of New Student Admissions (PPDB), from the registration process, selection to real-time announcement of selection results via the Internet.</p>
                  </div>
                </div>
                </a>
              </div> -->
              <div class="col-lg-6">
                <a href="http://senior.almazayaislamicschool.sch.id/">
                <div class="services-2 d-flex">
                  <div class="icon mt-2 d-flex justify-content-center align-items-center"><img src="assets/img/icons/quran2.png" style="height: 100px; width: 100px;"></div>
                  <div class="text pl-3">
                    <h3>Al-Qur'an</h3>
                    <p style="color: #121010;">The main holy book in Islam which is divided into several chapters, each of which is divided into several verses. Various Al-Qur'an is available starting from Al-Qur'an with Tajweed, Al-Qur'an Translation.</p>
                  </div>
                </div>
                </a>
              </div>
              <div class="col-lg-6">
                <a href="http://qurantematik.almazayaislamicschool.sch.id/">
                <div class="services-2 d-flex">
                  <div class="icon mt-2 d-flex justify-content-center align-items-center"><img src="assets/img/icons/tematik.png" style="height: 100px; width: 100px;"></div>
                  <div class="text pl-3">
                    <h3>Al-Qur'an Tematik</h3>
                    <p style="color: #121010;">Thematic interpretation is a method of interpretation introduced by tafsir scholars to provide answers to people's needs for the guidance of the Qur'an.

                    </p>
                  </div>
                </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>    

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(assets/images/up.jpeg);" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2 d-flex">
          <div class="col-md-6 align-items-stretch d-flex">
            <div class="img img-video d-flex align-items-center" style="background-image: url(assets/images/yt.jpeg);">
              <div class="video justify-content-center">
                <a href="https://www.youtube.com/watch?v=anZIPjQ23MY" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                  <span class="ion-ios-play"></span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 pt-5">
            <h2 class="mb-4"><center>Schedule Al Mazaya Islamic School</center></h2>
            <div class="jam_analog_malasngoding">
              <div class="xxx">
                <div class="jarum jarum_detik"></div>
                <div class="jarum jarum_menit"></div>
                <div class="jarum jarum_jam"></div>
                <div class="lingkaran_tengah"></div>
              </div>
            </div>
            <center>
              <h3 style="color: #FFFFFF"><?=date('l, d M Y');?></h3>
              <h3 style="color: #FFFFFF"><span id="jam"></span></h3>
              <h4 style="color: #FFFFFF">Activity</h4>
              <h1 style="color: #FFFFFF"><span id="ke"> </span></h1>
            </center>
          </div>
        </div> 
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Latest</span> News</h2>
          </div>
        </div>
        <div class="row">
          <?php foreach($berita as $row) { 
            $user = $this->db->get_where('users', array('id' => $row['post_author']))->row();
            ?>
           <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="" data-toggle="modal" data-target=".read<?=$row['id']?>" class="block-20 d-flex align-items-end" style="background-image: url('http://junior.almazayaislamicschool.sch.id/media_library/posts/medium/<?=$row["post_image"]?>');" alt="<?=$row["post_title"]?>">
                <div class="meta-date text-center p-2">
                  <span class="day"><?=date('d', strtotime($row["created_at"]))?></span>
                  <span class="mos"><?=date('F', strtotime($row["created_at"]))?></span>
                  <span class="yr"><?=date('Y', strtotime($row["created_at"]))?></span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="" data-toggle="modal" data-target=".read<?=$row['id']?>"><?=$row["post_title"]?></a></h3>
                <p><?=substr(strip_tags($row["post_content"]), 0, 165)?></p>
                <div class="d-flex align-items-center mt-4">
                  <p class="mb-0">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".read<?=$row['id']?>">Read More <span class="ion-ios-arrow-round-forward"></span></button></p>
                  <p class="ml-auto mb-0">
                    <?=$user->user_full_name?>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-7">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">Jl. Cempaka Besar No. 57</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">0511 3367441</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">almazayaislamicschool.bjm@gmail.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-5">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="https://www.youtube.com/channel/UCPWR9Ki4swRnEV_i2BHQPcQ"><span class="icon-youtube"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/almazayaislamicschool/"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="http://www.almazayaislamicschool.sch.id/" target="_blank">Al Mazaya Islamic School</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
  
  <!-- Modal Pilih -->
  <div class="modal fade pilih" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">PILIH JENJANG</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <section class="ftco-services ftco-no-pb">
            <div class="container-wrap">
              <div class="row no-gutters">
                <div class="col-md-6 d-flex services align-self-stretch py-5 px-4 ftco-animate" style="background-color: #05084f;">
                  <a href="<?php echo site_url('admin/indexsmp')?>">
                  <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                      <img src="<?= base_url()?>assets/img/icons/SMP2.png" width="40%;">
                    </div>
                    <div class="media-body p-2 mt-3">
                      <h3 class="heading">Junior High School (SMP)</h3></div>
                  </div>
                  </a>      
                </div>
                <div class="col-md-6 d-flex services align-self-stretch py-5 px-4 ftco-animate" style="background-color: #800000;">
                  <a href="<?php echo site_url('admin/indexsma')?>">
                  <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                      <img src="<?= base_url()?>assets/img/icons/SMA2.png" width="40%">
                    </div>
                    <div class="media-body p-2 mt-3">
                      <h3 class="heading">Senior High School (SMA)</h3>
                     </div>
                  </div>
                  </a>    
                </div>
                </div>
              </div>
            </div>
          </section>            
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Registrasi -->
  <div class="modal fade register" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form action="<?php echo site_url('welcome/registration') ?>" class="form-horizontal" method="POST" role="form">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">FORMULIR PENDAFTARAN SISWA BARU ALMAZAYA BANJARMASIN</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="col-lg-12">
                <div class="form-group row">
                  <label for="school_level" class="col-sm-12 col-form-label">Tahun Ajaran </label>
                  <!-- <div class="row"> -->
                    <div class="col-sm-2">
                      <input type="number" required="" name="first_school_year" class="form-control justnumber" id="first_school_year" placeholder="" value="<?=date("Y")?>">
                    </div>
                    <div class="col-sm-1" style="font-size: 24px; text-align: center; width: 39px;">/</div>
                    <div class="col-sm-2">
                      <input type="number" required="" name="last_school_year" class="form-control justnumber" id="last_school_year" placeholder="" value="<?=date("Y")+1?>">
                    </div>
                  <!-- </div> -->
                </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group row">
                  <label for="school_level" class="col-sm-12 col-form-label">Jenjang Pendidikan </label>
                    <div class="col-sm-12">
                        <select name="school_level" class="form-control" required>
                            <option value="">-- Pilih Jenjang Pendidikan --</option>
                            <option value="SMA" onclick="showDiv()">SMA</option>
                            <option value="SMP" onclick="hiddenDiv()">SMP</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-12" id="hidden-div" style="display: none">
              <div class="form-group row">
                  <label for="major" class="col-sm-12 col-form-label">Jurusan SMA </label>
                    <div class="col-sm-12">
                        <select name="major" class="form-control" required>
                            <option value="">-- Pilih Jurusan untuk SMA --</option>
                            <option value="Social">Social</option>
                            <option value="Science">Science</option>
                        </select>
                    </div>
                </div>
            </div> -->
            <div class="col-lg-12">
              <div class="form-group row">
                  <label for="full_name" class="col-sm-12 col-form-label">Nama Lengkap </label>
                  <div class="col-sm-12">
                      <input type="text" required="" name="full_name" class="form-control" id="full_name">
                  </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group row">
                  <label for="gender" class="col-sm-12 col-form-label">Jenis Kelamin </label>
                  <div class="col-sm-12">
                      <!-- <label class="checkbox-inline" style="padding-left: 0px;"><input type="radio" name="jeniskelamin" required="" value="Laki-laki">&nbsp;Laki-laki</label>
                      <label class="checkbox-inline"><input type="radio" name="jeniskelamin" required="" value="Perempuan">&nbsp;Perempuan</label> -->
                      <select name="gender" class="form-control" required>
                          <option value="">-- Pilih Jenis Kelamin --</option>
                          <option value="Laki-laki">&nbsp;Laki-laki</option>
                          <option value="Perempuan">&nbsp;Perempuan</option>
                      </select>
                  </div>
              </div>
            </div>
            <!-- <div class="col-lg-12">
              <div class="form-group row">
                  <label for="nisn" class="col-sm-12 col-form-label">NISN </label>
                  <div class="col-sm-12">
                      <input type="number" required="" name="nisn" class="form-control" id="nisn" placeholder="Nomor Induk Siswa Nasional">
                  </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group row">
                  <label for="nkk" class="col-sm-12 col-form-label">No. KK </label>
                  <div class="col-sm-12">
                      <input type="number" required="" name="nkk" class="form-control" id="nkk" placeholder="Nomor Kartu Keluarga">
                  </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group row">
                  <label for="nik" class="col-sm-12 col-form-label">NIK </label>
                  <div class="col-sm-12">
                      <input type="number" required="" name="nik" class="form-control" id="nik" placeholder="Nomor Induk Kependudukan">
                  </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group row">
                  <label for="akta_number" class="col-sm-12 col-form-label">No. Akta Kelahiran </label>
                  <div class="col-sm-12">
                      <input type="number" required="" name="akta_number" class="form-control" id="akta_number" placeholder="Nomor Akta Kelahiran">
                  </div>
              </div>
            </div> -->
            <div class="col-lg-12">
              <div class="form-group row">
                  <label for="birth_place" class="col-sm-12 col-form-label">Tempat Lahir </label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" required=""  name="birth_place" id="birth_place">
                  </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group row">
                  <label for="birth_date" class="col-sm-12 col-form-label">Tanggal Lahir </label>
                  <div class="col-sm-12">
                    <input type="date" class="form-control"  required=""  name="birth_date" id="birth_date" style="padding-left: 30px;">
                  </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group row">
                  <label for="address" class="col-sm-12 col-form-label">Alamat </label>
                  <div class="col-sm-12">
                      <textarea rows="3" type="text" class="form-control" required="" name="address" id="address"></textarea>
                  </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group row">
                  <label for="village" class="col-sm-12 col-form-label">Kelurahan / Desa </label>
                  <div class="col-sm-12">
                      <input type="text" class="form-control"  required="" name="village" id="village">
                  </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group row">
                  <label for="sub_district" class="col-sm-12 col-form-label">Kecamatan </label>
                  <div class="col-sm-12">
                      <input type="text" class="form-control" required="" name="sub_district" id="sub_district">
                  </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group row">
                  <label for="district" class="col-sm-12 col-form-label">Kabupaten / Kota </label>
                  <div class="col-sm-12">
                      <input type="text" class="form-control" required="" name="district" id="district">
                  </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group row">
                  <label for="prev_school" class="col-sm-12 col-form-label">Asal Sekolah </label>
                  <div class="col-sm-12">
                      <input type="text" class="form-control" required="" name="prev_school" id="prev_school">
                  </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group row">
                  <label for="graduation_year" class="col-sm-12 col-form-label">Tahun Kelulusan</label>
                  <div class="col-sm-12">
                      <input type="number" class="form-control justnumber" required="" name="graduation_year" id="graduation_year">
                  </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group row">
                  <label for="phone" class="col-sm-12 col-form-label">Nomor Telepon / Hp</label>
                  <div class="col-sm-12">
                      <input type="text" class="form-control justnumber"  required="" name="phone" id="phone">
                  </div>
              </div>
            </div>
            <!-- <div class="col-lg-12">
              <div class="form-group row">
                  <p><hr></p>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group row">
                  <label for="telp" class="col-sm-12 col-form-label">Orang Tua Wali</label>
                  <div class="col-sm-10">
                  </div>
              </div>
            </div> -->
              <div class="col-sm-12">
                  <div class="form-group row">
                      <label for="father_name" class="col-sm-12 col-form-label">Nama Ayah</label>
                      <div class="col-sm-12">
                          <input type="text" class="form-control" required="" name="father_name" id="father_name">
                      </div>
                  </div>
              </div>
            <!-- <div class="col-lg-12">
              <div class="form-group row">
                  <label for="father_nik" class="col-sm-12 col-form-label">NIK Ayah </label>
                  <div class="col-sm-12">
                      <input type="number" required="" name="father_nik" class="form-control" id="father_nik" placeholder="Nomor Induk Kependudukan Ayah">
                  </div>
              </div>
            </div>
              <div class="col-sm-12">
                  <div class="form-group row">
                      <label for="father_phone" class="col-sm-12 col-form-label">Nomor Telepon / HP Ayah</label>
                      <div class="col-sm-12">
                          <input type="text" class="form-control" required="" name="father_phone" id="father_phone">
                      </div>
                  </div>
              </div> -->
              <div class="col-lg-12">
              <div class="form-group row">
                  <label for="father_employment" class="col-sm-12 col-form-label">Pekerjaan Ayah </label>
                  <div class="col-sm-12">
                      <select name="father_employment" class="form-control" required>
                          <option value="">-- Pilih Pekerjaan --</option>
                          <option>Buruh</option>
                          <option>Karyawan Swasta</option>
                          <option>Nelayan</option>
                          <option>Pedagang Besar</option>
                          <option>Pedagang Kecil</option>
                          <option>Pensiunan</option>
                          <option>Petani</option> 
                          <option>Peternak</option> 
                          <option>PNS/TNI/POLISI</option>   
                          <option>Wiraswasta</option>
                          <option>Wirausaha</option>
                          <option>Tidak Bekerja</option>
                          <option>Lain-Lain</option>   
                      </select>
                  </div>
              </div>
            </div>
              <div class="col-sm-12">
                  <div class="form-group row">
                      <label for="mother_name" class="col-sm-12 col-form-label">Nama Ibu</label>
                      <div class="col-sm-12">
                          <input type="text" class="form-control" required="" name="mother_name" id="mother_name">
                      </div>
                  </div>
              </div>
            <!-- <div class="col-lg-12">
              <div class="form-group row">
                  <label for="mother_nik" class="col-sm-12 col-form-label">NIK Ibu </label>
                  <div class="col-sm-12">
                      <input type="number" required="" name="mother_nik" class="form-control" id="mother_nik" placeholder="Nomor Induk Kependudukan Ibu">
                  </div>
              </div>
            </div>
              <div class="col-sm-12">
                  <div class="form-group row">
                      <label for="mother_phone" class="col-sm-12 col-form-label">Nomor Telepon / HP Ibu</label>
                      <div class="col-sm-12">
                          <input type="text" class="form-control" required="" name="mother_phone" id="mother_phone">
                      </div>
                  </div>
              </div> -->
            <div class="col-lg-12">
              <div class="form-group row">
                  <label for="mother_employment" class="col-sm-12 col-form-label">Pekerjaan Ibu </label>
                  <div class="col-sm-12">
                      <select name="mother_employment" class="form-control" required>
                          <option value="">-- Pilih Pekerjaan --</option>
                          <option>Buruh</option>
                          <option>Karyawan Swasta</option>
                          <option>Nelayan</option>
                          <option>Pedagang Besar</option>
                          <option>Pedagang Kecil</option>
                          <option>Pensiunan</option>
                          <option>Petani</option> 
                          <option>Peternak</option> 
                          <option>PNS/TNI/POLISI</option>   
                          <option>Wiraswasta</option>
                          <option>Wirausaha</option>
                          <option>Tidak Bekerja</option>
                          <option>Lain-Lain</option>            
                      </select>
                  </div>
              </div>
            </div>
            <!-- <div class="col-lg-12">
              <div class="form-group row">
                  <label for="height" class="col-sm-12 col-form-label">Tinggi Badan (cm) </label>
                  <div class="col-sm-12">
                      <input type="number" required="" name="height" class="form-control" id="height">
                  </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group row">
                  <label for="weight" class="col-sm-12 col-form-label">Berat Badan (kg) </label>
                  <div class="col-sm-12">
                      <input type="number" required="" name="weight" class="form-control" id="weight">
                  </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group row">
                  <label for="head_cir" class="col-sm-12 col-form-label">Lingkar Kepala (cm) </label>
                  <div class="col-sm-12">
                      <input type="number" required="" name="head_cir" class="form-control" id="head_cir">
                  </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group row">
                  <label for="mileage" class="col-sm-12 col-form-label">Jarak Tempat Tinggal ke Sekolah (km) </label>
                  <div class="col-sm-12">
                      <input type="number" required="" name="mileage" class="form-control" id="mileage">
                  </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group row">
                  <label for="sibling_number" class="col-sm-12 col-form-label">Jumlah Saudara Kandung </label>
                  <div class="col-sm-12">
                      <input type="number" required="" name="sibling_number" class="form-control" id="sibling_number">
                  </div>
              </div>
            </div> -->
            <!-- <div class="col-lg-12" style="margin-top:60px;">
                Dengan ini mendaftarkan diri sebagai calon siswa/i SMA AL MAZAYA ISLAMIC SCHOOL BANJARMASIN dan telah menyetujui persyaratan dan peraturan yang berlaku di sekolah ini.
            </div>
            <div class="col-lg-12" style="padding-left: 0px; padding-right: 0px;">
              <div class="col-lg-12" style="margin-top:60px;">
                   Tertanda,<br />
                  <input type="text" class="form-control" required="" name="tertanda" id="tertanda">
              </div>
            </div> -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>
      </div>
    </div>
  </div>

<!-- Modal Tamu -->
  <div class="modal fade tamu" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form action="<?php echo site_url('welcome/guest') ?>" class="form-horizontal" method="POST" role="form">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">BUKU TAMU</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="col-lg-12">
              <div class="form-group row">
                  <label for="full_name" class="col-sm-12 col-form-label">Nama Lengkap </label>
                  <div class="col-sm-12">
                      <input type="text" required="" name="full_name" class="form-control" id="full_name">
                  </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group row">
                  <label for="address" class="col-sm-12 col-form-label">Alamat </label>
                  <div class="col-sm-12">
                      <textarea rows="3" type="text" class="form-control" required="" name="address" id="address"></textarea>
                  </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group row">
                  <label for="phone" class="col-sm-12 col-form-label">Nomor Telepon / Hp</label>
                  <div class="col-sm-12">
                      <input type="text" class="form-control justnumber"  required="" name="phone" id="phone">
                  </div>
              </div>
            </div>            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

          <button type="submit" class="btn btn-primary" data-toggle="modal" data-target=".download">Save changes</button>
          
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal Read -->
  <?php foreach ($berita as $brt) {    
    $user = $this->db->get_where('users', array('id' => $row['post_author']))->row();
            ?>
  <div class="modal fade read<?=$brt['id']?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><?=date('l, d F Y, h:i:s A', strtotime($brt['created_at']))?> - Oleh <?=$user->user_full_name?> - Dilihat <?=$brt['post_counter']?> kali</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- <a href="#" class="block-20 d-flex align-items-end" style="background-image: url('<?=base_url('media_library/posts/medium/'.$brt["post_image"])?>');" alt="<?=$brt["post_title"]?>"></a> -->
          <div>
            <img src="http://junior.almazayaislamicschool.sch.id/media_library/posts/medium/<?=$brt["post_image"]?>" width="100%" alt="">
          </div>
          <div class="card-body">
            <h4 class="card-title"><?=$brt["post_title"]?></h4>
            <p class="card-text"><?=$brt["post_content"]?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>

  <!-- loader -->
  <!-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div> -->


  <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/popper.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url()?>assets/js/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/jquery.stellar.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/aos.js"></script>
  <script src="<?php echo base_url()?>assets/js/jquery.animateNumber.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo base_url()?>assets/js/google-map.js"></script>
  <script src="<?php echo base_url()?>assets/js/main.js"></script>

  <script>
      window.setTimeout("www()", 1000);
      window.setTimeout("waktu()", 1000);

      function www(){
        var time = Date.now();
        var gmt = -(new Date()).getTimezoneOffset()/60;
        var detik = Math.floor(time/1000);
        seconds = ('0' + detik % 60).slice(-2);
        var menit = Math.floor(detik/60);
        minutes = ('0' + menit % 60).slice(-2);
        var jam = Math.floor(menit/60);
        hours = ('0' + (jam+gmt) % 24).slice(-2);
        var view = hours + " : " + minutes + " : " + seconds;

        document.getElementById("jam").innerHTML = view;
        window.setTimeout("www()", 1000);
      }

      function waktu(){
        var time = Date.now();
        var gmt = -(new Date()).getTimezoneOffset()/60;
        var detik = Math.floor(time/1000);
        seconds = ('0' + detik % 60).slice(-2);
        var menit = Math.floor(detik/60);
        minutes = ('0' + menit % 60).slice(-2);
        var jam = Math.floor(menit/60);
        hours = ('0' + (jam+gmt) % 24).slice(-2);
        var hh = hours + "" + minutes;

        var isi = '';
        setTimeout("waktu()", 1000);

        if (hh >= 0715 && hh <= 0839) {
            isi = 'Dhuha & Tahfidzh';
          } else if(hh >= 0840 && hh <= 0919) {
            isi = 'Lesson 1';
          } else if(hh >= 0920 && hh <= 0959){
            isi = 'Lesson 2';
          } else if(hh >= 1000 && hh <= 1029){
            isi = 'Break 1';
          } else if(hh >= 1030 && hh <= 1109){
            isi = 'Lesson 3';
          } else if(hh >= 1110 && hh <= 1149){
            isi = 'Lesson 4';
          } else if(hh >= 1150 && hh <= 1239){
            isi = 'Break 2 & Dzuhur';
          } else if(hh >= 1240 && hh <= 1319){
            isi = 'Lesson 5';
          } else if(hh >= 1320 && hh <= 1359){
            isi = 'Lesson 6';
          } else if(hh >= 1400 && hh <= 1419){
            isi = 'Break 3';
          } else if(hh >= 1420 && hh <= 1459){
            isi = 'Lesson 7';
          } else if(hh >= 1500 && hh <= 1539){
            isi = 'Lesson 8';
          } else if(hh >= 1540 && hh <= 1559){
            isi = 'Ashar';
          } else {
            isi = 'Get Home';
          }
          
          document.getElementById("ke").innerHTML = isi;
        }
  </script>

  <script type="text/javascript">
    const secondHand = document.querySelector('.jarum_detik');
    const minuteHand = document.querySelector('.jarum_menit');
    const jarum_jam = document.querySelector('.jarum_jam');

    function setDate(){
      const now = new Date();

      const seconds = now.getSeconds();
      const secondsDegrees = ((seconds / 60) * 360) + 90;
      secondHand.style.transform = `rotate(${secondsDegrees}deg)`;
      if (secondsDegrees === 90) {
        secondHand.style.transition = 'none';
      } else if (secondsDegrees >= 91) {
        secondHand.style.transition = 'all 0.05s cubic-bezier(0.1, 2.7, 0.58, 1)'
      }

      const minutes = now.getMinutes();
      const minutesDegrees = ((minutes / 60) * 360) + 90;
      minuteHand.style.transform = `rotate(${minutesDegrees}deg)`;

      const hours = now.getHours();
      const hoursDegrees = ((hours / 12) * 360) + 90;
      jarum_jam.style.transform = `rotate(${hoursDegrees}deg)`;
    }

    setInterval(setDate, 1000)
  </script>

  <script type="text/javascript">
        function showDiv(){
           document.getElementById('hidden-div').style.display = "block";
        }

        function hiddenDiv(){
           document.getElementById('hidden-div').style.display = "none";
        }
  </script>
    
  </body>
</html>
