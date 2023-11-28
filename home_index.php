<?php
require 'conn.php';
$id = $_GET['id'];
$sql = "SELECT * FROM home";
$sql = $conn->prepare($sql);
$sql->execute();
$posts = $sql->fetch(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
  <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">


</head>
<body style="background-color:#E6E6FA">
<div class="container">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <pre>
                <h3>
                <button class="btn btn-outline-primary"><a style="text-decoration: none; color:	#696969" href="index.php">Back</a></button>
                </h3>
            </pre>
            <h2 style="text-align:;"><?=$posts['title'];?></h2><br>
            <em><h4><?=$posts['text']?></h4></em><br>
        </div>
        <div class="col-2"></div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>