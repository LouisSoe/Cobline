<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<body onload="window.print()">
<div class="row mt-2 ml-4 mr-4">
    <?php foreach ($data as $print) {
        if($print['level'] == 'user'){ ?>
        <div class="col-12 col-md-3 mb-2 col-lg-3">
            <div class="card card-primary" style="width: 20rem; height: 10rem;">
                <h5 class="text-center">Kartu Pemilih</h5>
                <div class="card-header mt-3">
                    <div>
                    <h4 style="color: black">Nama: <?php echo $print['nama'] ?></h4>
                    <h4 style="color: black">Kelas: <?php echo $print['nama_kelas'] ?></h4>
 
                    <div class="text-center mt-1">
                    <?php echo $gen->getBarcode($print['token'], $gen::TYPE_CODE_128,1, 20); ?>
                    <p><small><?php echo $print['token'] ?></small></p>
                    </div>
                   
                    </div>
                </div>
              
            </div>
        </div>
    <?php } } ?>
</div>    
</body>

<script>
    const batas = setTimeout(goLogin, 100)
    function goLogin(){
      window.location.href="../user";
    }
</script>
