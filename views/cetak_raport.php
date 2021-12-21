<?php
error_reporting(0);
?>
<html>

<head>
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <script src="<?= base_url('assets/'); ?>bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/'); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets/'); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <title>E-Academic | <?= $raport_data['nama']; ?></title>
    <link rel="icon" href="<?= base_url('uploads/') . _school_profile()->logo; ?>" type="image/x-icon" />
</head>

<body>

    <div style="page-break-after:always;">
        <br><br><br>
        <center>
            <img src="../uploads/kemendikbud.png" style="width:210px;height:210px;float:center;margin-bottom:30px;">
        </center>
        <h2 class="text-center"><b>RAPOR</b></h2>
        <h2 class="text-center"><b>SEKOLAH MENENGAH ATAS</b></h2>
        <h2 class="text-center"><b>( SMA )</b></h2>
        <br><br><br><br><br><br><br>
        <h3 class="text-center"><b>Nama Peserta Didik</b></h3>
        <table class="table table-bordered table-striped" style="font-size:12pt;">
            <tr>
                <td colspan="10" class="text-center"><h3><?= $raport_data['nama']; ?></h3></td>
            </tr>
        </table>
        <br>
        <h3 class="text-center"><b>NISN / NIS</b></h3>
        <table class="table table-bordered table-striped" style="padding:15px;">
            <tr>
                <td width="500" class="text-center"><h3><?= $raport_data['nisn']; ?> / <?= $raport_data['nis']; ?></h3></td>
            </tr>
        </table>
        <br><br><br><br>
        <h3 class="text-center"><b>KEMENTERIAN PENDIDIKAN, KEBUDAYAAN, RISET, DAN TEKNOLOGI</b></h3>
        <h3 class="text-center"><b>REPUBLIK INDONESIA</b></h3>
    </div>
    <div style="page-break-after:always;">
        <br>
        <h4 class="text-center"><b>RAPOR</b></h4>
        <h4 class="text-center"><b>SEKOLAH MENENGAH ATAS</b></h4>
        <h4 class="text-center"><b>( SMA )</b></h4>
        <br><br>
        <table style="padding:15px; font-size:12pt;">
            <tr>
                <td width="150" class="text-center"> </td>
                <td width="100">Nama Sekolah</td>
                <td width="10">:</td>
                <td width="840"><?= _school_profile()->nama; ?></td>
            </tr>
            <td><br></td>
            <tr>
            <td width="100" class="text-center"> </td>
                <td width="300">NPSN</td>
                <td width="10">:</td>
                <td width="590"><?= _school_profile()->npsn; ?></td>
            </tr>
            <td><br></td>
            <tr>
            <td width="100" class="text-center"> </td>
                <td width="150">NSS</td>
                <td width="20">:</td>
                <td width="350"><?= _school_profile()->nss; ?></td>
            </tr>
            <td><br></td>
            <tr>
            <td width="100" class="text-center"> </td>
                <td width="150">Alamat Sekolah</td>
                <td width="20">:</td>
                <td width="350"><?= _school_profile()->alamat; ?></td>
            </tr>
            <td><br></td>
            <tr>
            <td width="100" class="text-center"></td>
            <td width="300"></td>
                <td width="10"></td>
                <td width="590">Kode Pos : <?= _school_profile()->kodepos; ?>, Telp. <?= _school_profile()->telepon; ?></td>
            </tr>
            <td><br></td>
            <tr>
            <td width="100" class="text-center"> </td>
                <td width="150">Kelurahan / Desa </td>
                <td width="20">:</td>
                <td width="350"><?= _school_profile()->kelurahan; ?></td>
            </tr>
            <td><br></td>
            <tr>
            <td width="100" class="text-center"> </td>
                <td width="150">Kecamatan</td>
                <td width="20">:</td>
                <td width="350"><?= _school_profile()->kecamatan; ?></td>
            </tr>
            <td><br></td>
            <tr>
            <td width="100" class="text-center"> </td>
                <td width="150">Kota / Kabupaten</td>
                <td width="20">:</td>
                <td width="350"><?= _school_profile()->kabupaten; ?></td>
            </tr>
            <td><br></td>
            <tr>
            <td width="100" class="text-center"> </td>
                <td width="150">Provinsi</td>
                <td width="20">:</td>
                <td width="350"><?= _school_profile()->provinsi; ?></td>
            </tr>
            <td><br></td>
            <tr>
            <td width="100" class="text-center"> </td>
                <td width="150">Website</td>
                <td width="20">:</td>
                <td width="350"><?= _school_profile()->website; ?></td>
            </tr>
            <td><br></td>
            <tr>
            <td width="100" class="text-center"> </td>
                <td width="150">E-mail</td>
                <td width="20">:</td>
                <td width="350"><?= _school_profile()->email; ?></td>
            </tr>
            <td><br></td>
        </table>
    </div>

    <div style="page-break-after:always;">
        <br>
        <h4 class="text-center"><b>KETERANGAN TENTANG DIRI PESERTA DIDIK</b></h4>
        <br><br>
        <table style="padding:15px; font-size:12pt;">
            <tr>
                <td width="100" class="text-center">1.</td>
                <td width="300">Nama Peserta Didik (Lengkap)</td>
                <td width="10">:</td>
                <td width="590"><?= $raport_data['nama']; ?></td>
            </tr>
            <td><br></td>
            <tr>
                <td width="100" class="text-center">2.</td>
                <td width="250">Nomor Induk Siswa/NISN</td>
                <td width="10">:</td>
                <td width="640"><?= $raport_data['nis']; ?> / <?= $raport_data['nisn']; ?></td>
            </tr>
            <td><br></td>
            <tr>
                <td width="1" class="text-center">3.</td>
                <td width="150">Tempat, Tanggal Lahir</td>
                <td width="2">:</td>
                <td width="350"><?= $raport_data['tmp_lhr']; ?>, <?= _student()->tgl_lhr; ?></td>
            </tr>
            <td><br></td>
            <tr>
                <td width="1" class="text-center">4.</td>
                <td width="150">Jenis Kelamin</td>
                <td width="20">:</td>
                <td width="350"><?= $raport_data['jk']; ?></td>
            </tr>
            <td><br></td>
            <tr>
                <td width="1" class="text-center">5.</td>
                <td width="150">Agama</td>
                <td width="20">:</td>
                <td width="350"><?= $raport_data['agama']; ?></td>
            </tr>
            <td><br></td>
            <tr>
                <td width="1" class="text-center">6.</td>
                <td width="150">Status Dalam Keluarga</td>
                <td width="20">:</td>
                <td width="350"><?= $raport_data['sts_anak']; ?></td>
            </tr>
            <td><br></td>
            <tr>
                <td width="1" class="text-center">7.</td>
                <td width="150">Anak ke</td>
                <td width="20">:</td>
                <td width="350"><?= $raport_data['anak_ke']; ?></td>
            </tr>
            <td><br></td>
            <tr>
                <td width="1" class="text-center">8.</td>
                <td width="150">Alamat Peserta Didik</td>
                <td width="20">:</td>
                <td width="350"><?= $raport_data['alamat']; ?></td>
            </tr>
            <td><br></td>
            <tr>
                <td width="1" class="text-center">9.</td>
                <td width="150">Sekolah Asal</td>
                <td width="20">:</td>
                <td width="350"><?= _school_profile()->nama; ?></td>
            </tr>
            <td><br></td>
            <tr>
                <td width="1" class="text-center">10.</td>
                <td width="150">Nama Orang Tua</td>
            <tr>
                <td><br></td>
            </tr>
            <tr>
                <td></td>
                <td>a. Ayah</td>
                <td width="20">:</td>
                <td width="350"><?= $raport_data['nama_ayah']; ?></td>
            </tr>
            <td><br></td>
            <tr>
                <td></td>
                <td>a. Ibu</td>
                <td width="20">:</td>
                <td width="350"><?= $raport_data['nama_ibu']; ?></td>
            </tr>
            </tr>
            <td><br></td>
            <tr>
                <td width="1" class="text-center">11.</td>
                <td width="150">Alamat Orang Tua</td>
                <td width="20">:</td>
                <td width="350"><?= $raport_data['alamat_ortu']; ?></td>
            </tr>
            <td><br></td>
            <tr>
                <td width="1" class="text-center">12.</td>
                <td width="150">Pekerjaan Orang Tua</td>
            <tr>
                <td><br></td>
            </tr>
            <tr>
                <td></td>
                <td>a. Ayah</td>
                <td width="20">:</td>
                <td width="350"><?= $raport_data['pekr_ayah']; ?></td>
            </tr>
            <td><br></td>
            <tr>
                <td></td>
                <td>a. Ibu</td>
                <td width="20">:</td>
                <td width="350"><?= $raport_data['pekr_ibu']; ?></td>
            </tr>
            </tr>
            <td><br></td>
            <tr>
                <td width="1" class="text-center">13.</td>
                <td width="150">Nama Wali Siswa</td>
                <td width="20">:</td>
                <td width="350"><?= $raport_data['nama_wali']; ?></td>
            </tr>
            <td><br></td>
            <tr>
                <td width="1" class="text-center">14.</td>
                <td width="150">Alamat Wali Siswa</td>
                <td width="20">:</td>
                <td width="350"><?= $raport_data['alamat_wali']; ?></td>
            </tr>
            <td><br></td>
            <tr>
                <td width="1" class="text-center">15.</td>
                <td width="150">Pekerjaan Wali Peserta Didik</td>
                <td width="20">:</td>
                <td width="350"><?= $raport_data['pekr_wali']; ?></td>
            </tr>
            <td><br><br></td>
        </table>
        <table>
            <tr>
                <td class="text-center" width="500"><img class="text-center" alt="Foto 3X4" style="border:1px dashed;width:114px;height:152px;" id="viewfoto"><?= _student()->foto; ?></td>
                <td></td>
                <td style="text-align:left;margin-right:125px;" width="500">
                    <p><?= $raport_data['tempat']; ?>,
                        <?= date('d M Y', strtotime($raport_data['tanggal'])); ?>
                    </p>
                    Kepala Sekolah
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <u><?= _school_profile()->nama_kepsek; ?></u>
                    <br>
                    NIP. <?= _school_profile()->nip_kepsek; ?>
                </td>
            </tr>
        </table>
    </div>
    <div style="page-break-after:always;">
        <br>
        <table style="padding:15px;">
            <tr>
                <td width="200">Nama Sekolah</td>
                <td width="20">:</td>
                <td width="450"><?= _school_profile()->nama; ?></td>
                <td width="150">Kelas</td>
                <td width="20">:</td>
                <td width="160"><?= $raport_data['kelas_nama']; ?></td>
            </tr>
            <tr>
                <td width="150">Alamat</td>
                <td width="20">:</td>
                <td width="350"><?= _school_profile()->alamat; ?></td>
                <td width="125">Semester</td>
                <td width="20">:</td>
                <td><?= $raport_data['semester']; ?></td>
            </tr>
            <tr>
                <td width="150">Nama Peserta Didik</td>
                <td width="20">:</td>
                <td width="350"><?= $raport_data['nama']; ?></td>
                <td width="125">Tahun Akademik</td>
                <td width="20">:</td>
                <td><?= $raport_data['tahun_akademik']; ?></td>
            </tr>
            <tr>
                <td width="150">Nomor Induk / NISN</td>
                <td width="20">:</td>
                <td width="350"><?= $raport_data['nis']; ?> / <?= $raport_data['nisn']; ?></td>
            </tr>
        </table>
        <hr style="border:1px solid;margin-right:0px;width:800px;">
        <h4>A. Pengetahuan</h4>
        <table class="table table-bordered table-striped" style="font-size:12pt;">
            <thead>
                <tr>
                    <th style="text-align:center;">No</th>
                    <th rowspan="2" style="text-align:center;">Mata Pelajaran</th>
                    <th rowspan="1" style="text-align:center;">Nilai</th>
                    <th rowspan="1" style="text-align:center;">Predikat</th>
                    <th rowspan="4" style="text-align:center;">Catatan</th>
                </tr>
            </thead>
            <tbody>
                <?php $n=1; foreach ($raport_nilai as $row) : ?>
                    
                    <tr>
                        <td class="text-center"><?=$n++.'.';?></td>
                        <td><?= $row['mapel_nama']; ?></td>
                        <td class="text-center"><?= $row['nilai_akhir']; ?></td>
                        <td class="text-center"><?= $row['nilai_huruf']; ?></td>
                        <td style="text-align:justify;"><?= $row['catatan_p']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <p style="text-align:right;margin-right:125px;"><?= $raport_data['tempat']; ?>,
            <?= date('d M Y', strtotime($raport_data['tanggal'])); ?></p>
        <table>
            <tr>
                <td class="text-center" width="500">
                    <p>Orang Tua Siswa</p>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <p>..............................</p>
                    <br>
                </td>
                <td class="text-center" width="500">
                    <p>Wali Kelas</p>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <u><?= $raport_wali['nama']; ?></u>
                    <br>
                    NIP. <?= $raport_wali['nip']; ?>
                </td>
            </tr>
        </table>
        <br>
        <table>
        <tr>
                <td class="text-center" width="300"></td>
                <td class="text-center" width="400">
                    <p>Mengetahui,</p>
                    <p>Kepala Sekolah</p>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <u><?= _school_profile()->nama_kepsek; ?></u>
                    <br>
                    NIP. <?= _school_profile()->nip_kepsek; ?>
                </td>
                <td class="text-center" width="300"></td>
            </tr>
        </table>
    </div>
    <div style="page-break-after:always;">
        <br>
        <table style="padding:15px;">
            <tr>
                <td width="200">Nama Sekolah</td>
                <td width="20">:</td>
                <td width="450"><?= _school_profile()->nama; ?></td>
                <td width="150">Kelas</td>
                <td width="20">:</td>
                <td width="160"><?= $raport_data['kelas_nama']; ?></td>
            </tr>
            <tr>
                <td width="150">Alamat</td>
                <td width="20">:</td>
                <td width="350"><?= _school_profile()->alamat; ?></td>
                <td width="125">Semester</td>
                <td width="20">:</td>
                <td><?= $raport_data['semester']; ?></td>
            </tr>
            <tr>
                <td width="150">Nama Peserta Didik</td>
                <td width="20">:</td>
                <td width="350"><?= $raport_data['nama']; ?></td>
                <td width="125">Tahun Akademik</td>
                <td width="20">:</td>
                <td><?= $raport_data['tahun_akademik']; ?></td>
            </tr>
            <tr>
                <td width="150">Nomor Induk / NISN</td>
                <td width="20">:</td>
                <td width="350"><?= $raport_data['nis']; ?> / <?= $raport_data['nisn']; ?></td>
            </tr>
        </table>
        <hr style="border:1px solid;margin-right:0px;width:800px;">
        <h4>B. Keterampilan</h4>
        <table class="table table-bordered table-striped" style="font-size:12pt;">
            <thead>
                <tr>
                    <th style="text-align:center;">No</th>
                    <th rowspan="2" style="text-align:center;">Mata Pelajaran</th>
                    <th rowspan="1" style="text-align:center;">Nilai</th>
                    <th rowspan="1" style="text-align:center;">Predikat</th>
                    <th rowspan="4" style="text-align:center;">Catatan</th>
                </tr>
            </thead>
            <tbody>
                <?php $n=1; foreach ($raport_nilai as $row) : ?>
                    
                    <tr>
                        <td class="text-center"><?=$n++.'.';?></td>
                        <td><?= $row['mapel_nama']; ?></td>
                        <td class="text-center"><?= $row['nilai_akhir']; ?></td>
                        <td class="text-center"><?= $row['nilai_huruf']; ?></td>
                        <td style="text-align:justify;"><?= $row['catatan_tp']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <p style="text-align:right;margin-right:125px;"><?= $raport_data['tempat']; ?>,
            <?= date('d M Y', strtotime($raport_data['tanggal'])); ?></p>
        <table>
            <tr>
                <td class="text-center" width="500">
                    <p>Orang Tua Siswa</p>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <p>..............................</p>
                    <br>
                </td>
                <td class="text-center" width="500">
                    <p>Wali Kelas</p>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <u><?= $raport_wali['nama']; ?></u>
                    <br>
                    NIP. <?= $raport_wali['nip']; ?>
                </td>
            </tr>
        </table>
        <br>
        <table>
        <tr>
                <td class="text-center" width="300"></td>
                <td class="text-center" width="400">
                    <p>Mengetahui,</p>
                    <p>Kepala Sekolah</p>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <u><?= _school_profile()->nama_kepsek; ?></u>
                    <br>
                    NIP. <?= _school_profile()->nip_kepsek; ?>
                </td>
                <td class="text-center" width="300"></td>
            </tr>
        </table>
    </div>
</body>

</html>

<script>
    window.print();
</script>