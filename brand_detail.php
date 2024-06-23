<?php
    require_once("functions/product.php");

    if (isset($_GET['brand'])) {
        $brand = $_GET['brand'];
        $brand_detail = brand_detail($brand);
    } else {
        echo "No ID received";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php foreach($brand_detail as $item):?><?php echo 'Brand ' .$item['brand_name']?><?php endforeach;?></title>
    <?php include_once("html/style.php"); ?>
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/trangchu.css" rel="stylesheet">

</head>
<style>
        .boxbox{
            background-color: white;
            width: 75%; 
            padding: 30px;
            position: relative;
            top: 400px;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10; 
            padding: 50px;
            border: 2px solid #fff; 
            box-shadow: 0 0 20px rgba(0,0,0,0.2); 
            border-bottom: 2px solid #2c9f1c; 
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
            color: #2c9f1c;
        }
        .contact-info i {
            color: #21b83a;
            margin-right: 10px;
        }
        .contact-form {
            padding: 20px;
            padding-top:0px;
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
            padding-top: 15px;
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
            width: 48%; 
        }
        .form-group.full-width {
            width: 100%;
        }
        .form-group textarea {
            height: 150px; 
        }
        .icon-container {
            display: flex;
            justify-content: center; 
            gap: 20px; 
        }
        .icon-container i {
            font-size: 27px; 
            color:#2c9f1c;
        }

      
</style>
<body>
    <header>
        <?php include_once("html/Header.php"); ?>
    </header>
    <?php foreach($brand_detail as $item): ?>
        <div class="position-relative">
            <img style="width: 100%;" src="<?php echo $item["back_img"]; ?>" class="img-fluid">
            <div class="position-absolute" style="top: 45%; left: 46%;">
                <div class="d-flex align-items-center">
                    <h1 class="text-light" style="font-weight:900;font-size:50px;"><?php echo $item['brand_name']?></h1>
                </div> 
            </div>
        </div>
        <main>
            <section class="produc" >
                <div class="tren" >
                    <div class="trai" style="width: 50%;" >
                        <p style="font-size: 40px;color:black;" id="tieude"><?php echo $item['brand_name']?></p>
                        <hr style="width:100px;border-width: 3px;color:green;">
                        <p style="color:black;"><?php echo nl2br($item['infor']); ?></p>
                       </div>
                    <div class="phai" style="background-image:url(<?php echo $item["thumbnail"]; ?>);width:710px; height:443px;border-radius:4px;"></div>
                </div>
            </section>
            <div style="width:100%;height:300px;background-image:linear-gradient(0,rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7)) ,url(https://www.borderlesscar.com/wp-content/uploads/2023/07/banner2-10.jpg)">
                <h5 style="padding:120px 400px;font-weight:800;">Borderless Car is a professional car import and export trade company. We want to create a borderless world auto industry. The following is the vehicle models that we are selling.</h5>
            </div>
        </main>
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
                        <form action="/functions/form.php" method="post">
                            <div class="form-column">
                                <div class="form-group">
                                    <label for="name"><i class="bi bi-person-fill"></i> Name *</label>
                                    <input type="text" class="form-control" id="name" name="Name" placeholder="Name *" required>
                                </div>
                                <div class="form-group">
                                    <label for="email"><i class="bi bi-envelope-fill"></i> Email *</label>
                                    <input type="email" class="form-control" id="email" name="Email" placeholder="Email *" required>
                                </div>
                            </div>
                            <div class="form-column">
                                <div class="form-group">
                                    <label for="country"><i class="bi bi-geo-alt-fill"></i> Country / Region *</label>
                                    <input type="text" class="form-control" id="country" name="address" placeholder="Address *" required>
                                </div>
                                <div class="form-group">
                                    <label for="mobile"><i class="bi bi-telephone"></i> Mobile *</label>
                                    <input type="number" class="form-control" id="mobile" name="telephone" placeholder="Telephone *" required>
                                </div>
                            </div>
                            <div class="form-group full-width">
                                <label for="message"><i class="bi bi-chat-dots-fill"></i> Message *</label>
                                <textarea class="form-control" id="message" rows="4" name="message" placeholder="Message *" ></textarea>
                            </div>
                            <button style="background-color: #2c9f1c;color:white;width:100%;height:50px " type="submit" class="btn btn">Submit<i style="padding-left: 10px;" class="bi bi-send-fill"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php endforeach; ?>
    <main>
    <section class="nam">
            <img src="/img/img-car.png" />
            <div class="giua" >
                <div class="cac goc" >
                    <p id="tieude">Vehicle Diversity</p>
                    <p ><h1 ><b id="tieude1">We provide a variety of vehicle types</b></h1></p>
                    <div class="hr"></div>
                    <p>We provide customers with professional, reliable and more comfortable information during the car buying process</p>


                </div>
                <div data-aos="zoom-in-down" class="Namcon">
                <i class="bi bi-car-front-fill"></i>
                    <p><h3><b>New vehicle optional</b></h3></p>
                    <p>We always update the latest versions and retain some old versions to suit all customers.</p>
                    <p> <b ><a id="link" href="/range_of_car.php">READ MORE ></a></b></p>
                </div>

                <div data-aos="zoom-in-down" class="Namcon">
                    <i class="bi bi-people-fill"></i>
                    <p><h3><b>Consultation Service</b></h3></p>
                    <p>Our sales team is composed of professionals with many years of industry experience an…</p>
                    <p> <b ><a id="link" href="/about_us.php">READ MORE ></a></b></p>
                </div>
                <div data-aos="zoom-in-down" class="Namcon">
                    <i class="bi bi-car-front"></i>
                    <p><h3><b>Old car models</b></h3></p>
                    <p>We provide used car models for customers with low income …</p>
                    <p> <b ><a id="link" href="/preOwned_car.php">READ MORE ></a></b></p>
                </div>



            </div>
        </section>
    </main>

    <?php include_once("html/Footers.php"); ?>
    <script>
        AOS.init();
    </script>
</body>
</html>