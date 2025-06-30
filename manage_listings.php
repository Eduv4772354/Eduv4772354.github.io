<?php
    session_start();
    include("dbconn.php");
    $sqlGet= " SELECT * FROM tbl_listings";
    $Result=$dbconn->query($sqlGet);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="sitepro\CSS\styles.css">
    <script src="sitepro/JS/scripts.js"></script>
    <title>Manage Listings</title>
</head>
<body>
  <!--This nav bar from a preset in bootstrap links to pages in deliverable 2 and in documentation-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary py-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src=sitepro/Images/icons8-south-africa-color-70.png>Afri-E-Com</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse nav-icons" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="Homepage.php">Homepage</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="Adminpage.php">Admin Homepage</a>
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
      <h1 id="Main-heading">Manage Listings</h1>
    </div>
     <label>Listing ID</label>
              <input type="text" id="ViewID" name="ListingID"><br>
    <div class="main-div">
    <div class="admincontainer">  
    <h2>View Current listings</h2>      
       <!---
        while($rows=$Result->fetch_assoc())
          $ImageData =$rows['itemImage'];
          $ListingTitle=$rows['listingTitle'];
          $Description=$rows['description'];
          $ListingID=$rows['listing_ID'];       
          $price=$rows["price"];
          $contactno=$rows["contactNo"];
          $Email=$rows["contactEmail"];
          $location=$rows["location"];
          $UserID=$rows["user_ID"];-->
        
            <div>
              <table style="width:100%">
                  <tr>
                    <th>ListingID</th>
                    <th>Listing Title</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>contact number</th>
                    <th>Email</th></th>
                    <th>location</th>  
                  </tr>  
                  <?php  while($ListingsCont=$Result->fetch_assoc()){?>           
                  <tr data-id="<?=$ListingsCont['listing_ID']?>">
                    <td><?= $ListingsCont['listing_ID'] ?></th>
                    <td contenteditable="true"><?= htmlspecialchars($ListingsCont['listingTitle']) ?></td>
                    <td><?= htmlspecialchars($ListingsCont['description']) ?></td>
                    <td><?= htmlspecialchars($ListingsCont['price']) ?></td>
                    <td><?= htmlspecialchars($ListingsCont['contactNo']) ?></td>
                    <td><?= htmlspecialchars($ListingsCont['contactEmail']) ?></td>
                    <td><?= htmlspecialchars($ListingsCont['location']) ?></td>
                  </tr>
                  <?php 
                } ?>
                </table>
            </div>            
        </div>

        <div class="admincontainer">
            <h2>Edit Current listings</h2>
            <input type="text" id="SelectID" name="SelectListingID"><br>
            <input type="button" id="ProcessChange" name="ProcessChangeN" placeholder="Make change"><br>
        </div>

        <div class="admincontainer">
            <h2>Delete Current listings</h2>
            <input type="text" id="ViewID" name="ListingID" ><br>
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
        if(isset($_POST["logout"])){
          session_destroy();
          header("location: Home.php");
        }
?>
