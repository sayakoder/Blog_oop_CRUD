<!-- ___________________database dan query_index -->
<?php
require_once('model/fungsix.php');

use Model\fungsi as fungsi;

$fungsi = new fungsi;

$result = $fungsi->getEmbohLList(@$_GET['q']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Di atas 3 meta tag * harus * datang pertama di kepala; setiap konten kepala lainnya harus datang * setelah * tag ini -->
    <title>Emboh</title>

    <!-- css -->

    <link rel="stylesheet" type="text/css" href="">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,700,700i|Josefin+Sans:700" rel="stylesheet"> -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="icon" href="assets/images/logo.png">



</head>
<body>
    <div class="container main">
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive img-rabbit" src="assets/images/contact.jpg">
            </div>

            <div class="col-md-6">
                <a href="indexx.php" class="btn btn-rabbit back"> <i class="fa fa-angle-left" aria-hidden="true"></i> Back to Home </a>
                <div id="watermark">
                    <h2 class="page-title" text-center>Edit Data</h2>
                    <div class="marker">Edit Data</div>
                </div>
                <p class='subtitle'>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </p>
                <!-- form -->

                <!--__________________________________________isi index  -->
                <fieldset>
                <legend><a href="#"><strong>Klik Rubah Untuk Edit</strong></a></legend> 
                    <table class="table">
                        <thead>
                            <tr style="font-size: 20px;" class="warning" align="center">
                                <th>Nama</th>
                                <th>Kelamin</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 20px;">
                            <?php 
                            while ($data= mysql_fetch_array($result)) {
                                ?>
                                <tr>
                                    <td class="success">
                                        <?php echo $data['nama']; ?>
                                    </td>
                                    <td class="danger">
                                        <?php echo $data['kelamin']; ?>
                                    </td>                      

                                    <td class="success">
                                        <a 
                                        href="update.php?id=<?php 
                                        echo $data['id_siswa'] ?>">Rubah<?php 
                                        $data['id_siswa'] ?>                            
                                    </a>
                                </td>
                                <?php } ?>
                            </tr>
                        </tbody>
                    </table>
                </fieldset>
                <!-- tutup data siswa -->

            </div>
        </div>
    </div>


    <footer class="text-center">
        <div class="container bottom">
            <div class="row">
                <div class="col-sm-12">
                    <p>Copyright <i class="fa fa-heartbeat" aria-hidden="true"></i> by <a href="https://themewagon.com/">Wawan.net</a></p>
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