
<?php 
require '../../conn.php';
require '../../app/function.php';

$id = $_GET['id'];
$sql = $conn->prepare("SELECT * FROM categories WHERE id = '$id'");
$sql->execute();
$posts = $sql->fetch();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
$name = $_POST['name'];
update('categories', $id,['name'=> $name]);
header('Location:index.php');
}
?>
<!-- header alip kelindi -->
<?php require __DIR__.'/../layouts/header.php';?>
<!-- header tawsildi -->

<div class="container-fluid">
  <div class="row">

    <!-- navbar alip kelingen jer -->
    <?php require __DIR__.'/../layouts/nav.php';?>
      <!-- navbar tawsildi -->

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Category</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
            <svg class="bi"><use xlink:href="#calendar3"/></svg>
            This week
          </button>
        </div>
      </div>

      <h2>Category edit</h2><br>
      <div class="table-responsive small">
                <form action="" method="post">
                    <h4><label for="title"><a style="color:indigo" href=""></a>Name:</label></h4>
                    <input type="text" name="name" class="form-control" value="<?=$posts['name']?>" id="title"><br><br>
                    <button class="btn btn-outline-secondary" type="submit">Save</button>
                </form>
            
      </div>
    </main> 
  </div>
</div>
<script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script><script src="../dashboard.js"></script></body>
</html>
