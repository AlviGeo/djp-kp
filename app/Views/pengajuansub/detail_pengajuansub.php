<?php $request = \Config\Services::request(); ?>
<?= $this->extend('base') ?>

<?= $this->section('content') ?>
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><i class="<?= $icon; ?>"></i>&nbsp;&nbsp;<?= ucwords($title); ?></h3>
            <div class="card-tools">
                <a href="<?php echo base_url($request->uri->getSegment(1)); ?>" type="button" class="btn btn-tool"><i class="fas fa-sync"></i></a>
            </div>
        </div>

        <div class="container">
            <?php
            if (!empty(session()->getFlashdata('success'))) { ?>

                <div class="alert alert-success">
                    <?php echo session()->getFlashdata('success'); ?>
                </div>

            <?php } ?>

            <?php if (!empty(session()->getFlashdata('info'))) { ?>
                <div class="alert alert-info">
                    <?php echo session()->getFlashdata('info'); ?>
                </div>

            <?php } ?>

            <?php if (!empty(session()->getFlashdata('warning'))) { ?>

                <div class="alert alert-warning">
                    <?php echo session()->getFlashdata('warning'); ?>
                </div>

            <?php } ?>
        </div>
        <div class="container-fluid">
            <!-- Data table --><br>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Detail Pengajuan <?= $detail_pengajuansub['ajuanSUBnamaWP'] ?></h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Nama WP</label>
                                <div class="col-sm-8">
                                    <input class="form-control" placeholder="<?= $detail_pengajuansub['ajuanSUBnamaWP'] ?>" value="<?= $detail_pengajuansub['ajuanSUBnamaWP'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">NPWP</label>
                                <div class="col-sm-8">
                                    <input type="text" value="<?= $detail_pengajuansub['ajuanSUBNPWP'] ?>" class="form-control" id="ajuanSUBNPWP" placeholder="<?= $detail_pengajuansub['ajuanSUBNPWP'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">NOP</label>
                                <div class="col-sm-8">
                                    <input type="text" value="<?= $detail_pengajuansub['ajuanSUBNOP'] ?>" class="form-control" id="ajuanNPWP" placeholder="<?= $detail_pengajuansub['ajuanSUBNOP'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Kode KPP</label>
                                <div class="col-sm-8">
                                    <input type="text" value="<?= $detail_pengajuansub['ajuanSUBkodeKPP'] ?>" class="form-control" placeholder="<?= $detail_pengajuansub['ajuanSUBkodeKPP'] ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Jenis Pajak</label>

                                <div class="col-sm-8">
                                    <input type="text" value="<?= $detail_pengajuansub['ajuanSUBjenisPajak'] ?>" class="form-control" placeholder="<?= $detail_pengajuansub['ajuanSUBjenisPajak'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Masa Pajak</label>
                                <div class="col-sm-8">
                                    <input type="text" value="<?= $detail_pengajuansub['ajuanSUBmasaPajak'] ?>" class="form-control" placeholder="<?= $detail_pengajuansub['ajuanSUBmasaPajak'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tahun Pajak</label>
                                <div class="col-sm-8">
                                    <input type="text" value="<?= $detail_pengajuansub['ajuanSUBtahunPajak'] ?>" class="form-control" placeholder="<?= $detail_pengajuansub['ajuanSUBtahunPajak'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Mata Uang</label>
                                <div class="col-sm-8">
                                    <input type="text" value="<?= $detail_pengajuansub['ajuanSUBmataUang'] ?>" class="form-control" placeholder="<?= $detail_pengajuansub['ajuanSUBmataUang'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label"><u>Surat Permintaan Surat Uraian Banding</u> </label>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">No Surat Permintaan</label>
                                <div class="col-sm-7">
                                    <input type="text" value="<?= $detail_pengajuansub['ajuanSUBnoSuratPermintaan'] ?>" class="form-control" placeholder="<?= $detail_pengajuansub['ajuanSUBnoSuratPermintaan'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Tgl Surat Permintaan</label>
                                <div class="col-sm-7">
                                    <input type="text" value="<?= $detail_pengajuansub['ajuanSUBtglSuratPermintaan'] ?>" class="form-control" placeholder="<?= $detail_pengajuansub['ajuanSUBtglSuratPermintaan'] ?>">
                                </div>
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <!-- form-group -->

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Alert 1</label>
                                <div class="col-sm-8">
                                    <input type="text" value="<?= $detail_pengajuansub['ajuanSUBalert1'] ?>" class="form-control" placeholder="<?= $detail_pengajuansub['ajuanSUBalert1'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Alert 2</label>
                                <div class="col-sm-8">
                                    <input type="text" value="<?= $detail_pengajuansub['ajuanSUBalert2'] ?>" class="form-control" placeholder="<?= $detail_pengajuansub['ajuanSUBalert2'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Jenis Permintaan</label>
                                <div class="col-sm-8">
                                    <input type="text" value="<?= $detail_pengajuansub['ajuanSUBjenisPermintaan'] ?>" class="form-control" placeholder="<?= $detail_pengajuansub['ajuanSUBjenisPermintaan'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tgl Terima Kanwil</label>
                                <div class="col-sm-8">
                                    <input type="text" value="<?= $detail_pengajuansub['ajuanSUBtglDiterima'] ?>" class="form-control" placeholder="<?= $detail_pengajuansub['ajuanSUBtglDiterima'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">No. Sengketa</label>
                                <div class="col-sm-8">
                                    <input type="text" value="<?= $detail_pengajuansub['ajuanSUBNomorSengketa'] ?>" class="form-control" placeholder="<?= $detail_pengajuansub['ajuanSUBNomorSengketa'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label"><u>Surat Banding / Surat Gugatan WP</u></label>
                                <div class="col-sm-8">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">No. Surat Banding</label>
                                <div class="col-sm-8">
                                    <input type="text" value="<?= $detail_pengajuansub['ajuanSUBnoSuratBanding'] ?>" class="form-control" placeholder="<?= $detail_pengajuansub['ajuanSUBnoSuratBanding'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tgl. Surat Banding</label>
                                <div class="col-sm-8">
                                    <input type="text" value="<?= $detail_pengajuansub['ajuanSUBtglSuratBanding'] ?>" class="form-control" placeholder="<?= $detail_pengajuansub['ajuanSUBtglSuratBanding'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tgl diterima PP</label>
                                <div class="col-sm-8">
                                    <input type="text" value="<?= $detail_pengajuansub['ajuanSUBtglDiterimaPP'] ?>" class="form-control" placeholder="<?= $detail_pengajuansub['ajuanSUBtglDiterimaPP'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Status</label>
                                <div class="col-sm-8">
                                    <input type="text" value="<?= $detail_pengajuansub['ajuanStatusAkhir'] ?>" class="form-control" id="ajuanNPWP" placeholder="<?= $detail_pengajuansub['ajuanStatusAkhir'] ?>">
                                </div>
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <div class="btn-group">
                        <a href="<?php echo base_url('pengajuansub/closePengajuanSub/' . $detail_pengajuansub->ajuanSUBID); ?>" class="btn btn-primary btn-info" onClick="return confirm('Aapakah anda yakin closing pengajuan <?= $detail_pengajuansub->ajuanSUBnamaWP ?>')"><i class="fas fa-window-close"></i>Close</a>
                    </div>
                    &nbsp;
                    <!-- <div class="btn-group">
              <a href="#" class="btn btn-primary btn"><i class="far fa-paper-plane"></i> Manage</a>
            </div> -->
                    <!-- <div class="dropdown"> -->
                    <button class="btn btn-primary btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-cog"></i> Manage
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                        <a data-target="#mObjekDigugat" data-toggle="modal" class="dropdown-item" id="myObjekDigugat" href="#myObjekDigugat" ajuanSUBID='<?= $detail_pengajuansub['ajuanSUBID'] ?>'> <i class="fas fa-chevron-circle-right"></i>Objek Digugat</a>

                        <a data-target="#mKetetapanPajak" data-toggle="modal" class="dropdown-item" id="myKetetapanPajak" href="#myPermohonanWP" ajuanSUBID='<?= $detail_pengajuansub['ajuanSUBID'] ?>'> <i class="fas fa-chevron-circle-right"></i>Ketetapan Pajak</a>

                        <a data-target="#mResponKanwil" data-toggle="modal" class="dropdown-item" id="myResponKanwil" href="#myResponKanwil" ajuanSUBID='<?= $detail_pengajuansub['ajuanSUBID'] ?>'> <i class="fas fa-chevron-circle-right"></i>Respon Kantor Wilayah</a>
                    </div>

                    <!-- </div> -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- Manage Ketetapan Pajak-->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Objek Yang Dibanding/Digugat </h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <!-- table ketetapan pajak -->
                <div class="table-responsive">
                    <table class="table  table-bordered table-striped" id="myTableObjekDigugat">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis</th>
                                <th>Nomor</th>
                                <th>Tanggal</th>
                                <th>Nilai Keputusan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($mobjekdigugat as $row) { ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $row['OBJGUGATJenis']; ?></td>
                                    <td><?= $row['OBJGUGATnoSurat']; ?></td>
                                    <td><?= $row['OBJGUGATtglSurat']; ?></td>
                                    <td><?= $row['OBJGUGATnilaiPutusan']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!-- ./table ketetapan pajak -->
            </div>
        </div>
        <!-- </div> -->
        <!-- /.card-body -->
        <!-- /.card -->
        <!-- Manage Permohonan WP -->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Ketetapan Pajak (SKP/STP/SPPT)</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <!-- Table ketetapan pajak -->
                <div class="table-responsive">
                    <table class="table  table-bordered table-striped" id="myTableKetetapanPajakSub">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Ketetapan</th>
                                <th>Nomor Ketetapan</th>
                                <th>Tanggal Ketetapan</th>
                                <th>Nilai Ketetapan</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($mketetapanpajaksub as $row) { ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $row['TETAPAJENISnama']; ?></td>
                                    <td><?= $row['TETAPAJjenis']; ?></td>
                                    <td><?= $row['TETAPAJnomorKetetapan']; ?></td>
                                    <td><?= $row['TETAPAJtglKetetapan']; ?></td>
                                    <td><?= number_format($row['TETAPAJNilaiKetetapan'], 2); ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- ./Manage Permohonan WP -->

        <!-- Table Respon Kanwil -->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Respon Kantor Wilayah</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <!-- table Pengantar KPP -->
                <div class="table-responsive">
                    <table class="table  table-bordered table-striped" id="myTableResponKanwil">
                        <thead>
                            <tr>
                                <th rowspan="2">No</th>
                                <th colspan="2">Ke Pengadilan Pajak</th>
                                <th colspan="2">Ke Kantor Pusat DJP</th>
                            </tr>
                            <tr>
                                <th>Nomor Pengantar</th>
                                <th>Tanggal Pengantar</th>
                                <th>Nomor Pengantar</th>
                                <th>Tanggal Pengantar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($mresponkanwil as $row) { ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $row['RESPjenisTujuan']; ?></td>
                                    <td><?= $row['RESPnoSurat']; ?></td>
                                    <td><?= $row['RESPtglSurat']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <!-- /.card -->
        <!-- ./Pengantar KPP -->

        <!-- Modal Add Objek Digugat -->
        <div class="modal fade" id="mObjekDigugat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Manage Objek Digugat</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?php echo base_url() ?>/pengajuansub/saveObjekDigugat" method="post">
                        <div class="modal-body">
                            <input type="hidden" name="ajuanSUBID" id="VajuanSUBID">
                            <div class="form-group-row">
                                <label class="col-sm-2 col-form-label">Jenis</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="jenis_gugatan" id="jenisgugatan" required>
                                        <option value="">No Selected</option>
                                        <?php foreach ($jenis_gugatan as $row) { ?>
                                            <option value=<?= $row->GUGATid; ?>> <?= $row->GUGATjenis; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group-row">
                                <label class="col-sm-2 col-form-label">No Surat</label>
                                <div class="col-md-9"><input type="number" class="form-control" name="no_objekdigugat" placeholder="No Surat Objek Digugat" required></div>
                            </div>
                            <div class="form-group-row">
                                <label class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-md-9">
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" id="tgl_objekdigugat" name="tgl_objekdigugat" value="<?= date('m/d/Y', time()); ?>" required />
                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-row">
                                <label class="col-sm-2 col-form-label">Nilai Putusan</label>
                                <div class="col-md-9"><input type="text" class="form-control" name="nilaiputusan_objekdigugat" placeholder="Nilai Objek Digugat" required></div>
                            </div>
                            <!-- End Ketetapan Pajak -->
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-window-close"></i>Close</button>
                            <button type="submit" value="submit" class="btn btn-primary"><i class="fas fa-save"></i>Save Changes</button>
                        </div>
                </div>
                </form>
            </div>
        </div>

        <!-- Modal Add Ketetapan Pajak -->
        <div class="modal fade" id="mKetetapanPajak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Manage Ketetapan Pajak Sub (PK)</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?php echo base_url() ?>/pengajuansub/saveKetetapanPajakSub" method="post">
                        <div class="modal-body">
                            <!-- Ketetapan Pajak -->
                            <input type="hidden" name="ajuanSUBID" id="KPajuanSUBID">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jenis</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="jenis_kpsub" id="jenis_kpsub" required>
                                        <option value="" selected>No Seletected</option>
                                        <?php foreach ($jenis_kpsub as $row) { ?>
                                            <option value=<?= $row->TETAPAJENISid; ?>l_jeniskpsub="<?= $row->TETAPAJENISid ?>"> <?= $row->TETAPAJENISnama ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <!-- $pengajuan as $key => $data -->
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">No</label>
                                <div class="col-md-9"><input type="text" class="form-control" name="no_kp" placeholder="No Ketetapan Pajak" required></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-md-9">
                                    <div class="input-group date" id="reservationdate1" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" id="tgl_kp" name="tgl_kp" value="<?= date('m/d/Y', time()); ?>" required />
                                        <div class="input-group-append" data-target="#reservationdate1" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nilai</label>
                                <div class="col-md-9"><input type="text" class="form-control" name="nilai_kp" placeholder="Nilai Ketetapan Pajak" required></div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-window-close"></i> Close</button>
                                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal Add Respon Kanwil -->
        <div class="modal fade" id="mResponKanwil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Manage Respon Kanwil (PK)</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?php echo base_url() ?>/pengajuansub/saveResponKanwil" method="post">
                        <div class="modal-body">
                            <!-- Ketetapan Pajak -->
                            <input type="hidden" name="ajuanSUBID" id="RKajuanSUBID">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jenis</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="jenis_tujuanrespon" id="jenis_tujuanrespon" required>
                                        <option value="">No Seletected</option>
                                        <?php foreach ($jenis_tujuanrespon as $row) { ?>
                                            <option value="<?= $row->RESPTUJid; ?>" l_jenisresponkanwil="<?= $row->RESPTUJid ?>"><?= $row->RESPTUnama; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <!-- $pengajuan as $key => $data -->
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">No</label>
                                <div class="col-md-9"><input type="text" class="form-control" name="no_responkanwil" placeholder="No Ketetapan Pajak" required></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-md-9">
                                    <div class="input-group date" id="reservationdate2" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" id="tgl_responkanwil" name="tgl_responkanwil" value="<?= date('m/d/Y', time()); ?>" required />
                                        <div class="input-group-append" data-target="#reservationdate2" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Ketetapan Pajak body -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-window-close"></i> Close</button>
                                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save Changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

</section>
</div>
<script>
    $(document).ready(function() {
        $('#datetimepicker').datetimepicker({
            format: 'YYYY-MM-DD',
        });
        $('#myTableObjekDigugat').DataTable({
            "scrollX": false,
            "searching": true,
        });
        $('#myTableKetetapanPajakSub').DataTable({
            "scrollX": false,
            "searching": true,
        });
        $('#myTableResponKanwil').DataTable({
            "scrollX": false,
            "searching": true,
        });

        // Ajax Objek Digugat

        // $(function() {
        //     $("myObjekDigugat").change(function() {
        //         var varjuanSUBID=$("#jenisgugatan option:selected").text();
        //         $("#txtresults").val(varjuanSUBID);
        //     })
        // })

        $(document).on('click', '#myObjekDigugat', function() {
            var vajuanSUBID = $(this).attr('jenisgugatan'); // id dari select
            console.log(vajuanSUBID);
            $('#VajuanSUBID').val(vajuanSUBID); // id dari input type
        });

        // Ajax Ketetapan Pajak
        $(document).on('click', '#myKetetapanPajakSub', function() {
            var vajuanSUBID = $(this).find("option:selected").attr('l_jeniskpsub');
            console.log(vajuanSUBID);
            $('#KPajuanSUBID').val(vajuanSUBID);
        });

        // Ajax Respon Kanwil
        $(document).on('click', '#myResponKanwil', function() {
            var vajuanSUBID = $(this).find("option:selected").attr('l_jenisresponkanwil');
            console.log(vajuanSUBID);
            $('#RKajuanSUBID').val(vajuanSUBID);
        });

    });

    // Ajax ketetapan pajak
</script>
<?= $this->endSection() ?>