
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<style>
.Search_Options{
    background-color: rgb(51, 51, 51);
    width: 280px;
    display: flex;
    justify-content: center;
    border-radius: 5px;
    margin-bottom: 200px;  
}
.Search_Options>div>div{
    margin: 10px 0;    
}

.Search_Options>div .Reset{
    text-decoration: none;
    color: green;
    
    
    
}
.Search_Options>div .reset{
 
    display: flex;
    justify-content: center;
    margin: 20px 0;
    
    
}

.Search_Options b{
   color: aliceblue;
   font-size: 20px;
}


.Search_Options #cac{
   background-color: rgb(44, 159, 28);
   width: 230px;
   height: 40px ;
   border: none;
   border-radius: 3px;
   color: white;
   display: flex;
   align-items: center;
   padding: 0 15px;
   justify-content: space-between;
   font-size: small;
}

.Search_Options #cac #phai{
    transform: rotateZ(180deg);
    transition: 0.5s;
}
.Search_Options #cac #phai:hover{
    transition: 0.5s;
    transform: rotateZ(0);
}

.loccon {
    display: none;
    background-color: rgb(61, 61, 61);
}
.loccon .Search_form{
   display: flex;
   padding-bottom: 10px;
   background-color: rgb(61, 61, 61);
   justify-content: center;

}
.loccon input{
    border: none;
    width: 120x;
    height: 35px;
    margin-top: 6px;
    background-color: rgb(74, 74, 74);
    padding-left: 10px;

}
.hangxe_kien{
    height: 60px;
    overflow-y: scroll;
}


::-webkit-scrollbar{
    width: 5px;
}
::-webkit-scrollbar-thumb{
    background-color: gray;
}


.hangxe_kien>div{
    background-color: rgb(61, 61, 61);
    display: flex;
    justify-content: left;
    align-items: center;

}
.hangxe_kien>div img{
    width: 49px;
    margin:5px;
}
.hangxe_kien>div form{
    display: flex;
    justify-content: center;
    align-items: center;
}

.hangxe_kien>div form>button{
    background-color: rgb(61, 61, 61);
    border: 1px solid #2c9f1c;
    border-radius: 5px;
    width: 16px;
    height: 16px;
    margin-left: 20px; 
}

.hangxe_kien>div label{
    padding-top: 12px;
    color: white;
    font-size: small;
}

.locconhien{
    display: inline;
}
</style>
<body>
    <div class="Search_Options" style="position:sticky;top:0;" data-aos="zoom-in-up">
        <div>
            <p><h3><b>Search Options</b></h3></p>
            <div class="loc" >
                <button onclick="toggleBrand()" id="cac"><span id="trai"><b style="font-size:15px;">Brand</b></span><span id="phai"><i class="bi bi-chevron-down"></i></span></button>
                <div class="loccon"   id="thuonghieu">
                    <div class="Search_form">
                        <input style="color: white;" type="Text" name="search" placeholder="Search" aria-label="Search">                                  
                    </div>
                    <?php foreach($checkbrand as $item):?>
                    <div class="hangxe_kien">
                        <div>
                            <form action="/range_of_car.php" method="POST">
                                <input value="<?php echo $bodysitai;  ?>" name="bodystyle" type="hidden" >
                                <input  type="text" id="loc" name="brand" style="display: none;" value="<?php echo $item["brand_id"]; ?>">
                                <button id="checkbox2" type="submit" class="submit-button"></button>
                            </form>
                            <img src="<?php echo $item["icon_brand"]; ?>"/>
                            <label for="loc"><?php echo $item["brand_name"]; ?></label><br>
                        </div>
                    </div>
                    <?php endforeach;?>    
                </div>
            </div>

            <div class="loc" >
                <button onclick="Body()" id="cac"><span id="trai"><b style="font-size:15px;">Body Style</b></span><span id="phai"><i class="bi bi-chevron-down"></i></span></button>
                <div class="loccon"   id="Body_Style">
                    <?php foreach($checkbrand as $item):?>
                    <div class="hangxe_kien" style="height:40px;">
                        <div>
                            <form action="/range_of_car.php" method="POST">
                                <input value="<?php echo $hangxe;  ?>" name="brand" type="hidden" >
                                <input  type="text" id="loc" name="bodystyle" style="display: none;" value="<?php echo $item["id"]; ?>">
                                <button style="margin-right: 6px;" id="checkbox2" type="submit" class="submit-button"></button>
                            </form>
                            <label for="loc"><?php echo $item["body_type"]; ?></label><br>

                        </div>
                    </div>
                    <?php endforeach;?>    
                </div>
            </div>
            <div class="reset">
                <a style="font-size:15px;color:#2c9f1c;font-size:small;" class="Reset" href="/range_of_car.php" ><i style=" color:#2c9f1c;margin:2px;" class="bi bi-arrow-counterclockwise"></i>RESET ALL</a>
            </div>
       </div>
    </div>

    <script>   
        function toggleBrand() {
       
            var thuonghieu = document.getElementById("thuonghieu");
            
            if (thuonghieu.classList.contains("locconhien")) {
              
                thuonghieu.classList.remove("locconhien");
            } else {
             
                thuonghieu.classList.add("locconhien");
            }
        }
        function Vehicle() {
        
            var thuonghieu = document.getElementById("Vehicle_Type");
            
            if (thuonghieu.classList.contains("locconhien")) {
                
                thuonghieu.classList.remove("locconhien");
            } else {
                
                thuonghieu.classList.add("locconhien");
            }
         }
         function Body() {
        
        var thuonghieu = document.getElementById("Body_Style");
        
        if (thuonghieu.classList.contains("locconhien")) {
            
            thuonghieu.classList.remove("locconhien");
        } else {
            
            thuonghieu.classList.add("locconhien");
        }
     }

    AOS.init();

    </script>
</body>
</html>