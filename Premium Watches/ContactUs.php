<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Premium Watches</title>
        <style media="screen">
            *, *:before, *:after {
          box-sizing: border-box;
          -webkit-font-smoothing: antialiased;
          -moz-osx-font-smoothing: grayscale;
        }
       
        
        body, button, input {
          font-family: 'Montserrat', sans-serif;
          font-weight: 700;
          letter-spacing: 1.4px;
        }
        
        .background {
          display: flex;
          min-height: 100vh;
        }
        
        .container {
          flex: 0 1 700px;
          margin: auto;
          padding: 10px;
        }
        
        .screen {
          position: relative;
          background: #3e3e3e;
          border-radius: 15px;
        }
        
        .screen:after {
          content: '';
          display: block;
          position: absolute;
          top: 0;
          left: 20px;
          right: 20px;
          bottom: 0;
          border-radius: 15px;
          box-shadow: 0 20px 40px rgba(0, 0, 0, .4);
          z-index: -1;
        }
        
        .screen-header {
          display: flex;
          align-items: center;
          padding: 10px 20px;
          background: #4d4d4f;
          border-top-left-radius: 15px;
          border-top-right-radius: 15px;
        }
        
        .screen-header-left {
          margin-right: auto;
        }
        
        .screen-header-button {
          display: inline-block;
          width: 8px;
          height: 8px;
          margin-right: 3px;
          border-radius: 8px;
          background: white;
        }
        
        .screen-header-button.close {
          background: #ed1c6f;
        }
        
        .screen-header-button.maximize {
          background: #e8e925;
        }
        
        .screen-header-button.minimize {
          background: #74c54f;
        }
        
        .screen-header-right {
          display: flex;
        }
        
        .screen-header-ellipsis {
          width: 3px;
          height: 3px;
          margin-left: 2px;
          border-radius: 8px;
          background: #999;
        }
        
        .screen-body {
          display: flex;
        }
        
        .screen-body-item {
          flex: 1;
          padding: 50px;
        }
        
        .screen-body-item.left {
          display: flex;
          flex-direction: column;
        }
        
        .app-title {
          display: flex;
          flex-direction: column;
          position: relative;
          color: #ea1d6f;
          font-size: 26px;
        }
        
        .app-title:after {
          content: '';
          display: block;
          position: absolute;
          left: 0;
          bottom: -10px;
          width: 25px;
          height: 4px;
          background: #ea1d6f;
        }
        
        .app-contact {
          margin-top: auto;
          font-size: 8px;
          color: #888;
        }
        
        .app-form-group {
          margin-bottom: 15px;
        }
        
        .app-form-group.message {
          margin-top: 40px;
        }
        
        .app-form-group.buttons {
          margin-bottom: 0;
          text-align: right;
        }
        
        .app-form-control {
          width: 100%;
          padding: 10px 0;
          background: none;
          border: none;
          border-bottom: 1px solid #666;
          color: #ddd;
          font-size: 14px;
          text-transform: uppercase;
          outline: none;
          transition: border-color .2s;
        }
        
        .app-form-control::placeholder {
          color: #666;
        }
        
        .app-form-control:focus {
          border-bottom-color: #ddd;
        }
        
        .app-form-button {
          background: none;
          border: none;
          color: #ea1d6f;
          font-size: 14px;
          cursor: pointer;
          outline: none;
        }
        
        .app-form-button:hover {
          color: #b9134f;
        }
        
        .credits {
          display: flex;
          justify-content: center;
          align-items: center;
          margin-top: 20px;
          color: #ffa4bd;
          font-family: 'Roboto Condensed', sans-serif;
          font-size: 16px;
          font-weight: normal;
        }
        
        .credits-link {
          display: flex;
          align-items: center;
          color: #fff;
          font-weight: bold;
          text-decoration: none;
        }
        
        .dribbble {
          width: 20px;
          height: 20px;
          margin: 0 5px;
        }
        
        @media screen and (max-width: 520px) {
          .screen-body {
            flex-direction: column;
          }
        
          .screen-body-item.left {
            margin-bottom: 30px;
          }
        
          .app-title {
            flex-direction: row;
          }
        
          .app-title span {
            margin-right: 12px;
          }
        
          .app-title:after {
            display: none;
          }
        }
        
        @media screen and (max-width: 600px) {
          .screen-body {
            padding: 40px;
          }
        
          .screen-body-item {
            padding: 0;
          }
        }
        
          </style>
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
                    </ul>

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




        <div class="background">
            <div class="container">
              <div class="screen">
                <div class="screen-header">
                  <div class="screen-header-left">
                    <div class="screen-header-button close"></div>
                    <div class="screen-header-button maximize"></div>
                    <div class="screen-header-button minimize"></div>
                  </div>
                  <div class="screen-header-right">
                    <div class="screen-header-ellipsis"></div>
                    <div class="screen-header-ellipsis"></div>
                    <div class="screen-header-ellipsis"></div>
                  </div>
                </div>
                <div class="screen-body">
                  <div class="screen-body-item left">
                    <div class="app-title">
                      <span>CONTACT</span>
                      <span>US</span>
                    </div>
                    <div class="app-contact">CONTACT INFO : 9761270766</div>
                  </div>
                  <div class="screen-body-item">
                     <form action="functions.php" method="post">
                    <div class="app-form">
                      <div class="app-form-group">
                        <input class="app-form-control" name="name" placeholder="NAME" value="">
                      </div>
                      <div class="app-form-group">
                        <input class="app-form-control" name="email" placeholder="EMAIL">
                      </div>
                      <div class="app-form-group">
                        <input class="app-form-control" name="mob" placeholder="CONTACT NO">
                      </div>
                      <div class="app-form-group message">
                        <input class="app-form-control" name="msg" placeholder="MESSAGE">
                      </div>
                      <div class="app-form-group buttons">
                      
                        <button type="submit" name="contact" class="app-form-button">SEND</button>
                      </div>
                    </div>
                    </form> 
                  </div>
                </div>
              </div>
          
            </div>
          </div>
          

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