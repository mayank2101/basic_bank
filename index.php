<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>United Bank </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
   
  </head>
  <body>
   <?php
    
    include 'nav.php';


   ?>
    <!-- Banner Image  -->
  <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-10 ">
                    <div class="header_hero__text">
                    <h1 class="text1">Welcome to the <span class="mysooz">United</span> Bank Of India.</h1>
                    <p class="esy-text">Transfer your money with ease.</p>
                    <div class="header_text__btn">
                    <form method="POST" action="createuser.php">  
                       <button class="btn" onclick="createuser.php">Create user</button>
                    </form>
                    </div>
                  </div>
                </div>
                <!--------right side images----------->
                <div class="col-lg-6 col-10">
                    <figure class="header_hero__img">
                        <img src="img/moneyt.png" alt="" class="img-fluid">
                    </figure>
                </div>
            </div>
        </div>
    </div>

    <!-----------------------------About Bank Start Here----------------------------------->
    <div class="section">
        <div class="container">
            <div class="row">
                <h2 class="text-center">About United Bank Of India.</h2>
               
                <!--------right side images----------->
                <div class="col-lg-6 col-10">
                    <figure class="header_hero__img altr">
                        <img src="img/ubin.png" alt="" class="img-fluid">
                    </figure>
                </div>
                <div class="col-lg-6 col-10 ">
                    <div class="header_hero__text tex3">
                    <h1 class="text2">History</h1>
                    <p>United Bank of India (UBI) headquartered in Kolkata, 
                       been amalgamated with Punjab National Bank w.e.f 1st April 2020.
                       The organisational structure of UBI is now same as that of Punjab National Bank.
                       On 30 March 2009, the Indian government approved the restructuring of United Bank of India.
                       [2] The government proposed to invest 2.5 billion rupees in shares by 31 March and another 5.50
                        billion in the next fiscal year in Tier-I capital instruments.</p>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <!-----------------------------------About Bank End Here--------------------------------------->

      <!-- Footer -->
     <br><br><br><br><br><br><br>
<footer>
	<p class="foot">Copyright &copy; 2021 United Bank India.</p>
</footer>
<!-- Footer -->

    



    

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
    
  </body>
</html>
