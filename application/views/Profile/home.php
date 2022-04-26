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
                  <div class="tab-content" >
                    <h4><i class="fa fa-fw fa-bars"></i>Website Pengajuan Universitas Indo Global Mandiri </h4>
                    <hr>
                    <div class="tab-pane fade show active" >
                      <div class="alert alert-danger" role="alert">

            <div class="alert alert-info" role="alert">
            <h3 class="alert-heading">Halo <?php echo $this->session->userdata('nama');?> ,</h3>
            <h4 class="alert-heading">Selamat Datang di Website Universitas Indo Global Mandiri</h4>
            <p></p>
            <p>Pada sistem ini, anda mempunyai kepentingan sebagai <b><?php echo $this->session->userdata('jabatan');?></b>.</p>
            <p>Untuk lebih lanjut, anda dapat klik berbagai menu di sebelah kiri untuk melakukan kegiatan sesuai kepentingan anda.
            <p>Dan untuk melengkapi data diri serta mengatur ulang kata sandi, anda dapat klik pada bagian Profile.
            </p>
            </div>
                      </div>

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