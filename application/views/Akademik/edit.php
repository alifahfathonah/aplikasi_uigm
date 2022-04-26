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
                  

            <form  action = "<?php echo base_url('index.php/Akademik/edit/'.$pengguna->id_akademik);?>/" method="post">
              <div class="box-body">
                
                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Nama </label>

                  <div class="col-sm-7">
                    <input type="input" class="form-control" name="nama" placeholder="Nama Dosen" value="<?php echo $pengguna->nama; ?>">
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="identitas" class="col-sm-3 control-label">No Induk </label>
                  <div class="col-sm-7">
                    <input type="input" class="form-control" name="nip" placeholder="NIP" value="<?php echo $pengguna->nip; ?>">
                  </div>
                </div>
              <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Prodi/intansi</label>
                  <div class="col-sm-7">
                    <select class="form-control" name="id_prodi">
                      <?php foreach ($prodi as $key) { 
                        if ($key->id_prodi == $pengguna->id_prodi) { ?>
                          <option value="<?= $key->id_prodi ?>" selected> <?= $key->prodi ?> </option>
                      <?php  } else { ?>
                          <option value="<?= $key->id_prodi ?>"  > <?= $key->prodi ?> </option>
                      <?php } 
                    } ?>
                     </select>
                  </div>
              </div>

              <div class="form-group">
                  <label for="JK" class="col-sm-3 control-label">Jenis Kelamin</label>
                  <div class="col-sm-7">
                    <select class="form-control" name="jenis_kelamin">
                        <?php 
                            if($pengguna->jenis_kelamin =="Wanita")
                            {
                                 echo '<option name="jenis_kelamin" value="Laki-Laki">Laki-Laki</option>';
                                 echo '<option name="jenis_kelamin" value="Wanita" selected>Wanita</option>';
                            }
                            else
                            {
                               echo '<option name="jenis_kelamin" value="Laki-Laki" selected>Laki-Laki</option>';
                               echo '<option name="jenis_kelamin" value="Wanita">Wanita</option>';
                            }  
                             
                        ?>
                     </select>
                  </div>
              </div>

              <div class="form-group">
                  <label for="JK" class="col-sm-3 control-label">Status</label>
                  <div class="col-sm-7">
                    <select class="form-control" name="status">
                        <?php 
                            if($pengguna->status =="Dosen")
                            {
                                 echo '<option name="status" value="Dosen" selected>Dosen</option>';
                                 echo '<option name="status" value="Mahasiswa">Mahasiswa</option>';
                            }
                            else
                            {
                               echo '<option name="status" value="Dosen">Dosen</option>';
                               echo '<option name="status" value="Mahasiswa" selected>Mahasiswa</option>';
                            }  
                             
                        ?>
                     </select>
                  </div>
              </div>

                <div class="form-group"> 
                  <label for="Tempat" class="col-sm-3 control-label fa fa-calendar"> Tanggal Lahir</label>
                      <div class="date col-sm-7">
                      <input type="text" class="form-control pull-right" id="jadwalPemakaian0" name="tgl_lahir" value="<?php echo $pengguna->tgl_lahir; ?>">
                    </div>
                </div>
                
                 
                <div class="form-group">
                  <label for="Alamat" class="col-sm-3 control-label">Alamat</label>
                  <div class="col-sm-7">
                    <textarea class="form-control" rows="3" name="alamat"><?php echo $pengguna->alamat; ?></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label for="HP" class="col-sm-3 control-label">No HP</label>
                  <div class="col-sm-7">
                    <input type="input" class="form-control" name="no_hp" placeholder="No HP" value="<?php echo $pengguna->no_telp; ?>">
                  </div>
                       
              </div>

               <div class="form-group">
                  <label for="identitas" class="col-sm-3 control-label">Password</label>
                  <div class="col-sm-7">
                    <input type="password" class="form-control" name="password" placeholder="isi Password jika ingin diubah">
                  </div>
                </div>

              <!-- /.box-body -->
              <div class="box-footer">
                 <a href="<?php echo base_url('index.php/Akademik') ?>">
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


