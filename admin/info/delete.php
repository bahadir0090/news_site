<?php 
require '../../conn.php';


    $id = $_GET['id'];
    
    $sql = $conn->prepare("SELECT * FROM info WHERE id = '$id'");
    $sql->execute();
    $posts = $sql->fetch();
    
    
$sql = "DELETE FROM info  WHERE id = '$id'";
$sql = $conn->prepare($sql);
$sql->execute();
// $posts = $sql->fetch();
header('Location:index.php');

?>

