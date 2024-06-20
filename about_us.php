
<?php 

    // require_once("functions/product.php");
    // $producthot = newest_products();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <?php include_once("html/style.php"); ?>
    <link href="css/trangchu.css" rel="stylesheet">
    <link href="css/vechungtoi.css" rel="stylesheet">
</head>

<style>


</style>     
<body>
    <header>
        <?php include_once("html/Header.php"); ?>
    </header>
    <div class="position-relative">
        <img style="width: 100%;" src="https://www.borderlesscar.com/wp-content/uploads/2023/07/toppic-about.jpg" class="img-fluid">
            <div class="position-absolute" style="top: 40%; left: 42%;">
                <div class="d-flex align-items-center">
                    <h1 class="text-light" style="font-weight:800">About Us</h1>
                </div> 
            </div>

    </div>
    <main>

        <section class="produc" >
            <div class="tren" >
                <div class="trai" style="width: 50%;" >
                    <p id="tieude">Welcome To</p>
                    <h1><b style="font-weight: 900;font-size:45px;">Henan Borderless International Trade Co., Ltd.</b></h1>
                </div>
                <div class="phai" style="background-image:url(/img/car-shape2.png);background-repeat:no-repeat; width:50%;" >
                </div>
            </div>
        </section>

        <section class="bon">
            <div data-aos="flip-left" class="trai">
                <P>Our committed to providing high-quality and professional services to our customers, and creating a comprehensive automotive sales ecosystem. With over 10 years of experience and accumulated professional skills in the automotive industry, we constantly innovate and improve product quality with customer needs at the forefront, which has made us a leader in the automotive industry.</P>
                <p>Our main products include electric cars, used cars, and other well-known international brands that cover various consumer groups. Through years of market practice and technological innovation, our vehicle performance and quality have reached advanced levels both domestically and internationally. Our goal is to become a leader in the automotive sales industry, achieve mutual benefit with customers, and provide them with more professional, reliable, and comfortable services during the car-buying process.</p>
                <button  style="width:170px;height:55px;color:#2c9f1c" onclick="window.location.href='/'" class="nutxanh"><b style="color:white; font-size:13px;font-weight:900;">LEARN MORE</b></button>
            </div>
            <div data-aos="flip-left" class="phai">
                <img src="img/about1.jpg"/>
            </div>
        </section>
        <section class="Choose">
            <h1>Why Choose Borderless</h1>
            <section class="container mt-5">
                <div data-aos="zoom-in" class="row">
                    <!-- Thẻ 1 -->
                    <div class="col-md-4 mb-4">
                        <div class="card card-top-border">
                            <div class="card-body">
                                <h4 class="card-title">Professionalism</h4>
                                <p class="card-text">As a professional import and export trading company, we have rich experience and professional skills. We understand the trends and demands of domestic and foreign markets and can provide customized services according to different customer needs.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Thẻ 2 -->
                    <div data-aos="zoom-in" class="col-md-4 mb-4">
                        <div class="card card-top-border">
                            <div class="card-body">
                                <h4 class="card-title">Diverse product range</h4>
                                <p class="card-text">Our main products include new energy vehicles, used cars, electric motorcycles, electric tricycles, electric skateboards, and charging piles. We offer a complete range of brands, years, and models for customers to choose from.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Thẻ 3 -->
                    <div data-aos="zoom-in" class="col-md-4 mb-4">
                        <div class="card card-top-border">
                            <div class="card-body">
                                <h4 class="card-title">Quality assurance</h4>
                                <p class="card-text">We have established long-term cooperative relationships with many well-known domestic and foreign automobile manufacturers and suppliers, and all products are guaranteed to be of high quality. We strictly control each import and export project to ensure that we can provide customers with excellent products and services.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="zoom-in-up" class="row">
                    <!-- Thẻ 4 -->
                    <div class="col-md-4 mb-4">
                        <div class="card card-top-border">
                            <div class="card-body">
                                <h4 class="card-title">Competitive pricing</h4>
                                <p class="card-text">We have established stable cooperation relationships with multiple suppliers, have advantageous purchasing channels, and can provide flexible pricing strategies to ensure that we can offer the most favorable prices to customers.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Thẻ 5 -->
                    <div data-aos="zoom-in-up" class="col-md-4 mb-4">
                        <div class="card card-top-border">
                            <div class="card-body">
                                <h4 class="card-title">Integrity-based operation</h4>
                                <p class="card-text">As a company that operates with integrity, we always prioritize customer benefits and guarantee service quality and product quality. We value the trust and support of customers and continuously improve our service level, which has won the praise and trust of many customers.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Thẻ 6 -->
                    

                    <div data-aos="zoom-in-up" class="col-md-4 mb-4" style="background-image: linear-gradient(0, rgba(44,159,28,.8), rgba(44,159,28,.8)) ,url(/img/bg-service1.jpg) ">
                        <div style="margin-top:80px;">
                            <i style="padding-left:160px;font-size:50px;" class="bi bi-telephone-inbound"></i>
                            <h3 style="font-weight:600;text-align:center;font-size:28px;padding-top:10px;">Borderless customer care is here to help you anytime.</h3>
                        </div>
                          
                    </div>
                </div>
            </section>
        </section>
       
        <main>
            <section class="kienmot" >
                <div data-aos="zoom-in">
                    <p class="tieude" >We Provide Best Services</p>
                    <div class=" nutchuyen" >
                        <div>
                            <button class="buttonhien"  onclick="click1()" id="bam1" >Customized Services</button>
                            <button class="" id="bam2" onclick="click2()" >Product Consultation</button>
                            <button class="" id="bam3"  onclick="click3()">After-sales Service</button>
                        </div>
                    </div>

                    <div class="thongtin"> 
                        <div class="trai ">
                            <div class="" id="mot" >
                                <i class="bi bi-car-front"></i>
                                <p class="tieude" >Customized Services</p>
                                <p class="giaithich">We prioritize our customers' needs and provide personalized customized services. Customers can choose their preferred vehicles based on their own preferences and requirements, and our sales team will provide personalized vehicle recommendations and configuration customization based on different customer needs.</p>

                            </div>
                            <div class="an"  id="hai">
                                <i class="bi bi-ev-station"></i>
                                <p class="tieude" >Product Consultation Services</p>
                                <p class="giaithich">Our sales team is composed of professionals with many years of industry experience and expertise, and can provide multi-brand, multi-configuration automobile consultation services. We help customers understand the performance and features of selected vehicle models by answering questions about automobile brands, performance, configuration, etc.</p>

                            </div>
                            <div class="an"  id="ba">
                                <i class="bi bi-globe-americas"></i>
                                <p class="tieude" >After-sales Service</p>
                                <p class="giaithich">We prioritize our customers' needs and provide personalized customized services. Customers can choose their preferred vehicles based on their own preferences and requirements, and our sales team will provide personalized vehicle recommendations and configuration customization based on different customer needs.</p>

                            </div>
                        
                        </div>
                        <div class="phai">
                            <img style=" width: 100%;border-radius: 0 10px 10px 0;" src="img/about-secvice-pic.jpg" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <section class="kienhai" >
                <div data-aos="fade-up" class="trai">
                    <p class="kientieude" >What Clients Say </br>About Us</p>
                    <p class="kiengiathich">“ This creative team is attentive, focus on the details and are really darn good at what they do.  We determine together what needs to be done to stay ahead of the game.”</p>
                    <div >
                        <div class="mat">
                             <img src="img/thumb1.png" alt="">
                        </div>
                        <div class="noi">
                             <p id="ten">Richard Anderson</p>
                             <p id="cv">Customers from Canada</p>
                        </div>
                    </div>
                </div>
                <div class="phai">
                    <img src="img/anhxecdcm.jpg" alt="">
                </div>
            </section>
        </main>
    <?php include_once("html/Footers.php"); ?>
    <script>
        AOS.init();
    </script>
   <script src="/js/abous.js"></script>
</body>
</html>