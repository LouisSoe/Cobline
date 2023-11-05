<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>General Dashboard &mdash; Stisla</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <?php $this->load->view('layout/ly-admin'); ?>


      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>
          <div class="mx-auto col-12 col-md-8 col-lg-8">
            <div class="card">
              <div class="card-body">

                <?php if ($data == null) { ?>
                  <form method="POST" action="<?php echo base_url('paslon/submit') ?>" enctype="multipart/form-data">
                    <div class="form-group">
                      <label>Nomer Kandidat</label>
                      <input type="text" name="kandidat" class="form-control" autocomplete="off" required autofocus>
                     
                    </div>
                    <div class="form-group">
                      <label>Nama Ketua</label>
                      <input type="text" name="nama_ketua" class="form-control" autocomplete="off" required autofocus>
                    </div>
                 
                    <div class="form-group">
                      <label>Nama Wakil</label>
                      <input type="text" name="nama_wakil" class="form-control" autocomplete="off" required>
                    </div>
                   
                    <div class="form-group">
                      <label>Gambar</label>
                      <input type="file" name="image" class="form-control" required>
                    </div>
              </div>
              <div class="card-footer text-right">
                <button class="btn btn-primary">Submit</button>
              </div>
              </form>
            <?php } else { ?>
              <form method="POST" action="<?php echo base_url('paslon/update/' . $data['no_kandidat']) ?>" enctype="multipart/form-data">
              <h3>Kandidat No. <?php echo $data['no_kandidat'] ?></h3>
              <div class="form-group">
                      <label>Nama Ketua</label>
                      <input type="text" name="nama_ketua" value="<?php echo $data['nama_ketua'] ?>" autocomplete="off" class="form-control" required autofocus>
                    </div>
                 
                    <div class="form-group">
                      <label>Nama Wakil</label>
                      <input type="text" name="nama_wakil" value="<?php echo $data['nama_wakil'] ?>" autocomplete="off" class="form-control" required>
                    </div>
                   
                    <div class="form-group">
                      <label>Gambar</label>
                      <br>
                      <img src="<?php echo base_url(). 'uploads/images/'.$data['image'] ?>" alt="" class="mt-2 mb-3" width="200px" height="220px">
                      <input type="hidden" name="old_image" value="<?php echo 'uploads/images/'.$data['image'] ?>">
                      <input type="file" name="gambar" class="form-control" required>
                    </div>
            </div>
            <div class="card-footer text-right">
              <button class="btn btn-primary">Submit</button>
            </div>
            </form>
          <?php } ?>

          </div>
      </div>
      </section>
    </div>
  </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/scripts.js"></script>
</body>

</html>