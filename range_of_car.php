<?php
// Kết nối đến database
$conn = new mysqli("localhost", "root", "root", "eproject");

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Lấy danh sách các hãng xe để hiển thị checkbox
$sql = "SELECT brand_id, brand_name, icon_brand FROM brand";
$brand_result = $conn->query($sql);

// Lấy danh sách các loại xe để hiển thị nút Kiểu xe
$sql = "SELECT DISTINCT type FROM cars";
$type_result = $conn->query($sql);

// Lấy danh sách tất cả các xe
$sql = "SELECT car_name, thumbnail, new_brand, type,
               (SELECT brand_name FROM brand WHERE brand_id = cars.new_brand) AS brand_name,
               (SELECT icon_brand FROM brand WHERE brand_id = cars.new_brand) AS brand_icon
        FROM cars WHERE old_new='new'";
$car_result = $conn->query($sql);
$cars = [];
if ($car_result->num_rows > 0) {
    while($row = $car_result->fetch_assoc()) {
        $cars[] = $row;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Brands</title>
    <?php include_once("html/style.php"); ?>
    <link href="css/styles.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Pagination JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.6/jquery.simplePagination.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.6/simplePagination.min.css">
    
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
        .car-card {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            margin: 10px; /* Khoảng cách giữa các thẻ ô tô */
            text-align: center;
            display: none; /* Ẩn các thẻ ô tô ban đầu */
        }

        .car-card img {
            max-width: 100%;
            border-bottom: 1px solid #ddd;
        }
        .car-card h2 {
            font-size: 1.2em;
            margin: 10px 0;
        }
        .brand-checkbox label,
        .type-radio label {
            display: block;
            margin-bottom: 10px;
        }
        .brand-checkbox img,
        .type-radio img {
            width: 20px;
            height: 20px;
            margin-right: 10px;
        }
        .brand-icon {
            width: 20px;
            height: 20px;
            margin-left: 5px;
            vertical-align: middle;
        }
        .icon-brand {
            font-size: 1em;
            margin-right: 5px;
            vertical-align: middle;
        }
        .pagination {
            position: relative;
            margin-top: 20px;
            left:30%;
            text-align: center; 
        } 
        .brand-checkbox label {
            display: flex;
            align-items: center;
        }

        .brand-checkbox img {
            width: 50px; 
            height: 50px;

        }

        .brand-checkbox label span {
            font-size: 14px; 
            font-weight: bold;
        }
        .Reset{
            text-decoration: none;
            color: #2c9f1c;
        }
        .reset{
            display: flex;
            justify-content: center;
            margin: 10px 0;
            font-weight: 600;
        }
        #showCheckboxesBtn{
            font-weight:700;
            height:45px;
        }
        #showTypeRadiosBtn{
            font-weight:700;
            height:45px;
        }
        .btn-custom {
            display: flex;
            align-items: center;
            justify-content: space-between; /* Căn chỉnh các mục con trong button */
            width: 150px; /* Đặt chiều rộng cố định để dễ dàng căn chỉnh */
        }
        .btn-custom i {
            transition: transform 0.3s;
        }
        .btn-custom:hover i {
            transform: rotate(180deg);
        }

</style>
<script>
    $(document).ready(function(){
        // Ẩn khối checkbox và radio button khi trang tải lên
        $("#brandCheckboxes").hide();
        $("#typeRadios").hide();
        $("#searchBrandInput").hide();
        // Sự kiện click nút "Chọn hãng xe"
        $("#showCheckboxesBtn").click(function(){
            $("#brandCheckboxes").toggle();
        });

        // Sự kiện click nút "Kiểu xe"
        $("#showTypeRadiosBtn").click(function(){
            $("#typeRadios").toggle();
        });

        // Sự kiện change của checkbox
        $("input[name='brand']").change(function(){
            filterCars();
        });

        // Sự kiện change của radio button
        $("input[name='type']").change(function(){
            filterCars();
        });

        function filterCars() {
            var selectedBrands = [];
            var selectedTypes = [];

            $("input[name='brand']:checked").each(function(){
                selectedBrands.push($(this).val());
            });

            $("input[name='type']:checked").each(function(){
                selectedTypes.push($(this).val());
            });

            if(selectedBrands.length > 0 || selectedTypes.length > 0) {
                $(".car-card").hide();
                selectedBrands.forEach(function(brandId){
                    selectedTypes.forEach(function(type){
                        $(".car-card[data-brand='" + brandId + "'][data-type='" + type + "']").show();
                    });
                });
            } else {
                $(".car-card").show();
            }
            paginate();
        }

        function paginate() {
            var items = $(".car-card:visible");
            var numItems = items.length;
            var perPage = 12; // Thay đổi số lượng xe trên mỗi trang tại đây

            items.slice(perPage).hide();

            $('.pagination').pagination({
                items: numItems,
                itemsOnPage: perPage,
                cssStyle: 'light-theme',
                onPageClick: function(pageNumber) {
                    var showFrom = perPage * (pageNumber - 1);
                    var showTo = showFrom + perPage;

                    items.hide().slice(showFrom, showTo).show();
                    window.scrollTo({ top: document.documentElement.scrollHeight/9, behavior: 'smooth' }); // Scroll lên đầu trang khi chuyển trang
                }
            });
        }

        // Hiển thị tất cả các thẻ xe khi trang tải lên
        $(".car-card").show();
        paginate();
    });
    </script>
