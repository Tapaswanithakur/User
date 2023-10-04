<?php
include 'database.php';
$name = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$usertype = $_POST["usertype"];

if(empty($name)){
    echo '<script>alert("Please enter the name of employee..");</script>';
}else if(empty($email)){
    echo '<script>alert("Please enter the email id..");</script>';
}else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo '<script>alert("Invalid email address format.");</script>';
}
else if(empty($password)){
    echo '<script>alert("Please enter the password..");</script>';
}
else if(empty($usertype)){
    echo '<script>alert("Please enter the email id..");</script>';
}else{

    $sql = "insert into users (user_name, user_email,user_password,user_type) VALUES ('$name', '$email', '$password','$usertype')";
    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("User has been created successfully...");</script>';
        header("Location: allUsers.php");
       exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
  
    $conn->close();

}
?>