<script>
    function preview_foto(event) {

        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('viewfoto');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<script src="<?php echo base_url() ?>/assets/Chart.js"></script>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Selamat Datang, <b><?=user(__session('id'))->user_fullname;?></b>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url('dashboard'); ?>"><i class="fa fa-home"></i> Beranda</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <h1>
        <i class="fa fa-cog fa-2x" style="color: #4682B4"></i><i class="fa fa-cog " style="color: #4682B4"></i>
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
                    <i class="fa fa-book"></i>
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



</section>
<!-- /.content -->