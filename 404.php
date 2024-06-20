

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detial</title>
  
    <?php include_once("html/style.php"); ?>
 
   
</head>
<style>

    main{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 70vh;
       
    }
    body{
        /* background-image: url(/img/404-bg.jpg); */
        /* background-size: cover; */
    }
    main button{
        background-color: rgb(44, 147, 31);
        color:white;
        width: 200px;
        height: 50px;
        border: none;
        border-radius: 10px;
        box-shadow: -10px  -10px 70px #0e0e0e6c;
        transition: 0.2s;
    }
    .divbuton{
        margin-top: 60px;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    main button:hover{
        background-color: black;
        transform: scale(1.2);
        transition: 0.2s;
 
    }
    .camon{
        font-size: 100px;
        color:rgb(44, 147, 31);
        text-align: center;
    }
    .camon .chuthich{
        font-size: 20px;
        color:black;
    }
    i{
        color:pink;
    }
</style>

<body>
    
    <header>
        <?php include_once("html/Header.php"); ?>
    </header>
    <main>
        <div>
            <div class="camon" >
            <i class="bi bi-brightness-alt-high-fill"></i>
                <p>404<p>
                <p class="chuthich" > We'll get back to you soon.<p>
             </div>
            <div class="divbuton" ><button class="nut" onclick="window.location.href='/index.php'"> BACK TO HOME</button></div>
       
        </div>
    </main>

    
    
  
    

    <?php include_once("html/Footers.php"); ?>

  
</body>
</html>

