<?php session_start();
if(isset($_SESSION['username'])) {
    header('location:index.php'); }
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
        <link href="../editing_page/assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="../editing_page/assets/css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="../editing_page/assets/css/font-awesome.min.css" rel="stylesheet">

        <link href="../editing_page/assets/css/main.css" rel="stylesheet">
        <link rel="icon" href="../editing_page/assets/images/logo.png">



    </head>
    <body>
        <div class="container main">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-responsive img-rabbit" src="../editing_page/assets/images/about.jpg">
                </div>

                <div class="col-md-6">
                    <a href="index_utama.php" class="btn btn-rabbit back"> <i class="fa fa-angle-left" aria-hidden="true"></i> Back to home </a>
                    <div id="watermark">
                        <h2 class="page-title" text-center>Buat Akun Anda disini</h2>
                        <div class="marker">Buat Akun Anda disini</div>
                    </div>
                    <form action="prosesdaftar.php" class="form_edit" method="post">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td colspan="2" align="center">
                                        <h1>Daftar Baru</h1>
                                    </td>
                                </tr>
                                <tr class="warning">
                                    <td> <input name="username" type="text" class="form-control" name="jeneng"  placeholder="Masukkan Nama" /></td>
                                </tr>
                                <tr class="danger">
                                    <td> <input name="password" type="password" class="form-control" name="jeneng"  placeholder="Masukkan Password" /></td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="right"><input type="submit" value="Daftar" class="btn btn-rabbit submit" /> <input type="reset" value="Batal" class="btn btn-rabbit submit" /></td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center">Sudah Punya akun ? <a href="index_utama.php"><b>Login</b></a></td>
                                </tr>
                            </tbody>
                        </table>
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

        <script src="../editing_page/assets/js/main.js"></script><!-- JS -->
        <script src="../editing_page/js/bootstrap.min.js"></script>
        <script src="../editing_page/js/jquery-3.1.0.min.js"></script>
    </body>
    </html>