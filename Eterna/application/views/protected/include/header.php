<div id="header" class="header navbar-default">
  <div class="navbar-header">
    <a href="<?php echo base_url()."index.php/AdminHome";?>" class="navbar-brand">
      <span class="navbar-logo"></span> <b>Admin</b> Website
    </a>
    <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>
  <script type="text/javascript"> 
    function display_c(){
      var refresh=1000;
      mytime=setTimeout('display_ct()',refresh)
    }
    function display_ct() {
      var x = new Date()
      document.getElementById('ct').innerHTML = x;
      display_c();
    }
  </script>
  <style type="text/css">
    .jam{
      position: relative;
      display: block;
      text-decoration: none;
      line-height: 20px;
      padding: 15px;
      border: 0;
    }
    .clock{
      width: 50px;
      height: 50px;
      padding: 10px;
    }
  </style>
  <ul class="navbar-nav navbar-right">
    <img class="clock" src="<?php echo base_url('nano/img/icon/clock.png')?>">
    <body onload=display_ct();>
      <span class="jam" id='ct' ></span>
    </body>
    <li class="dropdown navbar-user">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <?php
        if ($this->session->userdata("foto")==NULL) { ?>
          <img src="<?php echo base_url('nano/img/user/default.jpg')?>" alt="" />   
        <?php }else{ ?>
          <img src="<?php echo base_url().'nano/img/user/'. $this->session->userdata("foto");?>" alt="" />   
        <?php } ?>
        <span class="d-none d-md-inline"><?php echo $this->session->userdata("full_name"); ?></span> <b class="caret"></b>
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <a href="javascript:;" class="dropdown-item">Calendar</a>
        <a href="javascript:;" class="dropdown-item">Setting</a>
        <div class="dropdown-divider"></div>
        <a href="<?php echo base_url()."index.php/Logout";?>" class="dropdown-item">Log Out</a>
      </div>
    </li>
  </ul>
</div>