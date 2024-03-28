<?php
// Database connection details
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $number = $_POST['number'];


//Creating Database connection
    $conn = new mysqli('localhost', 'root', '', 'mydb1');

//Checking Database connection
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into registration(firstName, lastName, gender, email, password, number)
        values(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssi", $firstName, $lastName, $gender, $email, $password, $number);
        $stmt->execute();
        echo "Registration Successful....."
        $stmt->close();
        $conn->close();
    }
?>

