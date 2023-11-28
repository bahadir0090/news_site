<?php 
include __DIR__.'/../app/controllers/users.php';
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<link rel="stylesheet" href="style.css" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
      <div class="col-4 mt-5"><h2><button class="btn btn-outline-light"><a href="../index.php" style="color:black;text-decoration:none">Artqa</a></button></h2></div>
      <div class="col-4"></div>
      <div class="col-4"></div>
    </div>
  </div>
	<div class="main-w3layouts wrapper">
		<h1 style="text-align:center">Login tekseriw beti</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
			<?php if(!empty($erMsg)){?>
              
              <p><?=$erMsg[0];?></p>
              
            <?php }?>
				<form action="#" method="post">
					<input class="text email" type="email" name="email" placeholder="Elektron pochta..." required="">
					<input class="text" type="password" name="password" placeholder="Parol..." required="">
					<div class="wthree-text">
					</div>
					<input type="submit" name="log" value="Login boliw">
				</form>
        </h3><br>
				<p>Akauntin'iz joq bolsa? | <a href="registr.php">Registraciyadan otin'</a></p>
			</div>
		</div>
		<!-- copyright -->
		
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>