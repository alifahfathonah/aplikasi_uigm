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
                  

            <form  action = "#" method="post">
              <div class="box-body">
                
                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Nama Pengaju</label>
                  <div class="col-sm-7">
                  <label for="inputNama" class="form-control"><?php echo $pengguna->nama; ?></label>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">NIP</label>
                  <div class="col-sm-7">
                  <label for="inputNama" class="form-control"><?php echo $pengguna->nip; ?></label>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Status</label>
                  <div class="col-sm-7">
                  <label for="inputNama" class="form-control"><?php echo $pengguna->status; ?></label>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Program Studi</label>
                  <div class="col-sm-7">
                  <label for="inputNama" class="form-control"><?php echo $pengguna->prodi; ?></label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Jenis Kelamin</label>
                  <div class="col-sm-7">
                  <label for="inputNama" class="form-control"><?php echo $pengguna->jenis_kelamin; ?></label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Tanggal Lahir</label>
                  <div class="col-sm-7">
                  <label for="inputNama" class="form-control"><?php echo $pengguna->tgl_lahir; ?></label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Alamat</label>
                  <div class="col-sm-7">
                  <label for="inputNama" class="form-control"><?php echo $pengguna->alamat; ?></label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">No. Telepon</label>
                  <div class="col-sm-7">
                  <label for="inputNama" class="form-control"><?php echo $pengguna->no_telp; ?></label>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Keperluan Ruangan</label>
                  <div class="col-sm-7">
                  <label for="inputNama" class="form-control"><?php echo $pengguna->jenis_kegiatan; ?></label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputNama" class="col-sm-4 control-label">Jenis Gedung dan Ruangan yang Digunakan</label>
                  <div class="col-sm-7">
                  <label for="inputNama" class="form-control"><?php echo $pengguna->jenis_ruangan; ?></label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Jenis Perlengkapan</label>
                  <div class="col-sm-7">
                  <label for="inputNama" class="form-control"><?php echo $pengguna->jenis_perlengkapan; ?></label>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="identitas" class="col-sm-3 control-label">Tanggal Pelaksanaan</label>
                  <div class="col-sm-7">

                      <?php 
                        $tgl_mulai = date("m-d-Y", strtotime($pengguna->tanggal_mulai)) ; 
                        $tgl_selesai = date("m-d-Y", strtotime($pengguna->tanggal_selesai)) ; 
                      ?>
                      <label for="inputNama" class="form-control"><?= $tgl_mulai ." S/D ". $tgl_selesai; ?></label>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Waktu Pelaksanaan</label>

                  <div class="col-sm-7 control-label " >
                      <label for="inputNama" class="form-control"><?= $pengguna->waktu_mulai ." S/D ". $pengguna->waktu_selesai; ?></label>
                  </div>
                </div>

              <div class="form-group">
                  <label for="JK" class="col-sm-3 control-label">Jumlah Yang Hadir</label>
                  <div class="col-sm-7">
                  <label for="inputNama" class="form-control"><?php echo $pengguna->jumlah_hadir; ?></label>
                  </div>
              </div>
              <div class="form-group">
                  <label for="JK" class="col-sm-3 control-label">Penanggung Jawab (NIK/NPM)</label>
                  <div class="col-sm-7">
                  <label for="inputNama" class="form-control"><?php echo $pengguna->penanggung_jawab; ?></label>
                  </div>
              </div>
                
                 
                <div class="form-group">
                  <label for="isi" class="col-sm-3 control-label">Keterangan</label>
                  <div class="col-sm-7">
                    <textarea class="form-control" disabled rows="3" name="isi_surat"><?php echo $pengguna->isi_surat; ?></textarea>
                  </div>
                </div>

              <!-- /.box-body -->
              <div class="box-footer">
                <?php if ($this->session->userdata('unit_pegawai') == "Dekan" || $this->session->userdata('unit_pegawai') == "Admin" ) { ?>
                 <a href="<?php echo base_url('index.php/Peminjaman_ruangan/approve') ?>">
                    <button type="button" class="btn "><i class="fa fa-reply"></i></button>
                </a>
                <?php  if ($pengguna->status_peminjaman == 0 && $this->session->userdata('unit_pegawai') == "Dekan" ) { ?>
                <a href="<?php echo base_url('index.php/Peminjaman_ruangan/acc/1/'.$pengguna->id_peminjaman_ruangan) ?>">
                    <button type="button" class="btn btn-success  pull-right">SETUJU<br><i class="fa fa-check"></i></button>
                </a> 
                <a href="<?php echo base_url('index.php/Peminjaman_ruangan/acc/2/'.$pengguna->id_peminjaman_ruangan) ?>">
                   <button type="button" class="btn btn-danger  pull-right">TOLAK <br><i class="fa fa-remove"></i></button>
                </a> 
                <?php }
              }  else { ?>
                 <a href="<?php echo base_url('index.php/Peminjaman_ruangan') ?>">
                    <button type="button" class="btn "><i class="fa fa-reply"></i></button>
                </a>
              <?php } ?>
              </div>
              <!-- /.box-footer -->
            </form>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- right col -->
          </div>

          </div><!-- /.row (main row) -->


