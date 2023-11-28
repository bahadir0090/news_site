<?php 
    include '../function.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
$product_name = $_POST['name'];
$category_id = $_POST['select_category'];
$sub_category_id = $_POST['select_sub_category'];
$description = $_POST['description'];

$product_param = [
    'category_id'=>$category_id,
    'sub_category_id'=>$sub_category_id,
    'name'=>$product_name,
    'description'=>$description
];

insertproduct('products',$product_param);
}

$categories = selectAll('categories');
$sub_categories = selectAll('sub_categories');
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
    <script>
        function catch_value_types() {
            const selectedValue = document.getElementById("select_category").value;
            const select2 = document.getElementById("select_sub_category");  
            Array.from(select2.options).forEach((node) => node.style.display = node.value === selectedValue ? "block": "none");
        }
    </script>
    <div class="container">
        <div class="row mt-5">
            <div class="col-4">
                <button class="btn btn-outline-secondary">
                <a href="sub_category.php" style="text-decoration:none;">sub category</a>
                </button>
            </div>
            <div class="col-4">
                <form action="" method="post">
                    Category select :<select onchange="catch_value_types()" name="select_category" id="select_category" aria-placeholder="tanlang..">
                        <?php foreach($categories as $key=>$value):?>
                        <option value="<?=$value['id']?>"><?=$value['name']?></option>
                        <?php endforeach;?>
                    </select><br><br>
                    Sub Category select :<select name="select_sub_category" id="select_sub_category" aria-placeholder="tanlang..">
                        <?php foreach($sub_categories as $key=>$value):?>
                        <option value="<?=$value['id']?>"><?=$value['name']?></option>
                        <?php endforeach;?>
                    </select><br><br>
                    product Name:<input type="text" name="name" id=""><br><br>
                    description : <textarea name="description" id="" cols="" rows="3"></textarea><br><br>
                    <input type="submit" value="OK"><br><br>
                </form>
            </div>
            <div class="col-4">
                <button class="btn btn-outline-secondary">
                <a href="index.php" style="text-decoration:none;">Home</a>
                </button>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

