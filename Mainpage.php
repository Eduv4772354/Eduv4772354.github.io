<?php
    session_start();
    include("dbconn.php");
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

<!-- Change header to remove login when user is siggned in-->
  <header>
      <nav class="navbar navbar-expand-lg bg-body-tertiary py-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src=Tools/Images/icons8-south-africa-color-70.png>Afri-E-Com</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse nav-icons" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Homepage</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="createlisting.php">Create Listing</a>
        </li>
        <li class="nav-item">
            <form action ="index.php" method="post"> 
              <input type="submit" class="nav-link"  name="logout" value="logout"></a>
            </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" ><?php if(isset($_SESSION["EmailAddress"])){ echo "Greetings ". $_SESSION["EmailAddress"];}else{echo "No user signed in";}; ?> </a>
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
      <h1 id="Main-heading">Main page</h1>
      <p>View listings</p>
      <ul>
        <li class="nav-item">
            <a class="nav-link" href="viewlisting.php">Manage Listings</a>
        </li>
      </ul>

      <div>
        <?php
      //$img= file_get_contents($itemimage);
          //  $ImageData = base64_encode($img);
      //echo '<img src="data:image/jpeg;base64,'. $data .'" alt="Base64 Image">';   
        ?>
      </div>

  </div>
  <div class="listings-div">        
      <h2>Current Listings</h2>
        
        <div class="row">
            <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
          <a href="viewlisting.php" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
        <div class="card" style="width: 18rem;">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
            <a href="viewlisting.php" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
          <a href="viewlisting.php" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
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
        /*throw new Exception("Unable to show session info");
              if(isset($_SESSION["EmailAddress"])){
                   echo "Email Address: ".$_SESSION["EmailAddress"]. "<br>";
                  }else{
                    echo "No user loggged in <br>";
                  }
              
              if(isset($_SESSION["PassWord"])){
                   echo "Email Address: ".$_SESSION["PassWord"]. "<br>";
                  }else{
                    echo "No user loggged in <br>";
                  }
                    */
        if(isset($_POST["logout"])){
          session_destroy();
          header("location: index.php");
        }
?>