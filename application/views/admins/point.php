<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SF | Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>/assets/dev/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>/assets/dev/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url();?>assets/dev/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>/assets/dev/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">DEVELOPERS</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION["email_adm"]?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>

                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo site_url('administrator/logout');?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
              <ul class="nav navbar-nav side-nav">
                  <li class="active">
                      <a href="<?php echo base_url('/administrator');?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                  </li>
                  <li>
                      <a href="<?php echo base_url('/administrator/check');?>"><i class="fa fa-fw fa-edit"></i> Give Points</a>
                  </li>
                  <li>
                      <a href="<?php echo site_url('/Votting');?>" target="_blank"><i class="fa fa-fw fa-bar-chart-o"></i> Votting Apps</a>
                  </li>
                  <li>
                    <a href="<?php echo site_url('/Votting');?>" target="_blank"><i class="fa fa-fw fa-gift"></i> Penukaran Point</a>
                  </li>
                  <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Developer <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="demo" class="collapse">
                        <li>
                            <a href="<?php echo site_url('Administrator/tampilsaldo');?>">Saldo Terkecil</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('Administrator/tampilvoting');?>">Votting Result</a>
                        </li>
                        <li>
                          <a href="<?php echo site_url('/Votting');?>"><i class="fa fa-fw fa-gift"></i> Penukaran Point</a>
                        </li>
                    </ul>
                  </li>

              </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Give Points
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-edit"></i> Give Points
                            </li>
                        </ol>
                    </div>
                    <?php foreach ($peserta as $key){?>
                    <div class="col-lg-6">

                        <h3>PIN : <?php echo $key['pin'] ?></h3>


                        <h3>Nama Peserta : <?php echo $key['nama_pes'] ?></h3>

                        <h3>Score : <?php echo $key['score'] ?></h3>

                    </div>
                    <div class="col-lg-4 col-offset-lg-1">
                      <h3>Give Points</h3>
                      <form class="" action="<?php echo base_url('administrator/give_point/'.$key['pin']);?>" method="post">
                        <div class="form-group">
                          <select class="form-control" name="point">
                            <option disabled selected>Points</option>
                            <option name="point" value="normal">40 Points (Normal)</option>
                            <option name="point" value="hard">60 Points (Hard)</option>

                          </select>
                       </div>
                        <div class="text-center">
                          <input type="submit" name="Submit" value="Give Points" class="btn btn-lg btn-block btn-info">
                        </div>
                      </form>
                    </div>
                    <?php }?>
                </div>

                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url();?>/assets/dev/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>/assets/dev/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url();?>/assets/dev/js/plugins/morris/raphael.min.js"></script>
    <script src="<?php echo base_url();?>/assets/dev/js/plugins/morris/morris.min.js"></script>
    <script src="<?php echo base_url();?>/assets/dev/js/plugins/morris/morris-data.js"></script>

</body>

</html>