<body>
    <header>
        <?php include_once("html/Header.php"); ?>
    </header>
    <section style="height:100%";>
    <div class="position-relative">
        <img style="width: 100%;" src="https://www.borderlesscar.com/wp-content/uploads/2023/07/toppic-ev.jpg" class="img-fluid">
            <div class="position-absolute" style="top: 40%; left: 42%;">
                <div class="d-flex align-items-center">
                    <h1 class="text-light" style="font-weight:800">Range Of Car</h1>
                </div> 
            </div>
            <div class="bg py-4" style="background-color: #2c9f1c; height:100px;">
                <form class="d-flex w-50 mx-auto" role="search">
                    <input class="form-control" type="search" placeholder="Search Range Of Car" aria-label="Search">
                    <button class="btn btn" style="background-color: #000;" type="submit"><i class="bi bi-search" style="color:white"></i></button>
                </form>
            </div>
    </div>

    <div class="container" style="width: 70%;margin-top: 100px;margin-bottom:100px">
        <div class="row">
            <div class="col-md-3" style="background-color:#242424;margin-top:10px;margin-bottom:60px;padding:38px;height:auto;color:white;border-radius:2px;">
            <p><h3><b>Search Options</b></h3></p>
                <form id="brandForm">
                    <button style="width:100%;background-color:#2c9f1c;color:white;text-align:left" type="button" class="btn btn mb-3 btn-custom" id="showCheckboxesBtn">Brand<i class="bi bi-caret-up-fill"></i></button>
                    <div id="brandCheckboxes" class="mb-3">
                    <input type="text" id="searchBrandInput" class="form-control mb-2" placeholder="Tìm kiếm...">
                        <?php
                        if ($brand_result->num_rows > 0) {
                            while($row = $brand_result->fetch_assoc()) {
                                echo '<div class="brand-checkbox">';
                                echo '<label>';
                                echo '<input style="border-radius:10px #2c9f1c; margin-left:10px; margin-right:5px;" type="checkbox" name="brand" value="'.$row['brand_id'].'">';
                                echo '<img src="'.$row['icon_brand'].'" alt="'.$row['brand_name'].'">';
                                echo $row['brand_name'];
                                echo '</label>';
                                echo '</div>';
                            }
                        }
                        ?>
                    </div>

                </form>

                <form id="typeForm">
                    <button style="width:100%;background-color:#2c9f1c;color:white;text-align:left" type="button" class="btn btn mb-3 btn-custom" id="showTypeRadiosBtn">Body Style<i class="bi bi-caret-up-fill"></i></button>
                    <div id="typeRadios" class="mb-3">
                        <?php
                        if ($type_result->num_rows > 0) {
                            while($row = $type_result->fetch_assoc()) {
                                echo '<div class="type-radio">';
                                echo '<label>';
                                echo '<input style="margin-left:10px;margin-right:10px;" type="checkbox" name="type" value="'.$row['type'].'">';
                                echo $row['type'];
                                echo '</label>';
                                echo '</div>';
                            }
                        }
                        ?>
                    </div>
                </form>
                <div class="reset">
                    <a style="font-size:15px;color:#2c9f1c;font-size:small;" class="Reset" href="/range_of_car.php" ><i style=" color:#2c9f1c;margin:2px;" class="bi bi-arrow-counterclockwise"></i>RESET ALL</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row" id="carCards">
                <?php
                foreach ($cars as $row) {
                    echo '<div style="width:300px;" class="col-md-3 car-card" data-brand="' . $row["new_brand"] . '" data-type="' . $row["type"] . '">';
                    echo '<a href="detail.php?id=' . $row["newcar_id"] . '" style="text-decoration: none;">';
                    echo '<img style="width:300px;height:300px;" src="' . $row["thumbnail"] . '" alt="' . $row["car_name"] . '">';
                    echo '</a>';
                    echo '<h5 style="font-size: 18px; font-weight: 700;">' . $row["car_name"] . '</h5>';
                    echo '<div class="car-info">';
                    echo '<p style="margin:0;font-size:15px;color:gray;margin-bottom:5px">';
                    echo '<i class="bi bi-tags icon-brand"></i> ' . $row['brand_name'];
                    echo '<span style="margin-left: 10px; margin-right: 10px;">|</span>';
                    echo '<i class="bi bi-car-front icon-brand"></i> ' . $row['type'];
                    echo '</p>';
                    echo '</div>';
                    echo '<a style="background:#f2f0ea;color:black;width:90%;padding:10px;font-weight:700;" href="detail.php?id=' . $row["newcar_id"] . '" class="btn btn">View More</a>';
                    echo '</div>';
                }
                ?>
                <div class="pagination"></div>

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