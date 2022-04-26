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
                  <label for="inputNama" class="col-sm-3 control-label">Pendidikan Terakhir</label>
                  <div class="col-sm-7">
                  <label for="inputNama" class="form-control"><?php echo $pengguna->pendidikan; ?></label>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Jabatan Fungsional</label>
                  <div class="col-sm-7">
                  <label for="inputNama" class="form-control"><?php echo $pengguna->jabatan_fungsional; ?></label>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Golongan</label>
                  <div class="col-sm-7">
                  <label for="inputNama" class="form-control"><?php echo $pengguna->golongan; ?></label>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Universitas Dituju</label>
                  <div class="col-sm-7">
                  <label for="inputNama" class="form-control"><?php echo $pengguna->instansi_dituju; ?></label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Alamat Universitas</label>
                  <div class="col-sm-7">
                  <label for="inputNama" class="form-control"><?php echo $pengguna->alamat_universitas; ?></label>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Tahun Ajaran</label>
                  <div class="col-sm-7">
                  <label for="inputNama" class="form-control"><?php echo $pengguna->tahun_ajaran; ?></label>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Fakultas</label>
                  <div class="col-sm-7">
                  <label for="inputNama" class="form-control"><?php echo $pengguna->fakultas; ?></label>
                  </div>
                </div>

              <div class="form-group">
                  <label for="JK" class="col-sm-3 control-label">Program Studi</label>
                  <div class="col-sm-7">
                  <label for="inputNama" class="form-control"><?php echo $pengguna->progam_studi; ?></label>
                  </div>
              </div>
                
              <div class="form-group">
                  <label for="JK" class="col-sm-3 control-label">Jenjang Pendidikan</label>
                  <div class="col-sm-7">
                  <label for="inputNama" class="form-control"><?php echo $pengguna->jenjang; ?></label>
                  </div>
              </div>
                 
              <div class="form-group">
                  <label for="JK" class="col-sm-3 control-label">Biaya Yang Diajukan</label>
                  <div class="col-sm-7">
                  <label for="inputNama" class="form-control"><?php echo $this->fungsi->rupiah($pengguna->biaya_persemester); ?></label>
                  </div>
              </div>

                <div class="form-group">
                  <label for="isi" class="col-sm-3 control-label">Keterangan</label>
                  <div class="col-sm-7">
                    <textarea class="form-control" disabled rows="3" name="isi_surat"><?php echo $pengguna->isi; ?></textarea>
                  </div>
                </div>

              <!-- /.box-body -->
              <div class="box-footer">
                <?php if ($this->session->userdata('unit_pegawai') == "Dekan" || $this->session->userdata('unit_pegawai') == "Admin" ) { ?>
                 <a href="<?php echo base_url('index.php/Studi/approve') ?>">
                    <button type="button" class="btn "><i class="fa fa-reply"></i></button>
                </a>
                <?php  if ($pengguna->status_studi == 0 && $this->session->userdata('unit_pegawai') == "Dekan" ) { ?>
                
                <a href="<?php echo base_url('index.php/Studi/acc/1/'.$pengguna->id_studi_lanjut) ?>">
                    <button type="button" class="btn btn-success  pull-right">SETUJU<br><i class="fa fa-check"></i></button>
                </a>
                
                <a href="<?php echo base_url('index.php/Studi/acc/2/'.$pengguna->id_studi_lanjut) ?>">
                    <button type="button" class="btn btn-danger  pull-right">TOLAK <br><i class="fa fa-remove"></i></button>
                </a> 
                <?php }
              }  else { ?>
                 <a href="<?php echo base_url('index.php/Studi') ?>">
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


