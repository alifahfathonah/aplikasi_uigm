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
                    <h4><i class="fa fa-fw fa-bars"></i> Data Program Studi / Organisasi</h4>
                    <hr>
                    <div class="tab-pane fade show active" >
                        <a href="<?php echo base_url('index.php/Prodi/form') ?>">
                            <button type="button" class="btn btn-danger"><i class="fa fa-plus"></i></button>
                        </a> 
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
							<table id="example1" class="table table-bordered table-hover display">
								<thead>
									<tr>
										<th>No</th>
										<th>Prodi/Instansi</th>
										<th>Keterangan</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
								<?php if ($Prodi != 0) 
								{ 
									$no=1; 
									foreach ($Prodi as $brg) { ?>
									<tr>
										<td><?=$no++;?></td>
										<td><?=$brg->prodi;?></td>
										<td><?=$brg->keterangan;?></td>
										<td>
											<a class="btn btn-social-icon btn-info" href="<?=base_url('index.php/Prodi/data_edit/'.$brg->id_prodi);?>" title="Edit"><i class="fa fa-pencil-square-o"></i></a> &nbsp;
											<a class="btn btn-social-icon btn-danger" href="<?=base_url('index.php/Prodi/delete/'.$brg->id_prodi);?>" title="Hapus"><i class="fa fa-trash"></i></a>
										</td>
									</tr>
									<?php
							      	}
							       }
							     ?>
								</tbody>
							</table>
							</div>
																						
							</div><!-- end card-->					
						</div>

            </div>
			<!-- END container-fluid -->

		</div>
		<!-- END content -->

    </div>
	<!-- END content-page -->