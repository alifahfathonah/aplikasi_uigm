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
                                             <label for="inputNama" class="col-sm-3 control-label">Status</label>
                                             <div class="col-sm-7">
                                                 <label for="inputNama"
                                                     class="form-control"><?php echo $pengguna->status; ?></label>
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
                                             <label for="JK" class="col-sm-3 control-label">Nama Kegiatan</label>
                                             <div class="col-sm-7">
                                                 <label for="inputNama"
                                                     class="form-control"><?php echo $pengguna->nama_kegiatan; ?></label>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="JK" class="col-sm-3 control-label">Jenis Kegiatan</label>
                                             <div class="col-sm-7">
                                                 <label for="inputNama"
                                                     class="form-control"><?php echo $pengguna->jenis_kegiatan; ?></label>
                                             </div>
                                         </div>

                                         <div class="form-group">
                                             <label for="isi" class="col-sm-3 control-label">Keterangan</label>
                                             <div class="col-sm-7">
                                                 <textarea class="form-control" disabled rows="3"
                                                     name="isi_surat"><?php echo $pengguna->isi_surat; ?></textarea>
                                             </div>
                                         </div>

                                         <div class="form-group">
                                             <label for="identitas" class="col-sm-3 control-label">Tanggal
                                                 Pelaksanaan</label>
                                             <div class="col-sm-7">

                                                 <?php 
                        $tgl_mulai = date("m-d-Y", strtotime($pengguna->tanggal_mulai)) ; 
                        $tgl_selesai = date("m-d-Y", strtotime($pengguna->tanggal_selesai)) ; 
                      ?>
                                                 <label for="inputNama"
                                                     class="form-control"><?= $tgl_mulai ." S/D ". $tgl_selesai; ?></label>
                                             </div>
                                         </div>

                                         <div class="form-group">
                                             <label for="inputNama" class="col-sm-3 control-label">Waktu
                                                 Pelaksanaan</label>

                                             <div class="col-sm-7 control-label ">
                                                 <label for="inputNama"
                                                     class="form-control"><?= $pengguna->waktu_mulai ." S/D ". $pengguna->waktu_selesai; ?></label>
                                             </div>
                                         </div>



                                         <div class="form-group">
                                             <label for="JK" class="col-sm-3 control-label">Jumlah Yang Hadir</label>
                                             <div class="col-sm-7">
                                                 <label for="inputNama"
                                                     class="form-control"><?php echo $pengguna->jumlah_hadir; ?></label>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="JK" class="col-sm-3 control-label">Penanggung Jawab
                                                 (NIK/NPM)</label>
                                             <div class="col-sm-7">
                                                 <label for="inputNama"
                                                     class="form-control"><?php echo $pengguna->penanggung_jawab; ?></label>
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
                                             <a href="<?php echo base_url('index.php/Kegiatan/approve') ?>">
                                                 <button type="button" class="btn "><i class="fa fa-reply"></i></button>
                                             </a>
                                             <?php  if ( $this->session->userdata('unit_pegawai') == "Dekan" ) { ?>

                                             <button type="button" class="btn btn-success  pull-right"
                                                 data-toggle="modal" data-target=".terima_dekan">TERIMA <br><i
                                                     class="fa fa-check"></i></button>


                                             <button type="button" class="btn btn-danger  pull-right"
                                                 data-toggle="modal" data-target=".tolak_dekan">TOLAK <br><i
                                                     class="fa fa-remove"></i></button>

                                             <?php }
              }  else { ?>
                                           
                                             <?php } ?>
                                         </div>

                                         <div class="box-footer">
                                             <?php if ($this->session->userdata('unit_pegawai') == "Kaprodi" || $this->session->userdata('unit_pegawai') == "Admin" ) { ?>
                                             <a href="<?php echo base_url('index.php/Kegiatan/approve') ?>">
                                                 <button type="button" class="btn "><i class="fa fa-reply"></i></button>
                                             </a>
                                             <?php  if ($pengguna->status_kegiatan == 0 && $this->session->userdata('unit_pegawai') == "Kaprodi" ) { ?>

                                             <button type="button" class="btn btn-success  pull-right"
                                                 data-toggle="modal" data-target=".terima_kaprodi">TERIMA <br><i
                                                     class="fa fa-check"></i></button>


                                             <button type="button" class="btn btn-danger  pull-right"
                                                 data-toggle="modal" data-target=".tolak_kaprodi">TOLAK <br><i
                                                     class="fa fa-remove"></i></button>

                                             <?php }
              }  else { ?>
                                            
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
                                                     action="<?php echo base_url('index.php/Kegiatan/acc/2/'.$pengguna->id_kegiatan.'/2') ?>/"
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
                                                     action="<?php echo base_url('index.php/Kegiatan/acc/1/'.$pengguna->id_kegiatan.'/3') ?>/"
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
                                                     action="<?php echo base_url('index.php/Kegiatan/acc/2/'.$pengguna->id_kegiatan.'/1') ?>/"
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
                                                     action="<?php echo base_url('index.php/Kegiatan/acc/1/'.$pengguna->id_kegiatan.'/2') ?>/"
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