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
    position: absolute;
    top: 0;
   
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
    height: 200px;
    overflow-y: scroll;
}

::-webkit-scrollbar{
    width: 10px;
}
::-webkit-scrollbar-thumb{
    background-color: gray;
}


.hangxe_kien>div{
    background-color: rgb(61, 61, 61);
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px 0;

}
.hangxe_kien>div img{

    width: 70px;
}
.hangxe_kien>div form{
    display: flex;
    justify-content: center;
    align-items: center;
  
   
    
}

.hangxe_kien>div form>button{
    background-color: rgb(61, 61, 61);
    border: 2px solid green;
    border-radius: 5px;
    width: 16px;
    height: 16px;
    margin-left: 10px;
  
   
    
}

.hangxe_kien>div form>button:hover{
    content: "cac";
    background-color: rgb(28, 236, 0);
    border: 1px solid rgb(255, 255, 255);
   
    
}
.hangxe_kien>div label{
 
    color: white;
}

.locconhien{
    display: inline;
}




</style>


<body>
    <div class="Search_Options">
        
        <div>
       
            <p><h3><b>Search Options</b></h3></p>
            <div class="loc" >
                <button onclick="toggleBrand(this)" id="cac"><span id="trai"><b style="font-size:15px;">Brand</b></span><span id="phai"><i class="bi bi-chevron-down"></i></span></button>

                <div class="loccon"   id="thuonghieu">
                    <div class="Search_form">
                    
                        <input type="Text" placeholder="Search" aria-label="Search">
                        
                    
                    </div>
                    <div class="hangxe_kien">
                        
                        <div >
                            <img src="/img/A4E497.png"/>
                            <form action="/Selct.html" method="GET">
                                <input  type="text" id="loc" name="loc" style="display: none;" value="1">
                                <label for="loc">Checkbox</label><br>
                                <button id="checkbox2" type="submit" class="submit-button"></button>
                            </form>
                        </div>
                        <div >
                            <img src="/img/A4E497.png"/>
                            <form action="/Selct.html" method="GET">
                                <input  type="text" id="loc" name="loc" style="display: none;" value="1">
                                <label for="loc">Checkbox</label><br>
                                <button id="checkbox2" type="submit" class="submit-button"></button>
                            </form>
                        </div>
                        <div >
                            <img src="/img/A4E497.png"/>
                            <form action="/Selct.html" method="GET">
                                <input  type="text" id="loc" name="loc" style="display: none;" value="1">
                                <label for="loc">Checkbox</label><br>
                                <button id="checkbox2" type="submit" class="submit-button"></button>
                            </form>
                        </div>
                        <div >
                            <img src="/img/A4E497.png"/>
                            <form action="/Selct.html" method="GET">
                                <input  type="text" id="loc" name="loc" style="display: none;" value="1">
                                <label for="loc">Checkbox</label><br>
                                <button id="checkbox2" type="submit" class="submit-button"></button>
                            </form>
                        </div>
                        <div >
                            <img src="/img/A4E497.png"/>
                            <form action="/Selct.html" method="GET">
                                <input  type="text" id="loc" name="loc" style="display: none;" value="1">
                                <label for="loc">Checkbox</label><br>
                                <button id="checkbox2" type="submit" class="submit-button"></button>
                            </form>
                        </div>
                        <div >
                            <img src="/img/A4E497.png"/>
                            <form action="/Selct.html" method="GET">
                                <input  type="text" id="loc" name="loc" style="display: none;" value="1">
                                <label for="loc">Checkbox</label><br>
                                <button id="checkbox2" type="submit" class="submit-button"></button>
                            </form>
                        </div>
                        <div >
                            <img src="/img/A4E497.png"/>
                            <form action="/Selct.html" method="GET">
                                <input  type="text" id="loc" name="loc" style="display: none;" value="1">
                                <label for="loc">Checkbox</label><br>
                                <button id="checkbox2" type="submit" class="submit-button"></button>
                            </form>
                        </div>

                 
                    </div>
                   
               
                    

                </div>
            </div>
            <div class="loc" >
                <button onclick="Vehicle()" id="cac"><span id="trai"><b style="font-size:15px;">Vehicle Type</b></span><span id="phai"><i class="bi bi-chevron-down"></i></span></button>

                <div class="loccon"   id="Vehicle_Type">
                    <div class="Search_form">
                    
                        <input type="Text" placeholder="Search" aria-label="Search">
                        
                    
                    </div>
                    <div class="hangxe_kien">
                        
                        <div>
                     
                            <form action="/Selct.html" method="GET">
                                <input  type="text" id="loc" name="loc" style="display: none;" value="1">
                                <label for="loc">Checkbox</label><br>
                                <button id="checkbox2" type="submit" class="submit-button"></button>
                            </form>
                        </div>
                        <div >
                       
                            <form action="/Selct.html" method="GET">
                                <input  type="text" id="loc" name="loc" style="display: none;" value="1">
                                <label for="loc">Checkbox</label><br>
                                <button id="checkbox2" type="submit" class="submit-button"></button>
                            </form>
                        </div>
                        <div >
                       
                            <form action="/Selct.html" method="GET">
                                <input  type="text" id="loc" name="loc" style="display: none;" value="1">
                                <label for="loc">Checkbox</label><br>
                                <button id="checkbox2" type="submit" class="submit-button"></button>
                            </form>
                        </div>
                        <div >
                  
                            <form action="/Selct.html" method="GET">
                                <input  type="text" id="loc" name="loc" style="display: none;" value="1">
                                <label for="loc">Checkbox</label><br>
                                <button id="checkbox2" type="submit" class="submit-button"></button>
                            </form>
                        </div>
                        <div >
                         
                            <form action="/Selct.html" method="GET">
                                <input  type="text" id="loc" name="loc" style="display: none;" value="1">
                                <label for="loc">Checkbox</label><br>
                                <button id="checkbox2" type="submit" class="submit-button"></button>
                            </form>
                        </div>
                        <div >
                      
                            <form action="/Selct.html" method="GET">
                                <input  type="text" id="loc" name="loc" style="display: none;" value="1">
                                <label for="loc">Checkbox</label><br>
                                <button id="checkbox2" type="submit" class="submit-button"></button>
                            </form>
                        </div>
                        <div >
                       
                            <form action="/Selct.html" method="GET">
                                <input  type="text" id="loc" name="loc" style="display: none;" value="1">
                                <label for="loc">Checkbox</label><br>
                                <button id="checkbox2" type="submit" class="submit-button"></button>
                            </form>
                        </div>

                 
                    </div>
                   
               
                    

                </div>
            </div>
            <div class="loc" >
                <button onclick="Body()" id="cac"><span id="trai"><b style="font-size:15px;">Body Style</b></span><span id="phai"><i class="bi bi-chevron-down"></i></span></button>

                <div class="loccon"   id="Body_Style">
                    <div class="Search_form">
                    
                        <input type="Text" placeholder="Search" aria-label="Search">
                        
                    
                    </div>
                    <div class="hangxe_kien">
                        
                        <div >
                        
                            <form action="/Selct.html" method="GET">
                                <input  type="text" id="loc" name="loc" style="display: none;" value="1">
                                <label for="loc">Checkbox</label><br>
                                <button id="checkbox2" type="submit" class="submit-button"></button>
                            </form>
                        </div>
                        <div >
                          
                            <form action="/Selct.html" method="GET">
                                <input  type="text" id="loc" name="loc" style="display: none;" value="1">
                                <label for="loc">Checkbox</label><br>
                                <button id="checkbox2" type="submit" class="submit-button"></button>
                            </form>
                        </div>
                        <div >
                          
                            <form action="/Selct.html" method="GET">
                                <input  type="text" id="loc" name="loc" style="display: none;" value="1">
                                <label for="loc">Checkbox</label><br>
                                <button id="checkbox2" type="submit" class="submit-button"></button>
                            </form>
                        </div>
                        <div >
                          
                            <form action="/Selct.html" method="GET">
                                <input  type="text" id="loc" name="loc" style="display: none;" value="1">
                                <label for="loc">Checkbox</label><br>
                                <button id="checkbox2" type="submit" class="submit-button"></button>
                            </form>
                        </div>
                        <div >
                            
                            <form action="/Selct.html" method="GET">
                                <input  type="text" id="loc" name="loc" style="display: none;" value="1">
                                <label for="loc">Checkbox</label><br>
                                <button id="checkbox2" type="submit" class="submit-button"></button>
                            </form>
                        </div>
                        <div >
               
                            <form action="/Selct.html" method="GET">
                                <input  type="text" id="loc" name="loc" style="display: none;" value="1">
                                <label for="loc">Checkbox</label><br>
                                <button id="checkbox2" type="submit" class="submit-button"></button>
                            </form>
                        </div>
                        <div >
                     
                            <form action="/Selct.html" method="GET">
                                <input  type="text" id="loc" name="loc" style="display: none;" value="1">
                                <label for="loc">Checkbox</label><br>
                                <button id="checkbox2" type="submit" class="submit-button"></button>
                            </form>
                        </div>

                 
                    </div>
                   
               
                    

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
    </script>
</body>
</html>