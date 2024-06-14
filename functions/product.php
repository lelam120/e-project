<?php 
require_once("database.php");
function newest_car(){
    $sql = "select * from new_car order by newcar_id";
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
}
function brand_all(){
    $sql = "select * from brand order by brand_id";
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
}
function old_car(){
    $sql = "select * from old_car order by oldcar_id";
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
}


function brand_detail($brand_id){
    $sql_cat = "select * from brand where brand_id = $brand_id";
    $result = query($sql_cat);
    if($result->num_rows > 0){
        $brand = $result->fetch_assoc();
        $sql_product = "select * from new_car where new_brand = $brand_id";
        $result = query($sql_product);
        $list = [];
        while($row = $result->fetch_assoc()){
            $list[] = $row;
        }
        $brand["new_car"] = $list;
        return $brand;
    }
    return null;
    
}


function product_detail($product_id)  {
    $sql = "select * from new_car where newcar_id = $product_id";
    $result = query($sql);
    if($result->num_rows > 0){
        return $result->fetch_assoc();// 1 product
    }
    return null;
}

function newest_products(){
    $sql = "SELECT * FROM new_car ORDER BY newcar_id DESC LIMIT 8";

    $result = query($sql);

    $list = [];
    
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
}


