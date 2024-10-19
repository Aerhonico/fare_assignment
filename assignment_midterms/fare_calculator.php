<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $distance = isset($_POST['distance']) ? $_POST['distance'] : 0;
    $passengerType = isset($_POST['passengerType']) ? $_POST['passengerType'] : 'regular';
// Ginamit ang isset dito para maiwasan mag-error ang php. nakaset automatically na 0 ang distance 

    $baseFare = 13.00; // Standard rate for first 5 km
    $additionalRate = 1.75; // Additional per succeeding km
    $discount = 0.20; // 20% discount for students/elderly

    // Here's where the calculation begins
    if ($distance <= 5) {
        $fare = $baseFare;
    } else {
        $fare = $baseFare + ($distance - 5) * $additionalRate;
    }

    if ($passengerType == "student/seniorcitizen") {
        $fare = $fare - ($fare * $discount);
    }

    echo "<h2>Jeepney Fare Calculation</h2>";
    echo "<p>Total Fare: Php " . number_format($fare, 2) . "</p>";
} 

// Kapag gusto ko magcalculate ng hindi whole number na km, for example 5.5, divide mo lang 1.75 na additional rate from 2 kasi thats the count bago mag6 km.
?>
