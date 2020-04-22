<?php
 if(!empty($_GET['tid']) && !empty($_GET['product']))
 {
	 $GET = filter_var_array($_GET, FILTER_SANITIZE_STRING);
	 
	 $tid = $GET['tid'];
	 $product = $GET['product'];
 }
 else
 {
	 header('Location: ../index.php');
 }


 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Thank You · StudyDrip</title>

    <!-- Bootstrap core CSS -->
<link href="../libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand">StudyDrip</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link active" href="#">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Contact</a>
      </nav>
    </div>
  </header>

  <main role="main" class="inner cover">
    <h1 class="cover-heading">The Study you need!</h1>
    <p class="lead">
		<h2>Thank you for purchasing!
		<?php echo $product; ?></h2>
		
		
	</p>
	<hr>
    <p class="lead">
      <h2>Your transaction ID is <?php echo $tid; ?></h2>
    </p>
	<p class="lead">
      Check your email for more info
    </p>
	<p class="lead">
      <a href="../index.php" class="btn btn-lg btn-secondary">Go Back</a>
    </p>
  </main>

  <footer class="mastfoot mt-auto">
    <div class="inner">
      <p>Copyrights <a href="https://www.kmermarket.com">KmerMarket</a>, by <a href="https://noumisomen.com">@Franc Noumi</a>.</p>
    </div>
  </footer>
</div>
</body>
</html>
