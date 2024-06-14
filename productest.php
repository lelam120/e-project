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
 
   
</head>


<body>
    
    <header>
        <?php include_once("html/Header.php"); ?>
    </header>

    
    <main>
    <section class="mot">
        <div class="motchitiet">
            <div class="trai">
                
                <img src="/img/Changan-Automobile1.jpg" alt=""/>

               
            </div>
            <div class="phai">
                <div class="Tieude" >
                    <p class="car_name "><?php echo $car['car_name'] ?></p>
                    <p class="information "> <?php echo $car['information'] ?></p>
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
                                <td class="thuoctinh">380KW</td>
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
    <div class="cavane" >
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
                <div class="Introduction one">
                   <div >
                    <p class="tieude">Introduction </p>
                        <ul>
                            <li>The length, width and height of the Roewe i5 are 4676mm* 1838mm* 1498mm, the wheelbase is 2680mm, the front wheelbase is 1544mm, and the rear wheelbase is 1548mm. The vehicle can carry 5 people.</li>
                            <li>Roewe i5 is equipped with 10.25-inch high-definition dual screens, Zebra Venus2.0 car-machine system, new 540° high-definition panoramic images, suspended transparent chassis and integrated driving recorder and other technological and intelligent configurations, allowing you to enjoy technological conveniences.</li>
                            <li>Roewe i5 is equipped with 10.25-inch high-definition dual screens, Zebra Venus2.0 car-machine system, new 540° high-definition panoramic images, suspended transparent chassis and integrated driving recorder and other technological and intelligent configurations, allowing you to enjoy technological conveniences.</li>

                        </ul>
                   </div>
                </div>
                <div class="Highlighted_Features two ">
                    <div  >
                        <p class="tieude">Highlighted_Features</p>
                        <ul>
                            <li>    <p class="tieudenho">Introduction </p>
                            <div> The length, width and height of the Roewe i5 are 4676mm* 1838mm* 1498mm, the wheelbase is 2680mm, the front wheelbase is 1544mm, and the rear wheelbase is 1548mm. The vehicle can carry 5 people.</div>
                        </li>
                        <li>    <p class="tieudenho">Introduction </p>
                            <div> The length, width and height of the Roewe i5 are 4676mm* 1838mm* 1498mm, the wheelbase is 2680mm, the front wheelbase is 1544mm, and the rear wheelbase is 1548mm. The vehicle can carry 5 people.</div>
                        </li>
                        <li>    <p class="tieudenho">Introduction </p>
                            <div> The length, width and height of the Roewe i5 are 4676mm* 1838mm* 1498mm, the wheelbase is 2680mm, the front wheelbase is 1544mm, and the rear wheelbase is 1548mm. The vehicle can carry 5 people.</div>
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
                                        <p class="tieudenho" >How is the chassis system of Roewe i5?</p>
                                </div>
                                <div class="traloi" >
                                    
                                        <div id="cac"  >Roewe i5 adopts a new optimized chassis, the engine hydraulic suspension damping is increased by 25%, the bump and jitter feeling is reduced by 21%, and the impact feeling over bumps is reduced by 14%. Equipped with a body electronic stability system, an electric power steering system, and an electronic auxiliary braking system, it creates a comfortable driving experience.</div>
                                </div>

                            </div>
                            <div class="traloihoi" >
                                <div class="hoi" >
                                        <p id="hoi" >Q<p>
                                        <p class="tieudenho" >What are the highlights of the Roewe i5’s interior?</p>
                                </div>
                                <div class="traloi" >
                                    
                                        <div id="cac" >The interior uses light luxury brushed metal panels, which are full of luster. The entire cabin adopts a three-dimensional soft package design, which is skin-friendly and comfortable. Multiple storage and storage design, flexible storage, can be placed anywhere.</div>
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
   </div>


    <?php include_once("html/Footers.php"); ?>
    <script src="/js/product_id.js"></script>
  
</body>
</html>