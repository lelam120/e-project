<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact US</title>
    <?php include_once("html/style.php"); ?>
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/trangchu.css" rel="stylesheet">
    <style>
        .boxbox{
            background-color: white;
            width: 75%; /* Adjust width as needed */
            padding: 30px;
            position: absolute;
            top: 90%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10; /* Ensure it's above the background image */
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
</head>
<body>
    <header>
        <?php include_once("html/Header.php"); ?>
    </header>
    <section style="height:100%">
        <div class="position-relative">
            <img style="width: 100%;" src="https://www.borderlesscar.com/wp-content/uploads/2023/07/toppic-contact.jpg" class="img-fluid">
            <div class="position-absolute" style="top: 30%; left: 12%;">
                <div class="d-flex align-items-center">
                    <h1 class="text-light" style="font-weight:800;font-size:45px">Contact Us</h1>
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
                        <form action="/functions/form.php" method="post">
                            <div class="form-column">
                                <div class="form-group">
                                    <label for="name"><i class="bi bi-person-fill"></i> Name *</label>
                                    <input type="text" class="form-control" id="name" name="Name" placeholder="Nhập họ và tên">
                                </div>
                                <div class="form-group">
                                    <label for="email"><i class="bi bi-envelope-fill"></i> Email *</label>
                                    <input type="email" class="form-control" id="email" name="Email" placeholder="Nhập email">
                                </div>
                            </div>
                            <div class="form-column">
                                <div class="form-group">
                                    <label for="country"><i class="bi bi-geo-alt-fill"></i> Country / Region *</label>
                                    <input type="text" class="form-control" id="country" name="address" placeholder="Nhập quốc gia hoặc vùng miền">
                                </div>
                                <div class="form-group">
                                    <label for="mobile"><i class="bi bi-telephone"></i> Mobile *</label>
                                    <input type="text" class="form-control" id="mobile" name="telephone" placeholder="Nhập số điện thoại di động">
                                </div>
                            </div>
                            <div class="form-group full-width">
                                <label for="message"><i class="bi bi-chat-dots-fill"></i> Message *</label>
                                <textarea class="form-control" id="message" rows="4" name="message" placeholder="Nhập tin nhắn của bạn"></textarea>
                            </div>
                            <button style="background-color: #2c9f1c;color:white;width:100%;height:50px " type="submit" class="btn btn">Submit<i style="padding-left: 10px;" class="bi bi-send-fill"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div style="height:500px;"></div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d38969.49755005075!2d113.7493648069477!3d34.71984131374476!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35d75d5169ef9047%3A0x516c0e10e656ba80!2sZhengshang%20Jingkai%20Plaza!5e0!3m2!1sen!2s!4v1689929938304!5m2!1sen!2s" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <?php include_once("html/Footers.php"); ?>
</body>
</html>
