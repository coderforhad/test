<?php require_once 'database.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Test</title>
</head>
<body>
<h3>Contact Form</h3>    
<div class="container">
        <form action="" method="post">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="fname" placeholder="write your First name..."><br>
       
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lname" placeholder="write your Last name..."><br> 
        <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>
</html>

<?php
    if(!empty($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
    

    $sql = "INSERT INTO info (First_Name, Last_name) values ('$fname', '$lname')";

    if(mysqli_query($conn, $sql)){
        echo "New record added successfully" . "<br>";
    }
    echo "First Name:".$fname. "<br>", "Last Name:". $lname;
}
?>