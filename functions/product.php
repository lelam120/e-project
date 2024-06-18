<?php 
require_once("database.php");
function new_car(){
    $sql = "SELECT car_name, thumbnail, new_brand, type,
               (SELECT brand_name FROM brand WHERE brand_id = cars.new_brand) AS brand_name,
               (SELECT icon_brand FROM brand WHERE brand_id = cars.new_brand) AS brand_icon
            FROM cars WHERE old_new='new'";
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
}
function old_car(){
    $sql = "SELECT car_name, thumbnail, new_brand, type,
               (SELECT brand_name FROM brand WHERE brand_id = cars.new_brand) AS brand_name,
               (SELECT icon_brand FROM brand WHERE brand_id = cars.new_brand) AS brand_icon
            FROM cars WHERE old_new='old'";
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
}

function car_id(){
    $sql = "select * from cars order by newcar_id";
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

function brand_id($id){
    $sql =  "SELECT *, (SELECT brand_name FROM brand WHERE brand_id = cars.new_brand) AS brand_name 
            FROM cars WHERE new_brand = $id ";
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
}

function brand2($id){
    $sql =  "select * from brand where brand_id = $id   " ;
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
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


function detail_information($id){
    $sql = "SELECT * FROM detail_information WHERE infor_cars = $id";

    $result = query($sql);

    $list = [];
    
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;

}

function contact_sub($name,$email,$address,$telephone,$message)  {
   
    $sql = "insert into customers(cus_name, email, `Country/Region`, Mobile, Message) 
        values('$name','$email','$address',$telephone,'$message')";
    

     $id =  insert_get_id($sql);
     return $id;

    
}