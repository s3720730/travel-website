<!DOCTYPE html>
<html lang='en'>
  <head>

    <meta charset="utf-8">
    <title>Assignment 2</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arimo"/>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="cart" href="https://d2gg9evh47fn9z.cloudfront.net/800px_COLOURBOX5559842.jpg"/>
    <script src='../wireframe.js'></script>
  </head>

  <body>
  <nav class="topnav"> 
<li><a href="login.php">LOG IN</a></li>
<li><a href="signup.php">SIGN UP</a></li>
<li><a id="cart" href="cart.php"> <img border="0" src="../../media/cartt.jpg" width = "25" height = "25"> </a></li>

</nav>
    
<header class="flex-header">
<div class="flexheaderlogo">
    <input id="search" type="text" name="search" placeholder="Search...">
     
      <button type="submit"><img src='../../media/search.png' alt='search' width="30" height="32"/><i class="fa fa-search"></i></button>
        </div>
<div class="flexheadersearch">
      <logo id='Logo' >
        <img src='../../media/logo.png' alt='logo' width="300" height="85"/>
      </logo>
      <div>
      
 
    </header>

    <nav> 
    <li><a href="index.php">HOME</a></li>
<li><a href="products.php">PRODUCTS</a></li>
<li><a href="topgifts.php">TOP GIFTS</a></li>
<li><a href="sale.php">SALE</a></li>
<li><a href="new.php">NEW</a></li>
    </nav>
  

    <main>
        <h1 id="login-heading">Login</h1>
        <br>
        <div class="login-form">
            <form method="post" action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php">
                
                            <p><c>E-Mail</c></p>
                            <input id="login-box" type="email" name="username" value="">
                            <p><c>Password</c></p>
                            <input id="login-box" type="password" name="password" value="">
                        <br> <br>
                            <input id="submit-button" type="submit" value="LOGIN">

            </form>
        </div>
    </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Allana Davies, Anthony Peters, s3720730, s3723306, loyola</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>
