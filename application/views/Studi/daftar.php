    <!-- Content Wrapper. Contains page content -->
    <div class="content-page">


        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-holder">
                            <h1 class="main-title float-left"><?php echo $judulhalaman ?></h1>
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item active"><?php echo $judulhalaman ?></li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <!-- Main content -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-primary card-tabs">
                                <div class="card-body">
                                    <div class="tab-content">
                                        <h4><i class="fa fa-fw fa-bars"></i> Data Studi Lanjut Dosen</h4>
                                        <hr>
                                        <div class="tab-pane fade show active">
                                            <a href="<?php echo base_url('index.php/Studi/form') ?>">
                                                <button type="button" class="btn btn-danger"><i
                                                        class="fa fa-plus"></i></button>
                                            </a>
                                            <?php if($this->session->flashdata('berhasil')): ?>
                                            <div class="alert alert-success alert-dismissable">
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-hidden="true">&times;</button>
                                                <h4> <i class="icon fa fa-check"></i> Sukses!</h4>
                                                <?php echo $this->session->flashdata('berhasil');?>
                                            </div>
                                            <?php endif; ?>
                                            <?php if($this->session->flashdata('gagal')): ?>
                                            <div class="alert alert-danger alert-dismissable">
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-hidden="true">&times;</button>
                                                <h4> <i class="icon fa fa-check"></i> Gagal!</h4>
                                                <?php echo $this->session->flashdata('gagal');?>
                                            </div>
                                            <?php endif; ?>
                                            <table class="table table-bordered table-responsive-xl table-hover display"
                                                id="example1">
                                                <thead>
                                                    <tr>
                                                        <th> No</th>
                                                        <th>Universitas Dituju</th>
                                                        <th>Fakultas</th>
                                                        <th>Program Studi</th>
                                                        <th>Tahun Ajaran</th>
                                                        <th>Jenjang</th>
                                                        <th>Biaya</th>
                                                        <th>Status</th>
                                                        <th>Status Progres Pengajuan</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="">
                                                    <?php $i=0; if($pengguna != 0)
                          {                  
                            foreach ($pengguna as $out) {
                              if ($out->status_studi == 0) {
                                $status = "-";
                              }
                              elseif ($out->status_studi == 1) {
                                $status = "Setuju";
                              }
                              else{
                                $status = "Ditolak";
                              }

                              if ($out->status_progres_pengajuan == 3) {
                                $status_progres_pengajuan = "Admin";
                              }
                              elseif ($out->status_progres_pengajuan == 2) {
                                $status_progres_pengajuan = "Dekan";
                              }
                              elseif ($out->status_progres_pengajuan == 1) {
                                $status_progres_pengajuan = "Kaprodi";
                              }
                              
                            echo 
                              "<tr>".
                               "<td>".($i+1)."</td>".
                                "<td>".$out->instansi_dituju."</td>".
                                "<td>".$out->fakultas."</td>".
                                "<td>".$out->progam_studi."</td>".
                                "<td>".$out->tahun_ajaran."</td>".
                                "<td>".$out->jenjang."</td>".
                                "<td>".$this->fungsi->rupiah($out->biaya_persemester)."</td>".
                                "<td>".$status."</td>".
                                "<td>".$status_progres_pengajuan."</td>".
                                '<td>
                                    <center>
                                        <a class="btn btn-social-icon btn-danger" href="'.base_url("index.php/Studi/delete/".$out->id_studi_lanjut).'"><i class="fa fa-remove"></i></a> 
                                        <a class="btn btn-social-icon btn-facebook" href="'.base_url("index.php/Studi/data_edit/".$out->id_studi_lanjut).'"><i class="fa fa-pencil"></i></a>  
                                        <a class="btn btn-social-icon btn-info" href="'.base_url("index.php/Studi/view/".$out->id_studi_lanjut).'"><i class="fa fa-eye"></i></a> 
                                    </center>
                                </td>';       
                              echo "</tr>";
                               $i++;
                            }
                           }
                         
                          ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->

                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- ./wrapper -->