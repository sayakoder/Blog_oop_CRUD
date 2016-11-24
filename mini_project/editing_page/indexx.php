<?php session_start();
if(!isset($_SESSION['username'])) {
    header('location:../face_page/index_utama.php'); }
    else { $username = $_SESSION['username']; }
    require_once("../face_page/koneksi.php");
    $query = mysql_query("SELECT * FROM user WHERE username = '$username'");
    $hasil = mysql_fetch_array($query);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Di atas 3 meta tag * harus * datang pertama di kepala; setiap konten kepala lainnya harus datang * setelah * tag ini -->
        <title>Home</title>
        <link rel="icon" type="image/icon" href="assets/images/tabicon.ico">


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
                <div class="col-md-8">

                    <!-- ___________________database dan query_index -->
                    <?php
                    require_once('model/fungsix.php');

                    use Model\fungsi as fungsi;

                    $fungsi = new fungsi;

                    $result = $fungsi->getEmbohLList(@$_GET['q']);
                    ?>

                    <!--__________________________________________isi index  -->

                    <form action="indexx.php" class="form_edit" method="GET">
                        <div class="form-group">

                            <!-- <input type="name" class="form-control" name="q" id="exampleInputName" placeholder="Pencarian" value="<?php //echo @$_GET['q']?>"></div>
                            <button type="submit" class="btn btn-rabbit submit">Cari</button> -->

                        </form>

                        <form class="form_edit">

                            <input type="text" id="search" class="form-control" placeholder="Pencarian"/>
                            <input type="button" id="button" class="btn btn-rabbit submit" value="Cari" />
                            <ul id="result"></ul>

                        </form>
                        <fieldset>
                            <legend><a href="#"><strong>Tabel Data Siswa</strong></a></legend> 
                            <table class="table">
                                <thead>
                                    <tr style="font-size: 20px;" class="warning" align="center">
                                        <th>Nama</th>
                                        <th>alamat</th>
                                        <th>kelamin</th>
                                        <th>nilai</th>
                                        <th>mapel</th>
                                        <th>hapus</th>
                                        <th>detail</th>
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
                                            <td class="warning">
                                                <?php echo $data['alamat']; ?>
                                            </td>

                                            <td class="danger">
                                                <?php echo $data['kelamin']; ?>
                                            </td>
                                            <td class="active">
                                                <?php echo $data['nilai']; ?>
                                            </td>
                                            <td class="warning">
                                                <?php echo $data['nama_pelajaran']; ?>
                                            </td>
                                            <td class="danger">
                                                <a 
                                                href="hapus.php?id=<?php 
                                                echo $data['id_siswa'] ?>">Delete <?php 
                                                $data['id_siswa'] ?>
                                            </a>
                                        </td>
                                        <td class="success">
                                            <a 
                                            href="penjelasan.php?id=<?php 
                                            echo $data['id_siswa'] ?>">detail<?php 
                                            $data['id_siswa'] ?>                            
                                        </a>
                                    </td>
                                </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </fieldset>

                    <!-- tutup data siswa -->

                    <!-- <img class="img-responsive img-rabbit" src="assets/images/home.jpg"> -->
                </div>
                <div class="col-md-4">
                   <!--  <div id="watermark">
                        <h2 class="page-title" text-center>Data Siswa</h2>
                        <div class="marker">Data Siswa</div>
                    </div> -->
                   <!--  <p class='subtitle'>
                       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, vel, ex. </p>

                       <div class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos impedit sit fuga in officia, omnis rem. Sint molestias repudiandae aperiam tempore fuga atque sunt, autem quibusdam enim amet molestiae nisi!</div> -->
                   </div>
                   <div class="btn-group-vertical custom_btn">
                    <a href="penambahan.php" class="btn btn-rabbit _active" >Tambah</a>
                    <a href="upload_image.php" class="btn btn-rabbit">Upload</a>
                    <a href="emboh.php" class="btn btn-rabbit">Update</a>
                    <a href="../face_page/index_utama.php" class="btn btn-rabbit">Keluar</a>
                </p>
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


    <!-- <script src="assets/js/jquery-3.1.0.min.js"></script> -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script><!-- JS -->
    <script src="assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){

           function search(){

              var nama=$("#search").val();

              if(nama!=""){
                $("#result").html("<img src='assets/images/ajax-loader.gif'/>");
                $.ajax({
                    type:"post",
                    url:"search.php",
                    data:"nama="+nama,
                    success:function(data){
                        $("#result").html(data);
                        $("#search").val("");
                    }
                });
            }



        }

        $("#button").click(function(){
           search();
       });

        $('#search').keyup(function(e) {
           if(e.keyCode == 13) {
            search();
        }
    });
    });
</script>
</body>
</html>