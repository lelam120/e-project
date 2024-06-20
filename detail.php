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

    // $json = json_encode( $fqa, JSON_PRETTY_PRINT);
    // echo $json;
    // die("ca")



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detial</title>
    <link href="css/detail.css" rel="stylesheet">
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

    <section class="hai" >
        <div class="trai">
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
            </div>
        </div>
        <div class="phai">
            <div class="Introduction">
                <p class="tieude">Introduction </p>
                <ul>
                 
                  
                    <?php foreach($introduction as $item): ?>
                        <li> <?php echo $item['detail_intro'] ?></li>
                        
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="Highlighted_Features">
                <p class="tieude">Highlighted_Features</p>
                <ul>
                    <?php foreach($highlighted_features as $item): ?>
                        <li>    <p class="tieudenho"> <?php echo $item['main'] ?></p>
                        <div> <?php echo $item['detail_feat'] ?></div>
                        </li>
                            
                    <?php endforeach; ?>
                  
                </ul>
            </div>
            <div class="FAQ" >
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

  
</body>
</html>