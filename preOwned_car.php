<?php
    require_once("functions/product.php");
    $newest_products = null;
    $checkbrand = brand_all();;

    $hangxe  = isset($_GET['brand']) ? intval($_GET['brand']) : 0;
    $bodysitai  = isset($_GET['bodystyle']) ? intval($_GET['bodystyle']) : 0;

    if ($hangxe == 0 & $bodysitai == 0) {
        $newest_products = old_car();
       
    } else if ($hangxe == 0 & $bodysitai != 0) {
        $newest_products = body_callOld($bodysitai);

    }else if ($hangxe != 0 & $bodysitai == 0) {
        $newest_products = brand_callOld($hangxe);
              
    }else if ($hangxe != 0 & $bodysitai != 0){
        $newest_products = brandBody_Old($hangxe,$bodysitai);
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Range Of Car</title>
    <?php include_once("html/style.php"); ?>
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/trangchu.css" rel="stylesheet">
</head>
<style>
        .boxbox{
            background-color: white; /* Màu nền của boxbox */
            width: 70%; /* Độ rộng của boxbox */
            margin:auto;
            padding: 50px;
            border: 2px solid #fff; /* Viền của boxbox */
            box-shadow: 0 0 20px rgba(0,0,0,0.2); /* Đổ bóng */
            border-bottom: 2px solid #2c9f1c; /* Đường viền màu xanh dưới */
        }
        .contact-info {
            background-color: #242424;
            padding: 40px;
            background: url(img/car-shape2.png) no-repeat 50% 96% #222;
            background-size: 470px 100px;
        }
        .contact-info h2 {
            color: #6b6a69;
            padding-bottom: 20px;
        }
        .contact-info p{
            color: #696b6b;
            margin-top: 10px;
            margin-bottom: 3px;
        }
        .contact-info>a{
            margin-left: 20px;
            color: #ffffff;
            font-size: 18px;
            font-weight: 700;
            line-height: 2.1rem;
        }
        .contact-info .canle{
            margin-left: 20px;
         
        }
        .contact-info .canle>a{
           
            color: #ffffff;
            font-size: 20px;
            font-weight: 700;
            line-height: 2.1rem;
         
        }
        .contact-info .canle>a:hover{
           
            text-decoration: none;
            color: #2c9f1c; 
       }
        .contact-info a:hover{
            text-decoration: none;
            color: #2c9f1c; /* Đổi màu khi hover */
        }
        .contact-info i {
            color: #21b83a;
            margin-right: 10px;
        }
        .contact-form {
            padding: 20px;
            border-radius: 5px;
            background-color: #fff;
        }
        .contact-form h1 {
            color: #0e0e0e;
            font-size: 45px;
            font-weight: 800;
        }
        .contact-form p{
            color:gray;
        }
        .contact-form .form-group {
            margin-bottom: 20px;
        }
        .contact-form .form-group i {
            color: #28a745;
            margin-right: 10px;
        }
        .form-column {
            display: flex;
            justify-content: space-between;
        }
        .form-column .form-group {
            width: 48%; /* Adjust width as needed */
        }
        .form-group.full-width {
            width: 100%;
        }
        .form-group textarea {
            height: 150px; /* Adjust height as needed */
        }
        .icon-container {
            display: flex;
            justify-content: center; /* Căn giữa các icon */
            gap: 20px; /* Khoảng cách giữa các icon */
        }
        .icon-container i {
            font-size: 27px; /* Kích thước icon */
            color:#2c9f1c;
        }
        .card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            overflow: hidden;
        }

        .card:hover {
            transform: scale(1.1);
        }
        
