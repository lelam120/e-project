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
function Search_form($search){
    $sql = "SELECT * FROM cars WHERE car_name LIKE '%$search%'";

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
function brands(){
    $sql = "SELECT * FROM brand order by brand_id";
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
}
function brand_detail($id){
    $sql = "SELECT * FROM brand WHERE brand_id = $id";
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
function brand_callOld($id){
    $sql =  "SELECT *, (SELECT brand_name FROM brand WHERE brand_id = cars.new_brand) AS brand_name ,
            (SELECT body_type FROM cars_type WHERE id = cars.type) AS typecar
            FROM cars WHERE new_brand = $id and old_new='old' ";
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
}

function body_callOld($id){
    $sql =  "SELECT *, (SELECT brand_name FROM brand WHERE brand_id = cars.new_brand) AS brand_name ,
            (SELECT body_type FROM cars_type WHERE id = cars.type) AS typecar
            FROM cars WHERE type = $id and old_new='old' ";
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
function brandBody_Old($id_brand,$id_body){
    $sql =  "SELECT *, (SELECT brand_name FROM brand WHERE brand_id = cars.new_brand) AS brand_name ,
            (SELECT body_type FROM cars_type WHERE id = cars.type) AS typecar
            FROM cars WHERE new_brand = $id_brand and type = $id_body and old_new='old'";
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
}

function newest_products(){
    $sql = "SELECT *,
                (SELECT brand_name FROM brand WHERE brand_id = cars.new_brand) AS brand_name,
                (SELECT back_img FROM brand WHERE brand_id = cars.new_brand) AS back_img,
                (SELECT body_type FROM cars_type WHERE id = cars.type) AS typecar
            FROM cars ORDER BY newcar_id ASC LIMIT 8";

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

function product_detail($id )  {

    $sql = "SELECT *, (SELECT brand_name FROM brand WHERE brand_id = cars.new_brand) AS brand_name, 
                      (SELECT body_type FROM cars_type WHERE id = cars.type) AS typecar FROM cars WHERE newcar_id = $id";


    $result = query($sql);

    $list = [];
    
    while($row = $result->fetch_assoc()){
        $list = $row;
    }
    return $list;

    
}


function detail_fqa($id)  {

    $sql = "SELECT * FROM faq WHERE faq_car	 = $id";


    $result = query($sql);

    $list = [];
    
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;

    
}

function introduction($id)  {

    $sql = "SELECT * FROM introduction WHERE intro_cars = $id";


    $result = query($sql);

    $list = [];
    
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;

    
}
function highlighted_features($id)  {

    $sql = "SELECT * FROM highlighted_features WHERE highlight_cars = $id";


    $result = query($sql);

    $list = [];
    
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;

    
}

function chucu_car($id){
    $sql = "SELECT * FROM old_car_user WHERE car_old_car_user = $id";

    $result = query($sql);

    $list ;
    
    while($row = $result->fetch_assoc()){
        $list = $row;
    }
    return $list;
}