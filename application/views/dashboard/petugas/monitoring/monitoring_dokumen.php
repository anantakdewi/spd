<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-3">
            <div class="box box-solid">
                <div class="box-header with-border">


                    <div class="box-tools">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body no-padding">
                    <ul class="nav nav-pills nav-stacked">
                        <li class=""><a href="<?php echo base_url('petugas/monitoring') ?>"><i class="fa fa-inbox"></i>Permohonan Baru
                                <span class="label label-primary pull-right">12</span></a></li>
                        <li><a href="<?php echo base_url('petugas/monitoring/onproccess') ?>"><i class="fa fa-file-text-o"></i>Permohonan Sedang Diproses</a></li>
                        <li><a href="<?php echo base_url('petugas/monitoring/selesai') ?>"><i class="fa fa-envelope-o"></i>Permohonan Selesai</a></li>
                    </ul>
                </div>
                <!-- /.box-body -->
            </div>

            <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Permohonan Sedang Diproses</h3>



                    <div class="box-tools pull-right">
                        <div class="has-feedback">
                            <input type="text" class="form-control input-sm" placeholder="Cari Permohonan">
                            <span class="glyphicon glyphicon-search form-control-feedback"></span>
                        </div>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Permohonan</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <!-- /.col -->
            </div>
        </div>



        <!-- /.row -->
</section>
<!-- /.content -->

<!-- /.content-wrapper -->