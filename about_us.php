
<?php 

    require_once("functions/product.php");
    $producthot = newest_products();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <?php include_once("html/style.php"); ?>
    <link href="css/trangchu.css" rel="stylesheet">
</head>

<style>
.custom-gray {
    width: 80% !important;
    margin-left: 30px;
    padding: 15px;

    height: 50px;
    background: #f3fdf1;
    border-radius: .4rem;
    color: #2c9f1c;
    font-weight: 700;
    text-transform: uppercase;
    font-size: small;
}
.custom-gray:hover{
    transform: scale(1.05);
    color:white;
    background-color: #2c9f1c;
}
.card-img-top {
    height: 250px;
    object-fit: cover;
}


.card {
    background-color: #fff !important;
    border: 1px solid #ddd !important;
    border-radius: 8px !important;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1) !important;
    transition: transform 0.3s ease-in-out !important;
    overflow: hidden !important;
}

.card:hover {
    transform: scale(1.1) !important;;
}
main .bon > div p {
  color: gray;
  padding-right: 20px;
}
.Choose{
    background-color:rgb(248, 248, 248);
    height:1500px;
    margin-top:-70px;
    padding-top: 150px;
}
.Choose h1{
    text-align:center;
    color:#333;
    font-size: 3rem;
    font-weight: 900;
    line-height: 1.167em;
}
.card-top-border {
    position: relative;
}
.card-top-border::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0%;
    width: 400px;
    height: 3px; /* Độ dày của viền */
    background-color: green;
    transform: translateX(-50%);
}
.card-text{
    color:gray;
}
h4{
    font-weight: 600;
}
.card-body{
    width: 445px;
    height: 319px;
}
.card-text{
    padding: 3rem 2rem 7.1rem;
    
}

</style>     
<body>
    <header>
        <?php include_once("html/Header.php"); ?>
    </header>
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
                <div class="row">
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
                    <div class="col-md-4 mb-4">
                        <div class="card card-top-border">
                            <div class="card-body">
                                <h4 class="card-title">Diverse product range</h4>
                                <p class="card-text">Our main products include new energy vehicles, used cars, electric motorcycles, electric tricycles, electric skateboards, and charging piles. We offer a complete range of brands, years, and models for customers to choose from.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Thẻ 3 -->
                    <div class="col-md-4 mb-4">
                        <div class="card card-top-border">
                            <div class="card-body">
                                <h4 class="card-title">Quality assurance</h4>
                                <p class="card-text">We have established long-term cooperative relationships with many well-known domestic and foreign automobile manufacturers and suppliers, and all products are guaranteed to be of high quality. We strictly control each import and export project to ensure that we can provide customers with excellent products and services.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
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
                    <div class="col-md-4 mb-4">
                        <div class="card card-top-border">
                            <div class="card-body">
                                <h4 class="card-title">Integrity-based operation</h4>
                                <p class="card-text">As a company that operates with integrity, we always prioritize customer benefits and guarantee service quality and product quality. We value the trust and support of customers and continuously improve our service level, which has won the praise and trust of many customers.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Thẻ 6 -->
                    

                    <div class="col-md-4 mb-4" style="background-image: linear-gradient(0, rgba(44,159,28,.8), rgba(44,159,28,.8)) ,url(/img/bg-service1.jpg) ">
                        <div style="margin-top:80px;">
                            <i style="padding-left:160px;font-size:50px;" class="bi bi-telephone-inbound"></i>
                            <h3 style="font-weight:600;text-align:center;font-size:28px;padding-top:10px;">Borderless customer care is here to help you anytime.</h3>
                        </div>
                          
                    </div>
                </div>
            </section>
        </section>
        <section class="nam">
            <img src="/img/img-car.png" />
            <div class="giua" >
                <div class="cac goc" >
                    <p id="tieude">Our Services</p>
                    <p ><h1 ><b id="tieude1">We Provide Best Services</b></h1></p>
                    <div class="hr"></div>
                    <p>we provide customers with more professional, reliable, and comfortable services during the car-buying process</p>


                </div>
                <div data-aos="zoom-in-down" class="Namcon">
                    <i class="bi bi-person-rolodex"></i>
                    <p><h3><b>Customized Services</b></h3></p>
                    <p>We prioritize our customers' needs and provide personalized customized services.</p>
                    <p> <b ><a id="link" href="">READ MORE ></a></b></p>
                </div>

                <div data-aos="zoom-in-down" class="Namcon">
                    <i class="bi bi-people-fill"></i>
                    <p><h3><b>Consultation Service</b></h3></p>
                    <p>Our sales team is composed of professionals with many years of industry experience an…</p>
                    <p> <b ><a id="link" href="">READ MORE ></a></b></p>
                </div>
                <div data-aos="zoom-in-down" class="Namcon">
                    <i class="bi bi-car-front"></i>
                    <p><h3><b>After-sales Service</b></h3></p>
                    <p>After customers purchase a vehicle from us, we actively follow up with them …</p>
                    <p> <b ><a id="link" href="">READ MORE ></a></b></p>
                </div>
            </div>
        </section>
        <section class="sau">
            <p id ="tieudenho">Our Cases</p>
            <p id ="tieudeto">Latest News</p>
            <div data-aos="fade-up" >
                <div class="trai">
                    <p id="tieude">Russian customers purchased the 2023 GWM Jingang Poer</p>
                    <p id="chuthich">Recently, Borderlesscar successfully delivered a 2023 GWM Jingang Poer to a customer in Russia, which signifies the maturity of our business and the gradual opening...</p>
                    <p><a href="/hot.php" >Read More ></a><p>
                </div>
                <div class="phai">
                    <img src="/img/lamborghini-revuelto.jpg" alt="">
                </div>
            </div>
    
        </section>
    </main>
    


    <?php include_once("html/Footers.php"); ?>
    <script>
        AOS.init();
    </script>
    <script src="/js/index.js"></script>
</body>
</html>