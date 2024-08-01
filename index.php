<?php
$insert =false;
if (isset($_POST['name'])) {
   
    // MySQL database connection details
    //set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "trip"; // Your actual database name

    // Create a database ka connection
    $con = mysqli_connect($server, $username, $password, $dbname);

    // Check if the connection was success
    if (!$con) {
        die("Connection to this database failed due to " . mysqli_connect_error());
    }

    // Retrieve form data
    //collect sare post varibles
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];

    // SQL query to insert form data into the database
    $sql = "INSERT INTO `trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `date`) 
            VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    
    // Execute the query and check if it was successful
    if ($con->query($sql) === true) {
        // echo "Successfully Inserted";

        //flag for succesfull insertion 
        $insert=true;
    } 
    else {
        echo "Error: $sql <br> $con->error";
        
    }

    // Close the database connection just like call cut krna
    $con->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome TO Ghumna Firna Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="Rajasthan">
    <div class="container">
        <h1>Swagat h apka Jaipur Trip Form me</h1>
        <p>Apki Jankari Darj Kare apke avagman confirm krne me trip pr to submit this form</p>
        <?php 
        if($insert ==true){
        echo " <p class='SubmitMsg'>Form Submit Krne K liye Apka Dhanyawad Sa, Jaipur ri trip Join Krne Vaste </p>";
        }
?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="enter your name">
            <input type="text" name="age" id="age" placeholder="enter your age">
            <input type="text" name="gender" id="gender" placeholder="enter your gender">
            <input type="email" name="email" id="email" placeholder="enter your mail id">
            <input type="text" name="phone" id="phone" placeholder="enter your Phone no.">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="enter any other details"></textarea>
            <button class="btn">Submit</button>
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>
