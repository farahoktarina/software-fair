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
                <a class="navbar-brand" href="index.html">ADMIN</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo site_url('admin/logout');?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="charts"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                    </li>
                    <li>
                        <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
                    </li>
                    <li>
                        <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                    </li>
                    <li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Developer <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="<?php echo site_url('Administrator/tampilsaldo');?>">Saldo</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('Administrator/tampilvoting');?>">Voting</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('Administrator/tampilscore');?>">Score</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
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
                            Developer <small>Tabel Data Saldo</small>
                        </h1>
                       <!--  <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol> -->
                    </div>
                </div>
                <!-- /.row -->
                

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">

           <!--  <?php if ($this->session->flashdata('editpsn') == TRUE):?>
                <div role="alert" class="alert alert-danger alert-dismissable fade in">
                    <button aria-label="Close" data-dismiss="alert" class="close" type="button">
                    <span aria-hidden="true" class="fa fa-times"></span>
                    </button>
                    <p><?php echo $this->session->flashdata('editpsn'); ?></p>
                </div>
            <?php endif ?>

            <?php if ($this->session->flashdata('delpsn') == TRUE):?>
                <div role="alert" class="alert alert-danger alert-dismissable fade in">
                    <button aria-label="Close" data-dismiss="alert" class="close" type="button">
                    <span aria-hidden="true" class="fa fa-times"></span>
                    </button>
                    <p><?php echo $this->session->flashdata('delpsn'); ?></p>
                </div>
            <?php endif ?>
        </div>
 -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Detail Data Saldo
                </div>

                <div class="panel-body">
                   <!--  <p>
                        <a href="<?php echo base_url();?>index.php/pasien/export_excelpasien" class="btn btn-primary btn-small ">Export to Excel</a>
                    </p> -->
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Id Developer</th>
                                <th>Nama</th>
                                <th>Jenis App</th>
                                <th>Nama App</th>
                                <th>Saldo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php 
                            $no=1; 
                            foreach ($data_saldo as $row) { ?>
                            <tr>
                                    <td><?php echo $no++;?></td>
                                    <td><?php echo $row->id_dev;?></td>
                                    <td><?php echo $row->nama_dev;?></td>
                                    <td><?php echo $row->jenis_app;?></td>
                                    <td><?php echo $row->nama_app;?></td>
                                    <td><?php echo $row->saldo;?></td>
                                    <td align="center">
                                        <div class="tooltip-demo">
                                            <a data-toggle="tooltip" data-placement="top" title="Edit" href="<?php echo base_url()?>index.php/Administrator/editsaldo/<?php echo $row->id_dev;?>"  class="fa fa-edit fa-2x"></a>
                                            <a data-toggle="tooltip" data-placement="top" title="Delete" href="<?php echo base_url()?>index.php/Administrator/deletesaldo/<?php echo $row->id_dev;?>" onclick="return confirm('Yakin ingin menghapus data ini?');" class="fa fa-trash-o fa-2x"></a>

                                        </div>
                                    </td>
                            </tr>
                            <?php  } ?>
                        </tbody>
                    </table>
                            <!-- /.table-responsive -->

                </div>

            </div>

        </div>

    </div>
</div>


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
