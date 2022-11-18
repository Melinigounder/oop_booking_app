<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melo</title>
     <!-- css -->
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/main_css.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js">  </script> 
    <?php require_once "../pages/landingPage.php"; ?>
</head>

<body>
    <div class="flex-container">
 <!-- form -->
            <form action="../pages/compare.php" id="frm" method="POST">
            <input name="firstname" type ="text" list="name" placeholder="Name"  required="true" class="input-box">
            <input name="surname" type ="text" list="surname" placeholder="Surname"  required="true" class="input-box">
            <input name="email" type ="text" list="email" placeholder="Email"  required="true" class="input-box">     
            <input name="checkin" type="date" placeholder="check-in" required id="" class="input-box">
            <input name="checkout" type="date" placeholder="check-out" required id="" class="input-box">
            <input class="search-btn" type="submit" name="detailsSubmission" value="SEARCH HOTELS">
                
</form>
</div>  
</div>  
 <!-- animation -->
               <div class="center">
                   <div id="animation">
                   <div id="p">
                       <p>M</p>
                   </div>
                   <div id="o">
                       <p>E</p>
                   </div>
                   <div id="g">
                       <p>L</p>
                   </div>
                   <div id="oe">
                       <p>O</p>
                   </div>
                 </div>
              
                   
                    <div id="bottom">
                         
                    </div>
               </div>
                <!-- footer -->
      <div class="footer">
    
<p>Stay connected<br>Reach us @ melini.gounder@gmail.com</p>
    </div> 

    
    

</body>

</html>