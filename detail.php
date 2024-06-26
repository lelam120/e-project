<?php
   require_once("functions/product.php");
   $product_id  = isset($_GET['id']) ? intval($_GET['id']) : 0;
   
    $car = product_detail($product_id);
 
    if ($car ==null){
        header('Location:/404.php');
    }

    $thongtin = detail_information($product_id);
    $fqa = detail_fqa($product_id);
    $introduction = introduction($product_id);
    $highlighted_features = highlighted_features($product_id);
    $chucu = chucu_car($product_id);




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link href="css/detail.css" rel="stylesheet">
    <?php include_once("html/style.php"); ?>
 
   
</head>

<style>
.chucu{
    margin-top:20px ;
    display: flex;
}
.chucu .img>img{
   width: 80px;
   height: 80px;
   border-radius:50px;
   border: 3px solid rgb(107, 107, 107) ;
}
.chucu .thogntin #name{
    font-size:22px;
    font-weight: bold;
    color: rgb(51, 51, 51);
    margin :0;
    margin-top:5px ;
    margin-bottom: 10px;
  
}
.chucu .thogntin {
    margin-left:10px ;
    color: rgb(163, 163, 163);
  
}
</style>
<body>
    
    <header>
        <?php include_once("html/Header.php"); ?>
    </header>

    
    <main>
    <section class="mot">
        <div class="motchitiet">
            <div class="trai">
                
                <img style="width: 700px ;" src="<?php echo $car['thumbnail'] ?>" alt=""/>

               
            </div>
            <div class="phai">
                <div class="Tieude" >
                    <p class="car_name "><?php echo $car['car_name'] ?></p>
                    <p class="information "> <?php echo $car['information'] ?></p>
                </div>
                <div class="carthuoctinh" >
                    <table >
                        <tbody>
                        <?php foreach($thongtin as $item): ?>
                            <tr>
                                <td class="tenthuoctinh"><?php echo $item["main_point"]; ?></td>
                                <td class="thuoctinh"><?php echo $item["detail"]; ?></td>
                            </tr>
                        
                        <?php endforeach; ?>
                         
                           
                        </tbody>
                    </table>

                    <button onclick="window.location.href='/contact.php'"> FREE QUOTE </button>

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

    <section class="hai" >
        <div class="trai">
            <div  class="thongtin">
                <p class="Introduction" >Introduction</p>
                <p class="Highlighted_Features" >Highlighted Features</p>
                <p class="FQA" >FQA</p>
            </div>
            <div class="hoi" style="position:sticky;top:0;" >
                <div>
                    <p id="tieude" >How Can We Help You?</p>
                    <p id="gioithiet" >Borderless customer care is here to help you anytime.</p>
                    <button onclick="window.location.href='/contact.php'">FREE QUOTE</button>
                </div>
            </div>
        </div>
        <div class="phai">
            <div data-aos="fade-up" class="Introduction">
                <p class="tieude">Introduction </p>
                <ul>
                 
                  
                    <?php foreach($introduction as $item): ?>
                        <li> <?php echo $item['detail_intro'] ?></li>
                        
                    <?php endforeach; ?>
                </ul>
            </div>
            <div data-aos="fade-up" class="Highlighted_Features">
                <p class="tieude">Highlighted_Features</p>
                <ul>
                    <?php foreach($highlighted_features as $item): ?>
                        <li>    <p class="tieudenho"> <?php echo $item['main'] ?></p>
                        <div> <?php echo $item['detail_feat'] ?></div>
                        </li>
                            
                    <?php endforeach; ?>
                  
                </ul>
            </div>
           <?php if ($chucu != null){ require_once("functions/oldcaruser.php"); }?>
            <div data-aos="zoom-in" class="FAQ" >
                 <p class="tieude">FAQ</p>
                 <div>
                   
                    <?php foreach($fqa as $item): ?>
                        <div class="traloihoi" >
                            <div class="hoi" >
                                    <p id="hoi" >Q<p>
                                    <p class="tieudenho" ><?php echo $item['Question'] ?></p>
                            </div>
                            <div class="traloi" >
                                
                                    <div id="cac"  ><?php echo $item['answer'] ?></div>
                            </div>

                        </div>
                        
                    <?php endforeach; ?>
                    

                 </div>
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