<!DOCTYPE html>
<html>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>United Bank </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/trans.css">
    
   
  </head>
  <body>

  <?php

  include 'config.php';

  $sql = "SELECT * FROM createuser";
  $result = mysqli_query($conn,$sql);


  ?>

   <?php
    
    include 'nav.php';


   ?>
   <div class="hero_card">
      <h2 class="text-center pt-4 create">Transfer Money</h2>
   </div>

   <div class="container btn2">
      
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center tbtext py-2">Id</th>
                            <th scope="col" class="text-center tbtext py-2">Name</th>
                            <th scope="col" class="text-center tbtext py-2">E-Mail</th>
                            <th scope="col" class="text-center tbtext py-2">Balance</th>
                            <th scope="col" class="text-center tbtext py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class=" tr py-2"><?php echo $rows['id'] ?></td>
                        <td class=" tr py-2"><?php echo $rows['name']?></td>
                        <td class="tr py-2"><?php echo $rows['email']?></td>
                        <td class="tr py-2"><?php echo $rows['balance']?></td>
                        <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn">Transact</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>


   <footer>
	<p class="foot">Copyright &copy; 2021 United Bank India.</p>
</footer>
<script src="js/all.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/main.js"></script>
   </body>
</html>   