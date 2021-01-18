<?php $request = \Config\Services::request(); ?>
<?= $this->extend('base') ?>

<?= $this->section('content') ?>
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><i class="<?= $icon; ?>"></i>&nbsp;&nbsp;<?= ucwords($title); ?></h3>
            <div class="card-tools">
                <a href="<?php echo base_url($request->uri->getSegment(1));?>" type="button" class="btn btn-tool"><i class="fas fa-sync"></i></a>
            </div>
        </div>
     
    <div class="container">
        <?php
        if(!empty(session()->getFlashdata('success'))){ ?>
 
        <div class="alert alert-success">
            <?php echo session()->getFlashdata('success');?>
        </div>
             
        <?php } ?>
        <?php if(!empty(session()->getFlashdata('info'))){ ?>
        <div class="alert alert-info">
            <?php echo session()->getFlashdata('info');?>
        </div>
             
        <?php } ?>
 
        <?php if(!empty(session()->getFlashdata('warning'))){ ?>
 
        <div class="alert alert-warning">
            <?php echo session()->getFlashdata('warning');?>
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
             <a href="<?php echo base_url(); ?>" class="btn btn-primary btn-info" onClick="return confirm('Apakah anda yakin closing pengajuan)"><i class="fas fa-window-close"></i> Close</a>
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

                        <a data-target="#KetetapanPajak" data-toggle="modal" id="myKetetapanPajak" href="#myKetetapanPajak" class="dropdown-item" ajuanID=''> <i class="fas fa-chevron-circle-right"></i> Ketetapan Pajak</a>

                        <a data-target="#mPermohonanWP" data-toggle="modal" class="dropdown-item" id="myPermohonanWP" href="#myPermohonanWP" ajuanID=''> <i class="fas fa-chevron-circle-right"></i> Permohonan WP</a>

                        <a data-target="#mPengantarKPP" data-toggle="modal" class="dropdown-item" id="myPengantarKPP" href="#myPengantarKPP" ajuanID=''> <i class="fas fa-chevron-circle-right"></i> Pengantar KPP</a>

                        <a data-target="#mSuratTugas" data-toggle="modal" class="dropdown-item" id="mySuratTugas" href="#mySuratTugas" ajuanID=''><i class="fas fa-chevron-circle-right"></i> Surat Tugas</a>
                        
                        
                  </div>

              <!-- </div> -->
        </div>
        <!-- /.card -->
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
              <table class="table  table-bordered table-striped" id="myTableKetetapanPajak">
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
            <!-- table ketetapan pajak -->
            <div class="table-responsive">
              <table class="table  table-bordered table-striped" id="myTablePermohonanWP">
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
              <table class="table  table-bordered table-striped" id="myTablePengantarKPP">
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
                    
                  </tbody>
              </table>
            </div>
          </div>
        </div>
          <!-- /.card-body -->
        <!-- /.card -->
    <!-- ./Pengantar KPP -->

    
</section>
</div>
<script>
    $(document).ready(function() {
    $('#datetimepicker').datetimepicker({
    format: 'YYYY-MM-DD'
    });
    $('#myTableKetetapanPajak').DataTable( {
        "scrollX": false,
        "searching": true,
    } );
    $('#myTablePermohonanWP').DataTable( {
        "scrollX": false,
        "searching": true,
    } );
    $('#myTablePengantarKPP').DataTable( {
        "scrollX": false,
        "searching": true,
    } );
    $('#myTableSuratTugas').DataTable( {
        "scrollX": false,
        "searching": true,
    } );
    $('#myTablePencabutanPermohonan').DataTable( {
        "scrollX": false,
        "searching": true,
    } );
    $('#myTablePermintaanSuratKPP').DataTable( {
        "scrollX": false,
        "searching": true,
    } );
    $('#myTablePembuktianWP').DataTable( {
        "scrollX": false,
        "searching": true,
    } );
    $('#myTableSPUH').DataTable( {
        "scrollX": false,
        "searching": true,
    } );
    $('#myTableLapPenelitian').DataTable( {
        "scrollX": false,
        "searching": true,
    } );
    $('#myTableKepKeberatan').DataTable( {
        "scrollX": false,
        "searching": true,
    } );
    // Ajax ketetapan pajak 
    $(document).on('click', '#myKetetapanPajak', function() {
        var vajuanID = $(this).attr("ajuanID");
        $('#VajuanID').val(vajuanID);
    });
    //ajak permohonan wp
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
} );

// Ajax ketetapan pajak


</script>
 <?= $this->endSection() ?>