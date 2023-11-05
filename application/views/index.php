<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Layout &rsaquo; Transprent Sidebar &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
  <style>
   
/* Make the image to responsive */
.container{
  position: relative;
}
.overlay{
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width:88%;
  transition: .5s ease;
  opacity: 0;
  color: white;
  transform: translateY(-12px);
  font-size: 20px;
  padding: 20px 0;
  border-radius: 0 0 10px 10px;
  text-align: center;
}
.container:hover .overlay{
  opacity: 1;
}
.image {
  display: block;
  width: 290px;
  border-radius: 10px;
  height: 360px;
}

  </style>
</head>

<body class="layout-2">
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <a href="index.html" class="navbar-brand sidebar-gone-hide">CobLine</a>
       
        
        <ul class="ml-auto navbar-nav navbar-right">
        <a href="<?php echo base_url('home/logout') ?>" class="btn btn-danger">Logout </a>
        <!-- <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="<?php echo base_url() ?>assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, <?php echo ucwords($this->session->nama) ?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="<?php echo base_url('home/logout') ?>" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li> -->
        </ul>
      </nav>

      <div class="main-content">
        <!-- <section class="section"> -->

          <div class="section-body mx-auto">
            
        </div>
            <div class="row">
            <?php foreach($data as $paslon){ ?>
              <a href="<?php echo base_url('home/coblos/'). $paslon['no_kandidat'] ?>" style="max-width:330px" class="container ml-4 mr-3 text-decoration-none">
                <div class="card-body">
                  <img src="<?php echo 'uploads/images/'. $paslon['image'] ?>" class="image" alt="">
              <h5 class="mx-auto mt-3 overlay">Kandidat No.<?php echo $paslon['no_kandidat'] ?></h5>
                </div>
              </a>
              
              <?php } ?>
            </div>
          </div>
        <!-- </section> -->
      </div>
      
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/scripts.js"></script>

  <script>
    // const batas = setTimeout(goLogin, 5000)
    // function goLogin(){
    //   window.location.href="home/golput";
    // }
  </script>
</body>
</html>
