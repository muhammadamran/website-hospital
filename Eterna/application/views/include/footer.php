<style type="text/css">
  .biss{
    width: 100%;
    height: 100px;
    position:relative;
  }

  .bisbump{
    width: 200px;
    height: 200px;
    background: #ffffff;
    border-radius: 100%;
  }
  .galeryfoot {
   width: 110px;
   height: 110px;
   border: 1px solid #575D63;
   padding: 0px;
 }
</style>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<style>
  .ssc {
    font-family: 'Tangerine', serif;
  }
</style>
<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 footer-links" align="left">
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
          if ($row['logo_footer']==NULL) {
          ?>
          <div align="center">
            <a href="<?php echo base_url()."index.php/WebHome";?>"><h4><i>NO LOGO (PLEASE UPLOAD LOGO)</i></h4></a>
          </div>
          <?php
          }else{
          ?>
          <a href="<?php echo base_url()."index.php/WebHome";?>"><img class="biss" src="<?php echo base_url('assets/images/footer/'.$row['logo_footer']) ?>"></a>
          <?php } ?>
          <br>
          <div align="center">
            <font id="ssc" style="color: #ffffff; font-family: Tangerine;font-size: 16px"><b><?php echo $row['slogan'];?></b></font>
            <hr>
            <?php
            if ($row['galerione']==NULL) {
            ?>
            <img class="galeryfoot" src="<?php echo base_url('assets/images/empty/img-empty.png');?>">
            <?php
            }else{
            ?>
            <img class="galeryfoot" src="<?php echo base_url('assets/images/footer/'.$row['galerione']);?>">
            <?php } ?>
            <?php
            if ($row['galeritwo']==NULL) {
            ?>
            <img class="galeryfoot" src="<?php echo base_url('assets/images/empty/img-empty.png');?>">
            <?php
            }else{
            ?>
            <img class="galeryfoot" src="<?php echo base_url('assets/images/footer/'.$row['galeritwo']);?>">
            <?php } ?>
            <?php
            if ($row['galerithree']==NULL) {
            ?>
            <img class="galeryfoot" src="<?php echo base_url('assets/images/empty/img-empty.png');?>">
            <?php
            }else{
            ?>
            <img class="galeryfoot" src="<?php echo base_url('assets/images/footer/'.$row['galerithree']);?>">
            <?php } ?>
            <?php
            if ($row['galerifour']==NULL) {
            ?>
            <img class="galeryfoot" src="<?php echo base_url('assets/images/empty/img-empty.png');?>">
            <?php
            }else{
            ?>
            <img class="galeryfoot" src="<?php echo base_url('assets/images/footer/'.$row['galerifour']);?>">
            <?php } ?>
          </div>
          <?php } } mysqli_close($con); ?>
        </div>
        <div class="col-lg-4 col-md-6 footer-links">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4576.399307791545!2d107.62009085044323!3d-6.885715366049485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6ffc20043b1%3A0xd11d02f524c348ad!2sNy.%20R.A.%20Habibie%20Kidney%20Special%20Hospital!5e0!3m2!1sen!2sid!4v1583317525689!5m2!1sen!2sid" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="col-lg-2 col-md-6 footer-contact">
          <h4>Hubungi Kami</h4>
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
          <p>
            <?php echo $row['alamat'];?>
            <strong>Phone:</strong> <?php echo $row['telepone'];?><br>
            <strong>Email:</strong> <?php echo $row['mail'];?><br>
          </p>
          <?php } } mysqli_close($con); ?>
        </div>
        <div class="col-lg-3 col-md-6 footer-info">
          <h4>Sosial Media</h4>
          <div class="social-links mt-3">
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
            <a href="<?php echo $row['twitter'];?>" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="<?php echo $row['facebook'];?>" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="<?php echo $row['instagram'];?>" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="<?php echo $row['youtube'];?>" target="_blank" class="youtube"><i class="bx bxl-youtube"></i></a>
          <?php } } mysqli_close($con); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>RS. Khusus Ginjal Ny. R.A. Habibie</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Created by <a href="#">Teknologi Informasi</a> <?php echo date('Y'); ?>
    </div>
  </div>
</footer>
<script type="text/javascript">
  (function () 
  {
    var options = 
    {
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
        whatsapp: "<?php echo $row['whatsapp'];?>", // WhatsApp number
        call_to_action: "<?php echo $row['pesan'];?>", // Call to action
      <?php } } mysqli_close($con); ?>
        position: "left", // Position may be 'right' or 'left'
      };
      var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
      var s = document.createElement('script'); 
      s.type = 'text/javascript'; 
      s.async = true; s.src = url + '/widget-send-button/js/init.js';
      s.onload = function () { WhWidgetSendButton.init(host, proto, options); 
      };
      var x = document.getElementsByTagName('script')[0]; 
      x.parentNode.insertBefore(s, x);
  })();
</script>