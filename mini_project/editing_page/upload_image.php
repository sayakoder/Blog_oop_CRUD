
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Di atas 3 meta tag * harus * datang pertama di kepala; setiap konten kepala lainnya harus datang * setelah * tag ini -->
    <title>Upload</title>

    <!--css-->

    <link rel="stylesheet" type="text/css" href="">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="icon" href="assets/images/logo.png">



</head>
<body>
    <div class="container main">
        <div class="row">
            <div class="col-md-6">
                <div id="owl-demo" class="owl-carousel owl-theme">
                    <div class="item"><img class="img-responsive img-rabbit" src="file/_wawan.png"></div>
                    <div class="item"><img class="img-responsive img-rabbit" src="assets/images/home.jpg"></div>
                    <div class="item"><img class="img-responsive img-rabbit" src="assets/images/contact.jpg"></div>
                </div>
            </div>

            <div class="col-md-6">
                <a href="indexx.php" class="btn btn-rabbit back"> <i class="fa fa-angle-left" aria-hidden="true"></i> Back to Home </a>
                <div id="watermark">
                    <h2 class="page-title" text-center>Upload</h2>
                    <div class="marker">Upload</div>
                </div>
                <p class='subtitle'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis voluptatibus eveniet molestias, quos, recusandae sint repellat vel, voluptatum corrupti inventore eos explicabo assumenda fugiat quaerat! Dicta libero veritatis numquam eius!
                </p>
                <form class="form_edit" action="upload.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label style="font-size: 25px;"> Pilih Gambar Untuk Upload</label>
                        <input type="file" class="form-control" name="file_upload" id="fileToUpload">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-rabbit submit" value="Upload Image" name="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>


    <footer class="text-center">
        <div class="container bottom">
            <div class="row">
                <div class="col-sm-12">
                    <p>Coopyright <i class="fa fa-heartbeat" aria-hidden="true"></i> by <a href="#">Wawan.net</a></p>
                </div>
            </div>
        </div>
    </footer>


    <script src="assets/js/jquery-3.1.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>