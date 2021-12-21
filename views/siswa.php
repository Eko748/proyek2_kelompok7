<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Siswa Aktif
    </h1>
    <?php if(__session('access')=='super_user'):?>
    <ol class="breadcrumb">
        <li><a href="<?=base_url('dashboard');?>"><i class="fa fa-home"></i> Beranda</a></li>
        <li class="active">Siswa Aktif</li>
    </ol>
    <?php endif;?>
</section>

<!-- Main content -->
<section class="content">
    <div class="box box-primary">
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped table-hover datatable">
                <thead>
                    <tr>
                        <th width="5">NO</th>
                        <th>KELAS</th>
                        <th>NIS</th>
                        <th>NISN</th>
                        <th>NAMA LENGKAP</th>
                        <th>TTL</th>
                        <th>JK</th>
                        <th>ALAMAT</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $n=1;
                    foreach ($students as $row) :?>
                    <tr>
                        <td><?=$n++.'.';?></td>
                        <td><?=$row->kelas_kd;?></td>
                        <td><?=$row->nis;?></td>
                        <td><?=$row->nisn;?></td>
                        <td><?=$row->nama;?></td>
                        <td><?=$row->tmp_lhr.', '.date('d M Y',strtotime($row->tgl_lhr));?></td>
                        <td><?=$row->jk=='L'?'Laki-Laki':'Perempuan';?></td>
                        <td><?=$row->alamat;?></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
    <script>
$(document).ready(function() {
    showAcademicYear();
    getFromSourceList();
    getFromTargetList();
})

function check_all(checked, el) {
    $('input[name="' + el + '"]').prop('checked', checked);
}

function showAcademicYear() {
    $('table.from-source').empty();
    if ($('[name="kelas_asal"]').val() !== 'all' && $('[name="kelas_asal"]').val() !== 'unset') {
        $('#tahun_asal').show();
    } else {
        $('#tahun_asal').hide();
    }
    getFromSourceList();
}

/**
 * Mengambil data asal dari wali_kelas
 */
function getFromSourceList() {
    $('table.from-source').empty();
    $('.origin-class-overlay').show();
    var tahun_asal = $('[name="tahun_asal"]').val();
    var kelas_asal = $('[name="kelas_asal"]').val();
    $.ajax({
        type: "POST",
        data: {
            tahun_asal: tahun_asal,
            kelas_asal: kelas_asal
        },
        url: '<?=base_url();?>setting/set_kelas/get_siswa_asal',
        dataType: 'json',
        success: function(data) {
            $('table.from-source').empty().html(data);
            $('.origin-class-overlay').hide();
        }
    });
}
/**
 * Mengambil data tujuan dari wali_kelas
 */
function getFromTargetList() {
    $('table.destination-source').empty();
    $('.destination-class-overlay').show();
    var tahun_tujuan = $('[name="tahun_tujuan"]').val();
    var kelas_tujuan = $('[name="kelas_tujuan"]').val();
    $.ajax({
        type: "POST",
        data: {
            tahun_tujuan: tahun_tujuan,
            kelas_tujuan: kelas_tujuan
        },
        url: '<?=base_url();?>setting/set_kelas/get_siswa_tujuan',
        dataType: 'json',
        success: function(data) {
            console.log(data);
            $('table.destination-source').empty().html(data);
            $('.destination-class-overlay').hide();
        }
    });
}
// Save To Destination Class
function saveToDestinationClass() {
    var kelas_asal = $('[name="kelas_asal"]').val();
    var kelas_tujuan = $('[name="kelas_tujuan"]').val();
    var tahun_asal = $('[name="tahun_asal"]').val();
    var tahun_tujuan = $('[name="tahun_tujuan"]').val();
    if (kelas_asal == kelas_tujuan && tahun_asal == tahun_tujuan) {
        alert('Kelas dan Tahun Pelajaran tujuan tidak boleh sama dengan Kelas dan Tahun Pelajaran asal');
    } else {
        var rows = $('input[name="asal"]:checked');
        var siswa_id = [];
        rows.each(function() {
            siswa_id.push($(this).val());
        });
        if (siswa_id.length) {
            $('#modal-confirm').modal('show');
            $('#confirm').on('click', function() {
                $('.origin-class-overlay').show();
                $.ajax({
                    type: "POST",
                    data: {
                        siswa_id: siswa_id.join(','),
                        tahun_tujuan: tahun_tujuan,
                        kelas_tujuan: kelas_tujuan
                    },
                    url: '<?=base_url();?>setting/set_kelas/save_siswa_to_class',
                    dataType: 'json',
                    success: function() {
                        alert('Data gagal dipindahkan');
                    },
                    error: function() {
                        $('#modal-confirm').modal('hide');
                        getFromSourceList();
                        getFromTargetList();
                        $('.origin-class-overlay').hide();
                    }
                });
            });
        } else {
            alert('Tidak ada data yang dipilih');
        }
    }
}
// Delete Permanent Data
function DeleteFromDestinationClass() {
    var kelas_tujuan = $('[name="kelas_tujuan"]').val();
    var tahun_tujuan = $('[name="tahun_tujuan"]').val();
    var rows = $('input[name="tujuan"]:checked');
    var siswa_id = [];
    rows.each(function() {
        siswa_id.push($(this).val());
    });
    if (siswa_id.length) {
        $('#modal-delete').modal('show');
        $('#deleted').on('click', function() {
            $('.destination-class-overlay').show();
            $.ajax({
                type: "POST",
                data: {
                    siswa_id: siswa_id.join(','),
                    tahun_tujuan: tahun_tujuan,
                    kelas_tujuan: kelas_tujuan
                },
                url: '<?=base_url();?>setting/set_kelas/delete',
                dataType: 'json',
                success: function() {
                    alert('Data gagal dipindahkan');
                },
                error: function() {
                    $('#modal-delete').modal('hide');
                    getFromSourceList();
                    getFromTargetList();
                    $('.destination-class-overlay').hide();
                }
            });
        });
    } else {
        alert('Tidak ada data yang terpilih');
    }
}
</script>
</section>