<!DOCTYPE html>
<html>
  <head>
    <title>Votting Apps</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!--

    Template 2075 Digital Team

    http://www.tooplate.com/view/2075-digital-team

    -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/et-line-font.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/nivo-lightbox.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/nivo_themes/default/default.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/agency.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>


    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/smoothscroll.js"></script>
    <script src="<?php echo base_url();?>assets/js/isotope.js"></script>
    <script src="<?php echo base_url();?>assets/js/imagesloaded.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/nivo-lightbox.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.backstretch.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/wow.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/custom.js"></script>
    <script src="<?php echo base_url();?>assets/js/agency.js"></script>
    <style>
        label > input{ /* HIDE RADIO */
          visibility: hidden; /* Makes input not-clickable */
          position: absolute; /* Remove input from document flow */
        }
        label > input + img{ /* IMAGE STYLES */
          cursor:pointer;
          border:2px solid transparent;
        }
        label > input:checked + img{ /* (RADIO CHECKED) IMAGE STYLES */
          border:2px solid #f00;
        }
    </style>
  </head>
  <body>
    <!-- preloader section -->
    <div class="preloader">
    	<div class="sk-spinner sk-spinner-circle">
           <div class="sk-circle1 sk-circle"></div>
           <div class="sk-circle2 sk-circle"></div>
           <div class="sk-circle3 sk-circle"></div>
           <div class="sk-circle4 sk-circle"></div>
           <div class="sk-circle5 sk-circle"></div>
           <div class="sk-circle6 sk-circle"></div>
           <div class="sk-circle7 sk-circle"></div>
           <div class="sk-circle8 sk-circle"></div>
           <div class="sk-circle9 sk-circle"></div>
           <div class="sk-circle10 sk-circle"></div>
           <div class="sk-circle11 sk-circle"></div>
           <div class="sk-circle12 sk-circle"></div>
        </div>
    </div>

    <!-- navigation section -->
    <section class="navbar navbar-fixed-top custom-navbar" role="navigation">
    	<div class="container">
    		<div class="navbar-header">
    			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    				<span class="icon icon-bar"></span>
    				<span class="icon icon-bar"></span>
    				<span class="icon icon-bar"></span>
    			</button>
    			<a href="<?php echo base_url('/');?>" class="navbar-brand" >Software Fair 2017</a>
    		</div>
    		<div class="collapse navbar-collapse">
    			<ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo base_url('/');?>" class="smoothScroll"><strong>HOME</strong></a></li>
    				<li><a href="#work" class="smoothScroll"><strong>ABOUT</strong></a></li>
    				<li><a href="#team" class="smoothScroll"><strong>APPS</strong></a></li>
    				<li><a href="#portfolio" class="smoothScroll"><strong>GALLERY</strong></a></li>
    				<li><a href="#pricing" class="smoothScroll"><strong>TIMELINE</strong></a></li>
    				<li><a href="#contact" class="smoothScroll"><strong>CONTACT</strong></a></li>
    			</ul>
    		</div>
    	</div>
    </section>

    <!-- home section -->
    <section id="home">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12 col-sm-12">
    				<h1  style="color:#F9062E">SOFTWARE FAIR 2017</h1>
    				<hr>
    				<h3>Find the Art of Technology</h3>
    				<a href="#work" class="smoothScroll btn btn-default">GuideLine SF 2017</a>
    				<a href="#contact" class="smoothScroll btn btn-danger">Register Developer</a>
    				<a href="#contact" class="smoothScroll btn btn-default">Register Talkshow</a>
    			</div>
    		</div>
    	</div>
    </section>
    <!-- home section -->
    <section id="gamification">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 style="text-align:center;margin-bottom:20px; margin-top:-50px">VOTTING APPLICATIONS</h2>
            <form class="" action="<?php echo base_url('votting/voted');?>" method="post">
              <input type="hidden" name="_token" value=" csrf_token() ">
                <div class="col-md-6 col-md-offset-3">
                  <div class="form-group" style="text-align:center">
                    <label for="kategori" style="font-size:16px"><strong>Status</strong></label><br>
                    <input type="radio" name="kategori" value="mhs" > Mahasiswa
                    <input type="radio" name="kategori" value="sma" style="margin-left:10px"> SMA/SMK
                    <input type="radio" name="kategori" value="dosen" style="margin-left:20px"> Dosen
                 </div>
                  <div class="form-group">
                    <input type="text" name="nim" class="form-control" placeholder="NIM/NPP/KTP" />
                  </div>
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" />
                  </div>

                </div>
                <div class="col-md-8 col-md-offset-2">
                  <h4 style="text-align:center">Choose Your Favorite Apps</h4>
                  <div class="form-group">
                    <label>
                    <input type="radio" name="vote" value="app1">
                      <img src="<?php echo base_url();?>/assets/images/desktopfix.png" class="img-responsive" alt="dekstop" height="130px" width="135px">
                    </label>
                    <label>
                    <input type="radio" name="vote" value="app2">
                      <img src="<?php echo base_url();?>/assets/images/desktopfix.png" class="img-responsive" alt="dekstop" height="130px" width="135px">
                    </label>
                    <label>
                    <input type="radio" name="vote" value="app3">
                      <img src="<?php echo base_url();?>/assets/images/desktopfix.png" class="img-responsive" alt="dekstop" height="130px" width="135px">
                    </label>
                    <label>
                    <input type="radio" name="vote" value="app4">
                      <img src="<?php echo base_url();?>/assets/images/desktopfix.png" class="img-responsive" alt="dekstop" height="130px" width="135px">
                    </label>
                    <label>
                    <input type="radio" name="vote" value="app5">
                      <img src="<?php echo base_url();?>/assets/images/desktopfix.png" class="img-responsive" alt="dekstop" height="130px" width="135px">
                    </label>
                    <label>
                    <input type="radio" name="vote" value="app6">
                      <img src="<?php echo base_url();?>/assets/images/desktopfix.png" class="img-responsive" alt="dekstop" height="130px" width="135px">
                    </label>
                    <label>
                    <input type="radio" name="vote" value="app7">
                      <img src="<?php echo base_url();?>/assets/images/desktopfix.png" class="img-responsive" alt="dekstop" height="130px" width="135px">
                    </label>
                    <label>
                    <input type="radio" name="vote" value="app8">
                      <img src="<?php echo base_url();?>/assets/images/desktopfix.png" class="img-responsive" alt="dekstop" height="130px" width="135px">
                    </label>
                    <label>
                    <input type="radio" name="vote" value="app9">
                      <img src="<?php echo base_url();?>/assets/images/desktopfix.png" class="img-responsive" alt="dekstop" height="130px" width="135px">
                    </label>
                    <label>
                    <input type="radio" name="vote" value="app10">
                      <img src="<?php echo base_url();?>/assets/images/desktopfix.png" class="img-responsive" alt="dekstop" height="130px" width="135px">
                    </label>
                    <label>
                    <input type="radio" name="vote" value="app11">
                      <img src="<?php echo base_url();?>/assets/images/desktopfix.png" class="img-responsive" alt="dekstop" height="130px" width="135px">
                    </label>
                    <label>
                    <input type="radio" name="vote" value="app12">
                      <img src="<?php echo base_url();?>/assets/images/desktopfix.png" class="img-responsive" alt="dekstop" height="130px" width="135px">
                    </label>
                    <label>
                    <input type="radio" name="vote" value="app13">
                      <img src="<?php echo base_url();?>/assets/images/desktopfix.png" class="img-responsive" alt="dekstop" height="130px" width="135px">
                    </label>
                    <label>
                    <input type="radio" name="vote" value="app14">
                      <img src="<?php echo base_url();?>/assets/images/desktopfix.png" class="img-responsive" alt="dekstop" height="130px" width="135px">
                    </label>
                    <label>
                    <input type="radio" name="vote" value="app15">
                      <img src="<?php echo base_url();?>/assets/images/desktopfix.png" class="img-responsive" alt="dekstop" height="130px" width="135px">
                    </label>
                    <label>
                    <input type="radio" name="vote" value="app16">
                      <img src="<?php echo base_url();?>/assets/images/desktopfix.png" class="img-responsive" alt="dekstop" height="130px" width="135px">
                    </label>
                    <label>
                    <input type="radio" name="vote" value="app17">
                      <img src="<?php echo base_url();?>/assets/images/desktopfix.png" class="img-responsive" alt="dekstop" height="130px" width="135px">
                    </label>
                    <label>
                    <input type="radio" name="vote" value="app18">
                      <img src="<?php echo base_url();?>/assets/images/desktopfix.png" class="img-responsive" alt="dekstop" height="130px" width="135px">
                    </label>
                    <label>
                    <input type="radio" name="vote" value="app19">
                      <img src="<?php echo base_url();?>/assets/images/desktopfix.png" class="img-responsive" alt="dekstop" height="130px" width="135px">
                    </label>
                    <label>
                    <input type="radio" name="vote" value="app20">
                      <img src="<?php echo base_url();?>/assets/images/desktopfix.png" class="img-responsive" alt="dekstop" height="130px" width="135px">
                    </label>

                  </div>
                </div>
                <div class="col-md-6 col-md-offset-3">
                  <div class="form-group">
                    <textarea name="comment" rows="8" cols="75" placeholder="Your Comment about Software Fair 2017"></textarea>
                  </div>
                  <div class="text-center">
                      <input type="submit" name="Submit" value="VOTE" class="btn btn-lg btn-block btn-info">
                  </div>
                </div>
              </form>
          </div>
        </div>
      </div>
    </section>
    <!-- footer section -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <p>Copyright © Digital Team HTML5 Template | Design: <a href="http://www.tooplate.com" target="_parent">Tooplate</a></p>
            <hr>
            <ul class="social-icon">
              <li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
              <li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
              <li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
              <li><a href="#" class="fa fa-behance wow fadeIn" data-wow-delay="0.9s"></a></li>
              <li><a href="#" class="fa fa-tumblr wow fadeIn" data-wow-delay="0.9s"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

  </body>
</html>
