<!DOCTYPE html>
<html lang="en">
<body>
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="<?php echo base_url()."index.php/WebHome";?>">Beranda</a></li>
          <li>Kontak</li>
        </ol>
        <h2>Hubungi</h2>
      </div>
    </section>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="row">
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
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Alamat</h3>
              <p><?php echo $row['alamat'];?></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
              <p><?php echo $row['mail'];?></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Telepon</h3>
              <p><?php echo $row['telepone'];?></p>
            </div>
          </div>
          <?php } } mysqli_close($con); ?>
        </div>
        <div class="row">
          <div class="col-lg-6 ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4576.399307791545!2d107.62009085044323!3d-6.885715366049485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6ffc20043b1%3A0xd11d02f524c348ad!2sNy.%20R.A.%20Habibie%20Kidney%20Special%20Hospital!5e0!3m2!1sen!2sid!4v1583317525689!5m2!1sen!2sid" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <div class="col-lg-6">
            <form method="POST" action="<?php echo base_url() ?>index.php/AdminKontak/createhubungi" role="form" class="php-email-form" enctype="multipart/form-data">
              <div class="form-row">
                <div class="col form-group">
                  <input type="hidden" class="form-control" name="kode" value="PESANPENGUNJUNG<?php echo date('YmdHis') ?>" readonly="readonly">
                  <input type="text" name="nama_pengunjung" class="form-control" id="name" placeholder="Nama Lengkap" data-rule="minlen:4" data-msg="Silahkan Masukkan Nama Lengkap" />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email_pengunjung" id="email" placeholder="Email" data-rule="email" data-msg="Silahkan Masukkan Email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="notel_pengunjung" id="subject" placeholder="Nomor Telepon" data-rule="minlen:4" data-msg="Silahkan Masukkan Nomor Telepon" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="pesan" rows="5" data-rule="required" data-msg="Silahkan Masukkan Pesan Anda" placeholder="Pesan Anda"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Pesan Anda telah dikirim. Terima kasih!</div>
              </div>
              <div class="text-center"><button type="submit">Kirim Pesan</button></div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
</body>
</html>