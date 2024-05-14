<div id="topheader">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">
          <img src="<?= base_url();?>template/asset/algorskorl.png" style="width:150px;" alt="">
      </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="#">Overview </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link <?php if($this->uri->segment(1)=="CFR"){echo "active";}?>" href="<?=base_url('CFR')?>"  href="#">CFR</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($this->uri->segment(1)=="Kemacetan"){echo "active";}?>" href="<?=base_url('Kemacetan')?>" href="#">Indeks Kemacetan </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($this->uri->segment(1)=="Ketertiban"){echo "active";}?>" href="<?=base_url('Ketertiban')?>" href="#">Indeks Ketertiban </a>
          </li>
        </ul>
        <div class="d-flex align-items-center">
          <button type="button" class="btn btn-primary btn-sm">
            Login
          </button>
        </div>
      </div>
    </div>
  </nav>
</div>  
<style>
   .navbar-light .navbar-nav .nav-link {
        color: #000000;
    }
    .navbar-light .navbar-nav .active {
        border-bottom: 4px solid blue;
    }
    .navbar-light .navbar-nav .nav-link:hover {
      color: #000000;  
        border-bottom: 4px solid blue;
    }
    
</style>