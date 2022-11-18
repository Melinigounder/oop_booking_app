<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "../classes/customerClass.php";
require "../calculations/createHotels.php";
require "../classes/hotelClass.php";
require "../classes/bookingClass.php";
require "../calculations/calculateDays.php";


session_start();

$hotelChoice;

if (isset($_POST['book'])) {


    try {
        createHotels("../calculations/hotelData.json");
    } catch (Exception $err) {
        echo "
                <script>
                    console.log('Server error in loading hotels.. ' + $err)
                </script>
            ";
    }

    foreach ($_SESSION['hotels'] as $hotel) {
        if ($hotel->getName() == $_POST['choice']) {

            $hotelChoice = $hotel;
        }
    }

    try {
        $newBooking = new Booking(
            rand(1000, 9000),
            $_SESSION['checkin'],
            $_SESSION['checkout'],
            $_SESSION['numDays'],
            $_POST['cost'],
            $hotelChoice->getName()
        );
    } catch (Exception $err) {
        echo "
                <script>
                    console.log('Server error creating booking. ' + $err)
                </script>
            ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melo's Reservation</title>
    <link rel="stylesheet" href="../css/hotel_css.css">
    <link rel="stylesheet" href="../css/carousel.css">
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
            <h1>Melo's Reservation</h1>
        </div>   
        
    </header>
<div class="flex-container">

    <main>
        <div>

                <h1>Personal Details</h1>
                    <?php
                    echo '
                                <p> Name: ' . $_SESSION['user']->getFirstname() . ' ' . $_SESSION['user']->getLastname() . '</p>
                                <p> Email Address: ' . $_SESSION['user']->getEmail() . '</p>
                            ';
                    ?>
                </div>
              <br>

            <div>
                <h1>Hotel Reservation Details</h1>

                    <?php
                    
                    echo '
                                <p> Hotel: ' . $hotelChoice->getName() . '</p>
                                <p> Daily Rate: R ' . $hotelChoice->getRate() . ' </p>
                            ';
                    ?>
                </div>

             <br>
            <div>
                
                <h1 >Client's Reservation Details</h1>

               
                    <?php
                    echo '
                                <p> Duration of stay: ' . $newBooking->getDuration() . '</p>
                                <p> Start Date: ' . $newBooking->getStartDate() . '</p>
                                <p> End Date: ' . $newBooking->getEndDate() . '</p>
                                <p> Total: R ' . $newBooking->getCost() . ' </p>
                            ';
                    ?>
                </div>
         <br>
        <div>
            <a href="../pages/reservedbooking.php"><button class="reserveBtn">Reserve Booking</button></a>
        </div>
        <br>
        <br>

        <div class="container">
  <div id="carousel">
    <div>
		<img src="../images/destino.jpg" alt="">
	</div>
	  
    <div>
		<img src="../images/destino1.jpg" alt="">
	</div>
    <div>
		<img src="../images/knight.jpg" alt="">
	</div>
    <div>
		<img src="../images/knights1.jpg" alt="">
	</div>
    <div>
		<img src="../images/moodymoon.jpg" alt="">
	</div>
    <div>
		<img src="../images/moody1.png" alt="">
	</div>
    <div>
		<img src="../images/destino2.webp" alt="">
	</div>
    <div>
		<img src="../images/moody2.jpeg" alt="">
	</div>
    <div>
		<img src="../images/destino3.webp" alt="">
	</div>
  </div>
</div> 
            </div>
            </main>     
</body>

</html>