 <script>
  function printContent(el)
  {
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
  }
</script> <!-- Content Wrapper. Contains page content -->
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
                  

                  <button type="button" class="btn btn-danger " onClick="javascript:history.go(-1)"><i class="fa fa-reply"> </i></button>
                  <button type="button" class="btn btn-warning " target=_blank onclick="printContent('area')"><i class="fa fa-print"> </i></button>
  
    <!-- Start content -->
        <div class="content">
            
      <div class="container-fluid">

          
        
        <!-- end row -->


      
        <div class="row">
            
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">           
              
              <div class="card mb-3">
                    <div class="card-header">
                      <h3><i class="fa fa-table"></i> Global English Language Center Report  <?php echo $daterange; ?></h3>
                    </div>
                      
                    <div class="card-body"  id="area">
                      
                      <div class="container">
                        
                        <div class="row">
                          <div class="col-md-12">
                            <div class="invoice-title text-center mb-3">
                              <h2>Global English Language Center Report</h2><h4> <?php echo $daterange; ?></h4> 
                            </div>
                            <br>
                              <hr>                     
                            <hr> 
                              <strong>Income</strong> 
                            
                          </div>
                        </div>
                        
                        <div class="row">
                          <div class="col-md-12">
                            <div class="panel panel-default">
                              <div class="panel-body">
                                <div class="table-responsive">
                                  <table class="table table-condensed">
                                    <thead>
                                      <tr>
                                        <td><strong>Description</strong></td>
                                        <td class="text-center"><strong>Amount</strong></td>
                                        <td class="text-center"><strong>Total</strong></td>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <!-- foreach ($order->lineItems as $line) or some such thing here -->
                                      <tr>
                                        <td>Registration</td>
                                        <td class="text-center"><?php echo $regist->jumlah_regis; ?> * Rp.2.450.000,00</td>
                                        <?php 
                                            $total_regist=$regist->jumlah_regis*2450000;
                                        ?>
                                        <td class="text-right">Rp. <?php echo number_format( $total_regist,2,',','.'); ?></td>
                                      </tr>

                                      <tr>
                                        <td>Re-Registration</td>
                                        <td class="text-center"><?php echo $re_regist->jumlah_regis; ?> * Rp.2.250.000,00</td>
                                        <?php 
                                            $total_re=$re_regist->jumlah_regis*2250000;
                                            $total_pembayaran=$total_re+$total_regist;
                                        ?>
                                        <td class="text-right">Rp. <?php echo number_format( $total_re,2,',','.'); ?></td>
                                      </tr>
                                      <tr>
                                        <td class="no-line"></td>
                                        <td class="no-line text-center"><strong>Grand  Total</strong></td>
                                        <td class="no-line text-right"> Rp.<?php echo number_format( $total_pembayaran,2,',','.'); ?></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              <hr>                     
                            <hr> 
                              <strong>Cost</strong>
                                <div class="table-responsive">
                                  <table class="table table-condensed">
                                    <thead>
                                      <tr>
                                        <td><strong>date</strong></td>
                                        <td class="text-center"><strong>Description</strong></td>
                                        <td class="text-center"><strong>Total</strong></td>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <!-- foreach ($order->lineItems as $line) or some such thing here -->
                                      <?php 
                                      foreach ($cost as $out) { 
                                        $total_pembayaran=0;  ?>
                                      <tr>
                                        <td><?php echo $out->date; ?></td>
                                        <td class="text-center"><?php echo $out->description; ?></td>
                                        <td class="text-right">Rp. <?php echo number_format($out->amount,2,',','.');
                                          $total_pembayaran=$out->amount + $total_pembayaran;
                                         ?></td>
                                      </tr>
                                     <?php }
                                      ?>
                                      <tr>
                                        <td class="no-line"></td>
                                        <td class="no-line text-center"><strong>Grand Total</strong></td>
                                        <td class="no-line text-right"> Rp. <?php echo number_format( $total_pembayaran,2,',','.'); ?></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                          
                      
                    </div><!-- end card body -->                              
                    
                  </div><!-- end card-->          
                  
                </div><!-- end col-->     

          </div><!-- end row-->



            </div>
      <!-- END container-fluid -->


    </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- right col -->
          </div>

          </div><!-- /.row (main row) -->


