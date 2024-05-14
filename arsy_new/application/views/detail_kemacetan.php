<?php $this->load->view("_incl/head.php") ?>
<?php $this->load->view("_incl/header.php") ?>
<?php $this->load->view("_incl/script.php") ?>

<div id="map"> </div>

<div class="poldaname">
      <div class= "p-4 d-flex justify-content-center">
        <img  src="<?= base_url();?>template/asset/jabar.png" alt="">
        <h2 class="mt-4 ml-2" > Polda Jabar</h2>
      </div> 
</div>
<hr>
<div class="container">
    <div class="row mt-5">
        <div class="col-md-3" style="border-right:1px solid rgba(0,0,0,.1);">
             <h3 style="color: blue;">Live Data</h3>
             <p>Terakhir diperbaharui</p>
             <p style="margin-top:-20px;">17/01/2022, 5:08 WIB</p>
                <div id="tanggal">
                    <p class="mt-5">TANGGAL</p>
                    <h5 style="margin-top:-15px;">17 Jan 2022</h5>
                </div>
                <div id="waktu">
                    <p class="mt-5">WAKTU</p>
                    <h5 style="margin-top:-15px;">17.22 WIB</h5>
                </div>
        </div>
        <div class="col-md-9">
            <h5 style="font-weight: bold;">TINGKAT KEJADIAN LAKA LANTAS PER JAM</h5>
            <ul class="nav nav-pills" id="myTab">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">48 jam terakhir</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" >7 hari terakhir</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="mt-3" id="lakachart"></div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">2..</div>
            </div>
        </div>
    </div>
</div>    
<hr>
<div class="container">
    <div class="row mt-5">
        <div class="col-md-4">
            <h3>Riwayat data kejadian lalu lantas setahun penuh</h3>
        </div>
    </div> 
</div>
<div class="container">
    <div class="row">
        <div class="col-md-3">
             <ul class="nav nav-pills mt-4" id="myTab">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#2021" role="tab" aria-controls="2021" aria-selected="true">2021</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#2020" role="tab" aria-controls="2020" aria-selected="false" >2020</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#2019" role="tab" aria-controls="2019" aria-selected="false" >2019</a>
                </li>
            </ul>
        </div>
    </div> 
</div>    
<div class="bgbaru">
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="2021" role="tabpanel" aria-labelledby="2021">
            <div class="container">
                <div class="row">
                    <div class="row col-sm-4">
                        <div class="col-xs-4 ">
                            <div class="card mt-4" >    
                                <div class="card-body" >
                                    <h5>TOTAL LAKA</h5>
                                    <h1 class="display-3 font-weight-bold mt-2"id="totallaka">100</h1>
                                    <div class="d-flex">
                                        <img src="<?= base_url();?>template/asset/up.svg" alt=""> 
                                        <h6 class="font-weight-bold" style="margin-top:15px; margin-left:3px;" id="presentaselaka"> 10%</h6>
                                        <p style="margin-top:12px; margin-left:3px;" >dari bulan lalu</p>                                                 
                                    </div>
                                </div>
                            </div> 
                            <div class="card mt-4">
                                <div class="card-body" style="padding-right: 4.25rem;">
                                    <h5>TOTAL MENINGGAL DUNIA</h5>
                                    <h1 class="display-3 font-weight-bold mt-2" id="totalmng">60</h1>
                                    <div class="d-flex">
                                        <img src="<?= base_url();?>template/asset/DOW.svg" alt=""> 
                                        <h6 class="font-weight-bold" style="margin-top:15px; margin-left:3px;" id="presentaselaka"> 30%</h6>
                                        <p style="margin-top:12px; margin-left:3px;" >dari bulan lalu</p>                                                 
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>    
                    <div class="col-sm-8" style="padding-right:0px!important;">
                        <div class="tab-pane fade show active" id="2021" role="tabpanel" aria-labelledby="2021">
                            <div class="card mt-4">    
                                <div class="card-body">
                                    <h5 class="">CASE FATALITY RATE</h5>
                                    <div class="d-flex">
                                        <h1 class="display-6 font-weight-bold mt-2" id="totalcfr">80,5</h1>
                                        <img src="<?= base_url();?>template/asset/up.svg"  style="margin-top:15px; margin-left:3px;"alt=""> 
                                        <h6 class="font-weight-bold" style="margin-top:30px; margin-left:3px;" id="presentasecfr"> 10%</h6>
                                        <p  style="margin-top:27px; margin-left:3px;">dari bulan lalu</p>
                                    </div>
                                    <div id ="cfrchart"></div>
                                </div>               
                            </div>
                        </div>
                    </div>
                </div> 
            <div class="row " >
                <div class="col-sm-8" style="padding-left:0px!important;">
                    <div class="card mt-4">
                        <div class="card-body">
                            <h5>STATISTIK KEJADIAN LAKA LANTAS </h5>
                        <div class="mt-5" id="chartkejadian"></div>
                        </div>
                    </div>      
                </div>
                <div class="row col-sm-4">
                        <div class="col-xs-4">
                            <div class="card mt-4">    
                                <div class="card-body">
                                <h5>HARI TERBURUK</h5>
                                <p>Jumlah  terbanyak korban meninggal dunia akibat laka lantas</p>
                                <div ida="hariterburuk">
                                    <h5 class="text-center mt-4">Sabtu</h5>
                                    <h1 class="text-center display-3 font-weight-bold text">31</h1>
                                    <h3 class="text-center font-weight-bold">Desember</h3>
                                </div>
                                
                            </div>
                            <div class="card-footer bg-danger">
                                <div class="d-flex">
                                    <h1 class="display-5 text-white">50</h1>
                                    <h6 class="text-white mt-2 ml-3">Korban <br>Meninggal Dunia</h6>
                                </div>
                            </div> 
                            </div> 
                        </div>
                    </div>    
            </div>
        </div>
        </div>
        <div class="tab-pane fade" id="2020" role="tabpanel" aria-labelledby="2020">

        </div>
        <div class="tab-pane fade" id="2019" role="tabpanel" aria-labelledby="2019">
            
        </div>
    </div>
    
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            
        </div>
    </div>
</div>

</div>

<?php $this->load->view("_incl/css.php") ?>
<?php $this->load->view("_incl/js.php") ?>
<?php $this->load->view("_incl/footer.php") ?>
