
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
                <a href="indexx.php" class="btn btn-rabbit back"> <i class="fa fa-angle-left" aria-hidden="true"></i> Back to home </a>
                <div id="watermark">
                    <h2 class="page-title" text-center>Tambah Data</h2>
                    <div class="marker">Tambah Data</div>
                </div>

               <?php 
                // $id = $_GET['id'];

                // $data_nilai = $fungsi->getNilai(@$id);

                $result_pelajaran = $fungsi->getPelajaran();
                

                // $data_siswa = $fungsi->getSiswa($id);

                ?>

                <!-- _____________________________________________________isi penambahan -->

                <form class="form_edit" action="proses_penambahan.php" method="POST">
                    <!-- nama:  -->
                    <div class="form-group">
                        <input type="text" class="form-control" name="jeneng"  placeholder="Masukkan Nama">
                    </div>
                    <!-- alamat:  -->
                    <div class="form-group">
                        <input type="text" class="form-control" name="alamat"  placeholder="Masukkan Alamat">
                    </div>

                    <!-- jk baru -->
                    <div class="form-group">
                        <label style="font-size: 25px;">Jenis Kelamin:</label>
                        <select class="form-control" name="kelamin">
                            <option>laki-laki</option>
                            <option>perempuan</option>
                        </select>
                    </div>


                    <!-- mata pelajaran:  -->
                    <div class="form-group">
                        <label style="font-size: 25px;"> Mata Pelajaran:</label>
                        <select class="form-control" name="pelajaran">
                            <?php 
                            while ($data_pelajaran = mysql_fetch_array(
                                $result_pelajaran)) {
                                    ?>
                                    <option value="<?php echo $data_pelajaran['id_matpel'] ?>">
                                        <?php 
                                        echo $data_pelajaran['nama_pelajaran'] 
                                        ?>  
                                    </option>
                                    <?php  }?>
                                </select>
                            </div>
                            <!-- Nilai: -->
                            <div class="form-group">
                                <input type="text" class="form-control" name="nilai"  placeholder="Masukkan Nilai">
                            </div><br>
                            <!-- submit -->
                            <button type="submit" class="btn btn-rabbit submit">Simpan</button>
                        </form>

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
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/jquery-3.1.0.min.js"></script>
        </body>
        </html>