<?php 
require '../../conn.php';
$id = $_GET['id'];
$sql = $conn->prepare("SELECT * FROM works WHERE id = '$id'");
$sql->execute();
$posts = $sql->fetch();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$title = $_POST['title'];
$text = $_POST['text'];
$sql = "UPDATE works SET title = '$title', text = '$text' WHERE id = '$id'";
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
            <div class="col-4"></div>
            <div class="col-4">
                <h3 style="color:blue;"></h3>
                <form action="" method="post">
                    <label for="title">Tema:</label>
                    <input type="text" name="title" value="<?=$posts['title']?>" id="title"><br><br>
                    <label for="text">Tekst:</label>
                    <input type="text" name="text" value="<?=$posts['text']?>" id="text">
                    <button type="submit">OK</button>
                </form>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>