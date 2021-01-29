<?php
$insert = false;
    if(isset($_POST['name'])){
        $insert = true;
    $server = "localhost";
    $username = "root";
    $password = "";


    $con = mysqli_connect($server,$username,$password);


    if(!$con){
        die("coonection failed".mysqli_connect_error());
    }
    $name = $_POST['name'];
    $email = $_POST['email'];
    $Roll = $_POST['Roll'];
    $phone = $_POST['phone'];
    $sql = "INSERT INTO `form`.`form` (`Name`, `Email`, `Roll`, `Phone`) VALUES ('$name', '$email', '$Roll', '$phone');";
    //echo $sql;
    if($con->query($sql) == true){
        //echo "Sucessfully Inserted";
        $insert = true;
    }
    else{
        echo "ERROR : $sql <br> $con->error";
    }
    $con->close(); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="form.css">
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BBD NIIT QUERY</title>
</head>
<body>
    <img class="bg" src="bbdniit.jpeg">
    <div class="container">
        <h2>Welcome to BBD NIIT</h2>
        <?php
        if($insert == true ){  
        echo "<p class='pa'> Enter your details carefully </p>";
      } 
      ?>
        <form action="form.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your Name">
            <input type="text" name="email" id="email" placeholder="Enter Your email id">
            <input type="text" name="Roll" id="Roll" placeholder="Enter Your Roll no.">
            <input type="phone" name="phone" id="phone" placeholder="Enter Your Mobile Number">
            <button class="btn">Submit</button>
        </form>
    </div>
</body>
</html>