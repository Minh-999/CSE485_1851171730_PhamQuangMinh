<!doctype html>
<html lang="en">

<head>
    <title>Trang chủ</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">   
    <link rel="stylesheet" href="css/trangchu.css">
</head>
<body>
   <?php
   include("includes/header.php");
   ?>   
    <div class="container">
    <div id="demo" class="carousel slide" data-ride="carousel" style="padding:30px">
        <ol class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
            <li data-target="#demo" data-slide-to="4"></li>
            <li data-target="#demo" data-slide-to="5"></li> 
        </ol>
        <div class="carousel-inner" role="listbox" width="1050px" >
            <div class="carousel-item active">
                <img src="img/slide/banner.jpg" alt="First slide" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="img/slide/bia7-1-.jpg" alt="Second slide" class="d-block w-100">
            </div>         
            <div class="carousel-item">
                <img src="img/slide/hoi-thao.jpg" alt="Third-slide" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="img/slide/k54-tot-nghiep.jpg" alt="" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="img/slide/rivf-gala.jpg" alt="" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="img/slide/sanh-t54.jpg" alt="" class="d-block w-100">
            </div>         
        </div>
        <a class="carousel-control-prev" href="#demo" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#demo" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>   
    </div> 
    <div class="thongtin">
        <div class="row">
            <div class="col-md-2 b">
                <div class="anh1">
                    <img src="img/quality.jpg" alt="" srcset="">
                    <li>Chất lượng</li>
                </div>
            </div>
            <div class="col-md-2 b">
                <div class="anh2">
                    <img src="img/www.jpg" alt="" srcset="">
                    <li>Tạp chí</li>
                </div>
            </div>
            <div class="col-md-2 b">
                <div class="anh3">
                    <img src="img/library.jpg" alt="">
                    <li>Thư viện</li>
                </div>
            </div>
            <div class="col-md-2 b">
                <div class="anh4">
                    <img src="img/email.jpg" alt="">
                    <li>TLU Mail</li>
                </div>
            </div>
            <div class="col-md-2 b">
                <div class="anh5">
                    <img src="img/lichcongtac.jpg" alt="" srcset="">
                    <li>Lịch công tác</li>
                </div>
            </div>
            <div class="col-md-2 b">
                <div class="anh6">
                    <img src="img/user.jpg" alt="" srcset="">
                    <li>Đăng kí học</li>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="tuyensinh" style="text-align:center;">
        <div class="row">

            <div class="col-md-4" style="background-color:#443">
                <div class="anh1"  style="padding:30px">
                    <a href="http://ts.tlu.edu.vn/tuyen-sinh-dai-hoc"><img src="http://www.tlu.edu.vn/portals/0/images/front/TuyenSinhDH.jpg" alt="" width="400px" ></a>
                </div>
            </div>
            <div class="col-md-4" style="background-color:#333">
                <div class="anh2" style="padding:30px">
                     <a href="http://ts.tlu.edu.vn/tin-tuyen-sinh-thac-si"><img src="http://www.tlu.edu.vn/portals/0/images/front/TuyenSinhThacSi.jpg" alt="" width="400px"></a>
                </div>
            </div>
            <div class="col-md-4" style="background-color:#343">
                <div class="anh3" style="padding:30px">
                    <a href="http://ts.tlu.edu.vn/tin-tuyen-tien-si"><img src="http://www.tlu.edu.vn/portals/0/images/front/TuyenSinhTS.jpg" alt="" width="400px"></a>
                </div>
            </div>

        </div>
    </div>
   
   <?php
    include("includes/footer.php");
   ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>