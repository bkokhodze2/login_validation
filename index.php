<!DOCTYPE html>
<html land="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, inital-sacel=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="main.css">

</head>
<body>
   <div class="container">
      <div class="card">
         <div class="img_container">
            <img src="https://getdrawings.com/free-icon/register-icon-png-70.png" alt="picture"/>
         </div>
         <form  action="res.php" method="POST">
            <input placeholder="სახელი" type="text" name="user_name"> <br />
            <?php if(isset($n_error)) { ?>
            <p><?php echo $n_error ?></p>
            <?php } ?>
            
            
            <input placeholder="გვარი" type="text" name="user_last_name">
            <?php if(isset($last_name_error)) { ?>
            <p><?php echo $last_name_error ?></p>
            <?php } ?>
            
            <input class="register_button" type="submit" value="შემდეგი" method="POST"  name="next">
            <?php 
            
            if(isset($_POST['next']) and !empty($name) and !empty($last_name) ){
               header('Location: index2.php');
               // tuki romelime veli carielia ar vushveb 
            exit; }
            ?>
   </div>
</body>
</html>