<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <title>Document</title>
</head>
<body>
<div class="container mt-3">
<form action="#" method="post">
  <div class="mb-3">
    <label for="myemail" class="form-label">Email address</label>
    <input type="email" class="form-control" id="myemail" name="myemail" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="add" class="form-label">Address</label>
    <input type="text" class="form-control" id="add" name="add" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="mypass" class="form-label">Password</label>
    <input type="password" class="form-control" name="mypass" id="mypass">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
  $email = $_POST['myemail'];
  $password = $_POST['mypass'];
  $address = $_POST['add'];
  echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
   You Email is :- '.$email.' <br> Your address is:-',$address, '<br> Your password is :- ' . $password .'
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
</body>
</html>