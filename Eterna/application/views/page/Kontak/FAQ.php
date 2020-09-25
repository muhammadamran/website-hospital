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
        <h2>FAQ</h2>
      </div>
    </section>
    <!-- ======= Contact Section ======= -->
    <section class="ftco-section ftco-no-pt ftco-faqs">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="heading-section mb-5 mt-5 mt-lg-0">
              <span class="subheading">Tanya Jawab Dengan Rumah Sakit</span>
              <h2 class="mb-3">Pertanyaan yang Sering Diajukan</h2>
            </div>
            <div id="accordion" class="myaccordion w-100" aria-multiselectable="true">
              <?php
              $con=mysqli_connect("localhost","root","","rskg_website");
              if (mysqli_connect_errno())
              {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }
              $result = mysqli_query($con,"SELECT * FROM tb_faq WHERE status='SHOW' AND berkas IS NULL ORDER BY id DESC");

              if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result))
                {
              ?>
              <div class="card">
                <div class="card-header p-0" id="heading<?php echo $row['id']; ?>" role="tab">
                  <h2 class="mb-0">
                    <button href="#collapse<?php echo $row['id']; ?>" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapse<?php echo $row['id']; ?>">
                      <p class="mb-0"><?php echo $row['pertanyaan']; ?></p>
                      <i class="fa" aria-hidden="true"></i>
                    </button>
                  </h2>
                </div>
                <div class="collapse" id="collapse<?php echo $row['id']; ?>" role="tabpanel" aria-labelledby="collapse<?php echo $row['id']; ?>">
                  <div class="card-body py-3 px-0">
                    <?php echo $row['jawaban']; ?>
                  </div>
                </div>
              </div>
              <?php } } mysqli_close($con); ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</body>
</html>