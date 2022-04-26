    <div class="content-page">
  
    <!-- Start content -->
        <div class="content">
            
      <div class="container-fluid">
          
            <div class="row">
                  <div class="col-xl-12">
                      <div class="breadcrumb-holder">
                          <h1 class="main-title float-left">Dashboard</h1>
                          <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Dashboard</li>
                          </ol>
                          <div class="clearfix"></div>
                      </div>
                  </div>
            </div>
            <!-- end row -->
               <div class="row">
                  <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                      <div class="card-box noradius noborder bg-default">
                          <i class="fa fa-map-marker float-right text-white"></i>
                          <h6 class="text-white text-uppercase m-b-20">Peminjaman</h6>
                          <h1 class="m-b-20 text-white counter"><?php echo $peminjaman; ?></h1>
                          <span class="text-white">-</span>
                      </div>
                  </div>

                  <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                      <div class="card-box noradius noborder bg-warning">
                          <i class="fa fa-handshake-o float-right text-white"></i>
                          <h6 class="text-white text-uppercase m-b-20">Kegiatan</h6>
                          <h1 class="m-b-20 text-white counter"><?php echo $kegiatan; ?></h1>
                          <span class="text-white">.</span>
                      </div>
                  </div> 
                  <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                      <div class="card-box noradius noborder bg-info">
                          <i class="fa fa-file-text-o float-right text-white"></i>
                          <h6 class="text-white text-uppercase m-b-20">Studi</h6>
                          <h1 class="m-b-20 text-white counter"><?php echo $studi; ?></h1>
                          <span class="text-white">.</span>
                      </div>
                  </div>

                  <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                      <div class="card-box noradius noborder bg-danger">
                          <i class="fa fa-id-badge float-right text-white"></i>
                          <h6 class="text-white text-uppercase m-b-20">Pegawai</h6>
                          <h1 class="m-b-20 text-white counter"><?php echo $pegawai; ?></h1>
                          <span class="text-white">.</span>
                      </div>
                  </div>
              </div>
                 



            </div>
      <!-- END container-fluid -->

    </div>
    <!-- END content -->

    </div>
  <!-- END content-page -->