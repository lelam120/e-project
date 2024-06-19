
<?php 

require_once("functions/product.php");
$producthot = newest_products();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</style>     
<body>
    <header>
        <?php include_once("html/Header.php"); ?>
        <div class="slide-show">
            <div class="list-images">
                <div class="slide">
                    <div class="slide_grid">
                        <div class="trai" >
                            <p> <h1><b>2024 Big Sale  Event!</b></h1></p>
                             <p>Special discounts on all models, experience <br> the new era of smart mobility!</p>
                             <button onclick="window.location.href='/range_of_car.php'" class="nutxanh"><b>Learn More</b></button>
                         </div>
                         <div class="phai" >
                             <img src="/img/index-zeekr007.png"/>
                         </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide_grid">
                        <div class="trai" >
                            <p> <h1><b>2024 Grand Promotion!</b></h1></p>
                             <p>Limited-time offers, purchase now and enjoy <br> an amazing package!</p>
                             <button onclick="window.location.href='/range_of_car.php'" class="nutxanh"><b>Learn More</b></button>
                         </div>
                         <div class="phai" >
                             <img src="/img/index-917.png"/>
                         </div>
                    </div>
                </div>
    </header>
    <main>
        <section class="mot">
            <div class="trai" >
                <p id="tieude" >Low Prices Guarantee</p>
                <p><h1><b>All Vehicles</b></h1></p>
                <p>We have a wealth of all vehicles models foryou to choose from.</p>
                <button onclick="window.location.href='/range_of_car.php'" class="nutxanh" ><b>Learn More</b></button>
            </div>
            <div class="phai" >
                <p id="tieude" >Quality at Minimum Expense</p>
                <p><h1><b>Used Car</b></h1></p>
                <p>We have a wealth of used car models for you to choose from.</p>
                <button onclick="window.location.href='/preOwned_car.php'" class="nutxanh" ><b>Learn More</b></button>
            </div>
            
          




        </section>
        <section class="produc" >
            <div class="tren" >
                <div class="trai" >
                    <p id="tieude">Top Vehecles</p>
                    <h1><b>Featured Vehicles Suggested</b></h1>
                </div>
                <div class="phai" >
                    <button  onclick="window.location.href='/range_of_car.php'">All Vehicles</button>
                </div>
            </div>
            <div class="duoi row mt-1 ">
              
             
                
                <div class="row" id="carListings">
                    <?php foreach($producthot as $item): ?>
                        <div data-aos="zoom-in-down" class="col-md-3 mb-5 car-card">
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
        </section>
        <div data-aos="fade-up"  class="hai">
            <p><h1><b>We Offer Customers a Wide Range of <br>Electric Vehicle and Used Car</b></h1></p>
            <p>From the moment you step foot inside our 15,000 square-foot warehouse you will recognize and appreciate that <br>difference as you are treated to the most pleasant car-buying experience you can imagine.</p>
            <div class="hang" data-aos="fade-up">
                <ul>
                    <li>
                        <img src="/img/97E78C-1.png"/>
                    </li>
                    <li>
                        <img src="/img/9EE790-1.png"/>
                    </li>
                    <li>
                        <img src="/img/A4E497.png"/>
                    </li>
                    <li>
                        <img src="/img/Avatr.png"/>
                    </li>
                    <li>
                        <img src="/img/Geely-Geometry.png"/>
                    </li>
                    <li>
                        <img src="/img/nhat.png"/>
                    </li>
                    <li>
                        <img src="/img/97E78C-1.png"/>
                    </li>
                    <li>
                        <img src="/img/97E78C-1.png"/>
                    </li>
                    <li>
                        <img src="/img/97E78C-1.png"/>
                    </li>
                    <li>
                        <img src="/img/97E78C-1.png"/>
                    </li>
                </ul>
            </div>
        </div>
        <section class="ba">
            <div data-aos="fade-up-right" class="trai">
                <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/EC9OPdIHDsU?si=zkmym_w5rvfPAa5D" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
                <iframe  src="https://www.youtube.com/embed/ln5h44icVZE?si=M41QVmp6jbpvc379" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div data-aos="zoom-in-up" class="trai">
                <div  class="phai">
                <p id="tieude">Who we Are</p>
                <p><h1><b>Automotive Sales<br> Company from China</b></h1></p>
                <p>Henan Borderless International Trade Co., Ltd. established in 2015. Our <br> committed to providing high-quality and professional services to our customers,<br> and creating a comprehensive automotive sales ecosystem.</p>
                <button class="nutxanh" ><b>Learn More</b></button>
            </div>
        </section>
        <section class="bon">
            <div data-aos="flip-left" class="trai">
                <img src="/img/home-about1.jpg"/>
                <p><h2><b>Logistics</b></h2></p>
                <p class="ghichu" >Our car sales company places great emphasis on logistics and delivery services, providing customers with high-quality delivery experiences. Our logistics system has a sophisticated supply chain management and real-time monitoring mechanism in place to ensure the rapid and accurate completion of delivery tasks.</p>
                <p> <b ><a id="link" href="">READ MORE</a><span id="link" class="muiten">></span></b></p>
            </div>
            <div data-aos="flip-left" class="phai">
                <p><h2><b>Export Qualification</b></h2></p>
                <p class="ghichu">Our export qualifications are in line with national policies and regulations, and we hold legal and valid export qualification certificates. In the export business, we strictly abide by relevant laws, regulations and industry standards to ensure the quality, safety and compliance of exported goods.</p>
                <p><b id="link"><a id="link" href="">READ MORE</a><span id="link"  class="muiten">></span></b></p>
                <img src="/img/home-about2.jpg"/>
            

            </div>
            
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