<?php 
require 'conn.php';
$sql = $conn->prepare("SELECT * FROM registr");
$sql->execute();
$post = $sql->fetchAll();

echo "<pre>";
print_r($post);
echo "</pre>";
?>