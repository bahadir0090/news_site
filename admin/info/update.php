<?php 
require '../../conn.php';
$id = $_GET['id'];
$sql = $conn->prepare("SELECT * FROM info WHERE id = '$id'");
$sql->execute();
$posts = $sql->fetch();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$sql = "UPDATE info SET address = '$address', email = '$email', phone = '$phone' WHERE id = '$id'";
$sql = $conn->prepare($sql);
$sql->execute();
// $posts = $sql->fetch();
header('Location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <h3 style="color:blue;"></h3>
                <form action="" method="post">
                    <label for="address">Ma'nzil:</label><br>
                    <textarea name="address" id="address" cols="60" rows="2"><?=$posts['address']?></textarea><br>  
                    <label for="email">Pochta:</label><br>
                    <textarea name="email" id="email" cols="60" rows="2"><?=$posts['email']?></textarea><br>    
                    <label for="phone">Telefon:</label><br>
                    <textarea name="phone" id="phone" cols="60" rows="1"><?=$posts['phone']?></textarea><br>
                    <button style="color:blue;" type="submit" class="btn btn-outline-secondary">Save</button>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>