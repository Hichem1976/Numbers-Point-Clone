<!DOCTYPE html>
<!-- saved from url=(0034)https://www.numberspoint.com/store -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<meta name="viewport" content="width=device-width, initial-scale=1">





<link href="mystyle.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="validation.js"></script> 
<script src="transform.js"></script> 


</head>
<body>





<p id="txtGros"># Check VIP numbers</p>

<div class="container">            
    <div class="col-lg-12">
            <div class="display:inline-block">
            <!----img styel="float:left" src="phone.jpg" width="70" height="70"---->

            <!---input  type="number"  class="in form-control form-control-lg"  height="30px" id="numPhone" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1"---->
    </div>














<div class="col-lg-2" style="float:left">
       
            <div class="card" style="float:left;background-color:lightgrey">
              <img src="phone.jpg" width="70" height="70">
        
                <div class="card-header">
                    <h5 id="formattedPhone" class="card-title">xxxx xxxx xx</h5>
                </div>
                <div class="card-body">
              <p >this is your formatted phone number</p>
              <button class="btn btn-primary">VIP</button>

                </div>
              </div>

</div>

</div>
<br><br>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dataPhone";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_GET['vipadd'])){
    $sql3="INSERT INTO vipnum(number,typeText) VALUES (".strval($_GET['vipadd']).",'VIP')";
    $result3=$conn->query($sql3);	
}

if(isset($_GET['vipdel'])){
    $sql3="DELETE FROM vipnum WHERE number=".strval($_GET['vipdel']);
    $result3=$conn->query($sql3);	
}










$sql = "SELECT id, number, ftNumber, indice1, indice2, indice3, typeText1 FROM phones";
$result = $conn->query($sql);


?>





<div class="container">


<div class="col-lg-5" style="float:left">
    <h3>ALL Numbers</h3>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Phone</th>
            <th scope="col">type</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody id="phoneSuite">

        <?php
					if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
                            $sql1="SELECT * FROM vipnum WHERE number=".strval($row['number']);
							$result1 = $conn->query($sql1);
						
					?>

        <tr>
            <th scope="row">1</th>
            <td><?php echo $row['ftNumber'];   ?></td>
            <td><?php echo $row['typeText1'];   ?></td>
            <td><input value=<?php echo $row['number'];    ?> id="checko" onchange="checkVIPClass(this)   " <?php if (mysqli_num_rows($result1)>0)  echo "  checked ";   ?> type="checkbox">  VIP</input></td>
        </tr>

        <?php
                        }
                    }


        ?>



        </tbody>
    </table>

</div>


<?php






$sql2 = "SELECT * FROM vipnum";
$result2 = $conn->query($sql2);


?>




<div class="col-lg-5" style="float:right">
<h3>VIP Numbers</h3>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Phone</th>
            <th scope="col">type</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody id="phoneSuite">



        <?php
					if ($result2->num_rows > 0) {
						// output data of each row
						while($row2 = $result2->fetch_assoc()) {
                            $sqlx="SELECT * from phones WHERE number=".strval($row2['number']);
                            $resultx=$conn->query($sqlx);
                            $rowx=$resultx->fetch_assoc();
						
					?>




        <tr>
            <th scope="row">1</th>
            <td><?php  echo $rowx['ftNumber'];  ?></td>
            <td>VIP</td>
            <td>------</td>
        </tr>

     
        <?php
                        }
                    }

        ?>


        </tbody>
    </table>

</div>

</div>


<?php

    $conn->close();

?>

        



    

























      





















        




















































    

</body>

</html>