</style>
<body>
    <header>
        <?php include_once("html/Header.php"); ?>
    </header>
    <section style="height:100%";>
    <div class="position-relative">
        <img style="width: 100%;" src="https://www.borderlesscar.com/wp-content/uploads/2023/07/toppic-used.jpg" class="img-fluid">
            <div class="position-absolute" style="top: 40%; left: 42%;">
                <div class="d-flex align-items-center">
                    <h1 class="text-light" style="font-weight:800">PreOwned Car</h1>
                </div> 
            </div>
            <div class="bg py-4" style="background-color: #2c9f1c; height:100px;">
                <form class="d-flex w-50 mx-auto" role="search"  action="/range_of_car.php" method="GET">
                    <input class="form-control" type="search" name="search" placeholder="Search PreOwned Car" aria-label="Search" value="<?php echo $item["brand_id"]; ?>">
                    <button class="btn btn" style="background-color: #000;" type="submit"><i class="bi bi-search" style="color:white"></i></button>
                </form>
            </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <!-- Search Form -->
            <div class="col-md-3">
            <?php include_once("html/Select_PreOwned_Cars.php"); ?>
            </div>
            <div class="col-md-9">
                <div class="row" id="carListings">
                    <?php foreach($newest_products as $item): ?>
                        <div class="col-md-4 mb-4 car-card">
                            <div class="card">
                                <a href="/detail.php?id=<?php echo $item["newcar_id"]; ?>">
                                    <img src="<?php echo $item["thumbnail"]; ?>" class="card-img-top" alt="<?php echo $item["car_name"]; ?>">
                                </a>
                                <div style="width: 100%;" class="card-body">
                                <h6 class="card-title" style="margin-bottom:5px;font-weight:700;text-align:center"><?php echo $item["car_name"]; ?></h6>
                                <div style="text-align:center">
                                    <span style="color:gray;margin-bottom:10px">【 </span>
                                    <i class="bi bi-tags" style="color:gray; margin:3px;font-size:small;"></i><span style="color:gray;font-size:small;"><?php echo $item["brand_name"]; ?></span>
                                    <span style="color:gray;">||</span>
                                    <i class="bi bi-car-front" style="color:gray;margin:3px;font-size:small;"></i><span style="color:gray;font-size:small;"><?php echo $item["typecar"]; ?></span>
                                    <span style="color:gray;">】</span>
                                </div>
                                <a style="width:100%; margin-top:20px;" href="/detail.php?id=<?php echo $item["newcar_id"]; ?>" class="btn btn custom-gray">View More</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    </section>
    <section class="boxbox">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-5">
                    <div class="contact-info">
                        <h2><i class="fas fa-info-circle"></i> Contact Info</h2>
                        <p><i class="bi bi-chat-dots"></i> Phone / Whatsapp / Wechat</p>
                        <a href="#">+8619037179250 </a>
                        <p><i class="bi bi-envelope"></i> Send Email</p>
                        <a href="#">info@borderlesscar.com</a>
                        <p><i class="bi bi-telephone"></i> Tel</p>
                        <a href="#">+86-19037179250 </a>
                        <p><i class="bi bi-geo-alt"></i> Address</p>
                        <div class="canle"><a href="#">No. 1291, Hanghai East Road, Economic and Technical Development Zone, Zhengzhou, He'nan Province, China</a></div>
                        <div class="container mt-5">
                        <div class="icon-container">
                                <a href="https://www.facebook.com/Opel/?locale=vi_VN"><i class="bi bi-facebook"></i></a>
                                <a href="https://www.linkedin.com/company/opelautomobile"><i class="bi bi-linkedin"></i></a>
                                <a href="https://www.instagram.com/opel/"><i class="bi bi-instagram"></i></a>
                                <a href="https://x.com/Opel?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="bi bi-twitter"></i></a>
                                <a href="https://www.youtube.com/channel/UCSr5PuKiJ5Zi00zfsiT-7jA"><i class="bi bi-youtube"></i></a> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="contact-form">
                        <h1>Get In Touch</h1>
                        <p>Complete control over products allows us to ensure our customers receive the best quality prices and service.</p>
                        <form>
                            <div class="form-column">
                                <div class="form-group">
                                    <label for="name"><i class="bi bi-person-fill"></i> Name *</label>
                                    <input type="text" class="form-control" id="name" placeholder="Nhập họ và tên">
                                </div>
                                <div class="form-group">
                                    <label for="email"><i class="bi bi-envelope-fill"></i> Email *</label>
                                    <input type="email" class="form-control" id="email" placeholder="Nhập email">
                                </div>
                            </div>
                            <div class="form-column">
                                <div class="form-group">
                                    <label for="country"><i class="bi bi-geo-alt-fill"></i> Country / Region *</label>
                                    <input type="text" class="form-control" id="country" placeholder="Nhập quốc gia hoặc vùng miền">
                                </div>
                                <div class="form-group">
                                    <label for="mobile"><i class="bi bi-telephone"></i> Mobile *</label>
                                    <input type="text" class="form-control" id="mobile" placeholder="Nhập số điện thoại di động">
                                </div>
                            </div>
                            <div class="form-group full-width">
                                <label for="message"><i class="bi bi-chat-dots-fill"></i> Message *</label>
                                <textarea class="form-control" id="message" rows="4" placeholder="Nhập tin nhắn của bạn"></textarea>
                            </div>
                            <button style="background-color: #2c9f1c;color:white;width:100%;height:50px " type="submit" class="btn btn">Submit<i style="padding-left: 10px;" class="bi bi-send-fill"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include_once("html/Footers.php"); ?>
</body>
</html>