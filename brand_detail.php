<?php
    require_once("functions/product.php");

    if (isset($_GET['brand'])) {
        $brand = $_GET['brand'];
        $brand_detail = brand_detail($brand);
    } else {
        echo "No ID received";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php foreach($brand_detail as $item):?><?php echo 'Brand ' .$item['brand_name']?><?php endforeach;?></title>
    <?php include_once("html/style.php"); ?>
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/trangchu.css" rel="stylesheet">

</head>

<body>
    <header>
        <?php include_once("html/Header.php"); ?>
    </header>
    <?php foreach($brand_detail as $item): ?>
        <div class="position-relative">
            <img style="width: 100%;" src="<?php echo $item["back_img"]; ?>" class="img-fluid">
            <div class="position-absolute" style="top: 45%; left: 46%;">
                <div class="d-flex align-items-center">
                    <h1 class="text-light" style="font-weight:900;font-size:50px;"><?php echo $item['brand_name']?></h1>
                </div> 
            </div>
        </div>
        <main>
            <section class="produc" >
                <div class="tren" >
                    <div class="trai" style="width: 50%;" >
                        <p style="font-size: 40px;color:black;" id="tieude"><?php echo $item['brand_name']?></p>
                        <hr style="width:100px;border-width: 3px;color:green;">
                        <p><?php echo nl2br($item['infor']); ?></p>
                       </div>
                    <div class="phai" style="background-image:url(<?php echo $item["thumbnail"]; ?>);width:710px; height:443px;border-radius:4px;">
                    </div>
                </div>
            </section>
        </main>

    <?php endforeach; ?>

</body>