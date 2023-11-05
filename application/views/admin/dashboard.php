<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>General Dashboard &mdash; Stisla</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
  <style>
    .popup {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background: #fff;
      width: 450px;
      text-align: center;
      height: 400px;
      box-shadow: 0 25px 50px rgba(0, 0, 0, 0.1),
        0 0 0 1000px rgba(255, 255, 255, 0.87);
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 40px;
      visibility: hidden;
    }
    
    .popup.active {
      visibility: visible;
    }

    .close {
      position: absolute;
      top: 0;
      right: 0;
      padding: 10px 20px;
      background: #f00;
      color: #fff;
      border-radius: 0 0 0 10px;
      cursor: pointer;
    }
    #confetti{
      position: fixed;
      top:0;
      left:0;
      width: 100%;
      height: 100vh;
      z-index: 10000;
      visibility: hidden;
      pointer-events: none;
    }
    #confetti.active{
      visibility: visible;
    }
  </style>
</head>

<body class="body">
  <div id="app">
    <div class="main-wrapper">
      <?php $this->load->view('layout/ly-admin'); ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Admin</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $admin['id'] ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Sudah Memilih</h4>
                  </div>
                  <div class="card-body">
                    <?php echo ($nyoblos['id'] == null) ? 0 :$nyoblos['id'] ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Belum Memilih</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $golput;?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jumlah Pemilih</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $user['id']; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a href="<?php echo base_url('home/print'); ?>">Print</a>
          <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
              <div class="card">
                <div class="card-header">
                  <h4>Line Chart</h4>
                </div>
                <div class="card-body">
                  <canvas id="chart"></canvas>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
              <div class="card">
                <div class="card-header">
                  <h4>Bar Chart</h4>
                </div>
                <div class="card-body">
                  <canvas id="chart2"></canvas>
                </div>
              </div>
            </div>
          </div>
          <!-- <?php if($terbanyak != null){ ?>
            <div class="popup">
            <div class="">
            <h2>Selamat Kepada Kandidat No. <?php echo $terbanyak[0]['no_kandidat'] ?></h2><br>
            <p>Ketua Osis Tahun 2022/2023 : <?php echo $terbanyak[0]['nama_ketua'] . ' | ' . $terbanyak[0]['kelas_ketua'] ?></p>
            <p>Wakil Osis Tahun 2022/2023 : <?php echo $terbanyak[0]['nama_wakil'] . ' | ' . $terbanyak[0]['kelas_wakil'] ?></p><br>
            </div>
           
            <b class="close">x</b>
          </div>
         <?php } ?> -->
          
        </section>
        <!-- <canvas id="confetti"></canvas> -->
      </div>

    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/chart.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/confe.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/scripts.js"></script>

  <?php
  $this->load->view('admin/chart');
  ?>
  <script>
    let body = document.querySelector('.body');
    let popup = document.querySelector('.popup');
    let close = document.querySelector('.close');
    let confe = document.querySelector('#confetti');
    body.onload = function() {
      popup.classList.add('active');
      confe.classList.add('active');
    }
    close.onclick = function() {
      popup.classList.remove('active');
      confe.classList.remove('active');
    }

    var confettiSettings = {
      target: 'confetti'
    };
    var confetti = new ConfettiGenerator(confettiSettings);
    confetti.render();
  </script>
</body>

</html>