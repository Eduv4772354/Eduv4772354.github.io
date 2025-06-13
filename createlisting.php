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
    <link rel="stylesheet" href="Tools/CSS/styles.css">
    <script src="Tools/JS/scripts.js"></script>
    <title>Listing</title>
</head>
<body>
  <!--This nav bar from a preset in bootstrap links to pages in deliverable 2 and in documentation-->
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
          <a class="nav-link" href="#">Settings</a>
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

    <div class="main-div">
      <h1 id="Main-heading">Create new Listing</h1>

    </div>
        
    <div class="listingcontainer">
      <div>
          <h2 id="Details">Listing details</h2><br>
        <form class="registration-div" action="Listings.php" method="post">
          <!--
          listing_ID
          ListingTitle
          description
          price
          contactno
          contactemail
          itemimage
          location
          user_ID--- This is somethingg that would be associated with the $_SESSION['user_ID']
          -->
          <div class="listing-input-group">
            <label class="lbl" for="C-LstTitle">Listing Title:</label>
            <input type="text" id="C-LstTitle" name="C-LstTitle" placeholder="Enter Title of Listing" required>           
          </div>

          <div class="listing-input-group">
            <label class="lbl" for="C-LstDescription">Description:</label>
            <input type="text" id="C-LstDescription" name="C-LstDescription" placeholder="Enter Description" required>       
          </div>

          <div class="listing-input-group">
            <label class="lbl" for="C-Lstprice">Price of Item (in ZAR):</label>
            <input type="text" id="C-Lstprice" name="C-Lstprice" placeholder="Enter Listing Price" required>
          </div>
          
          <div class="listing-input-group">
            <label class="lbl" for="C-LstContactNo">Contact Number:</label>
            <input type="text" id="C-LstContactNo" name="C-LstContactNo" placeholder="Enter " required>
          </div>

          <div class="listing-input-group">
            <label class="lbl" for="C-LstContactEmail">Contact email:</label>
            <input type="text" id="C-LstContactEmail" name="C-LstContactEmail" placeholder="Enter Contact Number" required>
          </div>

          <div class="listing-input-group">
            <label class="lbl" >Image of Listing:</label>
            <input type="file" id="C-LstImage" name="C-LstImage" accept="image/*">
          </div>

          <div class="listing-input-group">
            <label class="lbl" for="C-LstLocation">Location:</label>
            <input type="text" id="C-LstLocation" name="C-LstLocation" placeholder="Enter Location (preferably Provice-City/Town)" required>
          </div>
          <!---user_ID is taken from $_SESSION['user_ID']-->
          <input type="submit" name="CreateListing" value="Create Listing">
          
          </div>
        </form>
      </div>
    </div>
    
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
<footer class="footer">
         <p>end of web page</p>
         <p>Afri-E-Com 2025</p>
</footer>
</html>

<?php


?>