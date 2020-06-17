
<?php
session_start();
$name = $_POST['user_name'];
$last_name = $_POST['user_last_name'];

$_SESSION['name'] = $name;
$_SESSION['lastname'] = $last_name;


if(empty($name)) {

    $n_error = 'გთხოვთ შეიყვანოთ სახელი';
} elseif(strlen($name) < 2) {
    $n_error = "სახელი არ შეიძლება იყოს 2 ასოზე ნაკლები";
}

if(empty($last_name)) {

    $last_name_error = 'გთხოვთ შეიყვანოთ გვარი';
} elseif(strlen($last_name) < 2) {
    $last_name_error = "გვარი არ შეიძლება იყოს 2 ასოზე ნაკლები";
}

 include('index.php');
// ?>