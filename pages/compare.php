<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "../classes/customerClass.php";
require "../calculations/createHotels.php";
require "../classes/hotelClass.php";
require "../calculations/calculateDays.php";

session_start();

if (isset($_POST['detailsSubmission'])) {

    $_SESSION['user'] = new Customer(
        rand(1000, 9000),
        $_POST['firstname'],
        $_POST['surname'],
        $_POST['email']
    );

    try {
        createHotels("../calculations/hotelData.json");
    } catch (Exception $err) {
        echo "
                <script>
                    console.log('Server error in loading hotels.. ' + $err)
                </script>
            ";
    }

    try {
        $numDays = calculateDays($_POST['checkin'], $_POST['checkout']);
    } catch (Exception $err) {
        echo "
                <script>
                    console.log('Server error when calculating length of stay.. ' + $err)
                </script>
            ";
    }

    $_SESSION['numDays'] = $numDays;
    $_SESSION['checkin'] = $_POST['checkin'];
    $_SESSION['checkout'] = $_POST['checkout'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparing Hotels</title>
    <link rel="stylesheet" href="../css/hotel_css.css">
    <link rel="stylesheet" href="../css/style_hotel.css"  type="text/css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js">  </script> 
    <style>
             .flex-container{
                 background-image: linear-gradient(0deg,rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url("../images/knights/knights3.jpeg")
             }
    </style>
    
   

</head>

    <header >
    <div id="header">
            <h1>Melo's Booking</h1>
        </div>   
        
    </header>
  
    <div class="flex-container">
            <div>

                <?php foreach ($_SESSION['hotels'] as $hotel) {

                    echo '
                <h2>' . $hotel->getName() . '</h2>

                <h3>Number of days: ' . $numDays . '</h3>

                <h3>Hotel Features:</h3>

                <ul>
                ';
                    foreach ($hotel->getFeatures() as $feature) {
                        echo "<li>$feature</li>";
                    }
                    echo '
                 </ul>

                 <p>Daily Rate: R ' . $hotel->getRate() . ' </p>

                 <p>Total Cost: <b>R ' . $hotel->getRate() * $numDays . '</b> 
                 </p>

                <form action="./bookingConfirmation.php" method="post">
                <input type="hidden" name="rate" value="' . $hotel->getRate() . '">
                <input type="hidden" name="cost" value="' . $hotel->getRate() * $numDays . '">
                <input type="hidden" name="choice" value="' . $hotel->getName() . '">
                <input class="btn" type="submit" name="book" value="Book Now">
                
                </form>
                ';
                } ?>
            </div>
        </div>

</body>

</html>