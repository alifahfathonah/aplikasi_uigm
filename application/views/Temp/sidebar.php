
 
  <!-- Left Sidebar -->
  <div class="left main-sidebar">
      <div class="user-panel">
</div>
    <div class="sidebar-inner leftscroll">

      <div id="sidebar-menu">
        
      <ul>

             <?php if($this->session->userdata('unit_pegawai') == "Mahasiswa" || $this->session->userdata('unit_pegawai') == "Dosen"):?>
                <?php if($judulhalaman == "Home"):?>
                    <li class="submenu">
                        <a class="active" href="<?php echo base_url('index.php/Dashboard/home') ?>"><i class="fa fa-fw fa-home"></i><span> Home </span> </a>
                            </li>
                <?php else:?>
                    <li class="submenu">
                        <a href="<?php echo base_url('index.php/Dashboard/home') ?>"><i class="fa fa-fw fa-home"></i><span> Home </span> </a>
                            </li>
                <?php endif; endif;?> 

             <?php if($this->session->userdata('unit_pegawai') == "Admin" || $this->session->userdata('unit_pegawai') == "Dekan" || $this->session->userdata('unit_pegawai') == "Kaprodi"):?>
                <?php if($judulhalaman == "Dashboard"):?>
                    <li class="submenu">
                        <a class="active" href="<?php echo base_url('index.php/Dashboard') ?>"><i class="fa fa-fw fa-dashboard"></i><span> Dashboard </span> </a>
                            </li>
                <?php else:?>
                    <li class="submenu">
                        <a href="<?php echo base_url('index.php/Dashboard') ?>"><i class="fa fa-fw fa-dashboard"></i><span> Dashboard </span> </a>
                            </li>
                <?php endif; endif;?> 

             <?php if($this->session->userdata('unit_pegawai') == "Admin"):?>
                <?php if($judulhalaman == "Pegawai"):?>
                    <li class="submenu">
                        <a class="active" href="<?php echo base_url('index.php/Pegawai') ?>"><i class="fa fa-fw fa-user"></i><span> Pegawai </span> </a>
                    </li>
                <?php else:?>
                    <li class="submenu">
                        <a href="<?php echo base_url('index.php/Pegawai') ?>"><i class="fa fa-fw fa-user"></i><span> Pegawai </span> </a>
                    </li>
                <?php endif; endif;?> 

            <?php if($this->session->userdata('unit_pegawai') == "Admin"):?>
                <?php if($judulhalaman == "Akademik"):?>
                    <li class="submenu">
                        <a class="active" href="<?php echo base_url('index.php/Akademik') ?>"><i class="fa fa-fw fa-graduation-cap"></i><span> Akademik </span> </a>
                    </li>
                <?php else:?>
                    <li class="submenu">
                        <a href="<?php echo base_url('index.php/Akademik') ?>"><i class="fa fa-fw fa-graduation-cap"></i><span> Akademik </span> </a>
                    </li>
                <?php endif; endif;?> 

            <?php if($this->session->userdata('unit_pegawai') == "Admin"):?>
                <?php if($judulhalaman == "Prodi"):?>
                    <li class="submenu">
                        <a class="active" href="<?php echo base_url('index.php/Prodi') ?>"><i class="fa fa-fw fa-address-book"></i><span> Program Studi </span> </a>
                    </li>
                <?php else:?>
                    <li class="submenu">
                        <a href="<?php echo base_url('index.php/Prodi') ?>"><i class="fa fa-fw fa-address-book"></i><span> Program Studi</span> </a>
                    </li>
                <?php endif;endif;?> 

                <?php if($this->session->userdata('unit_pegawai') == "Mahasiswa" || $this->session->userdata('unit_pegawai') == "Dosen" ):?>
                    <?php if($judulhalaman == "Kegiatan Ruangan"):?>
                        <li class="submenu">
                            <a class="active" href="<?php echo base_url('index.php/kegiatan') ?>"><i class="fa fa-fw fa-handshake-o"></i><span> Kegiatan </span> </a>
                        </li>
                    <?php else:?>
                        <li class="submenu">
                            <a href="<?php echo base_url('index.php/kegiatan') ?>"><i class="fa fa-fw fa-handshake-o"></i><span> Kegiatan </span> </a>
                        </li>
                <?php endif;endif;?> 

                <?php if($this->session->userdata('unit_pegawai') == "Dosen" ):?>
                    <?php if($judulhalaman == "Studi Lanjut"):?>
                        <li class="submenu">
                            <a class="active" href="<?php echo base_url('index.php/Studi') ?>"><i class="fa fa-fw fa-id-badge"></i><span> Studi Lanjut Dosen</span> </a>
                        </li>
                    <?php else:?>
                        <li class="submenu">
                            <a href="<?php echo base_url('index.php/Studi') ?>"><i class="fa fa-fw fa-id-badge"></i><span> Studi Lanjut Dosen</span> </a>
                        </li>
                <?php endif;endif;?> 

                <?php if($this->session->userdata('unit_pegawai') == "Mahasiswa" || $this->session->userdata('unit_pegawai') == "Dosen" ):?>
                    <?php if($judulhalaman == "Peminjaman Ruangan"):?>
                        <li class="submenu">
                            <a class="active" href="<?php echo base_url('index.php/Peminjaman_ruangan') ?>"><i class="fa fa-fw fa-map-marker"></i><span> Peminjaman Ruangan </span> </a>
                        </li>
                    <?php else:?>
                        <li class="submenu">
                            <a href="<?php echo base_url('index.php/Peminjaman_ruangan') ?>"><i class="fa fa-fw fa-map-marker"></i><span> Peminjaman Ruangan </span> </a>
                        </li>
                <?php endif;endif;?> ...


                <?php if($this->session->userdata('unit_pegawai') == "Dekan" || $this->session->userdata('unit_pegawai') == "Admin" || $this->session->userdata('unit_pegawai') == "Kaprodi"):?>
                    <?php if($judulhalaman == "Kegiatan"):?>
                        <li class="submenu">
                            <a class="active" href="<?php echo base_url('index.php/kegiatan/approve') ?>"><i class="fa fa-fw fa-handshake-o"></i><span> Data Kegiatan </span> </a>
                        </li>
                    <?php else:?>
                        <li class="submenu">
                            <a href="<?php echo base_url('index.php/kegiatan/approve') ?>"><i class="fa fa-fw fa-handshake-o"></i><span> Data Kegiatan </span> </a>
                        </li>
                <?php endif;endif;?> 

                <?php if($this->session->userdata('unit_pegawai') == "Dekan" || $this->session->userdata('unit_pegawai') == "Admin" || $this->session->userdata('unit_pegawai') == "Kaprodi"):?>
                    <?php if($judulhalaman == "Studi"):?>
                        <li class="submenu">
                            <a class="active" href="<?php echo base_url('index.php/Studi/approve') ?>"><i class="fa fa-fw fa-id-badge"></i><span> Data Studi Lanjut </span> </a>
                        </li>
                    <?php else:?>
                        <li class="submenu">
                            <a href="<?php echo base_url('index.php/Studi/approve') ?>"><i class="fa fa-fw fa-id-badge"></i><span> Data Studi Lanjut</span> </a>
                        </li>
                <?php endif;endif;?> 

                <?php if($this->session->userdata('unit_pegawai') == "Dekan" || $this->session->userdata('unit_pegawai') == "Admin" || $this->session->userdata('unit_pegawai') == "Kaprodi"):?>
                    <?php if($judulhalaman == "Peminjaman"):?>
                        <li class="submenu">
                            <a class="active" href="<?php echo base_url('index.php/Peminjaman_ruangan/approve') ?>"><i class="fa fa-fw fa-map-marker"></i><span> Data Peminjaman </span> </a>
                        </li>
                    <?php else:?>
                        <li class="submenu">
                            <a href="<?php echo base_url('index.php/Peminjaman_ruangan/approve') ?>"><i class="fa fa-fw fa-map-marker"></i><span> Data Peminjaman </span> </a>
                        </li>
                <?php endif;endif;?> 

                <?php if($this->session->userdata('unit_pegawai') == "Admin" ):?>
                    <?php if($judulhalaman == "Ruangan_Dipakai"):?>
                        <li class="submenu">
                            <a class="active" href="<?php echo base_url('index.php/Peminjaman_ruangan/ruangan_dipakai') ?>"><i class="fa fa-building-o"></i><span> Ruangan Dipakai </span> </a>
                        </li>
                    <?php else:?>
                        <li class="submenu">
                            <a href="<?php echo base_url('index.php/Peminjaman_ruangan/ruangan_dipakai') ?>"><i class="fa fa-building-o"></i><span> Ruangan Dipakai </span> </a>
                        </li>
                <?php endif;endif;?> 

                <?php if($this->session->userdata('unit_pegawai') == "Admin" ):?>
                    <?php if($judulhalaman == "Perlengkapan"):?>
                        <li class="submenu">
                            <a class="active" href="<?php echo base_url('index.php/Peminjaman_ruangan/perlengkapan') ?>"><i class="fa fa-wrench"></i><span> Data Perlengkapan </span> </a>
                        </li>
                    <?php else:?>
                        <li class="submenu">
                            <a href="<?php echo base_url('index.php/Peminjaman_ruangan/perlengkapan') ?>"><i class="fa fa-wrench"></i><span>  Data Perlengkapan </span> </a>
                        </li>
                <?php endif;endif;?> 
            </ul>

            <div class="clearfix"></div>

      </div>
        
      <div class="clearfix"></div>

    </div>

  </div>
  <!-- End Sidebar -->