<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/styles.css">
<style>
   .login-form {
    background: #fff;
    width: 1000px;
    margin: 105px auto;
    
  }
  input[type=text], input[type=email], input[type=number], input[type=select], input[type=date],input[type=select],input[type=password], input[type=tel]
{
    width: 50%;
    padding:12px;
    border: 1px solid rgb(168, 166, 166);
    border-radius: 4px;
    resize: vertical;
}
textarea{
    width:45%;
    padding: 12px;
    border: 1px solid rgb(168, 166, 166);
    border-radius: 4px;
    resize: vertical;
}
input[type=radio],input[type=checkbox]{
    width: 1%;
    padding-left: 0%;
    border: 1px solid rgb(168, 166, 166);
    border-radius: 4px;
    resize: vertical;
}

label{
    padding: 12px 12px 12px 0;
    display: inline-block;
}
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float:left;
}
input[type=submit]:hover {
background-color: #32a336;
}
.container{
    border-radius: 5px;
    background-color:#f2f2f2;
    padding: 20px;
}
.col-10{
    float:left;
    width:15%;
    margin-top: 6px;
}
.col-90{
    float: left;
    width: 95%;
    margin-top: 6px;
}
.row:after{
    content: "";
    display: table;
    clear: both;
}
@media screen and (max-width: 600px) {
    .col-10,.col-90,input[type=submit]{
        width: 100%;
        margin-top: 10px;
    }
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
          <div class="login-form">
        <h1 style="padding-left: 300px;">Registration Form</h1>
        <div class="container">
            
            <form action="functions.php" method="post">
          <div class="row">
              <div class="col-10">
                  <label for="fname">First Name:</label>
              </div>
              <div class="col-90">
                  <input type="text" id="fname" name="fname" placeholder="Enter your first name">
              </div>
          </div>
          <div class="row">
              <div class="col-10">
                  <label for="lname">Last Name:</label>
              </div>
              <div class="col-90">
                  <input type="text" id="lname" name="lname" placeholder="Enter your last name">
              </div>
          </div>
          <div class="row">
              <div class="col-10">
                  <label for="email">Email:</label>
              </div>
              <div class="col-90">
                  <input type="email" id="email" name="email" placeholder="it should contain @,.">
              </div>
          </div>
          <div class="row">
              <div class="col-10">
                  <label for="mobile">Mobile:</label>
              </div>
              <div class="col-90">
                  <input type="tel" id="mobile" name="mob" placeholder="only 10 digits are allowed">
              </div>
          </div>
          <div class="row">
              <div class="col-10">
                  <label for="gender" required>Gender:</label>
              </div>
              <div class="col-90">
                  <input type="radio" id="male" name="gender" value="male"/>Male
                  <input type="radio" id="female" name="gender" value="female"/>Female
              </div>
          </div>
          <div class="row">
              <div class="col-10">
                  <label for="dob">Date Of Birth:</label>
              </div>
              <div class="col-90">
                  <input type="Date" id="dob" name="dob">
              </div>
          <div class="row">
              <div class="col-10">
                  <label for="password">Password:</label>
              </div>
              <div class="col-90">
                  <input type="password" id="password" name="password" maxlength="8">
              </div>
          </div>
          <div class="row">
              <input type="submit" name="submit" value="Registered">
          </div> 
          
          </form>
      </div>  
        </div>
        


        
        </body>
        </html>