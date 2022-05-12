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

                                 <form
                                     action="<?php echo base_url('index.php/Peminjaman_ruangan/insert_perlengkapan');?>/"
                                     method="post">
                                     <div class="box-body">

                                         <div class="form-group">
                                             <label for="inputNama" class="col-sm-3 control-label">Jenis
                                                 Perlengkapan</label>

                                             <div class="col-sm-7">
                                                 <input type="input" class="form-control" name="jenis_perlengkapan"
                                                     placeholder="Jenis Perlengkapan" required />
                                             </div>
                                         </div>


                                         <div class="form-group">
                                             <label for="inputNama" class="col-sm-3 control-label">Jumlah
                                                 Perlengkapan</label>

                                             <div class="col-sm-7">
                                                 <input type="number" class="form-control" name="jumlah_perlengkapan"
                                                     placeholder="Jumlah Perlengkapan" required />
                                             </div>
                                         </div>





                                     </div>
                                     <!-- /.box-body -->
                                     <div class="box-footer">
                                         <a href="<?php echo base_url('index.php/Peminjaman_ruangan') ?>">
                                             <button type="button" class="btn btn-warning "><i class="fa fa-reply">
                                                     Back</i></button>
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