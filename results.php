

<?php
session_start();
$username = $_POST['username'];

$password = $_POST['password'];

$email = $_POST['user_email'];

$Name = $_SESSION['name'];
$Last_name=$_SESSION['lastname'];

// $Name = $name;
// $Last_name = $last_name;
//sql chawera


$link = mysqli_connect("localhost", "root", "", "davaleba");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// name,surname,
$sql = "INSERT INTO users (name,surname,user_name, user_password, email) 
VALUES ('$Name', '$Last_name','$username', '$password', '$email')";
// '$name', '$last_name',

if(mysqli_query($link, $sql)){
    echo "";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
//validaciebi

if(empty($username)) {

    $name_error = 'გთხოვთ შეიყვანოთ სახელი';
} elseif(strlen($username) < 5) {
    $name_error = "სახელი არ შეიძლება იყოს 2ზე ნაკლები";
}
if(empty($password)) {

    $password_error = 'გთხოვთ შეიყვანოთ პაროლი';
} elseif(strlen($password) < 8) {
    $password_error = "პაროლი არ შეიძლება იყოს 8ზე ნაკლები";
}

if(empty($email)) {

    $email_error = 'გთხოვთ შეიყვანოთ მეილი';
} elseif (!preg_match("/^[a-zA-Z ]*$/",$email)) {
    $email_error = "შეყვანილი მეილი უნდა ემთხვეოდეს მეილის ფორმას";
}

include('index2.php');


// global $name = $_POST['user_name'];
// global $last_name = $_POST['user_last_name'];

?>