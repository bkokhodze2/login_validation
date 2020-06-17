<!DOCTYPE html>
<html land="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, inital-sacel=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="main.css">

</head>

<body>
<?php
$link = mysqli_connect("localhost", "root", "", "davaleba");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "SELECT * FROM users";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>სახელი</th><th>გვარი</th><th>ნიკნეიმი</th><th>პაროლი</th><th>მეილი</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //name  surname  user_name user_password  user_email
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]."</td><td>".$row["surname"]."</td><td>".$row["user_name"]."</td><td>".$row["user_password"]."</td><td>".$row["email"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
mysqli_close($link);



?>
</body>
</html>