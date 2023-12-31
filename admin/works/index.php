<?php 
require '../../conn.php';
$sql = 'SELECT * FROM works';
$sql = $conn->prepare($sql);
$sql -> execute();
$posts = $sql->fetchAll();
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
<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
  <symbol id="check2" viewBox="0 0 16 16">
    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
  </symbol>
  <symbol id="circle-half" viewBox="0 0 16 16">
    <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
  </symbol>
  <symbol id="moon-stars-fill" viewBox="0 0 16 16">
    <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
    <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
  </symbol>
  <symbol id="sun-fill" viewBox="0 0 16 16">
    <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
  </symbol>
</svg>

<div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
  <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
          id="bd-theme"
          type="button"
          aria-expanded="false"
          data-bs-toggle="dropdown"
          aria-label="Toggle theme (auto)">
    <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
    <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
  </button>
  <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
    <li>
      <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
        <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#sun-fill"></use></svg>
        Light
        <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
      </button>
    </li>
    <li>
      <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
        <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
        Dark
        <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
      </button>
    </li>
    <li>
      <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
        <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#circle-half"></use></svg>
        Auto
        <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
      </button>
    </li>
  </ul>
</div>


<main>
<nav class="navbar navbar-dark bg-dark" aria-label="First navbar example">
<div class="container-fluid">
  <a class="navbar-brand" href="#">Admin panel</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExample01">
    <ul class="navbar-nav me-auto mb-2">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="../index.php">Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../home/index.php">Bas bet</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../blog/index.php">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Jumislar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../info/index.php">Info</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </li>
    </ul>
    <form role="search">
      <input class="form-control" type="search" placeholder="Search" aria-label="Search">
    </form>
  </div>
</div>
</nav>

</div>
</main>
<script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<style>
        .vl {
            border-left: 2px solid black;
            height: 500px;
        }
        </style>
    <div class="container mt-4">
        <div class="row">
            <div class="col-6">
                <?php 
                    require '../../conn.php';
                ?>

                <h3 style="color:forestgreen;text-align:center">Blog ushin magliwmatlar qosiw</h3>
                <form action="" method="post" enctype="multipart/form-data">
                    <h3><label for="title"><strong>Tema:</strong></label></h3>
                    <input required="" type="text" name="title" placeholder="Title..." id="title"><br><br>
                    <h3><label for="text"><strong>Tekst:</strong></label></h3>
                    <input required="" type="text" name="text" placeholder="Text..." id="text"><br><br>
                    <h3><label for="photo">Photo:</label></h3>
                    <input required="" type="file" name="img" id="photo"><br><br>
                    <button type="submit" class="btn btn-outline-primary"><strong>Bul mag'liwmatlardi saqlaw</strong></button>
                </form>
                <?php 
                    $img = $_FILES['img'];
                    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($img)){
                        require '../../conn.php';
                        $title = $_POST['title'];
                        $text = $_POST['text'];
                        $img = $_FILES['img'];
                        $filesize = $_FILES['img']['size'];
                        $filename = $_FILES['img']['name'];
                        $filetype = pathinfo($filename,PATHINFO_EXTENSION);
                        $filetmp = $_FILES['img']['tmp_name'];
                        // $allowed = ['jpg','png','jpeg'];
                        // if ($filesize > 10000000){
                        //     echo "Fayl juda ulken razmerde";
                        // }elseif(!in_array($filetype,$allowed)){
                        //     echo "Keshiresiz tek gana jpg,png,jpeg fayllar qosiladi";
                        // }else{      
                            move_uploaded_file($filetmp,"../upload_work/" . $filename);
                            $sql = $conn->prepare("INSERT INTO works (title,text,photo) VALUES (?,?,?)");
                            $sql->execute([$title,$text,$filename]);
                    }
                ?>
            </div>
            <div class="col-6 vl">
            <?php foreach($posts as $post) :?>
            <div class="card" style="width: 18rem;">
                    <img src="../upload_work/<?=$post['photo'];?>" class="card-img-top" alt="..." width="200" height="200">
                    <div class="card-body">
                            <h5 class="card-title"><?=$post['title'];?></h5>
                        </a>
                    </div>
                    <p class="card-text"><?=$post['text'];?></p><hr>
                    <h4><button class="btn btn-outline-secondary"><a href="update.php?id=<?=$post['id']?>" style="text-decoration:none;color:darkslategray">O'zgertiw</a></button></h4>
                    <h4><button class="btn btn-outline-secondary"><a href="delete.php?id=<?=$post['id']?>" style="text-decoration:none;color:darkslategray">O'shiriw</a></button></h4>
                    </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    </body>
</html>
<!-- 
Bizlerdin' IT akademiyamizda Back-End , Front-End , Kompyuter sawatxanligi , Inglis tili , Turk tili ham de basqa da tarawlardan bilimin'izdi asiriw imkaniyatina iyesiz! Bizlerdin' instagram akauntimiz : https://www.instagram.com/karsu_academy , telegram kanalimiz : https://telegram.org/karsu_academy ,
menedjerimiz : +998 90 708 36 36 -->
