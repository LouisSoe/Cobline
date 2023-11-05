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
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped" id="table-1">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nama Kelas</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 1;
                        foreach ($data as $kelas) { ?>
                          <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $kelas['nama_kelas'] ?></td>
                            <td><a href="<?php echo base_url('kelas/form/') . $kelas['id_kelas'] ?>" class="btn btn-warning mr-3">Edit</a><a href="<?php echo base_url('kelas/delete/') . $kelas['id_kelas'] ?>" class="btn btn-danger">Delete</a></td>
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