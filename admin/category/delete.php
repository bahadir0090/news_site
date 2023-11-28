<?php 
require '../../conn.php';
require '../../app/function.php';
$id = $_GET['id'];

    
    $sql = $conn->prepare("SELECT * FROM categories WHERE id = '$id'");
    $sql->execute();
    $posts = $sql->fetch();
    

$sql = "DELETE FROM categories  WHERE id = '$id'";
$sql = $conn->prepare($sql);
$sql->execute();
// $posts = $sql->fetch();
header('Location:index.php');

?>

