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


          <form action="<?=base_url('index.php/Prodi/insert');?>" method="POST" enctype="multipart/form-data">
            <!-- enctype="multipart/form-data" itu untuk upload gambar -->
            <div class="form-group">
              <label class="col-form-label" for="prodi">Nama Prodi/Instansi</label>
              <input type="text" class="form-control" name="prodi" id="prodi" required="">
            </div>
            <div class="form-group">
              <label class="col-form-label" for="harga_jual">Keterangan</label>
              <textarea class="form-control" name="keterangan"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- right col -->
          </div>

          </div><!-- /.row (main row) -->


