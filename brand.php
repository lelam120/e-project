
<?php 

    require_once("functions/product.php");
    $producthot = newest_products();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand</title>
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
main .one .trai{
        background-image: url(/img/GWM.jpg);
        animation-name: headervao;
        animation-duration: 2s;
        height: 445px;
        animation-iteration-count: 1;
        transition-timing-function: ease-in-out;
    }
main .one .phai{
    background-image: linear-gradient(0,rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)) ,url(/img/chery.jpg) ;
    animation-name: headervao;
    animation-duration: 2s;
    height: 445px;
    animation-iteration-count: 1;
    transition-timing-function: ease-in-out; 
}
main .two .trai{
        background-image:url(/img/Changan-Automobile.jpg) ;
        animation-name: headervao;
        animation-duration: 2s;
        height: 445px;
        animation-iteration-count: 1;
        transition-timing-function: ease-in-out;
    }
main .two .phai{
    background-image:url(/img/hyundai.jpg) ;
    animation-name: headervao;
    animation-duration: 2s;
    height: 445px;
    animation-iteration-count: 1;
    transition-timing-function: ease-in-out; 
} 
main .three .trai{
        background-image:linear-gradient(0,rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)) ,url(/img/Honda.jpg) ;
        animation-name: headervao;
        animation-duration: 2s;
        height: 445px;
        animation-iteration-count: 1;
        transition-timing-function: ease-in-out;
    }
main .three .phai{
    background-image:linear-gradient(0,rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)) ,url(/img/Toyota.jpg) ;
    animation-name: headervao;
    animation-duration: 2s;
    height: 445px;
    animation-iteration-count: 1;
    transition-timing-function: ease-in-out; 
}
#tieude{
    color: rgb(79, 209, 59);
    font-weight: 700;
}
</style>     
<body>
    <header>
        <?php include_once("html/Header.php"); ?>
    </header>
    <main>
        <section class="one">
            <div class="trai">
                <div style="position:relative;left:8%;top:30%;">
                    <p id="tieude" >Low Prices Guarantee</p>
                    <p><h1><b>GWM</b></h1></p>
                    <p>We have a wealth of all vehicles models foryou to choose from.</p>
                    <form method="GET" action="brand_detail.php">
                        <button onclick="window.location.href='/brand_detail.php'" class="nutxanh" name="brand" value="<?php echo $item["brand_id"]; ?>" ><b>Learn More</b></butto>
                    </form>                
                </div>
  
            </div>
            <div class="phai" >
                <div style="position:relative;left:8%;top:30%;">
                    <p id="tieude" >Quality at Minimum Expense</p>
                    <p><h1><b>Chery</b></h1></p>
                    <p>We have a wealth of used car models for you to choose from.</p>
                    <form method="GET" action="brand_detail.php">
                        <button onclick="window.location.href='/brand_detail.php'" class="nutxanh" name="brand" value="<?php echo $item["brand_id"]; ?>" ><b>Learn More</b></butto>
                    </form>                
                </div>
            </div>
        </section>
        <section class="two">
            <div class="trai" >
                <div style="position:relative;left:8%;top:30%;">
                    <p id="tieude" >Low Prices Guarantee</p>
                    <p><h1><b>Changan</b></h1></p>
                    <p>We have a wealth of all vehicles models foryou to choose from.</p>
                    <form method="GET" action="brand_detail.php">
                        <button onclick="window.location.href='/brand_detail.php'" class="nutxanh" name="brand" value="<?php echo $item["brand_id"]; ?>" ><b>Learn More</b></butto>
                    </form>                
                </div>
            </div>
            <div class="phai" >
                <div style="position:relative;left:8%;top:30%;">
                    <p id="tieude" >Quality at Minimum Expense</p>
                    <p><h1><b>Hyundai</b></h1></p>
                    <p>We have a wealth of used car models for you to choose from.</p>
                    <form method="GET" action="brand_detail.php">
                        <button onclick="window.location.href='/brand_detail.php'" class="nutxanh" name="brand" value="<?php echo $item["brand_id"]; ?>" ><b>Learn More</b></butto>
                    </form>
                </div>

            </div>
        </section>
        <section class="three">
            <div class="trai" >
                <div style="position:relative;left:8%;top:30%;">
                    <p id="tieude" >Low Prices Guarantee</p>
                    <p><h1><b>Honda</b></h1></p>
                    <p>We have a wealth of all vehicles models foryou to choose from.</p>
                    <form method="GET" action="brand_detail.php">
                        <button onclick="window.location.href='/brand_detail.php'" class="nutxanh" name="brand" value="<?php echo $item["brand_id"]; ?>" ><b>Learn More</b></butto>
                    </form>
                </div>
            </div>
            <div class="phai" >
                <div style="position:relative;left:8%;top:30%;">
                    <p id="tieude" >Quality at Minimum Expense</p>
                    <p><h1><b>Toyota</b></h1></p>
                    <p>We have a wealth of used car models for you to choose from.</p>
                    <form method="GET" action="brand_detail.php">
                        <button onclick="window.location.href='/brand_detail.php'" class="nutxanh" name="brand" value="<?php echo $item["brand_id"]; ?>" ><b>Learn More</b></butto>
                    </form>
                </div>
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
        <div data-aos="fade-up"  class="hai" style="margin-bottom:200px;">
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
                        <img src="/img/9EE790-1.png"/>
                    </li>
                    <li>
                        <img src="/img/Avatr.png"/>
                    </li>
                    <li>
                        <img src="/img/97E78C-1.png"/>
                    </li>
                    <li>
                        <img src="/img/9EE790-1.png"/>
                    </li>
                    <li>
                        <img src="/img/97E78C-1.png"/>
                    </li>
                </ul>
            </div>
        </div>



    </main>
    


    <?php include_once("html/Footers.php"); ?>
    <script>
        AOS.init();
    </script>
    <script src="/js/index.js"></script>
</body>
</html>