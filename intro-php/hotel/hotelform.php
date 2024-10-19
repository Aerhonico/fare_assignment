<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Registration</title>
</head>
<body>
    <form action="bookhotel.php" method="POST">
        <H1>Book Hotel</H1>

        <div>
        <label for="room_type">Room Type</label>
        <select name="room_type" id="">
            <option value="1750">Single - 1750/night</option>
            <option value="3500">Double - 3500/night</option>
            <option value="5000">Suite - 5000/night</option>
        </select>
        </div>
        
        <label for="checkin">Checkin</label>
        <input type="date" name="checkin" id=""><br>
        <label for="checkout">Checkout</label>
        <input type="date" name="checkout" id=""><br>  

        <input type="submit" value="Book">
    </form>

    <?php
    if(isset($_GET["totalDue"])){
    ?>
    <div>Your total Due is <?php echo number_format($_GET["totalDue"]); ?></div>
    <?php
    }
    ?>
</body>
</html>