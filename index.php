<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once("html/style.php"); ?>
    <link href="css/index.css" rel="stylesheet">
</head>
    
  

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
                             <button class="nutxanh"><b>Learn More</b></button>
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
                             <button class="nutxanh"><b>Learn More</b></button>
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
                <button class="nutxanh" ><b>Learn More</b></button>
            </div>
            <div class="phai" >
                <p id="tieude" >Quality at Minimum Expense</p>
                <p><h1><b>Used Car</b></h1></p>
                <p>We have a wealth of used car models for you to choose from.</p>
                <button class="nutxanh" ><b>Learn More</b></button>
            </div>
            
          




        </section>
        <section class="produc" >
            <div class="tren" >
                <div class="trai" >
                    <p id="tieude">Top Vehecles</p>
                    <h1><b>Featured Vehicles Suggested</b></h1>
                </div>
                <div class="phai" >
                    <button >All Vehicles</button>
                </div>
            </div>
            <div class="duoi row mt-1 ">
              
                  
                
                        <?php foreach($producthot as $item): ?>
                            <div class="col-md-3 " >
                            
                                <div data-aos="zoom-in-up" class="card cardxe mb-3">
                                    <a class ="cacxe"  href="/detail.php?id=<?php echo $item["newcar_id"]; ?>">
                                        <img src="<?php echo $item["thumbnail"]; ?>" class="card-img-top anhxe" alt="<?php echo $item["car_name"]; ?>">
                                    </a>
                                    <div  class="card-body thexe">
                                        <i class="bi bi-tags" style="color:gray; margin-right:16px;">Chery</i>
                                        <i class="bi bi-car-front" style="color:gray">SUV</i>
                                        <h6 class="card-title" style="margin:10px"><?php echo $item["car_name"]; ?></h6>
                                        <a href="/detail.php?id=<?php echo $item["newcar_id"]; ?>" class="btn btn custom-gray">View More</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                

                
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
            <div  data-aos="fade-up-left" class="trai">
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
                <p><h2><b>Logistics</b></h2></p>
                <p class="ghichu">Our car sales company places great emphasis on logistics and delivery services, providing customers with high-quality delivery experiences. Our logistics system has a sophisticated supply chain management and real-time monitoring mechanism in place to ensure the rapid and accurate completion of delivery tasks.</p>
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
    </main>
    


    <?php include_once("html/Footers.php"); ?>
    <script>
        AOS.init();
    </script>
    <script src="/js/index.js"></script>
</body>
</html>