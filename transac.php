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
    
    include 'nav.php';


   ?>
   <div class="hero_card">
      <h2 class="text-center pt-4 create">Transactions History</h2>
   </div>


	<div class="container">
       
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead style="color : black;">
            <tr>
                <th class="text-center tbtext">S.No.</th>
                <th class="text-center tbtext">Sender</th>
                <th class="text-center tbtext">Receiver</th>
                <th class="text-center tbtext">Amount</th>
                <th class="text-center tbtext">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php
           
            
            include 'config.php';

            $sql ="select * from transactions";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td class="tr py-2"><?php echo $rows['sno']; ?></td>
            <td class="tr py-2"><?php echo $rows['sender']; ?></td>
            <td class="tr py-2"><?php echo $rows['receiver']; ?></td>
            <td class="tr py-2"><?php echo $rows['balance']; ?> </td>
            <td class="tr py-2"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

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