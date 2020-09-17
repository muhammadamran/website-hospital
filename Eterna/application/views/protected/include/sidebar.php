<div id="sidebar" class="sidebar">
  <div data-scrollbar="true" data-height="100%">
    <ul class="nav">
      <li class="nav-profile">
        <a href="javascript:;" data-toggle="nav-profile">
          <div class="cover with-shadow"></div>
          <div class="image">
            <?php
            if ($this->session->userdata("foto")==NULL) { ?>
              <img src="<?php echo base_url('nano/img/user/default.jpg')?>" alt="" />   
            <?php }else{ ?>
              <img src="<?php echo base_url().'nano/img/user/'. $this->session->userdata("foto");?>" alt="" />   
            <?php } ?>
          </div>
          <div class="info">
            <b class="caret pull-right"></b>
            <?php echo $this->session->userdata("full_name"); ?>
            <small><?php echo $this->session->userdata("jabatan"); ?></small>
          </div>
        </a>
      </li>
      <li>
        <ul class="nav nav-profile">
          <li><a href="<?php echo base_url()."index.php/AdminMy";?>"><i class="fa fa-cog"></i> My Profile</a></li>
          <li><a href="<?php echo base_url()."index.php/AdminHelps";?>"><i class="fa fa-question-circle"></i> Helps</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav">
      <li class="nav-header">Site Administator</li>
      <li>
        <a href="<?php echo base_url()."index.php/AdminHome";?>">
          <i class="fa fa-th-large"></i>
          <span>Dashboard </span> 
        </a>
      </li>
      <li><a href="<?php echo base_url()."index.php/AdminCalendar";?>"><i class="fa fa-calendar"></i> <span>Calendar</span></a></li>
      <!--  -->
      <li class="has-sub">
        <a href="javascript:;">
          <b class="caret"></b>
          <i class="fa fa-th-large"></i>
          <span>Map</span>
        </a>
        <ul class="sub-menu">
          <li><a href="map_vector.html">Vector Map</a></li>
          <li><a href="map_google.html">Google Map</a></li>
        </ul>
      </li>
      <li class="nav-header">Site Website</li>
      <!-- BERANDA -->
      <li>
        <a href="<?php echo base_url()."index.php/AdminBeranda";?>">
          <div class="icon-img">
            <img src="<?php echo base_url('nano/img/logo/logo-bs4.png')?>" alt="" />
          </div>
          <span>Beranda </span> 
        </a>
      </li>
      <!-- PROFILE RUMAH SAKIT -->
      <li class="has-sub">
        <a href="javascript:;">
          <b class="caret"></b>
          <i class="fa fa-align-left"></i> 
          <span>Profile </span> 
        </a>
        <ul class="sub-menu">
          <li><a href="<?php echo base_url()."index.php/AdminProfile/indexInformasi";?>">Profil Informasi</a></li>
          <li><a href="<?php echo base_url()."index.php/AdminProfileRS/indexRS";?>">Profil Rumah Sakit</a></li>
          <li><a href="<?php echo base_url()."index.php/AdminProfileIM/indexIM";?>">Indikator Mutu</a></li>
        </ul>
      </li>
      <!-- PELAYANAN MEDIS -->
      <li class="has-sub">
        <a href="javascript:;">
          <b class="caret"></b>
          <i class="fa fa-align-left"></i> 
          <span>Pelayanan Medis</span>
        </a>
        <ul class="sub-menu">
          <li class="has-sub">
            <a href="javascript:;">
              <b class="caret"></b>
              Hemodialisa
            </a>
            <ul class="sub-menu">
              <li><a href="<?php echo base_url()."index.php/AdminPelayananMedis/indexHD";?>">Tampilan Hemodialisis</a></li>
              <li><a href="<?php echo base_url()."index.php/AdminPelayananMedis/indexAlurHD";?>">Alur Hemodialisis</a></li>
            </ul>
          </li>
          <li class="has-sub">
            <a href="javascript:;">
              <b class="caret"></b>
              IGD
            </a>
            <ul class="sub-menu">
              <li><a href="<?php echo base_url()."index.php/AdminPelayananMedis/indexIGD";?>">Tampilan IGD</a></li>
              <li><a href="<?php echo base_url()."index.php/AdminPelayananMedis/indexAlurIGD";?>">Alur IGD</a></li>
            </ul>
          </li>
          <li class="has-sub">
            <a href="javascript:;">
              <b class="caret"></b>
              Rawat Jalan
            </a>
            <ul class="sub-menu">
              <li><a href="<?php echo base_url()."index.php/AdminPelayananMedis/indexRJ";?>">Tampilan Rawat Jalan</a></li>
              <li><a href="<?php echo base_url()."index.php/AdminPelayananMedis/indexAlurRJ";?>">Alur Rawat Jalan</a></li>
              <li><a href="<?php echo base_url()."index.php/AdminPelayananMedis/indexAdmRJ";?>">Adm Rawat Jalan</a></li>
            </ul>
          </li>
          <li class="has-sub">
            <a href="javascript:;">
              <b class="caret"></b>
              Rawat Inap
            </a>
            <ul class="sub-menu">
              <li><a href="<?php echo base_url()."index.php/AdminPelayananMedis/indexRI";?>">Tampilan Rawat Inap</a></li>
              <li><a href="<?php echo base_url()."index.php/AdminPelayananMedis/indexAlurRI";?>">Alur Rawat Inap</a></li>
              <li><a href="<?php echo base_url()."index.php/AdminPelayananMedis/indexAdmRI";?>">Adm Rawat Inap</a></li>
              <li><a href="<?php echo base_url()."index.php/AdminPelayananMedis/indexTTRI";?>">Tata Tertib Rawat Inap</a></li>
              <li><a href="<?php echo base_url()."index.php/AdminPelayananMedis/indexHKPRI";?>">Hak & Kewajiaban Pasien Rawat Inap</a></li>
            </ul>
          </li>
          <li class="has-sub">
            <a href="javascript:;">
              <b class="caret"></b>
              CAPD
            </a>
            <ul class="sub-menu">
              <li><a href="<?php echo base_url()."index.php/AdminPelayananMedis/indexCAPD";?>">Tampilan CAPD</a></li>
              <li><a href="<?php echo base_url()."index.php/AdminPelayananMedis/indexAlurCAPD";?>">Alur CAPD</a></li>
            </ul>
          </li>
          <li><a href="<?php echo base_url()."index.php/AdminPelayananMedis/indexBedah";?>">Pelayanan Bedah</a></li>
          <li><a href="<?php echo base_url()."index.php/AdminPelayananMedis/indexMCU";?>">Medical Check Up</a></li>
          <!-- <li class="has-sub">
            <a href="javascript:;">
              <b class="caret"></b>
              Bedah
            </a>
            <ul class="sub-menu">
              <li><a href="<?php echo base_url()."index.php/AdminPelayananMedis/indexBedah";?>">Tampilan Bedah</a></li>
              <li><a href="<?php echo base_url()."index.php/AdminPelayananMedis/indexAlurBedah";?>">Alur Bedah</a></li>
            </ul>
          </li>
          <li class="has-sub">
            <a href="javascript:;">
              <b class="caret"></b>
              MCU
            </a>
            <ul class="sub-menu">
              <li><a href="<?php echo base_url()."index.php/AdminPelayananMedis/indexMCU";?>">Tampilan MCU</a></li>
              <li><a href="<?php echo base_url()."index.php/AdminPelayananMedis/indexAlurMCU";?>">Alur MCU</a></li>
            </ul>
          </li> -->
        </ul>
      </li>
      <!-- PENUNJANG MEDIS -->
      <li class="has-sub">
        <a href="javascript:;">
          <b class="caret"></b>
          <i class="fa fa-align-left"></i> 
          <span>Penunjang Medis</span>
        </a>
        <ul class="sub-menu">
          <li><a href="<?php echo base_url()."index.php/AdminPenunjangMedis/indexFarmasi";?>">Farmasi</a></li>
          <li><a href="<?php echo base_url()."index.php/AdminPenunjangMedis/indexLab";?>">Laboratorium</a></li>
          <li><a href="<?php echo base_url()."index.php/AdminPenunjangMedis/indexRadiologi";?>">Radiologi</a></li>
          <!-- <li class="has-sub">
            <a href="javascript:;">
              <b class="caret"></b>
              Laboratorium
            </a>
            <ul class="sub-menu">
              <li><a href="<?php echo base_url()."index.php/AdminPenunjangMedis/indexLab";?>">Tampilan Laboratorium</a></li>
              <li><a href="<?php echo base_url()."index.php/AdminPenunjangMedis/indexAlurLab";?>">Alur Laboratorium</a></li>
            </ul>
          </li>
          <li class="has-sub">
            <a href="javascript:;">
              <b class="caret"></b>
              Radiologi
            </a>
            <ul class="sub-menu">
              <li><a href="<?php echo base_url()."index.php/AdminPenunjangMedis/indexRadiologi";?>">Tampilan Radiologi</a></li>
              <li><a href="<?php echo base_url()."index.php/AdminPenunjangMedis/indexAlurRadiologi";?>">Alur Radiologi</a></li>
            </ul>
          </li> -->
        </ul>
      </li>
      <!-- INFORMASI -->
      <li class="has-sub">
        <a href="javascript:;">
          <b class="caret"></b>
          <i class="fa fa-align-left"></i> 
          <span>Informasi </span> 
        </a>
        <ul class="sub-menu">
          <li><a href="<?php echo base_url()."index.php/AdminInformasi/indexJD";?>">Jadwal Dokter</a></li>
          <li><a href="<?php echo base_url()."index.php/AdminInformasi/indexKI";?>">Kegiatan Ilmiah</a></li>
          <li><a href="<?php echo base_url()."index.php/AdminInformasi/indexGalery";?>">Galeri</a></li>
          <li><a href="<?php echo base_url()."index.php/AdminInformasi/indexDiklat";?>">Diklat</a></li>
          <li><a href="<?php echo base_url()."index.php/AdminInformasi/indexBPJS";?>">BPJS</a></li>
        </ul>
      </li>
      <!-- KONTAK -->
      <li class="has-sub">
        <a href="javascript:;">
          <b class="caret"></b>
          <i class="fa fa-align-left"></i> 
          <span>Kontak </span> 
        </a>
        <ul class="sub-menu">
          <li><a href="<?php echo base_url()."index.php/AdminKontak/indexFAQ";?>">FAQ</a></li>
          <li><a href="<?php echo base_url()."index.php/AdminKontak/indexHubungi";?>">Hubungi</a></li>
        </ul>
      </li>
      <!-- KARIR -->
      <li>
        <a href="<?php echo base_url()."index.php/AdminKarir/indexFarmasi";?>">
          <i class="fa fa-align-left"></i> 
          <span>Karir </span> 
        </a>
      </li>
      <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
    </ul>
  </div>
</div>
<div class="sidebar-bg"></div>
<!-- begin scroll to top btn -->
<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
    <!-- end scroll to top btn -->