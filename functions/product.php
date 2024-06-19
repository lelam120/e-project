<?php 
require_once("database.php");
function new_car(){
    $sql = "SELECT *,
                (SELECT brand_name FROM brand WHERE brand_id = cars.new_brand) AS brand_name,
                (SELECT icon_brand FROM brand WHERE brand_id = cars.new_brand) AS brand_icon,
                (SELECT body_type FROM cars_type WHERE id = cars.type) AS typecar
            FROM cars WHERE old_new='new'";
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
}
function old_car(){
    $sql = "SELECT *,
               (SELECT brand_name FROM brand WHERE brand_id = cars.new_brand) AS brand_name,
               (SELECT icon_brand FROM brand WHERE brand_id = cars.new_brand) AS brand_icon,
               (SELECT body_type FROM cars_type WHERE id = cars.type) AS typecar

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
    $sql = "SELECT *
FROM brand, cars_type
WHERE brand.brand_id = cars_type.id;";
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
}


function brand_callNew($id){
    $sql =  "SELECT *, (SELECT brand_name FROM brand WHERE brand_id = cars.new_brand) AS brand_name ,
            (SELECT body_type FROM cars_type WHERE id = cars.type) AS typecar
            FROM cars WHERE new_brand = $id and old_new='new' ";
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
}

function body_callNew($id){
    $sql =  "SELECT *, (SELECT brand_name FROM brand WHERE brand_id = cars.new_brand) AS brand_name ,
            (SELECT body_type FROM cars_type WHERE id = cars.type) AS typecar
            FROM cars WHERE type = $id and old_new='new' ";
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
}
function brandBody_New($id_brand,$id_body){
    $sql =  "SELECT *, (SELECT brand_name FROM brand WHERE brand_id = cars.new_brand) AS brand_name ,
            (SELECT body_type FROM cars_type WHERE id = cars.type) AS typecar
            FROM cars WHERE new_brand = $id_brand and type = $id_body and old_new='new'";
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