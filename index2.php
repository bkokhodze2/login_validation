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
       <div class="img_container"><img src="https://getdrawings.com/free-icon/register-icon-png-70.png" alt=""/>
       </div>
       <form action="results.php"  method="POST">
          <input placeholder="username" type="text" name="username"> <br />
          <?php if(isset($name_error)) { ?>
          <p><?php echo $name_error ?></p>
          <?php } ?>
          

          <input placeholder="პაროლი" type="password" name="password">
          <?php if(isset($password_error)) { ?>
          <p><?php echo $password_error ?></p>
          <?php } ?>

          <input placeholder="მეილი" type="email" name="user_email">
          <?php if(isset($email_error)) { ?>
          <p><?php echo $email_error ?></p>
          <?php } ?>

          <input class="register_button" type="submit" name="reg" value="რეგისტრაცია">
          <?php if(isset($_POST['reg']) and empty($password_error) and empty($name_error) ){
               header('Location: index3.php');
               // tuki romelime veli carielia ar vushveb 
            exit; }
            ?>
       </div>
       </body>
       </html>