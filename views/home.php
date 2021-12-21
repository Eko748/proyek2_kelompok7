<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-Academic | Sistem Penilaian Siswa </title>
    <link rel="icon" href="<?= base_url('uploads/') . _school_profile()->logo; ?>" type="image/x-icon">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- CSS CDN  -->
    <!-- Bootstrap 3.3.7 -->

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bower_components/font-awesome/css/font-awesome.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bower_components/select2/dist/css/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>dist/css/skins/_all-skins.min.css">

    <!-- JAVASCRIPT CDN  -->
    <!-- jQuery 3 -->
    <script src="<?= base_url('assets/'); ?>bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?= base_url('assets/'); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="<?= base_url('assets/'); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets/'); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- bootstrap datepicker -->
    <script src="<?= base_url('assets/'); ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js">
    </script>
    <!-- Select2 -->
    <script src="<?= base_url('assets/'); ?>bower_components/select2/dist/js/select2.full.min.js"></script>
    <!-- SlimScroll -->
    <script src="<?= base_url('assets/'); ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?= base_url('assets/'); ?>bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets/'); ?>dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url('assets/'); ?>dist/js/demo.js"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2();
            $('.datepicker').datepicker({
                autoclose: true,
                format: 'yyyy-mm-dd'
            })
            $('.datatable').DataTable({
                'paging': true,
                'lengthChange': true,
                'searching': true,
                'ordering': false,
                'info': true,
                'autoWidth': false
            });
        })
    </script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue fixed sidebar-mini">
    <?php $this->load->view('alert'); ?>
    <!-- Site wrapper -->
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="<?= _school_profile()->website; ?>" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>E</b>-Academic</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            <a href="<?= base_url('#'); ?>">
                                <i class="fa fa-home"></i>Home
                                <!-- <span class="hidden-xs"></span> -->
                            </a>
                        </li>
                        <li class="dropdown user user-menu">
                            <a href="<?= base_url('#'); ?>">
                                <i class="fa fa-info"></i>About
                                <!-- <span class="hidden-xs"></span> -->
                            </a>
                        </li>
                        <li class="dropdown user user-menu">
                            <a href="<?= base_url('#'); ?>">
                                <i class="fa fa-phone"></i>Contact
                                <!-- <span class="hidden-xs"></span> -->
                            </a>
                        </li>
                        <li class="dropdown user user-menu">
                            <a href="<?= base_url('auth'); ?>">
                                <i class="fa fa-sign-in-alt"></i>Login
                                <!-- <span class="hidden-xs"></span> -->
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    </div>
    <section class="content-header">
        <h1>
            Selamat Datang di Sistem Penilaian <b><?= _school_profile()->nama; ?></b>
        </h1>
        <br><br>
        <div class="box box-primary">
            <div class="box-header with-border">
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
                <h3>
                    Selamat Datang di E-Academic <b><?= _school_profile()->nama; ?></b>
                </h3>
            </div>
        </div>

        <h1>
            <i class="fa fa-cog fa-2x" style="color: #4682B4"></i><i class="fa fa-cog" style="color: #4682B4"></i>
        </h1><br>
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?= count(list_guru()); ?></h3>

                        <p>Guru</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-user"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3><?= count(list_siswa()); ?></h3>

                        <p>Siswa</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3><?= count(list_kelas()); ?></h3>

                        <p>Kelas</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-building"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3><?= count(list_mapel()); ?></h3>

                        <p>Mata Pelajaran</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-key"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
        </div>

        <div class="box box-primary">
            <div class="box-header with-border">

                <h4>
                    About <b><?= _school_profile()->nama; ?></b>
                </h4>
            </div>
            <center>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="card">
                                    <img src="<?= base_url('uploads/') . _school_profile()->logo; ?>" class="card-img-top" weight="140" height="128" alt="...">
                                    <div class="card-body">
                                        <h4 class="card-title"><b><?= _school_profile()->konten; ?></b></h5>
                                            <p class="card-text"><?= _school_profile()->isi_konten; ?></p>
                                            <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </center>
        </div>





        <hr>
        <footer>
            <strong>Copyright &copy; <?= date('Y'); ?> <a href="<?= _school_profile()->website; ?>">E-Academic</a>.</strong>
            All rights reserved.
        </footer>
    </section>
    <br>
</body>

</html>