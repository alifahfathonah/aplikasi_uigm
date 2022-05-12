 <!-- Content Wrapper. Contains page content -->
 <div class="content-page">

     <div class="content">


         <!-- Main row -->
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
             <div class="container">
                 <div class="row">
                     <div class="col-12">
                         <div class="card card-primary card-tabs">
                             <div class="card-body">


                                 <form action="#" method="post">
                                     <div class="box-body">

                                         <div class="form-group">
                                             <label for="inputNama" class="col-sm-3 control-label">Nama Pengaju</label>
                                             <div class="col-sm-7">
                                                 <label for="inputNama"
                                                     class="form-control"><?php echo $pengguna->nama; ?></label>
                                             </div>
                                         </div>

                                         <div class="form-group">
                                             <label for="inputNama" class="col-sm-3 control-label">Program Studi</label>
                                             <div class="col-sm-7">
                                                 <label for="inputNama"
                                                     class="form-control"><?php echo $pengguna->prodi; ?></label>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="inputNama" class="col-sm-3 control-label">Jenis Kelamin</label>
                                             <div class="col-sm-7">
                                                 <label for="inputNama"
                                                     class="form-control"><?php echo $pengguna->jenis_kelamin; ?></label>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="inputNama" class="col-sm-3 control-label">Tanggal Lahir</label>
                                             <div class="col-sm-7">
                                                 <label for="inputNama"
                                                     class="form-control"><?php echo $pengguna->tgl_lahir; ?></label>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="inputNama" class="col-sm-3 control-label">Alamat</label>
                                             <div class="col-sm-7">
                                                 <label for="inputNama"
                                                     class="form-control"><?php echo $pengguna->alamat; ?></label>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="inputNama" class="col-sm-3 control-label">No. Telepon</label>
                                             <div class="col-sm-7">
                                                 <label for="inputNama"
                                                     class="form-control"><?php echo $pengguna->no_telp; ?></label>
                                             </div>
                                         </div>

                                         <div class="form-group">
                                             <label for="inputNama" class="col-sm-3 control-label">Pendidikan
                                                 Terakhir</label>
                                             <div class="col-sm-7">
                                                 <label for="inputNama"
                                                     class="form-control"><?php echo $pengguna->pendidikan; ?></label>
                                             </div>
                                         </div>

                                         <div class="form-group">
                                             <label for="inputNama" class="col-sm-3 control-label">Jabatan
                                                 Fungsional</label>
                                             <div class="col-sm-7">
                                                 <label for="inputNama"
                                                     class="form-control"><?php echo $pengguna->jabatan_fungsional; ?></label>
                                             </div>
                                         </div>

                                         <div class="form-group">
                                             <label for="inputNama" class="col-sm-3 control-label">Golongan</label>
                                             <div class="col-sm-7">
                                                 <label for="inputNama"
                                                     class="form-control"><?php echo $pengguna->golongan; ?></label>
                                             </div>
                                         </div>

                                         <div class="form-group">
                                             <label for="inputNama" class="col-sm-3 control-label">Universitas
                                                 Dituju</label>
                                             <div class="col-sm-7">
                                                 <label for="inputNama"
                                                     class="form-control"><?php echo $pengguna->instansi_dituju; ?></label>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="inputNama" class="col-sm-3 control-label">Alamat
                                                 Universitas</label>
                                             <div class="col-sm-7">
                                                 <label for="inputNama"
                                                     class="form-control"><?php echo $pengguna->alamat_universitas; ?></label>
                                             </div>
                                         </div>

                                         <div class="form-group">
                                             <label for="inputNama" class="col-sm-3 control-label">Tahun Ajaran</label>
                                             <div class="col-sm-7">
                                                 <label for="inputNama"
                                                     class="form-control"><?php echo $pengguna->tahun_ajaran; ?></label>
                                             </div>
                                         </div>

                                         <div class="form-group">
                                             <label for="inputNama" class="col-sm-3 control-label">Fakultas</label>
                                             <div class="col-sm-7">
                                                 <label for="inputNama"
                                                     class="form-control"><?php echo $pengguna->fakultas; ?></label>
                                             </div>
                                         </div>

                                         <div class="form-group">
                                             <label for="JK" class="col-sm-3 control-label">Program Studi</label>
                                             <div class="col-sm-7">
                                                 <label for="inputNama"
                                                     class="form-control"><?php echo $pengguna->progam_studi; ?></label>
                                             </div>
                                         </div>

                                         <div class="form-group">
                                             <label for="JK" class="col-sm-3 control-label">Jenjang Pendidikan</label>
                                             <div class="col-sm-7">
                                                 <label for="inputNama"
                                                     class="form-control"><?php echo $pengguna->jenjang; ?></label>
                                             </div>
                                         </div>

                                         <div class="form-group">
                                             <label for="JK" class="col-sm-3 control-label">Biaya Yang Diajukan</label>
                                             <div class="col-sm-7">
                                                 <label for="inputNama"
                                                     class="form-control"><?php echo $this->fungsi->rupiah($pengguna->biaya_persemester); ?></label>
                                             </div>
                                         </div>

                                         <div class="form-group">
                                             <label for="isi" class="col-sm-3 control-label">Keterangan</label>
                                             <div class="col-sm-7">
                                                 <textarea class="form-control" disabled rows="3"
                                                     name="isi_surat"><?php echo $pengguna->isi; ?></textarea>
                                             </div>
                                         </div>

                                         <div class="form-group">
                                             <label for="isi" class="col-sm-3 control-label">Alasan</label>
                                             <div class="col-sm-7">
                                                 <textarea class="form-control" disabled rows="3"
                                                     name="isi_surat"><?php echo $pengguna->alasan; ?></textarea>
                                             </div>
                                         </div>

                                         <!-- /.box-body -->
                                         <div class="box-footer">
                                             <?php if ($this->session->userdata('unit_pegawai') == "Dekan" || $this->session->userdata('unit_pegawai') == "Admin" ) { ?>
                                            
                                             <?php  if ( $this->session->userdata('unit_pegawai') == "Dekan" ) { ?>



                                             <button type="button" class="btn btn-success  pull-right"
                                                 data-toggle="modal" data-target=".terima_dekan">TERIMA <br><i
                                                     class="fa fa-check"></i></button>


                                             <button type="button" class="btn btn-danger  pull-right"
                                                 data-toggle="modal" data-target=".tolak_kaprodi">TOLAK <br><i
                                                     class="fa fa-remove"></i></button>

                                             <?php }
              }  else { ?>
                                             <a href="<?php echo base_url('index.php/Studi') ?>">
                                                 <button type="button" class="btn "><i class="fa fa-reply"></i></button>
                                             </a>
                                             <?php } ?>
                                         </div>
                                         <!-- /.box-footer -->

                                         <!-- /.box-body -->
                                         <div class="box-footer">
                                             <?php if ($this->session->userdata('unit_pegawai') == "Kaprodi") { ?>
                                           
                                             <?php  if ($pengguna->status_studi == 0 && $this->session->userdata('unit_pegawai') == "Kaprodi" ) { ?>



                                             <button type="button" class="btn btn-success  pull-right"
                                                 data-toggle="modal" data-target=".terima_kaprodi">TERIMA <br><i
                                                     class="fa fa-check"></i></button>


                                             <button type="button" class="btn btn-danger  pull-right"
                                                 data-toggle="modal" data-target=".tolak_kaprodi">TOLAK <br><i
                                                     class="fa fa-remove"></i></button>

                                             <?php }
              }  else { ?>
                                             <a href="<?php echo base_url('index.php/Studi') ?>">
                                                 <button type="button" class="btn "><i class="fa fa-reply"></i></button>
                                             </a>
                                             <?php } ?>
                                         </div>
                                         <!-- /.box-footer -->
                                 </form>

                                 <div class="tolak_dekan modal fade" tabindex="-1" role="dialog"
                                     aria-labelledby="myModalLabel">
                                     <div class="modal-dialog" role="document">
                                         <div class="modal-content">
                                             <div class="modal-header">
                                                 <h4 class="modal-title" id="myModalLabel">Alasan Ditolak Dekan
                                                 </h4>
                                                 <button type="button" class="close" data-dismiss="modal"
                                                     aria-label="Close"><span aria-hidden="true">&times;</span></button>

                                             </div>
                                             <div class="modal-body">
                                                 <form
                                                     action="<?php echo base_url('index.php/Studi/acc/2/'.$pengguna->id_studi_lanjut.'/2') ?>/"
                                                     method="POST">
                                                     <div class="form-group">
                                                         <label for="exampleInputEmail1">alasan</label>
                                                         <textarea class="form-control" rows="3"
                                                             name="alasan"></textarea>
                                                     </div>

                                                     <button type="submit" class="btn btn-default">Submit</button>
                                                 </form>
                                             </div>
                                         </div>
                                     </div>
                                 </div>

                                 <div class="terima_dekan modal fade" tabindex="-1" role="dialog"
                                     aria-labelledby="myModalLabel">
                                     <div class="modal-dialog" role="document">
                                         <div class="modal-content">
                                             <div class="modal-header">
                                                 <h4 class="modal-title" id="myModalLabel">Alasan Diterima Dekan
                                                 </h4>
                                                 <button type="button" class="close" data-dismiss="modal"
                                                     aria-label="Close"><span aria-hidden="true">&times;</span></button>

                                             </div>
                                             <div class="modal-body">
                                                 <form
                                                     action="<?php echo base_url('index.php/Studi/acc/1/'.$pengguna->id_studi_lanjut.'/3') ?>/"
                                                     method="POST">
                                                     <div class="form-group">
                                                         <label for="exampleInputEmail1">alasan</label>
                                                         <textarea class="form-control" rows="3"
                                                             name="alasan"></textarea>
                                                     </div>

                                                     <button type="submit" class="btn btn-default">Submit</button>
                                                 </form>
                                             </div>
                                         </div>
                                     </div>
                                 </div>

                                 <div class="tolak_kaprodi modal fade" tabindex="-1" role="dialog"
                                     aria-labelledby="myModalLabel">
                                     <div class="modal-dialog" role="document">
                                         <div class="modal-content">
                                             <div class="modal-header">
                                                 <h4 class="modal-title" id="myModalLabel">Alasan Ditolak Kaprodi
                                                 </h4>
                                                 <button type="button" class="close" data-dismiss="modal"
                                                     aria-label="Close"><span aria-hidden="true">&times;</span></button>

                                             </div>
                                             <div class="modal-body">
                                                 <form
                                                     action="<?php echo base_url('index.php/Studi/acc/2/'.$pengguna->id_studi_lanjut.'/1') ?>/"
                                                     method="POST">
                                                     <div class="form-group">
                                                         <label for="exampleInputEmail1">alasan</label>
                                                         <textarea class="form-control" rows="3"
                                                             name="alasan"></textarea>
                                                     </div>

                                                     <button type="submit" class="btn btn-default">Submit</button>
                                                 </form>
                                             </div>
                                         </div>
                                     </div>
                                 </div>

                                 <div class="terima_kaprodi modal fade" tabindex="-1" role="dialog"
                                     aria-labelledby="myModalLabel">
                                     <div class="modal-dialog" role="document">
                                         <div class="modal-content">
                                             <div class="modal-header">
                                                 <h4 class="modal-title" id="myModalLabel">Alasan Diterima Kaprodi
                                                 </h4>
                                                 <button type="button" class="close" data-dismiss="modal"
                                                     aria-label="Close"><span aria-hidden="true">&times;</span></button>

                                             </div>
                                             <div class="modal-body">
                                                 <form
                                                     action="<?php echo base_url('index.php/Studi/acc/1/'.$pengguna->id_studi_lanjut.'/2') ?>/"
                                                     method="POST">
                                                     <div class="form-group">
                                                         <label for="exampleInputEmail1">alasan</label>
                                                         <textarea class="form-control" rows="3"
                                                             name="alasan"></textarea>
                                                     </div>

                                                     <button type="submit" class="btn btn-default">Submit</button>
                                                 </form>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div><!-- right col -->
     </div>

 </div><!-- /.row (main row) -->