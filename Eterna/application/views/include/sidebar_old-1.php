<style type="text/css">
  /*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
  /*height: 70px;*/
  height: 90px;
  transition: all 0.5s;
  z-index: 997;
  transition: all 0.5s;
  /*padding: 10px 0;*/
  padding: 21px 0;
  background: #fff;
  box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
  position: relative;
}

#header .logo h1 {
  font-size: 26px;
  padding: 0 0 0 8px;
  margin: 11px 0;
  line-height: 1;
  font-weight: 700;
  letter-spacing: 1px;
  text-transform: uppercase;
  font-family: "Poppins", sans-serif;
  border-left: 8px solid #28a745;
}

#header .logo h1 a, #header .logo h1 a:hover {
  color: #545454;
  text-decoration: none;
}

#header .logo img {
  /*padding: 21px 0;*/
  padding: 0;
  margin: 0;
  max-height: 80px;
  bottom: 10px;
  /*YANG DIBAWAH CODING BARU*/
  /*max-width: 100%;
  height: auto;
  top: 100px;
  bottom: 100px;*/
/*  background-repeat: no-repeat;
  padding-left: 18px !important;
  background-size: 20%;
  background-position-y: 20%;*/
  position: absolute;
  top: auto;
  bottom: 8px;
}
</style>
<header id="header">
  <div class="container d-flex">
    <div class="logo mr-auto">
      <?php
      $con=mysqli_connect("localhost","root","","rskg_website");
      if (mysqli_connect_errno())
      {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
      $result = mysqli_query($con,"SELECT * FROM tb_profile WHERE status='SHOW' AND berkas IS NULL ORDER BY id DESC");

      if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_array($result))
        {
      ?>
      <?php 
      if ($row['logo']==NULL) {
      ?>  
      <h1 class="text-light"><a href="index.html"><span>RSKG</span></a></h1>
      <?php
      }else{
      ?>
      <a href="<?php echo base_url()."index.php/WebHome";?>"><img src="<?php echo base_url('assets/images/logo/'.$row['logo']) ?>"></a>
      <?php } ?>
      <?php } } mysqli_close($con); ?>
    </div>
    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li class=""><a href="<?php echo base_url()."index.php/WebHome";?>"><b>Beranda</b></a></li>
        <li class="drop-down"><a href="#"><b>RSKG Ny. R.A. Habibie</b></a>
          <ul>
            <li><a href="<?php echo base_url()."index.php/WebProfile/indexProfile";?>"><b>Profil Rumah Sakit</b></a></li>
            <!-- <li><a href="<?php echo base_url()."index.php/WebProfile/indexVisiMisi";?>"><b>Visi & Misi</b></a></li> -->
            <li><a href="<?php echo base_url()."index.php/WebProfile/indexIndikatorMutu";?>"><b>Indikator Mutu</b></a></li>
          </ul>
        </li>
        <li class="drop-down"><a href="#"><b>Pelayanan Medis</b></a>
          <ul>
            <li><a href="<?php echo base_url()."index.php/WebPelayananMedis/indexHD";?>"><b>Hemodialisis</b></a></li>
            <li class="drop-down"><a href="<?php echo base_url()."index.php/WebPelayananMedis/indexIGD";?>"><b>IGD</b></a>
              <ul>
                <li><a href="<?php echo base_url()."index.php/WebPelayananMedis/indexAlurIGD";?>"><b>Alur Pelayanan IGD</b></a></li>
              </ul>
            </li>
            <li class="drop-down"><a href="<?php echo base_url()."index.php/WebPelayananMedis/indexRJ";?>"><b>Rawat Jalan</b></a>
              <ul>
                <li><a href="<?php echo base_url()."index.php/WebPelayananMedis/indexAlurRJ";?>"><b>Alur Pelayanan Rawat Jalan</b></a></li>
                <li><a href="<?php echo base_url()."index.php/WebPelayananMedis/indexAdmRJ";?>"><b>Administrasi Rawat Jalan</b></a></li>
              </ul>
            </li>
            <li class="drop-down"><a href="<?php echo base_url()."index.php/WebPelayananMedis/indexRI";?>"><b>Rawat Inap</b></a>
              <ul>
                <li><a href="<?php echo base_url()."index.php/WebPelayananMedis/indexAlurRI";?>"><b>Alur Pelayanan Rawat Inap</b></a></li>
                <li><a href="<?php echo base_url()."index.php/WebPelayananMedis/indexAdmRI";?>"><b>Administrasi Rawat Inap</b></a></li>
                <li><a href="<?php echo base_url()."index.php/WebPelayananMedis/indexTTRI";?>"><b>Tata Tertib Rawat Inap</b></a></li>
                <li><a href="<?php echo base_url()."index.php/WebPelayananMedis/indexHKPRI";?>"><b>Hak dan Kewajiban Pasien</b></a></li>
              </ul>
            </li>
            <li class="drop-down"><a href="<?php echo base_url()."index.php/WebPelayananMedis/indexCAPD";?>"><b>CAPD</b></a>
              <ul>
                <li><a href="<?php echo base_url()."index.php/WebPelayananMedis/indexAlurCAPD";?>"><b>Alur Pelayanan CAPD</b></a></li>
              </ul>
            </li>
            <li class="drop-down"><a href="<?php echo base_url()."index.php/WebPelayananMedis/indexBedah";?>"><b>Bedah</b></a>
              <ul>
                <li><a href="<?php echo base_url()."index.php/WebPelayananMedis/indexAlurBedah";?>"><b>Alur Pelayanan Bedah</b></a></li>
              </ul>
            </li>
            <li class="drop-down"><a href="<?php echo base_url()."index.php/WebPelayananMedis/indexMCU";?>"><b>Medical Check Up</b></a>
              <ul>
                <li><a href="<?php echo base_url()."index.php/WebPelayananMedis/indexAlurMCU";?>"><b>Alur Pelayanan Medical Check Up</b></a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="drop-down"><a href="#"><b>Penunjang Medis</b></a>
          <ul>
            <li><a href="<?php echo base_url()."index.php/WebPenunjangMedis/indexFarmasi";?>"><b>Farmasi</b></a></li>
            <li class="drop-down"><a href="<?php echo base_url()."index.php/WebPenunjangMedis/indexLab";?>"><b>Laboratorium</b></a>
              <ul>
                <li><a href="<?php echo base_url()."index.php/WebPenunjangMedis/indexAlurLab";?>"><b>Alur Pelayanan Laboratorium</b></a></li>
              </ul>
            </li>
            <li class="drop-down"><a href="<?php echo base_url()."index.php/WebPenunjangMedis/indexRadiologi";?>"><b>Radiologi</b></a>
              <ul>
                <li><a href="<?php echo base_url()."index.php/WebPenunjangMedis/indexAlurRadiologi";?>"><b>Alur Pelayanan Radiologi</b></a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="drop-down"><a href="#"><b>Informasi</b></a>
          <ul>
            <li><a href="<?php echo base_url()."index.php/WebInformasi/indexJadwalDokter";?>"><b>Jadwal Dokter</b></a></li>
            <li><a href="<?php echo base_url()."index.php/WebInformasi/indexKegiatanIlmiah";?>"><b>Kegiatan Ilmiah</b></a></li>
            <li><a href="<?php echo base_url()."index.php/WebInformasi/indexGaleri";?>"><b>Galeri</b></a></li>
            <li><a href="<?php echo base_url()."index.php/WebInformasi/indexDiklat";?>"><b>DIKLAT</b></a></li>
            <li><a href="<?php echo base_url()."index.php/WebInformasi/indexBPJS";?>"><b>BPJS</b></a></li>
          </ul>
        </li>
        <li class="drop-down"><a href="#"><b>Kontak</b></a>
          <ul>
            <li><a href="<?php echo base_url()."index.php/WebKontak/indexFAQ";?>"><b>FAQ</b></a></li>
            <li><a href="<?php echo base_url()."index.php/WebKontak/indexHubungi";?>"><b>Hubungi</b></a></li>
          </ul>
        </li>
        <li class=""><a href="<?php echo base_url()."index.php/WebKarir";?>"><b>Karir</b></a></li>
      </ul>
    </nav>
  </div>
</header>
<!-- <li class="drop-down"><a href="#">Tentang Rumah Sakit</a>
  <ul>
    <li><a href="about.html">About Us</a></li>
    <li><a href="team.html">Team</a></li>
    <li class="drop-down"><a href="#">Drop Down 2</a>
      <ul>
        <li><a href="#">Deep Drop Down 1</a></li>
        <li><a href="#">Deep Drop Down 2</a></li>
        <li><a href="#">Deep Drop Down 3</a></li>
        <li><a href="#">Deep Drop Down 4</a></li>
        <li><a href="#">Deep Drop Down 5</a></li>
      </ul>
    </li>
  </ul>
</li> -->