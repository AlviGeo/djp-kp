<?php $request = \Config\Services::request(); ?>
<?= $this->extend('base') ?>

<?= $this->section('content') ?>
<section class="content">
    <div class="card card-primary card-outline card-outline-tabs">
        <div class="card-header p-0 border-bottom-0">
            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Statistik Berkas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Penggungah Terbanyak</a>
                </li>
            </ul>
            <div class="card-tools">
                <a href="<?php echo base_url($request->uri->getSegment(1)); ?>" type="button" class="btn btn-tool"><i class="fas fa-sync"></i></a>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="card-body">
            <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
            <header>
                <div class="heroe">
                    <div class="container-fluid">
                        <div class="card" style="background-color:green; color:white; height: 100px">
                            <div class="card-body">
                                <h5><b>Aplikasi Monitoring Keberatan (MoKa)</b><i class="fas fa-coffee"></i></h5>
                                <p>Untuk Mengakses Menu Silahkan Memilih Menu di samping</p>
                            </div>
                        </div>
                    </div>
                </div>

            </header>
            <section>
                <div class="container">
                    <div class="row">
                        <!-- Top Left -->
                        <div class="col-md-6 col-sm-6 col-12">
                            <div class="small-box bg-purple">
                                <div class="inner">
                                    <h3>0</h3>
                                    <p>Jumlah Bekas yang Diunggah Hari ini</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">Info Selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->

                        <!-- Top Right-->
                        <div class="col-md-6 col-sm-6 col-12">
                            <div class="small-box bg-cyan">
                                <div class="inner">
                                    <h3>1430</h3>
                                    <p>Jumlah Seluruh Berkas yang Telah Diunggah</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer">Info Selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <!-- Bottom Left -->
                        <div class="col-md-6 col-sm-6 col-12">
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>27.97</h3>
                                    <p>Resources yang Digunakan</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">Info Selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->

                        <!-- Bottom Right -->
                        <div class="col-md-6 col-sm-6 col-12">
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>3</h3>
                                    <p>Jumlah Pegawai yang Login Hari ini</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer">Info Selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
        </div>
    </div>
    </div>
</section>
</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
</section>
<?= $this->endSection() ?>