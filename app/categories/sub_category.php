<?php 
include '../function.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

$sub_category = $_POST['sub_category'];
$sub_id = $_POST['select'];

$sub_param = [
    'name'=>$sub_category,
    'category_id'=>$sub_id
];

insert('sub_categories',$sub_param);
}

$categories = selectAll('categories');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doc</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-4">
                <button class="btn btn-outline-secondary">
                    <a style="color:black;text-decoration:none" href="index.php" style="text-decoration:none;">Category</a>
                </button><br><br><br>
                
            </div>
            <div class="col-4">
                <form action="" method="post">
                    Category select :<select name="select" id="">
                        <option >Tanlang..</option>
                        <?php foreach($categories as $key=>$value):?>
                        <option value="<?=$value['id']?>"><?=$value['name']?></option>
                        <?php endforeach;?>
                    </select><br><br>
                    sub Category Name:<input type="text" name="sub_category" id="">
                    <input type="submit" value="OK">
                </form>
            </div>
            <div class="col-4">
                <button class="btn btn-outline-secondary">
                    <a href="product.php" style="text-decoration:none; color:black">Products</a>
                </button>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

