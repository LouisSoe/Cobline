<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
<body>
<center>
<div class="row">
            
<div class="col-12 col-md-6 col-lg-6">
              <div class="card">
                <div class="card-header">
                  <h4>Bar Chart</h4>
                </div>
                <div class="card-body">
                  <canvas id="chart"></canvas>
                </div>
              </div>
            </div><div class="col-12 col-md-6 col-lg-6">
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
<table border="2">
        <thead>
        <th>No Kandidat</th>
        <th>Nama Ketua</th>
        <th>Jumlah Pemilih</th>
        </thead>
       <tbody>
        <?php foreach($data as $print){ ?>
        <tr>
            <td><?php echo $print['no_kandidat'] ?></td>
            <td><?php echo $print['nama_ketua'] ?></td>
            <td><?php echo $print['pemilih'] ?></td>
        </tr>
        <?php } ?>
       
       </tbody>
    </table>
</center>
  
</body>
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
    var set = setInterval(() => {
        window.print();
        window.location.href="../home";
    }, 800);
    
</script>
