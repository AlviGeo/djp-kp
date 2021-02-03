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
          <h3 class="card-title">Detail Pengajuan <?= $detail_pengajuan['ajuanNamaWP'] ?></h3>

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
                  <input class="form-control" placeholder="<?= $detail_pengajuan['ajuanNamaWP'] ?>" value="<?= $detail_pengajuan['ajuanNamaWP'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">NPWP</label>
                <div class="col-sm-8">
                  <input type="text" value="<?= $detail_pengajuan['ajuanNPWP'] ?>" class="form-control" id="ajuanNPWP" placeholder="<?= $detail_pengajuan['ajuanNPWP'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">NOP</label>
                <div class="col-sm-8">
                  <input type="text" value="<?= $detail_pengajuan['ajuanNOP'] ?>" class="form-control" id="ajuanNPWP" placeholder="<?= $detail_pengajuan['ajuanNOP'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Jenis Permohonan</label>
                <div class="col-sm-8">
                  <input type="text" value="<?= $detail_pengajuan['ajuanJenisPemohon'] ?>" class="form-control" id="ajuanNPWP" placeholder="<?= $detail_pengajuan['ajuanJenisPemohon'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Jenis Pajak</label>
                <div class="col-sm-8">
                  <input type="text" value="<?= $detail_pengajuan['ajuanJenisPajak'] ?>" class="form-control" id="ajuanNPWP" placeholder="<?= $detail_pengajuan['ajuanJenisPajak'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Masa Pajak</label>
                <div class="col-sm-8">
                  <input type="text" value="<?= $detail_pengajuan['ajuanMasaPajak'] ?>" class="form-control" id="ajuanNPWP" placeholder="<?= $detail_pengajuan['ajuanMasaPajak'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Tahun Pajak</label>
                <div class="col-sm-8">
                  <input type="text" value="<?= $detail_pengajuan['ajuanTahunPajak'] ?>" class="form-control" id="ajuanNPWP" placeholder="<?= $detail_pengajuan['ajuanTahunPajak'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Mata Uang</label>
                <div class="col-sm-8">
                  <input type="text" value="<?= $detail_pengajuan['ajuanMataUang'] ?>" class="form-control" id="ajuanNPWP" placeholder="<?= $detail_pengajuan['ajuanMataUang'] ?>">
                </div>
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <!-- form-group -->
              <div class="form-group row">
                <label class="col-sm-5 col-form-label">Dasar Pemrosesan</label>
                <div class="col-sm-7">
                  <input type="text" value="<?= $detail_pengajuan['ajuanDasarPemrosesan'] ?>" class="form-control" id="ajuanNPWP" placeholder="<?= $detail_pengajuan['ajuanDasarPemrosesan'] ?>">
                </div>
              </div>
              <!-- /.form-group -->
              <!-- form-group -->
              <!-- form-group -->
              <div class="form-group row">
                <label class="col-sm-5 col-form-label">Kode KPP</label>
                <div class="col-sm-7">
                  <input type="text" value="<?= $detail_pengajuan['ajuanKodeKPP'] ?>" class="form-control" id="ajuanNPWP" placeholder="<?= $detail_pengajuan['ajuanKodeKPP'] ?>">
                </div>
              </div>
              <!-- /.form-group -->
              <!-- form-group -->
              <div class="form-group row">
                <label class="col-sm-5 col-form-label">Unit Yang Memproses</label>
                <div class="col-sm-7">
                  <input type="text" value="<?= $detail_pengajuan['ajuanPIC'] ?>" class="form-control" id="ajuanNPWP" placeholder="<?= $detail_pengajuan['ajuanPIC'] ?>">
                </div>
              </div>
              <!-- /.form-group -->
              <!-- form-group -->
              <div class="form-group row">
                <label class="col-sm-5 col-form-label">Tanggal Terima</label>
                <div class="col-sm-7">
                  <input type="text" value="<?= $detail_pengajuan['ajuanTglTerima'] ?>" class="form-control" id="ajuanNPWP" placeholder="<?= $detail_pengajuan['ajuanTglTerima'] ?>">
                </div>
              </div>
              <!-- /.form-group -->
              <!-- form-group -->
              <div class="form-group row">
                <label class="col-sm-5 col-form-label">Dateline Alert 1</label>
                <div class="col-sm-7">
                  <input type="text" value="<?= $detail_pengajuan['ajuanAlert1'] ?>" class="form-control" id="ajuanNPWP" placeholder="<?= $detail_pengajuan['ajuanAlert1'] ?>">
                </div>
              </div>
              <!-- /.form-group -->
              <!-- form-group -->
              <div class="form-group row">
                <label class="col-sm-5 col-form-label">Dateline Alert 2</label>
                <div class="col-sm-7">
                  <input type="text" value="<?= $detail_pengajuan['ajuanAlert2'] ?>" class="form-control" id="ajuanNPWP" placeholder="<?= $detail_pengajuan['ajuanAlert2'] ?>">
                </div>
              </div>
              <!-- /.form-group -->
              <!-- form-group -->
              <div class="form-group row">
                <label class="col-sm-5 col-form-label">Dateline Alert 3</label>
                <div class="col-sm-7">
                  <input type="text" value="<?= $detail_pengajuan['ajuanAlert3'] ?>" class="form-control" id="ajuanNPWP" placeholder="<?= $detail_pengajuan['ajuanAlert3'] ?>">
                </div>
              </div>
              <!-- /.form-group -->
              <!-- form-group -->
              <div class="form-group row">
                <label class="col-sm-5 col-form-label">Status</label>
                <div class="col-sm-7">
                  <input type="text" value="<?= $detail_pengajuan['ajuanStatusAkhir'] ?>" class="form-control" id="ajuanNPWP" placeholder="<?= $detail_pengajuan['ajuanStatusAkhir'] ?>">
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
            <a href="<?php echo base_url('pengajuan/closePengajuan/' . $detail_pengajuan['ajuanId']); ?>" class="btn btn-primary btn-info" onClick="return confirm('Apakah anda yakin closing pengajuan <?= $detail_pengajuan['ajuanNamaWP'] ?>')"><i class="fas fa-window-close"></i> Close</a>
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

            <a data-target="#KetetapanPajak" data-toggle="modal" id="myKetetapanPajak" href="#myKetetapanPajak" class="dropdown-item" ajuanID='<?= $detail_pengajuan['ajuanId'] ?>'> <i class="fas fa-chevron-circle-right"></i> Ketetapan Pajak</a>

            <a data-target="#mPermohonanWP" data-toggle="modal" class="dropdown-item" id="myPermohonanWP" href="#myPermohonanWP" ajuanID='<?= $detail_pengajuan['ajuanId'] ?>'> <i class="fas fa-chevron-circle-right"></i> Permohonan WP</a>

            <a data-target="#mPengantarKPP" data-toggle="modal" class="dropdown-item" id="myPengantarKPP" href="#myPengantarKPP" ajuanID='<?= $detail_pengajuan['ajuanId'] ?>'> <i class="fas fa-chevron-circle-right"></i> Pengantar KPP</a>

            <a data-target="#mSuratTugas" data-toggle="modal" class="dropdown-item" id="mySuratTugas" href="#mySuratTugas" ajuanID='<?= $detail_pengajuan['ajuanId'] ?>'><i class="fas fa-chevron-circle-right"></i> Surat Tugas</a>

            <a data-target="#mPencabutanPermohonan" data-toggle="modal" class="dropdown-item" id="myPencabutanPermohonan" href="#myPencabutanPermohonan" ajuanID='<?= $detail_pengajuan['ajuanId'] ?>'> <i class="fas fa-chevron-circle-right"></i> Pencabutan Permohonan</a>

            <a data-target="#mPermintaanSuratKPP" data-toggle="modal" class="dropdown-item" id="myPermintaanSuratKPP" href="#myPermintaanSuratKPP" ajuanID='<?= $detail_pengajuan['ajuanId'] ?>'><i class="fas fa-chevron-circle-right"></i> Permintaan Surat KPP</a>

            <a data-target="#mPembuktianWP" data-toggle="modal" class="dropdown-item" id="myPembuktianWP" href="#myPembuktianWP" ajuanID='<?= $detail_pengajuan['ajuanId'] ?>'><i class="fas fa-chevron-circle-right"></i> Pembuktian ke WP</a>

