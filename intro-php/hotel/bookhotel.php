<?php

$roomType = $_POST["room_type"];
$checkIn = $_POST["checkin"];
$checkOut = $_POST["checkout"];


//validate if the method of is POST
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    //convert to date number
    $date1=date_create($checkIn);
    $date2=date_create($checkOut);

    //compute for difference
    $diff = date_diff($date1, $date2);
    $noOfDays = $diff->format("%a"); //format to days
    $totalDue = $roomType * $noOfDays;
    header("location: hotelform.php?totalDue=" .$totalDue);
}