<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="Tools\CSS\styles.css">
    <script src="Tools/JS/scripts.js"></script>
    <title>Landing</title>
</head>
<body>
  <header>
      <nav class="navbar navbar-expand-lg bg-body-tertiary py-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="Home.php">Afri-E-Com</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse nav-icons" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="Home.php">Homepage</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
            <form action ="home.php" method="post"> 
              <input type="submit" class="nav-link"  name="logout" value="logout"></a>
            </form>
        </li>
          
        <li class="nav-item">
          <a class="nav-link" href="#"><?php echo $_SESSION["EmailAddress"]; ?> </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>
<!--Body-->
<!--Add main tag-->
<main>
    <div class="main-div">
      <h1 id="Main-heading">Landing page</h1>
      <p>This is the first paragraph</p>

  </div>
</main>

  
<!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
<footer class="footer">
         <p>end of web page</p>
         <p>Afri-E-Com 2025</p>
</footer>
</html>

<?php
        //throw new Exception("Unable to show session info");

              echo"Email Address: ". $_SESSION["EmailAddress"]. "<br>";
              echo"Password: ". $_SESSION["PassWord"]. "<br>";

        if(isset($_POST["logout"])){
          session_destroy();
          header("location: login.php");
        }
?>