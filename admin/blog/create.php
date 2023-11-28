
<?php require __DIR__.'/../layouts/header.php';?>


<div class="container-fluid">
  <div class="row">

    <!-- navbar alip kelingen jer -->
    <?php require __DIR__.'/../layouts/nav.php';?>
      <!-- navbar tawsildi -->
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Blog</h1>
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
    
            <h5><a style="color:darkslategray;text-align:center">Add to blog page</a></h5><br>
            <form action="" method="post" enctype="multipart/form-data">
                <h3><label for="title"><small>Title:</small></label></h3>
                <input type="text" class="form-control" name="title" placeholder="Title..." id="title" required=""><br><br>
                <h3><label for="text"><small>Text:</small></label></h3>
                <input type="text" class="form-control" name="text" placeholder="Text..." id="text" required=""><br><br>
                <h3><label for="photo">Photo:</label></h3>
                <input required="" type="file" name="img" id="photo"><br><br>
                <button type="submit" name="blog-create" class="btn btn-outline-primary"><strong>Bul mag'liwmatlardi saqlaw</strong></button>
            </form>
            
            <?php 
                    require __DIR__.'/../../app/controllers/posts.php';
                ?>
            </main>
  </div>
</div>
<script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script><script src="dashboard.js"></script></body>
</html>



