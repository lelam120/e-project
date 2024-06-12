<?php
    require_once("functions/product.php");
    $newest_products = newest_car();
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

    // Số xe hiển thị mỗi trang
    $items_per_page = 12;

    // Xác định trang hiện tại
    $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

    // Tổng số trang
    $total_items = count($newest_products);
    $total_pages = ceil($total_items / $items_per_page);

    // Lấy dữ liệu xe cho trang hiện tại
    $start_index = ($current_page - 1) * $items_per_page;
    $current_page_items = array_slice($newest_products, $start_index, $items_per_page);
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
        <img style="width: 100%;" src="https://www.borderlesscar.com/wp-content/uploads/2023/07/toppic-ev.jpg" class="img-fluid">
            <div class="position-absolute" style="top: 40%; left: 42%;">
                <div class="d-flex align-items-center">
                    <h1 class="text-light" style="font-weight:800">Range Of Car</h1>
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
                                <a href="/detail.php?id=<?php echo $item["newcar_id"]; ?>">
                                    <img src="<?php echo $item["thumbnail"]; ?>" class="card-img-top" alt="<?php echo $item["car_name"]; ?>">
                                </a>
                                <div style="width: 100%;" class="card-body">
                                <h6 class="card-title" style="margin:10px;font-weight:700"><?php echo $item["car_name"]; ?></h6>
                                <i class="bi bi-tags" style="color:gray; margin:6px;font-size:small;"></i><span style="color:gray; margin-right:16px;font-size:small;">Chery</span>
                                <i class="bi bi-car-front" style="color:gray;margin:6px;font-size:small;"></i><span style="color:gray;font-size:small;">SUV</span>
                                    <a style="width:100%; margin-top:10px;" href="/detail.php?id=<?php echo $item["newcar_id"]; ?>" class="btn btn custom-gray">View More</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Pagination -->
                <nav>
                    <ul class="pagination">
                        <?php if ($current_page > 1): ?>
                            <li class="page-item">
                                <a class="page-link" href="?page=<?php echo $current_page - 1; ?>" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php for ($page = 1; $page <= $total_pages; $page++): ?>
                            <li class="page-item <?php if ($page == $current_page) echo 'active'; ?>">
                                <a class="page-link" href="?page=<?php echo $page; ?>"><?php echo $page; ?></a>
                            </li>
                        <?php endfor; ?>
                        <?php if ($current_page < $total_pages): ?>
                            <li class="page-item">
                                <a class="page-link" href="?page=<?php echo $current_page + 1; ?>" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    </section>
    <?php include_once("html/Footers.php"); ?>
</body>
</html>