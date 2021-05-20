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

      <!-- <div><h1>Merchandise</h1></div> -->

    <h2>NEW PRODUCTS:</h2>
    <h2 id = "seeall">SEE MORE</h2>

       <!-- <topnav>
       <li><a href="product.php"> <img border="0" src="https://www.australiangeographic.com.au/wp-content/uploads/2018/08/0001498_australian-geographic-polar-fleece.jpg" width = "100" height = "100"> yeet </a></li>

      </topnav> -->
      <div class="flex-container">
  <div id="fleece" class="box"><b>AG Polar Fleece</b><a href="product.php"><img class="pic" border="0" src="https://www.australiangeographic.com.au/wp-content/uploads/2018/08/0001498_australian-geographic-polar-fleece.jpg" width = "auto" height = "200px"><div><buynow>BUY NOW</buynow></div><div><price>24.99$</price></div></a></div>
  <div id="globe" class="box"><b>Blue World Globe</b><img class="pic" border="0" src="https://www.australiangeographic.com.au/wp-content/uploads/2018/08/Blue_Globe_Web.jpg" width = "auto" height = "200px"><div><buynow>BUY NOW</buynow></div><div><price>49.99$</price></div></div>
  <div id="diary" class="box"><b>AG Weekly Notebook Diary</b><img class="pic" border="0" src="https://www.australiangeographic.com.au/wp-content/uploads/2018/08/2019_A5-Diary-Cov_magshop-300x430.jpg" width = "auto" height = "200px"><div><buynow>BUY NOW</buynow></div><div><price>9.99$</price></div></div>
  <div id="bag" class="box"><b>AG Satchel Bag</b><img class="pic" border="0" src="https://www.australiangeographic.com.au/wp-content/uploads/2018/08/AG-SatchelBag.jpg" width = "200px" height = "200px"><div><buynow>BUY NOW</buynow></div><div><price>19.99$</price></div></div>
</div>

<div class="flex-container">
  <div class="box2"><img class="ad" border="0" src="https://shop.australiangeographic.com.au/pub/media/wysiwyg/AGR-cms-pages/home-page/D3_Factivity_Book_Kits.jpg" ></div>
  <div class="box2"><img class="ad" border="0" src="https://shop.australiangeographic.com.au/pub/media/wysiwyg/AGR-cms-pages/home-page/D4_Littlebits_Avengers_Hero_Inventor_Kit.jpg"></div>
  <div class="box2"><img class="ad" border="0" src="https://shop.australiangeographic.com.au/pub/media/wysiwyg/AGR-cms-pages/home-page/D5_Kano_Computer_Kits.jpg" ></div>
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
