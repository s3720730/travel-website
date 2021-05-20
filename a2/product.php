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

    <script>
    var a = 1;            
            function increase(){
                var textBox = document.getElementById("text");
                a++;
                textBox.value = a;
                
            }  
            function decrease(){
                var textBox = document.getElementById("text");
                if (textBox.value==0){
                    a=0;
                }
                else{
                a--;
                textBox.value = a;
                }
            }          
    </script>
  </head>

  <body>
      <div>
  <nav class="topnav"> 
<li><a href="login.php">LOG IN</a></li>
<li><a href="signup.php">SIGN UP</a></li>
<li><a id="cart" href="cart.php"> <img border="0" src="../../media/cartt.jpg" width = "25" height = "25"> </a></li>
        </div>

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
  

    <main class="container">
        
        <div class="row">
            
            <!--Hoodie Image Column-->
            <div class="column">
                <section id="hoodie-image">
                <img src="https://www.australiangeographic.com.au/wp-content/uploads/2018/08/0001498_australian-geographic-polar-fleece.jpg" alt='Australian Geographic Hoodie' width = "90%" height = auto/>
                </section>
            </div>
            
            <!--Hoodie Details Column-->
            <br><br><br>
            <div class="column">
            <h1 id="product-heading">AG Polar Fleece</h1>
                <p>Made from lightweight 100% polyester, the fleece is warm and breathable and perfect for everyday wear and outdoor activities. A simple and stylish design includes half-zipper, white embroidered Australian Geographic logo and two front pockets to keep your hands cosy.<br><br> 76cm; Chest size: 62.5cm</p>
                <form method="post" action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php">
                    <input name="product-id" type="hidden" value="AG_PF">
                    <div><c id="size">Select Size</c></div>
                    <br>
                    <div>
                        <select id="size-dropdown" name="size">
                            <option value="Small">Small</option>
                            <option value="Medium">Medium</option>
                            <option value="Large">Large</option>
                        </select>
                    </div> 
                    <br>
                        <!-- <div id="quantity-box">
                            <h2 id="quantity-header">Quantity</h2>
                            <input type="text" name="quantity" id="quantity" value="1">
                            <button type="button" onclick="increase()">+</button>
<button type="button" onclick="decrease()">-</button>
                        </div> -->
                <div id="quantity-box">

<div id="geet">
<div><c id="quantity-header">Quantity</c></div>
<br>
<button class = "qbuttons" type="button" onclick="increase()">+</button>
<button class = "qbuttons" type="button" onclick="decrease()">-</button>
        <input type="text" id="text" maxlength="4" size = "20" value="1">
                </div>

</div>


                    <br><br><br>
                    <br>
                    <div>
                    <d>$24.99</d>
                    </div>
                    <br>
                        <div id="submit-button">
                            <input type="submit" value="ADD TO CART">
                        </div>
                </form>
            </div>
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
