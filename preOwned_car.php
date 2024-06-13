<?php
    require_once("functions/product.php");
    $old_car = old_car();
    $brand_alls = brand_all();
    $brands = [];
    $types = [];
    $styles = [];
    
    foreach ($brand_alls as $item) {
        $brands[] = strtolower($item['brand_name']);
        $types[] = strtolower($item['type']);
        $styles[] = strtolower($item['style']);
    }

    // Loại bỏ các giá trị trùng lặp
    $brands = array_unique($brands);
    $types = array_unique($types);
    $styles = array_unique($styles);




    // Lấy dữ liệu xe cho trang hiện tại
    $start_index = ($current_page - 1) * $items_per_page;
    $current_page_items = array_slice($old_car, $start_index, $items_per_page);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once("html/style.php"); ?>
    <link href="css/styles.css" rel="stylesheet">
</head>

<body>
    <header>
        <?php include_once("html/Header.php"); ?>
    </header>
    <section style="height:100%";>
    <div class="position-relative">
        <img style="width: 100%;" src="https://www.borderlesscar.com/wp-content/uploads/2023/07/toppic-used.jpg" class="img-fluid">
            <div class="position-absolute" style="top: 40%; left: 42%;">
                <div class="d-flex align-items-center">
                    <h1 class="text-light" style="font-weight:800">Used Car</h1>
                </div> 
            </div>
            <div class="bg py-4" style="background-color: #2c9f1c; height:100px;">
                <form class="d-flex w-50 mx-auto" role="search">
                    <input class="form-control" type="search" placeholder="Search Range Of Car" aria-label="Search">
                    <button class="btn btn" style="background-color: #000;" type="submit"><i class="bi bi-search" style="color:white"></i></button>
                </form>
            </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <!-- Search Form -->
            <div class="col-md-3">
            <?php include_once("html/Select_Options.php"); ?>

            </div>
            <div class="col-md-9">
                <div class="row" id="carListings">
                    <?php foreach($current_page_items as $item): ?>
                        <div class="col-md-4 mb-4 car-card" 
                            data-brand="<?php echo strtolower($item['brand']); ?>" 
                            data-type="<?php echo strtolower($item['type']); ?>" 
                            data-style="<?php echo strtolower($item['style']); ?>">
                            <div class="card">
                                <a href="/detail.php?id=<?php echo $item["oldcar_id"]; ?>">
                                    <img src="<?php echo $item["thumbnail"]; ?>" class="card-img-top" alt="<?php echo $item["car_name"]; ?>">
                                </a>
                                <div style="width: 100%;" class="card-body">
                                <h6 class="card-title" style="margin-top:10px;font-weight:600"><?php echo $item["car_name"]; ?></h6>
                                <i class="bi bi-tags" style="color:gray; margin:6px;font-size:small;"></i><span style="color:gray; margin-right:10px;font-size:small;">Chery</span>
                                <i class="bi bi-car-front" style="color:gray;margin:6px;font-size:small;"></i><span style="color:gray;font-size:small;">SUV</span>
                                    <a style="width:100%; margin-top:10px;" href="/detail.php?id=<?php echo $item["oldcar_id"]; ?>" class="btn btn custom-gray">View More</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    </section>
    <?php include_once("html/Footers.php"); ?>
</body>
</html>