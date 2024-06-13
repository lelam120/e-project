<?php
    require_once("functions/product.php");
    $old_car = old_car();
    $brand_alls = brand_all();
    $brands = [];
    $types = [];
    $styles = [];
    
    foreach ($brand_alls as $item) {
        $brands[] = strtolower($item['brand_name']);
        $types[] = strtolower($item['type']);
        $styles[] = strtolower($item['style']);
    }

    // Loại bỏ các giá trị trùng lặp
    $brands = array_unique($brands);
    $types = array_unique($types);
    $styles = array_unique($styles);




    // Lấy dữ liệu xe cho trang hiện tại
    $start_index = ($current_page - 1) * $items_per_page;
    $current_page_items = array_slice($old_car, $start_index, $items_per_page);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once("html/style.php"); ?>
    <link href="css/styles.css" rel="stylesheet">
</head>
<style>
        body {
            background-color: #f0f0f0; /* Màu nền của body */
            margin: 0;
            padding: 0;
        }
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
        .contact-info a{
            padding-left: 35px;
            color: #ffffff;
            font-size: 20px;
            font-weight: 700;
            line-height: 2.1rem;
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
                    <h1 class="text-light" style="font-weight:800">Used Car</h1>
                </div> 
            </div>
            <div class="bg py-4" style="background-color: #2c9f1c; height:100px;">
                <form class="d-flex w-50 mx-auto" role="search">
                    <input class="form-control" type="search" placeholder="Search Range Of Car" aria-label="Search">
                    <button class="btn btn" style="background-color: #000;" type="submit"><i class="bi bi-search" style="color:white"></i></button>
                </form>
            </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <!-- Search Form -->
            <div class="col-md-3">
            <?php include_once("html/Select_Options.php"); ?>

            </div>
            <div class="col-md-9">
                <div class="row" id="carListings">
                    <?php foreach($current_page_items as $item): ?>
                        <div class="col-md-4 mb-4 car-card" 
                            data-brand="<?php echo strtolower($item['brand']); ?>" 
                            data-type="<?php echo strtolower($item['type']); ?>" 
                            data-style="<?php echo strtolower($item['style']); ?>">
                            <div class="card">
                                <a href="/detail.php?id=<?php echo $item["oldcar_id"]; ?>">
                                    <img src="<?php echo $item["thumbnail"]; ?>" class="card-img-top" alt="<?php echo $item["car_name"]; ?>">
                                </a>
                                <div style="width: 100%;" class="card-body">
                                <h6 class="card-title" style="margin-top:10px;font-weight:600"><?php echo $item["car_name"]; ?></h6>
                                <i class="bi bi-tags" style="color:gray; margin:6px;font-size:small;"></i><span style="color:gray; margin-right:10px;font-size:small;">Chery</span>
                                <i class="bi bi-car-front" style="color:gray;margin:6px;font-size:small;"></i><span style="color:gray;font-size:small;">SUV</span>
                                    <a style="width:100%; margin-top:10px;" href="/detail.php?id=<?php echo $item["oldcar_id"]; ?>" class="btn btn custom-gray">View More</a>
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
                        <a href="#">No. 1291, Hanghai East Road, Economic and Technical Development Zone, Zhengzhou, He'nan Province, China</a>
                        <div class="container mt-5">
                            <div class="icon-container">
                                <i class="bi bi-facebook"></i>
                                <i class="bi bi-linkedin"></i>
                                <i class="bi bi-instagram"></i>
                                <i class="bi bi-twitter"></i>
                                <i class="bi bi-youtube"></i>
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