<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>
        <link rel="stylesheet" href="assets/css/styles.css">

        <style>
            * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    -webkit-font-smoothing: antialiased;
  }
  
  body {
    font-family: 'Rubik', sans-serif;
  }
  
  .login-form {
    background: rgb(255, 255, 255);
    width: 500px;
    margin: 65px auto;
    display: -webkit-box;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
            flex-direction: column;
    border-radius: 4px;
    box-shadow: 0 2px 25px rgba(0, 0, 0, 0.2);
  }
  .login-form h1 {
    padding: 35px 35px 0 35px;
    font-weight: 300;
  }
  .login-form .content {
    padding: 35px;
    text-align: center;
  }
  .login-form .input-field {
    padding: 12px 5px;
  }
  .login-form .input-field input {
    font-size: 16px;
    display: block;
    font-family: 'Rubik', sans-serif;
    width: 100%;
    padding: 10px 1px;
    border: 0;
    border-bottom: 1px solid #747474;
    outline: none;
    -webkit-transition: all .2s;
    transition: all .2s;
  }
  .login-form .input-field input::-webkit-input-placeholder {
    text-transform: uppercase;
  }
  .login-form .input-field input::-moz-placeholder {
    text-transform: uppercase;
  }
  .login-form .input-field input:-ms-input-placeholder {
    text-transform: uppercase;
  }
  .login-form .input-field input::-ms-input-placeholder {
    text-transform: uppercase;
  }
  .login-form .input-field input::placeholder {
    text-transform: uppercase;
  }
  .login-form .input-field input:focus {
    border-color: #222;
  }
  .login-form a.link {
    text-decoration: none;
    color: #747474;
    letter-spacing: 0.2px;
    text-transform: uppercase;
    display: inline-block;
    margin-top: 20px;
  }
  .login-form .action {
    display: -webkit-box;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
            flex-direction: row;
  }
  .login-form .action button {
    width: 100%;
    border: none;
    padding: 18px;
    font-family: 'Rubik', sans-serif;
    cursor: pointer;
    text-transform: uppercase;
    background: #e8e9ec;
    color: #777;
    border-bottom-left-radius: 4px;
    border-bottom-right-radius: 0;
    letter-spacing: 0.2px;
    outline: 0;
    -webkit-transition: all .3s;
    transition: all .3s;
  }
  .login-form .action button:hover {
    background: #d8d8d8;
  }
  .login-form .action button:nth-child(2) {
    background: #2d3b55;
    color: #fff;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 4px;
  }
  .login-form .action button:nth-child(2):hover {
    background: #3c4d6d;
  }
        </style>
        <title>Premium Watches</title>
    </head>
    <body>
        <header class="header" id="header">
            <nav class="nav container">
                <a href="index.html" class="nav__logo">
                    <i class='bx bxs-watch nav__logo-icon'></i>Premium Watches
                </a>
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="index.html" class="nav__link active-link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="ContactUs.html" class="nav__link">Contact US</a>
                        </li>
                        <li class="nav__item">
                            <a href="Login.html" class="nav__link">Login/SignUp</a>
                        </li>
                        

                    <div class="nav__close" id="nav-close">
                        <i class='bx bx-x' ></i>
                    </div>
                </div>

                <div class="nav__btns">
                    <i class='bx bx-moon change-theme' id="theme-button"></i>

                    <div class="nav__shop" id="cart-shop">
                        <i class='bx bx-shopping-bag' ></i>
                    </div>

                    <div class="nav__toggle" id="nav-toggle">
                        <i class='bx bx-grid-alt' ></i>
                    </div>
                </div>
            </nav>
        </header>
        <br>
        <br>

        <div class="login-form">
            <form action="functions.php" method="post">
              <h1>Login</h1>
              <div class="content">
                <div class="input-field">
                  <input type="email" name="email" placeholder="Email" autocomplete="nope">
                </div>
                <div class="input-field">
                  <input type="password" name="password" placeholder="Password" autocomplete="new-password">
                </div>
                
              </div>
              <div class="action">
            
                <button type="submit" name="login">Sign in</button>
              </div>
              <div style="padding: 10px;">   
               <a href="Register.php" >Create a new account/Register</a>
              </div>
            </form>
        
        </div>
       
            <script  src="assets/js/script.js"></script>
          





        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content">
                    <h3 class="footer__title">My information</h3>
        
                    <ul class="footer__list">
                        <li>Lavish Chaddha, B.E From IET,Agra</li>
                        <li>Vill. Babugarh,Dist Hapur</li>
                        <li>Mobile No. 9761270766</li>
                    </ul>
                </div>
                <div class="footer__content">
                    <h3 class="footer__title">About Us</h3>
        
                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">Support Center</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Customer Support</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">About Us</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Copy Right</a>
                        </li>
                    </ul>
                </div>
        
                <div class="footer__content">
                    <h3 class="footer__title">Product</h3>
        
                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">Road bikes</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Mountain bikes</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Electric</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Accesories</a>
                        </li>
                    </ul>
                </div>
        
            </div>
        
            <span class="footer__copy">&#169;Copyright All rigths reserved</span>
        </footer>
        
        <!--=============== SCROLL UP ===============-->
        <a href="#" class="scrollup" id="scroll-up"> 
            <i class='bx bx-up-arrow-alt scrollup__icon' ></i>
        </a>
        <script src="assets/js/main.js"></script>
        </body>
        </html>