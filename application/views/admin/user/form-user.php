
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>General Dashboard &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
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
                  <?php if($data == null){ ?>
                    <form method="POST" action="<?php echo base_url('user/submit') ?>">
                    <div class="card-body">
                      <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" maxlength="25" required autocomplete="off" autofocus>
                      </div>
                      <div class="form-group">
                        <label>Kelas</label>
                      <select class="form-control select" name="kelas" required>
                        <?php
                          foreach ($kelas as $kls) { ?>
                        <option value="<?php echo $kls['id_kelas'] ?>"><?php echo $kls['nama_kelas'] ?></option>
                          
                        <?php  }
                        ?>
                      </select>
                      </div>
                      <div class="form-group">
                      <label>Level</label>
                      <select class="form-control select" name="level" required>
                        <option value="user">Siswa</option>
                        <option value="admin">Guru</option>
                      </select>
                    </div>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                  <?php }else{ ?>
                    <form method="POST" action="<?php echo base_url('user/submit/') . $data['id'] ?>">
                    <div class="card-body">
                      <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" value="<?php echo $data['nama'] ?>" autocomplete="off" maxlength="25"  class="form-control" required autofocus>
                      </div>
                      <div class="form-group">
                        <label>Kelas</label>
                      <select class="form-control select" name="kelas" required>
                        <?php
                          foreach ($kelas as $kls) { ?>
                        <option value="<?php echo $kls['id_kelas'] ?>" <?php if($kls['id_kelas'] == $data['id_kelas']){ echo "selected"; } ?>><?php echo $kls['nama_kelas'] ?></option>
                          
                        <?php  }
                        ?>
                      </select>
                      </div>
                      <div class="form-group">
                      <label>Level</label>
                      <select class="form-control select" name="level" required>
                        <option value="user" <?php if($data['level'] == 'user'){ echo 'selected'; }?>>User</option>
                        <option value="admin" <?php if($data['level'] == 'admin'){ echo 'selected'; }?>>Admin</option>
                      </select>
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

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/scripts.js"></script>
</body>
</html>
