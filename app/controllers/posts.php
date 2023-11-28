<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['blog-create'])){
    include '../../app/function.php';
    $title = $_POST['title'];
    $text = $_POST['text'];
    $img = $_FILES['img'];
    $filesize = $_FILES['img']['size'];
    $filename = $_FILES['img']['name'];
    $filetype = pathinfo($filename,PATHINFO_EXTENSION);
    $filetmp = $_FILES['img']['tmp_name'];     

        $param = ['title'=>$title,'text'=>$text,'photo'=>$filename];
        move_uploaded_file($filetmp,"../upload_blog/" . $filename);
        insert('blog', $param);
        
        // header("Location:index.php");
}
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['category-create'])){
    $name = $_POST['name'];
    $param = ['name'=>$name];
    insert('categories',$param);
    
}
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['home-create'])){
    $title = $_POST['title'];
    $text = $_POST['text'];
    $param = ['title'=>$title ,'text'=>$text];
    insert('home',$param);
}
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['info-create'])){
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $param = ['email'=>$email,'address'=>$address,'phone'=>$phone];
    insert('info',$param);
}

?>