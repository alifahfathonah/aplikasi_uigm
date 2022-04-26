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

                                 <form action="<?php echo base_url('index.php/Kegiatan/insert');?>/" method="post">
                                     <div class="box-body">

                                         <div class="form-group">
                                             <label for="JK" class="col-sm-3 control-label">Nama Kegiatan</label>
                                             <div class="col-sm-7">
                                                 <input type="input" class="form-control" name="nama_kegiatan"
                                                     placeholder="Nama Kegiatan" required />
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="" class="col-sm-3 control-label">Jenis Kegiatan</label>
                                             <div class="col-sm-7">
                                                 <select class="form-control" name="jenis_kegiatan">
                                                     <option value="Formal">Formal</option>
                                                     <option value="Non Formal">Non Formal</option>
                                                 </select>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="isi" class="col-sm-3 control-label">Keterangan</label>
                                             <div class="col-sm-7">
                                                 <textarea class="form-control" rows="3" name="isi_surat"></textarea>
                                             </div>
                                         </div>

                                         <div class="form-group">
                                             <label for="identitas" class="col-sm-3 control-label">Tanggal
                                                 Pelaksanaan</label>
                                             <div class="col-sm-7">
                                                 <!-- <script>
                           $(function() {
                            $('input[name="periode"]').daterangepicker();
                           });
                        </script>
                    <input type="input" class="form-control" name="periode"> -->
                                                 <script>
                                                 $(function() {
                                                     $('input[name="periode"]').daterangepicker();
                                                 });
                                                 </script>
                                                 <input type="text" class=" col-sm-3 " name="tanggal_mulai">
                                                 <script>
                                                 $(function() {
                                                     $('input[name="tanggal_mulai"]').daterangepicker({
                                                         singleDatePicker: true,
                                                         showDropdowns: true
                                                     });
                                                 });
                                                 </script>

                                                 <input type="text" class=" col-sm-3 " name="tanggal_selesai">
                                                 <script>
                                                 $(function() {
                                                     $('input[name="tanggal_selesai"]').daterangepicker({
                                                         singleDatePicker: true,
                                                         showDropdowns: true
                                                     });
                                                 });
                                                 </script>
                                             </div>
                                         </div>

                                         <div class="form-group">
                                             <label for="inputNama" class="col-sm-3 control-label">Waktu
                                                 Pelaksanaan</label>

                                             <div class="col-sm-7 control-label ">
                                                 <input type="time" class="col-sm-4" name="waktu_mulai" required />
                                                 <input type="time" class="col-sm-4" name="waktu_selesai" required />
                                             </div>
                                         </div>

                                         <div class="form-group">
                                             <label for="inputNama" class="col-sm-3 control-label">Jumlah Yang
                                                 Hadir</label>

                                             <div class="col-sm-7">
                                                 <input type="number" class="form-control" name="jumlah_hadir"
                                                     placeholder="Jumlah Yang hadir" required />
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="inputNama" class="col-sm-3 control-label">Penanggung Jawab
                                                 (NIK/NPM)</label>

                                             <div class="col-sm-7">
                                                 <input type="input" class="form-control" name="penanggung_jawab"
                                                     placeholder="Penanggung Jawab" required />
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