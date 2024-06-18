<?php
//    require_once("functions/product.php");
//    $product_id  = isset($_GET['id']) ? intval($_GET['id']) : 0;

//    $car = product_detail($product_id);
  
//     if ($car ==null){
//         header('Location:/404.php');
//     }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detial</title>
    <link href="css/pro_id.css" rel="stylesheet">
    <?php include_once("html/style.php"); ?>
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/loaders/GLTFLoader.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.140.0/examples/js/controls/OrbitControls.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
</head>


<body>
    
    <header>
        <?php include_once("html/Header.php"); ?>
    </header>

    
    <main>
    <section class="mot">
        <div class="motchitiet">
            <div class="trai">
                
                <img style="width: 100%;" src="/img/sieuxe.jpeg" alt=""/>

               
            </div>
            <div class="phai">
                <div class="Tieude" >
                    <p class="car_name ">Lamborghini Revuelto</p>
                    <p class="information "> The Revuelto represents a significant step for Lamborghini, combining cutting-edge technology with high performance, and marking their move towards hybrid and electric vehicles.</p>
                </div>
                <div class="carthuoctinh" >
                    <table >
                        <tbody>
                            <tr>
                                <td class="tenthuoctinh">Range</td>
                                <td class="thuoctinh">662KM</td>
                            </tr>
                            <tr>
                                <td class="tenthuoctinh">Power (peak)</td>
                                <td class="thuoctinh"> 746 kW.</td>
                            </tr>
                            <tr>
                                <td class="tenthuoctinh">Battery Capacity</td>
                                <td class="thuoctinh">87.04kWh</td>
                            </tr>
                            <tr>
                                <td class="tenthuoctinh">Vehicle Type</td>
                                <td class="thuoctinh">SUV</td>
                            </tr>
                            <tr>
                                <td class="tenthuoctinh">CHARGE 30-80%</td>
                                <td class="thuoctinh">25minutes</td>
                            </tr>
                        </tbody>
                    </table>

                    <button> FREE QUOTE </button>

                    <div class="liicon" >
                        <i>Share</i>
                        <i class="bi bi-youtube"></i>
                        <i class="bi bi-facebook"></i>
                        <i class="bi bi-whatsapp"></i>
                        <i class="bi bi-twitter"></i>
                    </div>
                </div>  
            </div>
        </div>
    </section>
    </main>
    <div class="cavane" id="kiendeptrai" >
    <main class="main2">
 
        <section class="hai" >
            <!-- <div class="trai">
                <div class="thongtin">
                    <p class="Introduction" >Introduction</p>
                    <p class="Highlighted_Features" >Highlighted Features</p>
                    <p class="FQA" >FQA</p>
                </div>
                <div class="hoi" >
                    <div>
                        <p id="tieude" >How Can We Help You?</p>
                        <p id="gioithiet" >Borderless customer care is here to help you anytime.</p>
                        <button>FREE QUOTE</button>
                    </div>
                </div> -->
            <!-- </div> -->
            <div class="phai">
                <div class="Introduction one "  >
                   <div>
                    <p class="tieude">Introduction </p>
                        <ul>
                            <li>The Lamborghini Revuelto is the brand's first plug-in hybrid supercar, combining a 6.5-liter V12 engine with three electric motors to deliver a groundbreaking total power output of approximately 1001 horsepower.</li>
                            <li>This hybrid marvel can accelerate from 0 to 100 km/h (0-62 mph) in about 2.5 seconds, reaching a top speed of over 350 km/h (217 mph), showcasing Lamborghini's commitment to maintaining unparalleled performance standards.</li>
                            <li>The Revuelto features a cutting-edge design that merges aerodynamic efficiency with Lamborghini's iconic aesthetic, setting new benchmarks in both form and function for the luxury supercar segment.</li>
                            <li>Equipped with an 8-speed dual-clutch transmission and an all-wheel drive system, the Revuelto offers superior handling and stability, ensuring an exhilarating driving experience in a variety of conditions.</li>
                        </ul>
                   </div>
                </div>
                <div  class="Highlighted_Features two " >
                    <div  >
                        <p class="tieude" id = "tieudelonHighlighted_Features">Highlighted_Features</p>
                        <ul>
                            <li>    <p class="tieudenho" id="tieudenhoHighlighted_Features">Powerful Hybrid Powertrain </p>
                            <div id="chuthich"> Combines a 6.5-liter V12 engine with three electric motors, delivering a total of approximately 1001 horsepower for unmatched performance.</div>
                        </li>
                        <li>    <p class="tieudenho" id="tieudenhoHighlighted_Features">Impressive Acceleration </p>
                            <div id="chuthich"> Offers an electric-only range of around 10 km (6 miles), providing an eco-friendly option for short trips and reducing emissions.</div>
                        </li>
                        <li>    <p class="tieudenho" id="tieudenhoHighlighted_Features">Electric-Only Mode </p>
                            <div id="chuthich"> The length, width and height of the Roewe i5 are 4676mm* 1838mm* 1498mm, the wheelbase is 2680mm, the front wheelbase is 1544mm, and the rear wheelbase is 1548mm. The vehicle can carry 5 people.</div>
                        </li>
                        <li>    <p class="tieudenho" id="tieudenhoHighlighted_Features">Innovative Design </p>
                            <div id="chuthich"> Features a sleek, aerodynamic design that enhances both performance and aesthetic appeal, embodying Lamborghini's signature style with advanced engineering.</div>
                        </li>
                        </ul>
                    </div>
                </div>
                <div class="FAQ one"  >
                    <div >
                        <p class="tieude">FAQ</p>
                        <div>
                            <div class="traloihoi" >
                                <div class="hoi" >
                                        <p id="hoi" >Q<p>
                                        <p class="tieudenho" > What makes the Revuelto unique?</p>
                                </div>
                                <div class="traloi" >
                                    
                                        <div id="cac"  >The Lamborghini Revuelto is distinguished by its innovative hybrid powertrain, combining a 6.5-liter V12 engine with three electric motors. This setup produces a total of approximately 1001 horsepower, making it the first plug-in hybrid supercar from Lamborghini. It also features an electric-only mode with a range of around 10 km (6 miles), highlighting Lamborghini's commitment to integrating advanced technology and environmental considerations without compromising on performance.</div>
                                </div>

                            </div>
                            <div class="traloihoi" >
                                <div class="hoi" >
                                        <p id="hoi" >Q<p>
                                        <p class="tieudenho" >What are its performance specs?</p>
                                </div>
                                <div class="traloi" >
                                    
                                        <div id="cac" >The Revuelto is Lamborghini's first plug-in hybrid supercar, featuring a 6.5-liter V12 engine and three electric motors, delivering around 1001 horsepower and an electric-only range of 10 km (6 miles).</div>
                                </div>

                            </div>
                            

                        </div>
                     </div>
                </div>
            
            </div>
            
        </section>
    </main>


    <div class="Form" >
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
   </div>
   <canvas class="webgl"></canvas>
   </div>


    <?php include_once("html/Footers.php"); ?>
    <script src="/js/product_id.js"></script>

</body>
</html>