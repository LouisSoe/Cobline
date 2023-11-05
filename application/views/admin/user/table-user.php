<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>General Dashboard &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/modules/datatables/datatables.min.css">
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
          <a href="<?php echo base_url('user/print') ?>" class="btn btn-success mb-3">Print</a>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped" id="table-1">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nama Lengkap</th>
                          <th>Kelas</th>
                          <th>Token</th>
                          <th>Level</th>
                          <th>Diubah</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 1;
                        foreach ($data as $user) { ?>
                          <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $user['nama'] ?></td>
                            <td><?php echo $user['nama_kelas'] ?></td>
                            <td><?php echo $generator->getBarcode($user['token'], $generator::TYPE_CODE_128, 1, 20); ?></td>
                            <td>
                              <?php if ($user['level'] == 'admin') {
                                echo "<div class='badge badge-success'>Admin</div>";
                              } else {
                                echo "<div class='badge badge-primary'>User</div>";
                              } ?>
                            </td>
                            <td><?php echo $user['tanggal'] ?></td>
                            <td><a href="<?php echo base_url('user/form/') . $user['id'] ?>" class="btn btn-warning mr-3">Edit</a><a href="<?php echo base_url('user/delete/') . $user['id'] ?>" class="btn btn-danger">Delete</a></td>
                          </tr>
                        <?php } ?>
                      </tbody>

                    </table>
                  </div>
                </div>
              </div>
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
  <script src="<?php echo base_url() ?>assets/modules/datatables/datatables.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/page/modules-datatables.js"></script>
  <script src="<?php echo base_url() ?>assets/js/scripts.js"></script>
</body>

</html>