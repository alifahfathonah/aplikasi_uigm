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

            <form action = "<?php echo base_url('index.php/Studi/insert');?>/" method="post">
              <div class="box-body">
                
                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Pendidikan Terakhir</label>
                  <div class="col-sm-7">
                    <select class="form-control" name="pendidikan">
                        <option  value="S1">S1</option>
                        <option  value="S2">S2</option>
                        <option  value="S3">S3</option>
                     </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Jabatan Fungsional</label>
                  <div class="col-sm-7">
                    <input type="input" class="form-control" name="jabatan_fungsional" placeholder="Jabatan Fungsional" required/>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Golongan</label>
                  <div class="col-sm-7">
                    <input type="input" class="form-control" name="golongan" placeholder="Golongan" required/>
                  </div>
                </div>
                
                <hr>
                <hr>

                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Universitas Dituju</label>
                  <div class="col-sm-7">
                    <input type="input" class="form-control" name="instansi_dituju" placeholder="Universitas Dituju" required/>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Alamat</label>
                  <div class="col-sm-7">
                    <textarea class="form-control" rows="3" name="alamat_universitas" placeholder="Alamat Lengkap Universitas" ></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Tahun Ajaran</label>
                  <div class="col-sm-7">
                    <input type="input" class="form-control" name="tahun_ajaran" placeholder="Tahun Ajaran" required/>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Fakultas</label>
                  <div class="col-sm-7">
                    <input type="input" class="form-control" name="fakultas" placeholder="Fakultas" required/>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Program Studi</label>
                  <div class="col-sm-7">
                    <input type="input" class="form-control" name="progam_studi" placeholder="Program Studi" required/>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Jenjang Pendidikan</label>
                  <div class="col-sm-7">
                    <select class="form-control" name="jenjang">
                        <option  value="S2">S2</option>
                        <option  value="S3">S3</option>
                     </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Biaya Yang Diajukan</label>
                  <div class="col-sm-7">
                    <input type="input" class="form-control" name="biaya_persemester" placeholder="Biaya Yang Diajukan" required/>
                  </div>
                </div>

                <div class="form-group">
                  <label for="isi" class="col-sm-3 control-label">Keterangan</label>
                  <div class="col-sm-7">
                    <textarea class="form-control" rows="3" name="isi"></textarea>
                  </div>
                </div>

            </div>
              <!-- /.box-body -->
              <div class="box-footer">
                 <a href="<?php echo base_url('index.php/Studi') ?>">
                    <button type="button" class="btn btn-warning "><i class="fa fa-reply"> Back</i></button>
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