`            <a data-target="#mSPUH" data-toggle="modal" class="dropdown-item" id="mySPUH" href="#mySPUH" ajuanID='<?= $detail_pengajuan['ajuanId'] ?>'><i class="fas fa-chevron-circle-right"></i> SPUH - Pembahasan Akhir</a>
`
            <a data-target="#mLaporanPenelitian" data-toggle="modal" class="dropdown-item" id="myLaporanPenelitian" href="#myLaporanPenelitian" ajuanID='<?= $detail_pengajuan['ajuanId'] ?>'><i class="fas fa-chevron-circle-right"></i> Laporan Penelitian</a>

            <a data-target="#mKeputusan" data-toggle="modal" class="dropdown-item" id="myKeputusan" href="#myKeputusan" ajuanID='<?= $detail_pengajuan['ajuanId'] ?>'><i class="fas fa-chevron-circle-right"></i> Kuputusan Keberatan / Non Kebaratan</a>
          </div>

          <!-- </div> -->
        </div>
        <!-- /.card -->
      </div>
      <!-- Manage Ketetapan Pajak-->
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Ketetapan Pajak</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <!-- table ketetapan pajak -->
          <div class="table-responsive">
            <table class="table  table-bordered table-striped" id="myTableKetetapanPajak">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Jenis Ketetapan</th>
                  <th>No Ketetapan</th>
                  <th>Tanggal Ketetapan</th>
                  <th>Nilai Ketetapan</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($mketetapanpajak as $row) {
                ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['JKnama'] ?></td>
                    <td><?= $row['KPNoKetetapan'] ?></td>
                    <td><?= $row['KPTgl'] ?></td>
                    <td><?= number_format($row['KPNilai'], 2) ?></td>
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
          <h3 class="card-title">Permohonan WP</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <!-- table ketetapan pajak -->
          <div class="table-responsive">
            <table class="table  table-bordered table-striped" id="myTablePermohonanWP">
              <thead>
                <tr>
                  <th>No</th>
                  <th>No Surat WP</th>
                  <th>Tanggal Surat WP</th>
                  <th>No LPAD</th>
                  <th>Tanggal LPAD</th>
                </tr>
              </thead>

              <tbody>
                <?php
                $no = 1;
                foreach ($mpermohonanwp as $row) {
                ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['PWPnoSurat'] ?></td>
                    <td><?= $row['PWPtglSurat'] ?></td>
                    <td><?= $row['PWPnoLPAD'] ?></td>
                    <td><?= $row['PWPtglLPAD'] ?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- /.card-body -->
      <!-- /.card -->
      <!-- ./Manage Permohonan WP -->

      <!-- Manage Pengantar KPP -->
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Pengantar KPP</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <!-- table Pengantar KPP -->
          <div class="table-responsive">
            <table class="table  table-bordered table-striped" id="myTablePengantarKPP">
              <thead>
                <tr>
                  <th>No</th>
                  <th>No Surat Pengantar</th>
                  <th>Tanggal Surat Pengantar</th>
                  <th>Tanggal Diterima Kanwil</th>
                </tr>
              </thead>

              <tbody>
                <?php
                $no = 1;
                foreach ($mpengantarkpp as $row) {
                ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['PKPPnoSurat'] ?></td>
                    <td><?= $row['PKPPtglSurat'] ?></td>
                    <td><?= $row['PKPPtglDiterima'] ?></td>
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
      <!-- Surat Tugas -->
      <div class="card card-header">
        <div class="card-header">
          <h3 class="card-title">Surat Tugas</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <!-- table Surat Tugas -->
          <div class="table-responsive">
            <table class="table  table-bordered table-striped" id="myTableSuratTugas">
              <thead>
                <tr>
                  <th>No</th>
                  <th>No Surat Tugas</th>
                  <th>Tanggal Surat Tugas</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($msurattugas as $row) {
                ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['STnoSurat'] ?></td>
                    <td><?= $row['STtglSurat'] ?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- /.card-body -->
      <!-- /.card -->
      <!-- ./Surat Tugas -->
      <!-- Pencabutan Permohonan -->
      <div class="card card-header">
        <div class="card-header">
          <h3 class="card-title">Pencabutan Permohonan Oleh WP</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <!-- table Pencabutan Permohonan -->
          <div class="table-responsive">
            <table class="table  table-bordered table-striped" id="myTablePencabutanPermohonan">
              <thead>
                <tr>
                  <th>No</th>
                  <th>No Pencabutan</th>
                  <th>Tanggal Pencabutan</th>
                </tr>
              </thead>

              <tbody>
                <?php
                $no = 1;
                foreach ($mpencabutanpermohonan as $row) {
                ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['QuitWPnoSurat'] ?></td>
                    <td><?= $row['QuitWPtglSurat'] ?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- /.card-body -->
      <!-- /.card -->
      <!-- ./Pencabutan Permohonan -->

      <!-- Permintaan Surat KPP -->
      <div class="card card-header">
        <div class="card-header">
          <h3 class="card-title">Permintaan Surat KPP</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <!-- table Permintaan Surat KPP -->
          <div class="table-responsive">
            <table class="table  table-bordered table-striped" id="myTablePermintaanSuratKPP">
              <thead>
                <tr>
                  <th>No</th>
                  <th>No Surat Ke KPP</th>
                  <th>Tanggal Surat Ke KPP</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($mpermintaansuratkpp as $row) {
                ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['PSKPPNoSurat'] ?></td>
                    <td><?= $row['PSKPPtglSurat'] ?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- /.card-body -->
      <!-- /.card -->
      <!-- ./Permintaan Surat KPP -->

      <!-- Pembuktian ke WP -->
      <div class="card card-header">
        <div class="card-header">
          <h3 class="card-title">Surat Pembuktian ke WP</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="table-responsive">
            <table class="table  table-bordered table-striped" id="myTablePembuktianWP">
              <thead>
                <tr>
                  <th>No</th>
                  <th>No Surat</th>
                  <th>Tanggal Surat</th>
                  <th>Tujuan</th>
                  <th>Datang</th>
                  <th>No Berita Acara</th>
                  <th>Tanggal Berita Acara</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($mpembuktianwp as $row) {
                ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['SPWPnoSurat'] ?></td>
                    <td><?= $row['SPWPtglSurat'] ?></td>
                    <td><?= $row['SPWPtujuan'] ?></td>
                    <td><?= $row['SPWPisDatang'] ?></td>
                    <td><?= $row['SPWPnoBeritaAcara'] ?></td>
                    <td><?= $row['SPWPtglBeritaAcara'] ?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- /.card-body -->
      <!-- /.card -->
      <!-- ./Pembuktian ke WP -->
      <!-- SPUH -->
      <div class="card card-header">
        <div class="card-header">
          <h3 class="card-title">Surat Pemberitahuan Untuk Hadir (SPUH)</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <!-- table spuh -->
          <div class="table-responsive">
            <table class="table  table-bordered table-striped" id="myTableSPUH">
              <thead>
                <tr>
                  <th rowspan="2">No</th>
                  <th colspan="5">
                    <center>Surat Pemberitahuan Untuk Hadir (SPUH)
                  </th>
                  <th colspan="2">
                    <center>Pembahasan Akhir(BA)
                  </th>
                </tr>
                <tr>
                  <th>Nomor SPUH</th>
                  <th>Tanggal SPUH</th>
                  <th>Tanggal Kirim SPUH</th>
                  <th>Status Kirim</th>
                  <th>Status Hadir</th>
                  <th>Nomor BA Pembahasan Akhir</th>
                  <th>Tanggal BA Pembahasan Akhir</th>
                </tr>
              </thead>

              <tbody>
                <?php
                $no = 1;
                foreach ($mspuhba as $row) {
                ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['SPUHnoSurat'] ?></td>
                    <td><?= $row['SUPtglSurat'] ?></td>
                    <td><?= $row['SPUHtglKirim'] ?></td>
                    <td><?= $row['SPUHstatusKirim'] ?></td>
                    <td><?= $row['SPUHisHadir'] ?></td>
                    <td><?= $row['SPUHnoBAbahasAkhir'] ?></td>
                    <td><?= $row['SPUHtglBAbahasAkhir'] ?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- ./SPUH -->
      <!-- Laporan Penelitian -->
      <div class="card card-header">
        <div class="card-header">
          <h3 class="card-title">Laporan Penelitian</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="table-responsive">
            <table class="table  table-bordered table-striped" id="myTableLapPenelitian">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nomor Laporan </th>
                  <th>Tanggal Laporan </th>
                </tr>
              </thead>

              <tbody>
                <?php
                $no = 1;
                foreach ($mlaporanpenelitian as $row) {
                ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['LPnoLaporan'] ?></td>
                    <td><?= $row['LPtglLaporan'] ?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- ./Laporan Penelitian -->
      <!-- Keputusan Keberatan -->
      <div class="card card-header">
        <div class="card-header">
          <h3 class="card-title">Keputusan Keberatan / Non Keberatan</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="table-responsive">
            <table class="table  table-bordered table-striped" id="myTableKepKeberatan">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nomor Keputusan </th>
                  <th>Tanggal Keputusan</th>
                  <th>Tanggal Kirim SK</th>
                  <th>Jangka Waktu Pengiriman (hari)</th>
                  <th>Amar Keputusan </th>
                  <th>Nilai Akhir Menurut Keputusan </th>
                </tr>
              </thead>

              <tbody>
                <?php
                $no = 1;
                foreach ($mKeputusan as $row) {
                ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['KEPnoKeputusan'] ?></td>
                    <td><?= $row['KEPtglKeputusan'] ?></td>
                    <td><?= $row['KEPtglKirimSK'] ?></td>
                    <td><?= $row['KEPjangkaKirim'] ?></td>
                    <td><?= $row['KEPAmarKeputusan'] ?></td>
                    <td><?= number_format($row['KEPNilaiAkhirKeputusan'], 2) ?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
        <!-- ./Keputusan Keberatan -->

        <!-- Modal Add ketetapan pajak-->
        <div class="modal fade" id="KetetapanPajak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Manage Ketetapan Pajak (PK)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="<?php echo base_url() ?>/pengajuan/saveKetetapanPajak" method="post">
                <div class="modal-body">
                  <!-- Ketetapan Pajak -->
                  <input type="hidden" name="ajuanID" id="VajuanID">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Jenis</label>
                    <div class="col-md-9">
                      <select class="form-control" name="jenis_kp" id="jenis_kp" required>
                        <option value="">No Seletected</option>
                        <?php foreach ($jenis_kp as $row) { ?>
                          <option value=<?= $row->JKid ?>> <?= $row->JKnama ?></option>
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
                      <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" id="tgl_kp" name="tgl_kp" value="<?= date('m/d/Y', time()); ?>" required />
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nilai</label>
                    <div class="col-md-9"><input type="text" class="form-control" name="nilai_kp" placeholder="Nilai Ketetapan Pajak" required></div>
                  </div>
                  <!-- End Ketetapan Pajak body -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-window-close"></i> Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save </button>
                  </div>
                </div>
              </form>
            </div>

          </div>

        </div>

      </div>
      <!--./modal ketetapan pajak-->

      <!-- Modal Permohonan WP-->
      <div class="modal fade" id="mPermohonanWP" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Manage Permohonan WP</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="<?php echo base_url() ?>/pengajuan/savePermohonanWP" method="post">
              <div class="modal-body">
                <!-- Permohonan WP -->
                <input type="hidden" name="ajuanID" id="PWPajuanID">
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">No Surat WP</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="no_suratwp" placeholder="No Surat WP" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Tanggal Surat WP</label>
                  <div class="col-md-8">
                    <div class="input-group date" id="reservationdate1" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate1" id="tgl_suratwp" name="tgl_suratwp" value="<?= date('m/d/Y', time()); ?>" required />
                      <div class="input-group-append" data-target="#reservationdate1" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">No LPAD</label>
                  <div class="col-md-8"><input type="text" class="form-control" name="no_lpad" placeholder="No LPAD" required></div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Tanggal LPAD</label>
                  <div class="col-md-8">
                    <div class="input-group date" id="reservationdate2" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate2" id="tgl_lpad" name="tgl_lpad" value="<?= date('m/d/Y', time()); ?>" required />
                      <div class="input-group-append" data-target="#reservationdate2" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Ketetapan Pajak body -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-window-close"></i> Close</button>
                  <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save </button>
                </div>
              </div>
            </form>
          </div>

        </div>

      </div>
      <!--./modal permohonan WP-->
      <!-- Modal PengantarKPP-->
      <div class="modal fade" id="mPengantarKPP" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Manage Pengantar KPP</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="<?php echo base_url() ?>/pengajuan/savePengantarKPP" method="post">
              <div class="modal-body">
                <!-- Permohonan WP -->
                <input type="hidden" name="ajuanID" id="PKPPajuanID">
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">No Surat Pengantar KPP</label>
                  <div class="col-md-7">
                    <input type="text" class="form-control" name="no_suratkpp" placeholder="No Surat KPP" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Tanggal Surat KPP</label>
                  <div class="col-md-7">
                    <div class="input-group date" id="reservationdate3" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate3" id="tgl_suratkpp" name="tgl_suratkpp" value="<?= date('m/d/Y', time()); ?>" required />
                      <div class="input-group-append" data-target="#reservationdate3" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Tanggal Terima Kanwil</label>
                  <div class="col-md-7">
                    <div class="input-group date" id="reservationdate4" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate4" id="tgl_terima_kanwil" name="tgl_terima_kanwil" value="<?= date('m/d/Y', time()); ?>" required />
                      <div class="input-group-append" data-target="#reservationdate4" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Ketetapan Pajak body -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-window-close"></i> Close</button>
                  <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save </button>
                </div>
              </div>
            </form>
          </div>

        </div>

      </div>
      <!--./modal Pengantar KPP-->
      <!-- Modal Surat Tugas-->
      <div class="modal fade" id="mSuratTugas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Manage Surat Tugas</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="<?php echo base_url() ?>/pengajuan/saveSuratTugas" method="post">
              <div class="modal-body">
                <!-- Surat Tugas -->
                <input type="hidden" name="ajuanID" id="STajuanID">
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">No Surat Tugas</label>
                  <div class="col-md-7">
                    <input type="text" class="form-control" name="no_surattugas" placeholder="No. Surat Tugas" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Tanggal Surat Tugas</label>
                  <div class="col-md-7">
                    <div class="input-group date" id="reservationdate5" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate5" id="tgl_surattugas" name="tgl_surattugas" value="<?= date('m/d/Y', time()); ?>" required />
                      <div class="input-group-append" data-target="#reservationdate5" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Surat Tugas body -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-window-close"></i> Close</button>
                  <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save </button>
                </div>
              </div>
            </form>
          </div>

        </div>
      </div>
      <!--./modal Surat Tugas-->
      <!-- Modal Pencabutan Permohonan-->
      <div class="modal fade" id="mPencabutanPermohonan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Manage Pencabutan Permohonan</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="<?php echo base_url() ?>/pengajuan/savePencabutanPermohonan" method="post">
              <div class="modal-body">
                <!-- Surat Tugas -->
                <input type="hidden" name="ajuanID" id="PPajuanID">
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">No Pencabutan</label>
                  <div class="col-md-7">
                    <input type="text" class="form-control" name="no_pencabutan" placeholder="No. Pencabutan" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Tanggal Pencabutan</label>
                  <div class="col-md-7">
                    <div class="input-group date" id="reservationdate6" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate6" id="tgl_pencabutan" name="tgl_pencabutan" value="<?= date('m/d/Y', time()); ?>" required />
                      <div class="input-group-append" data-target="#reservationdate6" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Surat Tugas body -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-window-close"></i> Close</button>
                  <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save </button>
                </div>
              </div>
            </form>
          </div>

        </div>

      </div>
      <!--./modal Pencabutan Permohonan-->
      <!-- Modal Permintaan Surat KPP-->
      <div class="modal fade" id="mPermintaanSuratKPP" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Manage Permintaan Ke KPP</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="<?php echo base_url() ?>/pengajuan/savePermintaanSuratKPP" method="post">
              <div class="modal-body">
                <!-- Surat Tugas -->
                <input type="hidden" name="ajuanID" id="PSKPPajuanID">
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">No Surat ke KPP</label>
                  <div class="col-md-7">
                    <input type="text" class="form-control" name="no_suratkpp" placeholder="No. Surat ke KPP" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Tanggal ke KPP</label>
                  <div class="col-md-7">
                    <div class="input-group date" id="reservationdate7" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate7" id="tgl_kpp" name="tgl_kpp" value="<?= date('m/d/Y', time()); ?>" required />
                      <div class="input-group-append" data-target="#reservationdate7" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Surat Tugas body -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-window-close"></i> Close</button>
                  <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save </button>
                </div>
              </div>
            </form>
          </div>

        </div>

      </div>
      <!--./modal Permintaan Surat ke KPP-->
      <!-- Modal Pembuktian ke WP-->
      <div class="modal fade" id="mPembuktianWP" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Manage Pembuktian ke WP</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="<?php echo base_url() ?>/pengajuan/savePembuktianWP" method="post">
              <div class="modal-body">
                <!-- Surat Tugas -->
                <input type="hidden" name="ajuanID" id="PembuktianWPajuanID">
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">No. Surat Pembuktian</label>
                  <div class="col-md-7">
                    <input type="text" class="form-control" name="no_suratpembuktian" placeholder="No. Surat Pembuktian" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Tanggal Surat</label>
                  <div class="col-md-7">
                    <div class="input-group date" id="reservationdate14" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate14" id="tgl_buktisurat" name="tgl_buktisurat" value="<?= date('m/d/Y', time()); ?>" required />
                      <div class="input-group-append" data-target="#reservationdate14" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Tujuan</label>
                  <div class="col-md-7">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="bukti_tujuan" value="WP">
                      <label class="form-check-label">WP</label>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input class="form-check-input" type="radio" name="bukti_tujuan" value="Pemeriksa">
                      <label class="form-check-label">Pemeriksa</label>
                    </div>

                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Datang</label>
                  <div class="col-md-7">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="isDatang" value="Ya">
                      <label class="form-check-label">Ya</label>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input class="form-check-input" type="radio" name="isDatang" value="Tidak">
                      <label class="form-check-label">Tidak</label>
                    </div>

                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">No. Berita Acara</label>
                  <div class="col-md-7">
                    <input type="text" class="form-control" name="no_beritaacara" placeholder="No. Berita Acara" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Tanggal. Berita Acara</label>
                  <div class="col-md-7">
                    <div class="input-group date" id="reservationdate15" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate15" id="tgl_beritaacara" name="tgl_beritaacara" value="<?= date('m/d/Y', time()); ?>" required />
                      <div class="input-group-append" data-target="#reservationdate15" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Surat Tugas body -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-window-close"></i> Close</button>
                  <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save </button>
                </div>
              </div>
            </form>
          </div>

        </div>

      </div>
      <!--./modal Pembuktian ke WP-->
      <!-- Modal SPUH-->
      <div class="modal fade" id="mSPUH" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Manage Surat Pemberitahuan Untuk Hadir (SPUH)</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="<?php echo base_url() ?>/pengajuan/saveSPUH" method="post">
              <div class="modal-body">
                <!-- SPUH -->
                <input type="hidden" name="ajuanID" id="SPUHajuanID">
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">No SPUH</label>
                  <div class="col-md-7">
                    <input type="text" class="form-control" name="no_spuh" placeholder="No. SPUH" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Tanggal SPUH</label>
                  <div class="col-md-7">
                    <div class="input-group date" id="reservationdate8" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate8" id="tgl_spuh" name="tgl_spuh" value="<?= date('m/d/Y', time()); ?>" required />
                      <div class="input-group-append" data-target="#reservationdate8" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Tanggal Kirim SPUH</label>
                  <div class="col-md-7">
                    <div class="input-group date" id="reservationdate9" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate9" id="tgl_kirim_spuh" name="tgl_kirim_spuh" value="<?= date('m/d/Y', time()); ?>" required />
                      <div class="input-group-append" data-target="#reservationdate9" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Surat Tugas body -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-window-close"></i> Close</button>
                  <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save </button>
                </div>
              </div>
            </form>
          </div>

        </div>

      </div>
      <!--./modal SPUH-->
      <!-- Modal Laporan Penelitian-->
      <div class="modal fade" id="mLaporanPenelitian" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Manage Laporan Penelitian</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="<?php echo base_url() ?>/pengajuan/saveLaporanPenelitian" method="post">
              <div class="modal-body">
                <!-- Surat Tugas -->
                <input type="hidden" name="ajuanID" id="LapPajuanID">
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">No Laporan</label>
                  <div class="col-md-7">
                    <input type="text" class="form-control" name="no_laporan" placeholder="No. Laporan" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Tanggal Laporan</label>
                  <div class="col-md-7">
                    <div class="input-group date" id="reservationdate11" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate11" id="tgl_laporan" name="tgl_laporan" value="<?= date('m/d/Y', time()); ?>" required />
                      <div class="input-group-append" data-target="#reservationdate11" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Surat Tugas body -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-window-close"></i> Close</button>
                  <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save </button>
                </div>
              </div>
            </form>
          </div>

        </div>

      </div>
      <!--./modal Laporan Penelitian-->
      <!-- Modal Keputusan-->
      <div class="modal fade" id="mKeputusan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Manage Keputusan Keberatan / Non Keberatn</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="<?php echo base_url() ?>/pengajuan/saveKeputusan" method="post">
              <div class="modal-body">
                <!-- Surat Tugas -->
                <input type="hidden" name="ajuanID" id="KepajuanID">
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">No Keputusan</label>
                  <div class="col-md-7">
                    <input type="text" class="form-control" name="no_keputusan" placeholder="No. Keputusan" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Tanggal Keputusan</label>
                  <div class="col-md-7">
                    <div class="input-group date" id="reservationdate12" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate12" id="tgl_keputusan" name="tgl_keputusan" value="<?= date('m/d/Y', time()); ?>" required />
                      <div class="input-group-append" data-target="#reservationdate12" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Tanggal Kirim SK</label>
                  <div class="col-md-7">
                    <div class="input-group date" id="reservationdate13" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate13" id="tgl_kirimSK" name="tgl_kirimSK" value="<?= date('m/d/Y', time()); ?>" required />
                      <div class="input-group-append" data-target="#reservationdate13" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Jangka Waktu Pengiriman</label>
                  <div class="col-md-7">
                    <input type="text" class="form-control" name="waktu_pengiriman" placeholder="Waktu Pengiriman (hari)" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Amar Keputusan</label>
                  <div class="col-md-7">
                    <input type="text" class="form-control" name="amar_keputusan" placeholder="Amar Keputusan" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Nilai Akhir Keputusan</label>
                  <div class="col-md-7">
                    <input type="text" class="form-control" name="nilai_akhir" placeholder="Nilai Akhir Keputusan" required>
                  </div>
                </div>
            </form>
            <!-- End Keputusan -->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-window-close"></i> Close</button>
              <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save </button>
            </div>
          </div>
        </div>

      </div>

    </div>
    <!--./modal Keputusan-->
</section>
</div>
<script>
  $(document).ready(function() {
    $('#datetimepicker').datetimepicker({
      format: 'YYYY-MM-DD'
    });
    $('#myTableKetetapanPajak').DataTable({
      "scrollX": false,
      "searching": true,
    });
    $('#myTablePermohonanWP').DataTable({
      "scrollX": false,
      "searching": true,
    });
    $('#myTablePengantarKPP').DataTable({
      "scrollX": false,
      "searching": true,
    });
    $('#myTableSuratTugas').DataTable({
      "scrollX": false,
      "searching": true,
    });
    $('#myTablePencabutanPermohonan').DataTable({
      "scrollX": false,
      "searching": true,
    });
    $('#myTablePermintaanSuratKPP').DataTable({
      "scrollX": false,
      "searching": true,
    });
    $('#myTablePembuktianWP').DataTable({
      "scrollX": false,
      "searching": true,
    });
    $('#myTableSPUH').DataTable({
      "scrollX": false,
      "searching": true,
    });
    $('#myTableLapPenelitian').DataTable({
      "scrollX": false,
      "searching": true,
    });
    $('#myTableKepKeberatan').DataTable({
      "scrollX": false,
      "searching": true,
    });
    // Ajax ketetapan pajak 
    $(document).on('click', '#myKetetapanPajak', function() {
      var vajuanID = $(this).attr("ajuanID");
      console.log("succeess")
      $('#VajuanID').val(vajuanID);
    });
    //Ajax permohonan wp
    $(document).on('click', '#myPermohonanWP', function() {
      var vajuanID = $(this).attr("ajuanID");
      console.log(vajuanID);
      $('#PWPajuanID').val(vajuanID);
    });
    //PengantarKPP
    $(document).on('click', '#myPengantarKPP', function() {
      var vajuanID = $(this).attr("ajuanID");
      console.log(vajuanID);
      $('#PKPPajuanID').val(vajuanID);
    });
    //ajak surat tugas
    $(document).on('click', '#mySuratTugas', function() {
      var vajuanID = $(this).attr("ajuanID");
      console.log(vajuanID);
      $('#STajuanID').val(vajuanID);
    });
    //ajak Pencabutan Permohonan
    $(document).on('click', '#myPencabutanPermohonan', function() {
      var vajuanID = $(this).attr("ajuanID");
      console.log(vajuanID);
      $('#PPajuanID').val(vajuanID);
    });
    //ajak Pembuktian ke WP
    $(document).on('click', '#myPembuktianWP', function() {
      var vajuanID = $(this).attr("ajuanID");
      console.log(vajuanID);
      $('#PembuktianWPajuanID').val(vajuanID);
    });
    //ajak Permintaan Surat KPP
    $(document).on('click', '#myPermintaanSuratKPP', function() {
      var vajuanID = $(this).attr("ajuanID");
      console.log(vajuanID);
      $('#PSKPPajuanID').val(vajuanID);
    });
    //ajak SPUH - BA
    $(document).on('click', '#mySPUH', function() {
      var vajuanID = $(this).attr("ajuanID");
      console.log(vajuanID);
      $('#SPUHajuanID').val(vajuanID);
    });
    //ajak Laporan Penelitian
    $(document).on('click', '#myLaporanPenelitian', function() {
      var vajuanID = $(this).attr("ajuanID");
      console.log(vajuanID);
      $('#LapPajuanID').val(vajuanID);
    });
    //ajak Keputusan Keberatan / Non Keberatan
    $(document).on('click', '#myKeputusan', function() {
      var vajuanID = $(this).attr("ajuanID");
      console.log(vajuanID);
      $('#KepajuanID').val(vajuanID);
    });
  });

  // Ajax ketetapan pajak
</script>
<?= $this->endSection() ?>