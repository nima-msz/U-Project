
<!DOCTYPE html>
<html lang="en">
  <head>
    <script>
    
        /*if(count%2==0){

           var xhr = new XMLHttpRequest();
           xhr.open('POST', 'php.php', true);
           xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
           xhr.onreadystatechange = function() {
           if (xhr.readyState === 4 && xhr.status === 200) {
        
               console.log('Order updated successfully');
               incrementCartCount();
              }
           };
           var data = 'product=' + encodeURIComponent(productName);
           xhr.send(data);
           
           function incrementCartCount() {
           var cartCount = document.getElementById('cartCount');
           var count = parseInt(cartCount.innerText);
           count++;
           cartCount.innerText = count;
           }
       
         }*/
        

         
    
     
    </script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="images/fav-icon.png" />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <title>eGrocery Store</title>
  </head>
  <body>

    <button id="myBtn">Try it</button>
    <p id="demo">hi world</p>
    <!--==Navigation================================-->
    <nav class="navigation">
      <!--logo-------->
      <a href="index.html" class="logo"> <span>e</span>Grocery </a>
      <!--menu-btn---->
      <input type="checkbox" class="menu-btn" id="menu-btn" />
      <label for="menu-btn" class="menu-icon">
        <span class="nav-icon"></span>
      </label>
      <!--menu-------->
      <ul class="menu">
        <li><a href="index.html" class="active">Home</a></li>
        <li><a href="#popular-bundle-pack">Our Packages</a></li>
        <li><a href="#download-app">Our App</a></li>
      </ul>
      <!--right-nav-(cart-like)-->
      <div class="right-nav">
        
        <!--cart----->
        <a href="#" class="cart">
          <i class="fas fa-shopping-cart"></i>
          <span id="cartCount">0</span>
        </a>
      </div>
    </nav>
    <!--nav-end--------------------->
    <!--==Search-banner=======================================-->
    <section id="search-banner">
      <!--bg--------->
      <img src="D:\eGrocery\images/bg-1.png" class="bg-1" alt="bg" />
      <img src="D:\eGrocery\images/bg-2.png" class="bg-2" alt="bg-2" />
      <!--text------->
      <div class="search-banner-text">
        <h1>Order Your daily Groceries</h1>
        <strong>#Free Delivery</strong>
        <!--search-box------>
        <form action="" class="search-box">
          <!--icon------>
          <i class="fas fa-search"></i>
          <!--input----->
          <input
            type="text"
            class="search-input"
            placeholder="Search your daily groceries"
            name="search"
            required
          />
          <!--btn------->
          <input type="submit" class="search-btn" value="Search" />
        </form>
      </div>
    </section>
    <!--search-banner-end--------------->
    <!--==category=========================================-->
    
    <!--category-end----------------------------------->
    <!--==Products====================================-->
    <section id="popular-product">
      <!--heading----------->
      <div class="product-heading">
        <h3>Popular Product</h3>
        <span>All</span>
      </div>
      <!--box-container------>
      <div class="product-container">
        <!--box---------->
        <div class="product-box">
          <img src="images/apple.png" alt="apple" />
          <strong>Apple</strong>
          <span class="quantity">1 KG</span>
          <span class="price">2$</span>
          <!--cart-btn------->
          <a  id="toggleLink" class="cart-btn">
           
            <i id='displayText' class="fas fa-shopping-bag"></i> Add Cart
          </a>
          <!--like-btn------->
          <a href="#" class="like-btn">
            <i class="far fa-heart"></i>
          </a>
        </div>
        <!--box---------->
        <div class="product-box">
          <img src="images/chili.png" alt="apple" />
          <strong>Pepper</strong>
          <span class="quantity">1 KG</span>
          <span class="price">3$</span>
          <!--cart-btn------->
          <a id="toggleLink" class="cart-btn">
            <i id='displayText' class="fas fa-shopping-bag"></i> Add Cart
          </a>
          <!--like-btn------->
          <a href="#" class="like-btn">
            <i class="far fa-heart"></i>
          </a>
        </div>
        <!--box---------->
        <div class="product-box">
          <img src="images/onion.png" alt="apple" />
          <strong>Onion</strong>
          <span class="quantity">1 KG</span>
          <span class="price">1$</span>
          <!--cart-btn------->
          <a id="toggleLink" class="cart-btn">
            <i id='displayText' class="fas fa-shopping-bag"></i> Add Cart
          </a>
          <!--like-btn------->
          <a href="#" class="like-btn">
            <i class="far fa-heart"></i>
          </a>
        </div>
        <!--box---------->
        <div class="product-box">
          <img src="images/patato.png" alt="apple" />
          <strong>Potato</strong>
          <span class="quantity">1 KG</span>
          <span class="price">2.2$</span>
          <!--cart-btn------->
          <a id="toggleLink" class="cart-btn">
            <i id='displayText' class="fas fa-shopping-bag"></i> Add Cart
          </a>
          <!--like-btn------->
          <a href="#" class="like-btn">
            <i class="far fa-heart"></i>
          </a>
        </div>
        <!--box---------->
        <div class="product-box">
          <img src="images/garlic.png" alt="apple" />
          <strong>Garlic</strong>
          <span class="quantity">1 KG</span>
          <span class="price">3$</span>
          <!--cart-btn------->
          <a id="toggleLink" class="cart-btn">
            <i id='displayText' class="fas fa-shopping-bag"></i> Add Cart
          </a>
          <!--like-btn------->
          <a href="#" class="like-btn">
            <i class="far fa-heart"></i>
          </a>
        </div>
        <!--box---------->
        <div class="product-box">
          <img src="images/tamato.png" alt="apple" />
          <strong>Tomato</strong>
          <span class="quantity">1 KG</span>
          <span class="price">1.4$</span>
          <!--cart-btn------->
          <a id="toggleLink" class="cart-btn">
            <i id='displayText' class="fas fa-shopping-bag"></i> Add Cart
          </a>
          <!--like-btn------->
          <a href="#" class="like-btn">
            <i class="far fa-heart"></i>
          </a>
        </div>
      </div>
    </section>
    <!--popular-product-end--------------------->
    <!--Popular-bundle-pack===================================-->

    <!--popular-bundle-pack-end-------------------------------->
    <!--==Clients===============================================-->
    <!--client-section-end---------->
    <!--==Partnre-logo================================-->
  
    <!--logo-section-end--------------------->
    <!--==download-app====================================-->
    <section id="download-app">
      <!--img----------------------->
      <div class="app-img">
        <img src="images/mobile-app.png" alt="app" />
      </div>
      <!--text---------------------->
      <div class="download-app-text">
        <strong>Download App</strong>
        <p>
          Click on this <a href="https://www.google.com">link</a> to download.
        </p>
        <!--btns------->
       
      </div>
    </section>
    <!--download-app-section-end------------------------->
    <!--==Footer=============================================-->
    <footer>
      <div class="footer-container">
        <!--logo-container------>
        <div class="footer-logo">
          <a href="#"><span>e</span>Grocery</a>
          <!--social----->
          <div class="footer-social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
        <!--links------------------------->
        <div class="footer-links">
          <strong>Product</strong>
          <ul>
            <li><a href="#">Clothes</a></li>
            <li><a href="#">Packages</a></li>
            <li><a href="#">Popular</a></li>
            <li><a href="#">New</a></li>
          </ul>
        </div>
        <!--links------------------------->
        <div class="footer-links">
          <strong>Category</strong>
          <ul>
            <li><a href="#">Beauty</a></li>
            <li><a href="#">Meats</a></li>
            <li><a href="#">Kids</a></li>
            <li><a href="#">Clothes</a></li>
          </ul>
        </div>
        <!--links-------------------------->
        <div class="footer-links">
          <strong>Contact</strong>
          <ul>
            <li><a href="#">Phone : +123456789</a></li>
            <li><a href="#">Email : Example@gmail.com</a></li>
          </ul>
        </div>
      </div>
    </footer>
  </body>
</html>