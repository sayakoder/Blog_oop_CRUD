<?php

require_once('model/fungsix.php');

use Model\fungsi as fungsi;

$fungsi = new fungsi;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Di atas 3 meta tag * harus * datang pertama di kepala; setiap konten kepala lainnya harus datang * setelah * tag ini -->
    <title>Tambah</title>

    <!--css-->

    <link rel="stylesheet" type="text/css" href="">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="icon" href="assets/images/logo.png">
</head>

<body>
    <div class="container main">
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive img-rabbit" src="assets/images/about.jpg">
            </div>

            <div class="col-md-6">
                <a href="indexx.php" class="btn btn-rabbit back"> 
                    <i class="fa fa-angle-left" aria-hidden="true">
                    </i> Back to home </a>
                    <div id="watermark">
                        <h2 class="page-title" text-center>Detail Siswa</h2>
                        <div class="marker">Detail Siswa</div>
                    </div>
                    <!-- _____________query penjelasan -->
                    <?php 
                    $data1 = $fungsi->penjelasan();

                    while ($data = mysql_fetch_array($data1)) {
                        ?>                
                        <br>
                        <!-- _____________________isi penjelasan -->
                        <div id="watermark">
                            <h3>
                                <label style="font-size: 25px;">
                                    Nama:
                                </label>           
                                <?php echo $data['nama'] ?>
                            </h3>
                            <div class="marker">
                                <?php echo $data['nama'] ?> 
                            </div>
                        </div>

                        <br>

                        <div id="watermark">
                            <h3>
                                <label style="font-size: 25px;">
                                    Alamat:
                                </label> 
                                <?php echo $data['alamat'] ?>
                            </h3>
                            <div class="marker">
                                <?php echo $data['alamat'] ?>
                            </div>
                        </div>
                        <br>

                        <div id="watermark">
                            <h3>
                                <label style="font-size: 25px;">
                                    Kelamin:
                                </label>    
                                <?php echo $data['kelamin'] ?>
                            </h3>
                            <div class="marker">
                                <?php echo $data['kelamin'] ?>
                            </div>
                        </div>
                        <br>

                        <div id="watermark">
                            <h3>
                                <label style="font-size: 25px;">
                                    Nilai:
                                </label>  
                                <?php echo $data['nilai'] ?>
                            </h3>
                            <div class="marker">
                                <?php echo $data['nilai'] ?>
                            </div>
                        </div>
                        <br>

                        <div id="watermark">
                            <h3>
                                <label style="font-size: 25px;">
                                    Pelajaran:
                                </label>  
                                <?php echo $data['nama_pelajaran'] ?>
                            </h3>
                            <div class="marker">
                                <?php echo $data['nama_pelajaran'] ?>
                            </div>
                        </div>
                        <br>
                        <?php } ?>
                    </div>
                </div>
            </div>


            <footer class="text-center">
                <div class="container bottom">
                    <div class="row">
                        <div class="col-sm-12">
                            <p>Copyright <i class="fa fa-heartbeat" aria-hidden="true"></i> by <a href="#">Wawan.net</a></p>
                        </div>
                    </div>
                </div>
            </footer>

            <script src="assets/js/main.js"></script><!-- JS -->
            <script src="js/bootstrap.min.js"></script>
            <script src="js/jquery-3.1.0.min.js"></script>
        </body>
        </html>
