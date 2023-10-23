<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    // User is logged in, display the page content
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
        <!-- Your header content here -->
        <div class="container" id="container">
        <div class="navbar">
            <div class="menu">
                <h3 class="logo">WOODCARE</h3>
                <div class="hamburger-menu" id="hamburger-menu">
                    <div class="bar"></div>
                </div>
            </div>
        </div>
  

    <!-- The rest of your page content here -->
   
    <div class="main-container">
        <div class="main">
            <header>

            </header>
        </div>
    </div>
    <div class="links">
        <ul> 
            <li><a href="home.php" style="--i: 0.05s" >Home</a></li>
            <li><a href="shop.php" style="--i: 0.1s" >Shop</a></li>
            <li><a href="about.html" style="--i: 0.15s" >ABOUT</a></li>
            <li><a href="#" style="--i: 0.2s" >Portfolio</a></li>
            <li><a href="logout.php" style="--i: 0.25s" >LOG OUT</a></li>
               
        </ul>
    </div>
</div>
</body>

<script src="script.js"></script>
</html>
<?php
} else {5
    // User is not logged in, redirect to index.php
    header("Location: index.php");
    exit();
}
?>