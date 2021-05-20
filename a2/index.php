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
<li><a href="product.php">TOP GIFTS</a></li>
<li><a href="sale.php">SALE</a></li>
<li><a href="new.php">NEW</a></li>
    </nav>

    <main>
      <div>
        <h1>Who are we?</h1>
          <p>In our stores around Australia you will discover a wide selection of innovative products along with personalised service to help you find exactly what you are looking for.<br><br>As Australia’s leading STEM retailer, you can explore the latest range of tech, robotics, coding, telescopes, weather stations, globes, maps, books and more to satisfy your curiosity. Whether you are shopping for a gift, exciting educational toy or the latest tech for an outdoor adventure, you will always find something unique at Australian Geographic.</p>
        </div>
        
        <div class="row">
            <div class="column">
                <h1>Our vision</h1>
                <p id="vision-statement">Our purpose is to inspire a lifelong love of learning through educational products, tech, unique hobbies and innovations.
                <br><br>
                As a team we are passionate about making sure you find the right product, and whether you visit one of our stores or shop online, we strive to give you the best experience possible.</p>
            </div>
            <div class="column">
            <section>
                <br>
                <img id="index-image" src="../../media/curious.png" alt='Australian Geographic Index' width = "90%" height = auto/>
                </section>
            </div>
        </div>

        <div class="flex-container">
  <div class="box3"><a href=products.php><img class="ad" border="0" src="../../media/newproducts.png" ></a></div>
  <div class="box3"><a href=products.php><img class="ad" border="0" src="../../media/sale.png"></a></div>
   
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
