 <script>
  function printContent(el)
  {
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
  }
</script>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-page">

             
      <div class="content">
        <div class="container-fluid">
            
              <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-holder">
                            <h1 class="main-title float-left"><?php echo $judulhalaman ?></h1>
                                <button type="button" class="btn btn-warning " target=_blank onclick="printContent('area')"><i class="fa fa-print"> </i></button>
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
          <div class="row" id="area">

            <div class="col-12">  
              <div class="card card-primary card-tabs">
                <div class="card-body">
                  <div class="tab-content" >
                    <h3> <center>Laporan Penjualan CV Dantos  Palembang</center></h3>
                    <hr>
                    <h5>PERIODE : <?= $tgl_awal." - ".$tgl_akhir; ?></h5>
                    <div class="tab-pane fade show active" >
                    <table class="table table-bordered table-responsive-xl" >
                        <thead>
                          <tr>
                            <th width="50"> No</th>
                            <th width="150px">Nama Barang</th>
                            <th width="150px">Jumlah</th>
                            <th width="150px">Tanggal Transaksi</th>
                            <th width="150px">Harga Jual</th>
                            <th width="150px">Total</th>
                          </tr>
                        </thead>              
                        <tbody class="">
                          <?php 
                          $i=1;
                          $grand=0;         
                            foreach ($karyawan as $out) {

                            echo 
                              "<tr>".
                               "<td>".($i)."</td>".
                                "<td>".$out->nama_barang."</td>".
                                "<td>".$out->jumlah." ".$out->satuan."</td>".
                                "<td>".$out->tgl_trx."</td>".
                                "<td>".$this->fungsi->rupiah($out->harga_jual)."</td>".
                                "<td>".$this->fungsi->rupiah($out->total)."</td>";    
                                $grand=$grand+$out->total;
                                                      
                              echo "</tr>";
                               $i++;

                           }
                         
                          ?>
                          <tr>
                            <td colspan="5"> Total Keseluruhan</td>
                            <td> <?php echo $this->fungsi->rupiah($grand); ?></td>
                          </tr>
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