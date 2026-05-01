<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>
    <?php
    // Check if the form was submitted
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $age = $_POST['age'];
        $species = $_POST['species'];
        $food = $_POST['food'];
        $travellers = $_POST['partysize'];
        $date = $_POST['bookday'];
        $accom = isset($_POST['accom']) ? $_POST['accom'] : 'No accommodation';
        $day4 = isset($_POST['4day']) ? $_POST['4day'] : 'No 4-day tour';
        $day10 = isset($_POST['10day']) ? $_POST['10day'] : 'No 10-day tour';
        echo "<p>Welcome $fname $lname!</p>";
        echo "<p>You are now booked on the $accom with $day4 and $day10 tour.</p>";
        echo "<p>Age: $age</p>";
        echo "<p>Species: $species</p>";
        echo "<p>Meal Preference: $food</p>";
        echo "<p>Number of travellers: $travellers</p>";
        echo "<p>Tour Date: $date</p>";

    ?>
</body>
</html>