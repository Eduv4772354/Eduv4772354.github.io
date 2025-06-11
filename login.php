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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <script src="Tools/JS/scripts.js"></script>
    <title>Registration</title>

</head>
<body>
      <nav class="navbar navbar-expand-lg bg-body-tertiary py-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="Home.php"><img src=Tools/Images/icons8-south-africa-color-70.png>Afri-E-Com</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse nav-icons" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="Home.php">Homepage</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"> </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!--Body-->
  <div class="container" id="registration">
    <div class="login-div">
      <h2 id="form-title">Registation page</h2>
        <form class="registration-div" action="Registration.php" method="post">
          
          <div class="input-group">
            <label class="lbl" for="firstname">First name:</label>
          <input type="text" id="firstname" name="firstname" placeholder="Enter First name" required>           
          </div>

          <div class="input-group">
          <label class="lbl" for="lastname">Last name:</label>
          <input type="text" id="lastname" name="lastname" placeholder="Enter First name" required>       
          </div>

          <div class="input-group">
          <label class="lbl" for="email">email address:</label>
          <input type="email" id="email" name="emailaddress" placeholder="Enter email" required>
          </div>

          <div class="input-group">          
          <label class="lbl" for="password">password:</label>
          <input type="password" id="password" name="password" placeholder="Enter password" required>         
          </div>

          <input type="submit"  name="Register" value="Register">
          </div>
        </form>
  </div>

</div>
   <div class="container" id="login">
    <div class="login-div">
      <h2 class="form-title">Sign In</h2>
        <form class="registration-div" action="login.php" method="post">

          <div class="input-group">
          <label class="lbl" for="log-email">email address:</label>
          <input type="email" id="log-email" name="emailaddress" placeholder="Enter email" required>
          </div>

          <div class="input-group">          
          <label class="lbl" for="log-password">password:</label>
          <input type="password" id="log-password" name="password" placeholder="Enter password" required>         
          </div>
            <input type="submit" id="loginbtn" name="login" value="Login"><br>
        </form>
  </div>
</div>

<!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

<footer class="footer">
         <p>end of web page</p>
         <p>Afri-E-Com 2025</p>
         <a target="_blank" href="https://icons8.com/icon/PcHqMrKoVGqn/south-africa">South Africa</a> icon by <a target="_blank" href="https://icons8.com">Icons8</a>
</footer>
</html>
<?php
    //Variables
    //There needs to be a connection between the DB and this session where we first verify if text is not empty and then if that data exists in the DB then it logs in
        if(isset($_POST["login"])){
        if(!empty($_POST["emailaddress"]) && !empty($_POST["password"])){
                //Saving session credentials
                $_SESSION["EmailAddress"] = $_POST["emailaddress"];
                $_SESSION["PassWord"] = $_POST["password"];
               
                //Just to show if it works   
                //no echo before header
                header("location: Home.php");  
        }
        else{
          echo"missing username/password <br>";
        }
    }

?>