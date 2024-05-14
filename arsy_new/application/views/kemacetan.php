<?php $this->load->view("_incl/head.php") ?>
<?php $this->load->view("_incl/header.php") ?>
<?php $this->load->view("_incl/script.php") ?>

<body>

  <div class="jumbotron jumbotron-cover-image">
  <img src="<?= base_url();?>template/asset/macet.svg" style="width: 40%; position:absolute; right:0; top: 60px;" alt="">

    <div class="container"> 
      <div class="row">
        <div class="col-6">
          <h1>Indeks Kemacetan <br>Nasional</h1>
          <h1 style="font-weight:300;">2020 <img src="<?= base_url();?>template/asset/down2.png" alt=""></h1>
          <p style="margin-top:60px; color:#fff;">Statistik perubahan angka perbandingan volume traffic kendaraan dengan ukuran kapasitas jalan yang menunjukkan makna seberapa besar tingkat keparahan kemacetan dalam suatu negara.</p>      
        </div>
      </div>
    </div>

  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
          <h3>Peringkat Polda 2020</h3>
      </div>
    </div>
    <div class="row mt-4">
       <div class="col-md-3">
            <h4  style="color:blue;">Filter Polda</h4>
            
            <a class="text-dark" id="checkbox" href="#" onclick="checkAll();return false;">Hapus Filter</a>    
          <div class="row mt-4"></div>
          <div class="scrollable-content">
            <input type="checkbox" class="checkall" name="jawa" value="jawa" > <label for="jawa">Polda Metro Jaya</label><br>
            <input type="checkbox" class="checkall" name="sumatea" value="sumatea"> <label for="sumatea">Polda Jawa Tengah</label><br>
            <input type="checkbox" class="checkall" name="kalimantan" value="kalimantan" > <label for="kalimantan">Polda Jawa Barat</label><br>
            <input type="checkbox" class="checkall" name="sulawesi" value="sulawesi"> <label for="sulawesi">Polda Sumatera Selatan</label><br>
            <input type="checkbox" class="checkall" name="sulawesi" value="sulawesi"> <label for="sulawesi">Polda Riau</label><br>
            <input type="checkbox" class="checkall" name="sulawesi" value="sulawesi"> <label for="sulawesi">Polda Aceh</label><br>
            <input type="checkbox" class="checkall" name="sulawesi" value="sulawesi"> <label for="sulawesi">Polda Sumatera Barat</label><br>
            <input type="checkbox" class="checkall"name="sulawesi" value="sulawesi"> <label for="sulawesi">Polda Papua</label><br>
          </div>
           
       </div> 
       <div class="col-md-9">
          <table id="example" class="table table-striped table-bordered table-responsive" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Peringkat</th>
                    <th>Polda</th>
                    <th>Total Kejadian</th>
                    <th>Meninggal Dunia</th>
                    <th>Luka Berat</th>
                    <th>Perubahan dari 2021</th>
                    <th></th>

                </tr>
            </thead>
            <tbody style="text-align:center;">
                <tr>
                    <td>1</td>
                    <td class="badge badge-danger badge-pill" style="font-size: .6em;margin-top: 5px;">1</td>
                    <td>Polda Jabar</td>
                    <td>61</td>
                    <td>100</td>
                    <td>300</td>
                    <td class="badge badge-primary" style="margin-top: 5px;" >30%</td>
                    <td><img src="<?= base_url();?>template/asset/detail.svg" alt=""></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td class="badge badge-danger badge-pill" style="font-size: .6em;margin-top: 5px;" >2</td>
                    <td>Polda Jateng</td>
                    <td>61</td>
                    <td>100</td>
                    <td>300</td>
                    <td class="badge badge-primary" style="margin-top: 5px;" >30%</td>
                    <td><img src="<?= base_url();?>template/asset/detail.svg" alt=""></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td class="badge badge-danger badge-pill" style="font-size: .6em;margin-top: 5px;">3</td>
                    <td>Polda Metro Jaya</td>
                    <td>61</td>
                    <td>100</td>
                    <td>300</td>
                    <td class="badge badge-primary" style="margin-top: 5px;" >30%</td>
                    <td><img src="<?= base_url();?>template/asset/detail.svg" alt=""></td>
                </tr>
            </tbody>
            <!-- <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </tfoot> -->
        </table>
       </div>
       <div class="row">
        <div class="col-md-12">

        </div>
       </div>
    </div>
  </div>  
</body>

<?php $this->load->view("_incl/js.php") ?>
<?php $this->load->view("_incl/css.php") ?>