<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
</head>

<body>
  <!-- <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
           

            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>

              <div class="card-body">
                <form method="POST" action="<?php echo base_url('home/login') ?>" class="needs-validation">
                  <div class="form-group">
                    <label>Token</label>
                    <input type="text" class="form-control" name="token" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your token
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div> -->
  <div id="app">
        <section class="section">
            <div class="d-flex align-items-stretch flex-wrap">
                <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
                    <div class="m-3 p-4">
                        <img src="assets/img/smk3.jpg"
                            alt="logo"
                            width="80"
                            class="shadow-light rounded-circle mb-5 mt-2">
                        <h4 class="text-dark font-weight-normal">Selamat Datang di<span class="font-weight-bold">   C-Vote</span>
                        </h4>
                        <p class="text-muted">Aplikasi voting ketos waktos baru</p>
                            <form method="POST"
                            action="<?php echo base_url('home/login') ?>">
                            <div class="form-group">
                                <label>Token</label>
                                <input 
                                    type="text"
                                    class="form-control"
                                    name="token"
                                    autocomplete="off"
                                    required
                                    autofocus>
                                <!-- <div class="invalid-feedback">
                                    Please fill in your email
                                </div> -->
                            </div>

                            <!-- <div class="form-group">
                                <div class="d-block">
                                    <label for="password"
                                        class="control-label">Password</label>
                                </div>
                                <input id="password"
                                    type="password"
                                    class="form-control"
                                    name="password"
                                    tabindex="2"
                                    required>
                                <div class="invalid-feedback">
                                    please fill in your password
                                </div>
                            </div> -->


                            <div class="form-group text-right">
                                
                                <button type="submit"
                                    class="btn btn-primary btn-lg btn-icon icon-right"
                                    tabindex="4">
                                    Login
                                </button>
                            </div>

                        </form>

                        <div class="text-small mt-5 text-center">
                            Made with 💛 by XII RPL Vito and Rafly
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-12 order-lg-2 min-vh-100 background-walk-y position-relative overlay-gradient-bottom order-1"
                    data-background="assets/img/unsplash/login-bg.jpg">
                    <div class="absolute-bottom-left index-2">
                        <div class="text-light p-5 pb-2">
                            <div class="mb-5 pb-3">
                                <h1 class="display-4 font-weight-bold mb-2">AYO PILIH</h1>
                                <h5 class="font-weight-normal text-muted-transparent">Skaga, Osis 2022</h5>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
