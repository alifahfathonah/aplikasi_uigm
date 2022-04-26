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
                  

            <form  action = "<?php echo base_url('index.php/Peminjaman_ruangan/edit/'.$pengguna->id_peminjaman_ruangan);?>/" method="post">
              <div class="box-body">
                 

              <div class="form-group">
                  <label for="JK" class="col-sm-3 control-label">Keperluan Ruangan</label>
                  <div class="col-sm-7">
                    <select class="form-control" name="jenis_kegiatan">
                        <option  value="<?php echo $pengguna->jenis_kegiatan; ?>"><?php echo $pengguna->jenis_kegiatan; ?></option>
                        <option  value="Rapat">Rapat</option>
                        <option  value="Seminar">Seminar</option>
                        <option  value="webinar">Webinar</option>
                        <option  value="Kuliah/ujian">Kuliah/Ujian</option>
                        <option  value="gemastik">Gemastik</option>
                     </select>
                  </div>
              </div>
              
                <div class="form-group">
                  <label for="inputNama" class="col-sm-4 control-label">Jenis Gedung dan Ruangan yang digunakan</label>

                  <div class="col-sm-7">
                    <select class="form-control" name="jenis_ruangan">
                        <option  value="<?php echo $pengguna->jenis_ruangan; ?>"><?php echo $pengguna->jenis_ruangan; ?></option>
                        <option  value="Gedung B, Aula">Gedung B, Aula</option>
                        <option  value="Gedung B, B203">Gedung B, B203</option>
                        <option  value="Gedung B, B204">Gedung B, B204</option>
                        <option  value="Gedung B, B205">Gedung B, B205</option>
                        <option  value="Gedung B, B206">Gedung B, B206</option>
                        <option  value="Gedung B, B403">Gedung B, B403</option>
                        <option  value="Gedung B, B404">Gedung B, B404</option>
                        <option  value="Gedung C, C401">Gedung C, C401</option>
                        <option  value="Gedung C, C402">Gedung C, C402</option>
                        <option  value="Gedung C, C403">Gedung C, C403</option>
                        <option  value="Gedung C, C404">Gedung C, C404</option>
                        <option  value="Gedung C, 602">Gedung C, 602</option>
                     </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="JK" class="col-sm-3 control-label">Jenis Perlengkapan</label>
                  <div class="col-sm-7">
                    <select class="form-control" name="jenis_perlengkapan">
                        <option  value="<?php echo $pengguna->jenis_perlengkapan; ?>"><?php echo $pengguna->jenis_perlengkapan; ?></option>
                        <option  value="Proyektor">Proyektor</option>
                        <option  value="Sound System">Sound System</option>
                     </select>
                  </div> 
              </div>
                
                <div class="form-group">
                  <label for="identitas" class="col-sm-3 control-label">Tanggal Pelaksanaan</label>
                  <div class="col-sm-7">

                      <?php 
                        $tgl_mulai = date("m-d-Y", strtotime($pengguna->tanggal_mulai)) ; 
                        $tgl_selesai = date("m-d-Y", strtotime($pengguna->tanggal_selesai)) ; 
                      ?>
                        <script>
                           $(function() {
                            $('input[name="periode"]').daterangepicker();
                           });
                        </script>
                      <input type="text" class=" col-sm-3 " name="tanggal_mulai" value="<?= $tgl_mulai; ?>" >
                        <script>
                        $(function() {
                          $('input[name="tanggal_mulai"]').daterangepicker({
                            singleDatePicker: true,
                            showDropdowns: true
                          });
                        });
                        </script>
                        
                      <input type="text" class=" col-sm-3 " name="tanggal_selesai" value="<?= $tgl_selesai; ?>" >
                        <script>
                        $(function() {
                          $('input[name="tanggal_selesai"]').daterangepicker({
                            singleDatePicker: true,
                            showDropdowns: true
                          });
                        });
                        </script>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Waktu Pelaksanaan</label>

                  <div class="col-sm-7 control-label " >
                    <input type="time" class="col-sm-4" name="waktu_mulai"  required/ value="<?php echo $pengguna->waktu_mulai; ?>">
                    <input type="time" class="col-sm-4" name="waktu_selesai" value="<?php echo $pengguna->waktu_selesai; ?>" required/>
                  </div>
                </div>
                
                 
                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Jumlah Yang Hadir</label>

                  <div class="col-sm-7">
                    <input type="number" class="form-control"   value="<?php echo $pengguna->jumlah_hadir; ?>" name="jumlah_hadir" placeholder="Jumlah Yang Hadir" required/>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Penanggung Jawab (NIK/NPM)</label>

                  <div class="col-sm-7">
                    <input type="input" class="form-control"   value="<?php echo $pengguna->penanggung_jawab; ?>" name="penanggung_jawab" placeholder="Penanggung Jawab" required/>
                  </div>
                </div>

                <div class="form-group">
                  <label for="isi" class="col-sm-3 control-label">Keterangan</label>
                  <div class="col-sm-7">
                    <textarea class="form-control" rows="3" name="isi_surat"><?php echo $pengguna->isi_surat; ?></textarea>
                  </div>
                </div>

              <!-- /.box-body -->
              <div class="box-footer">
                 <a href="<?php echo base_url('index.php/Peminjaman_ruangan') ?>">
                    <button type="button" class="btn "><i class="fa fa-reply"> Back</i></button>
                </a>
                <button type="submit" class="btn btn-info pull-right">Save</button>
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


