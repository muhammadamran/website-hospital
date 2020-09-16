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
      <!-- <h1 class="text-light"><a href="index.html"><span>RSKG</span></a></h1> -->
      <a href="index.html"><img src="<?php echo base_url('assets/images/logo/logo.png') ?>"></a>
    </div>
    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li class=""><a href="index.html"><b>Beranda</b></a></li>
        <li class="drop-down"><a href="#"><b>RSKG Ny. R.A. Habibie</b></a>
          <ul>
            <li><a href="about.html"><b>Profil Rumah Sakit</b></a></li>
            <li><a href="about.html"><b>Visi & Misi</b></a></li>
            <li><a href="team.html"><b>Indikator Mutu</b></a></li>
          </ul>
        </li>
        <li class="drop-down"><a href="#"><b>Pelayanan Medis</b></a>
          <ul>
            <li><a href="about.html"><b>Hemodialisis</b></a></li>
            <li class="drop-down"><a href="#"><b>IGD</b></a>
              <ul>
                <li><a href="#"><b>Alur Pelayanan IGD</b></a></li>
              </ul>
            </li>
            <li class="drop-down"><a href="#"><b>Rawat Jalan</b></a>
              <ul>
                <li><a href="#"><b>Alur Pelayanan Rawat Jalan</b></a></li>
                <li><a href="#"><b>Administrasi Rawat Jalan</b></a></li>
              </ul>
            </li>
            <li class="drop-down"><a href="#"><b>Rawat Inap</b></a>
              <ul>
                <li><a href="#"><b>Alur Pelayanan Rawat Inap</b></a></li>
                <li><a href="#"><b>Administrasi Rawat Inap</b></a></li>
                <li><a href="#"><b>Tata Tertib Rawat Inap</b></a></li>
                <li><a href="#"><b>Hak dan Kewajiban Pasien</b></a></li>
              </ul>
            </li>
            <li class="drop-down"><a href="#"><b>CAPD</b></a>
              <ul>
                <li><a href="#"><b>Alur Pelayanan CAPD</b></a></li>
              </ul>
            </li>
            <li class="drop-down"><a href="#"><b>Bedah</b></a>
              <ul>
                <li><a href="#"><b>Alur Pelayanan Bedah</b></a></li>
              </ul>
            </li>
            <li class="drop-down"><a href="#"><b>Medical Check Up</b></a>
              <ul>
                <li><a href="#"><b>Alur Pelayanan Medical Check Up</b></a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="drop-down"><a href="#"><b>Penunjang Medis</b></a>
          <ul>
            <li><a href="about.html"><b>Farmasi</b></a></li>
            <li class="drop-down"><a href="#"><b>Laboratorium</b></a>
              <ul>
                <li><a href="#"><b>Alur Pelayanan Laboratorium</b></a></li>
              </ul>
            </li>
            <li class="drop-down"><a href="#"><b>Radiologi</b></a>
              <ul>
                <li><a href="#"><b>Alur Pelayanan Radiologi</b></a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="drop-down"><a href="#"><b>Informasi</b></a>
          <ul>
            <li><a href="about.html"><b>Jadwal Dokter</b></a></li>
            <li><a href="team.html"><b>Kegiatan Ilmiah</b></a></li>
            <li><a href="team.html"><b>Galeri</b></a></li>
            <li><a href="team.html"><b>DIKLAT</b></a></li>
            <li><a href="team.html"><b>BPJS</b></a></li>
          </ul>
        </li>
        <li class="drop-down"><a href="#"><b>Kontak</b></a>
          <ul>
            <li><a href="about.html"><b>FAQ</b></a></li>
            <li><a href="about.html"><b>Hubungi</b></a></li>
          </ul>
        </li>
        <li class=""><a href="index.html"><b>Karir</b></a></li>
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

<!-- NO BOLD -->
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
      <!-- <h1 class="text-light"><a href="index.html"><span>RSKG</span></a></h1> -->
      <a href="index.html"><img src="<?php echo base_url('assets/images/logo/logo.png') ?>"></a>
    </div>
    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li class=""><a href="index.html">Beranda</a></li>
        <li class="drop-down"><a href="#">RSKG Ny. R.A. Habibie</a>
          <ul>
            <li><a href="about.html">Profil Rumah Sakit</a></li>
            <li><a href="about.html">Visi & Misi</a></li>
            <li><a href="team.html">Indikator Mutu</a></li>
          </ul>
        </li>
        <li class="drop-down"><a href="#">Pelayanan Medis</a>
          <ul>
            <li><a href="about.html">Hemodialisis</a></li>
            <li class="drop-down"><a href="#">IGD</a>
              <ul>
                <li><a href="#">Alur Pelayanan IGD</a></li>
              </ul>
            </li>
            <li class="drop-down"><a href="#">Rawat Jalan</a>
              <ul>
                <li><a href="#">Alur Pelayanan Rawat Jalan</a></li>
                <li><a href="#">Administrasi Rawat Jalan</a></li>
              </ul>
            </li>
            <li class="drop-down"><a href="#">Rawat Inap</a>
              <ul>
                <li><a href="#">Alur Pelayanan Rawat Inap</a></li>
                <li><a href="#">Administrasi Rawat Inap</a></li>
                <li><a href="#">Tata Tertib Rawat Inap</a></li>
                <li><a href="#">Hak dan Kewajiban Pasien</a></li>
              </ul>
            </li>
            <li class="drop-down"><a href="#">CAPD</a>
              <ul>
                <li><a href="#">Alur Pelayanan CAPD</a></li>
              </ul>
            </li>
            <li class="drop-down"><a href="#">Bedah</a>
              <ul>
                <li><a href="#">Alur Pelayanan Bedah</a></li>
              </ul>
            </li>
            <li class="drop-down"><a href="#">Medical Check Up</a>
              <ul>
                <li><a href="#">Alur Pelayanan Medical Check Up</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="drop-down"><a href="#">Penunjang Medis</a>
          <ul>
            <li><a href="about.html">Farmasi</a></li>
            <li class="drop-down"><a href="#">Laboratorium</a>
              <ul>
                <li><a href="#">Alur Pelayanan Laboratorium</a></li>
              </ul>
            </li>
            <li class="drop-down"><a href="#">Radiologi</a>
              <ul>
                <li><a href="#">Alur Pelayanan Radiologi</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="drop-down"><a href="#">Informasi</a>
          <ul>
            <li><a href="about.html">Jadwal Dokter</a></li>
            <li><a href="team.html">Kegiatan Ilmiah</a></li>
            <li><a href="team.html">Galeri</a></li>
            <li><a href="team.html">DIKLAT</a></li>
            <li><a href="team.html">BPJS</a></li>
          </ul>
        </li>
        <li class="drop-down"><a href="#">Kontak</a>
          <ul>
            <li><a href="about.html">FAQ</a></li>
            <li><a href="about.html">Hubungi</a></li>
          </ul>
        </li>
        <li class=""><a href="index.html">Karir</a></li>
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