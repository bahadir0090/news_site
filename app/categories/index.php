<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-4">
                <button class="btn btn-outline-secondary">
                <a href="index.php">Back</a>
                </button>
            </div>
            <div class="col-4">
                <form action="" method="post">
                    Category Name:<input type="text" name="category" id="">
                    <input type="submit" value="OK">
                </form><br><br>
            </div>
            <div class="col-4">
                <button class="btn btn-outline-secondary">
                    <a href="sub_category.php" style="text-decoration:none;">Sub category</a>
                </button>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>


<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$category = $_POST['category'];
$array = ['name'=>$category];
include '../function.php';
insert('categories',$array);
}
?>