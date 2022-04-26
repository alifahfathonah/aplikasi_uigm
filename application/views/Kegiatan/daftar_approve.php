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
                    <h4><i class="fa fa-fw fa-bars"></i> Data Pengajuan Kegiatan</h4>
                    <hr>
                    <div class="tab-pane fade show active" >
                          <?php if($this->session->flashdata('berhasil')): ?>
                            <div class="alert alert-success alert-dismissable">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                              <h4>  <i class="icon fa fa-check"></i> Sukses!</h4>
                              <?php echo $this->session->flashdata('berhasil');?>
                            </div>
                          <?php endif; ?>
                          <?php if($this->session->flashdata('gagal')): ?>
                            <div class="alert alert-danger alert-dismissable">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                              <h4>  <i class="icon fa fa-check"></i> Gagal!</h4>
                              <?php echo $this->session->flashdata('gagal');?>
                            </div>
                          <?php endif; ?> 
                    <table class="table table-bordered table-responsive-xl table-hover display" id="example1">
                        <thead>
                          <tr>
                            <th> No</th>
                            <th>Nama</th>
                            <th>Program Studi</th>
                            <th>Status</th>
                            <th>Nama Kegiatan</th>
                            <th>Tanggal & Waktu</th>
                            <th>Jenis Kegiatan</th>
                            <th>Action</th>
                          </tr>
                        </thead>              
                        <tbody class="">
                          <?php $i=0; if($pengguna != 0)
                          {                  
                            foreach ($pengguna as $out) {
                              if ($out->status_kegiatan == 0) {
                                $status = "-";
                              }
                              elseif ($out->status_kegiatan == 1) {
                                $status = "Setuju";
                              }
                              else{
                                $status = "Ditolak";
                              }
                            echo 
                              "<tr>".
                               "<td>".($i+1)."</td>".
                                "<td>".$out->nama." (".$out->status.")</td>".
                                "<td>".$out->prodi."</td>".
                                "<td>".$status."</td>".
                                "<td>".$out->nama_kegiatan."</td>".
                                "<td>"
                                .$out->tanggal_mulai." S/D ".$out->tanggal_selesai."<br>"
                                .$out->waktu_mulai." S/D ".$out->waktu_selesai.
                                "</td>".
                                "<td>".$out->jenis_kegiatan."</td>".
                                '<td>
                                    <center>
                                        <a class="btn btn-social-icon btn-info" href="'.base_url("index.php/Kegiatan/view/".$out->id_kegiatan).'"><i class="fa fa-eye"></i></a> 
                                        
                                    </center>
                                </td>';       
                                                      
                              echo "</tr>";
                               $i++;
                            }
                           }
                         
                          ?>
                        </tbody>
                      </table>
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