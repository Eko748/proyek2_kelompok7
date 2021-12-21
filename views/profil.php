<section class="content">
    <!-- Default box -->
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Data Profil Sekolah</h3>
            <div class="box-tools pull-right">

                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
            <form class="form-horizontal" action="<?= base_url('profil/save_profil'); ?>" method="post" enctype="multipart/form-data">
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama" class="col-sm-4 control-label">NAMA SEKOLAH</label>
                                <div class="col-sm-8">
                                    <input type="hidden" name="idprofil_sekolah" value="<?= $school_profil->idprofil_sekolah; ?>">
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $school_profil->nama; ?>" placeholder="Nama sekolah">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="npsn" class="col-sm-4 control-label">NPSN</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="npsn" name="npsn" value="<?= $school_profil->npsn; ?>" placeholder="NPSN">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nss" class="col-sm-4 control-label">NSS</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nss" name="nss" value="<?= $school_profil->nss; ?>" placeholder="NSS">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="status" class="col-sm-4 control-label">Status</label>
                                <div class="col-sm-8">
                                    <select class="form-control select2" style="width: 100%;" name="status" value="<?= $school_profil->status; ?>">
                                        <option value="Negeri" <?= $school_profil->status == 'Negeri' ? 'selected' : ''; ?>>Negeri
                                        </option>
                                        <option value="Swasta" <?= $school_profil->status == 'Swasta' ? 'selected' : ''; ?>>Swasta
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nama_kepsek" class="col-sm-4 control-label">Nama Kepala Sekolah</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nama_kepsek" name="nama_kepsek" value="<?= $school_profil->nama_kepsek; ?>" placeholder="Kepala sekolah">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nip_kepsek" class="col-sm-4 control-label">NIP Kepala Sekolah</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nip_kepsek" name="nip_kepsek" value="<?= $school_profil->nip_kepsek; ?>" placeholder="NIP Kepala sekolah">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="status" class="col-sm-4 control-label">Akreditasi</label>
                                <div class="col-sm-8">
                                    <select class="form-control select2" style="width: 100%;" name="akreditasi" value="<?= $school_profil->akreditasi; ?>">
                                        <option value="kosong" <?= $school_profil->akreditasi == 'kosong' ? 'selected' : ''; ?>>
                                            Belum Ada</option>
                                        <option value="A" <?= $school_profil->akreditasi == 'A' ? 'selected' : ''; ?>>A</option>
                                        <option value="B" <?= $school_profil->akreditasi == 'B' ? 'selected' : ''; ?>>B</option>
                                        <option value="C" <?= $school_profil->akreditasi == 'C' ? 'selected' : ''; ?>>C</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="logo" class="col-sm-4 control-label">Logo Sekolah</label>
                                <div class="col-sm-8">
                                    <img src="<?= base_url('uploads/') . $school_profil->logo; ?>" alt="view foto" style="border:1px dashed;width:75px;height:75px;" id="viewfoto">
                                    <input type="file" class="form-control" id="logo" name="logo" value="<?= $school_profil->logo; ?>" onchange="preview_foto(event)">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="konten" class="col-sm-4 control-label">Konten</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="konten" name="konten" value="<?= $school_profil->konten; ?>" placeholder="Konten">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="isi_konten" class="col-sm-4 control-label">Isi Konten</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="isi_konten" name="isi_konten" value="<?= $school_profil->isi_konten; ?>" placeholder="Isi konten">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="provinsi" class="col-sm-4 control-label">Provinsi</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="provinsi" name="provinsi" value="<?= $school_profil->provinsi; ?>" placeholder="Dusun">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="kabupaten" class="col-sm-4 control-label">Kabupaten</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="kabupaten" name="kabupaten" value="<?= $school_profil->kabupaten; ?>" placeholder="Dusun">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="kecamatan" class="col-sm-4 control-label">Kecamatan</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?= $school_profil->kecamatan; ?>" placeholder="Dusun">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="kelurahan" class="col-sm-4 control-label">Desa / Kelurahan</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="kelurahan" name="kelurahan" value="<?= $school_profil->kelurahan; ?>" placeholder="Dusun">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dusun" class="col-sm-4 control-label">Dusun</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="dusun" name="dusun" value="<?= $school_profil->dusun; ?>" placeholder="Dusun">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">RT / RW</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="rt" name="rt" value="<?= $school_profil->rt; ?>" placeholder="RT">
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="rw" name="rw" value="<?= $school_profil->rw; ?>" placeholder="RW">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="alamat" class="col-sm-4 control-label">Alamat</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $school_profil->alamat; ?>" placeholder="Alamat">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Kodepos / Lintang / Bujur</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="kodepos" name="kodepos" value="<?= $school_profil->kodepos; ?>" placeholder="Kodepos">
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="lintang" name="lintang" value="<?= $school_profil->lintang; ?>" placeholder="Lintang">
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="bujur" name="bujur" value="<?= $school_profil->bujur; ?>" placeholder="Bujur">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="website" class="col-sm-4 control-label">Website</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="website" name="website" value="<?= $school_profil->website; ?>" placeholder="Website">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-4 control-label">E-mail</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="email" name="email" value="<?= $school_profil->email; ?>" placeholder="E-mail">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="telepon" class="col-sm-4 control-label">No.Telepon</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="telepon" name="telepon" value="<?= $school_profil->telepon; ?>" placeholder="No.Telepon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-sm btn-success btn-flat pull-right"><i class="fa fa-save"></i>
                        Simpan Profil</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /.box -->
</section>