

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detial</title>
  
    <?php include_once("html/style.php"); ?>
 
    <link href="css/vechungtoi.css" rel="stylesheet">
</head>


<body>
    
    <header>
        <?php include_once("html/Header.php"); ?>
    </header>
   
    
    <main>
        <section class="kienmot" >
            <div>
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

    </main>
  
    

    <?php include_once("html/Footers.php"); ?>

    <script src="/js/abous.js"></script>
</body>
</html>

