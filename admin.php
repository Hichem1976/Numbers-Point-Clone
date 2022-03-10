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





<p id="txtGros"># Put the phone number you want add to the list</p>

<div class="container">            
    <div class="col-lg-12">
            <div class="display:inline-block">
            <!----img styel="float:left" src="phone.jpg" width="70" height="70"---->

            <input  type="number"  class="in form-control form-control-lg"  height="30px" id="numPhone" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
    </div>







            <p>Choose a formatting option of your phone number</p>
                <span>Category </span>
                <div style="background-color:lightgrey">
                
                <input id="SIMPLE" name="format" checked="true" type="radio" onclick="checkSIMPLE()" value="SIMPLE">SIMPLE
                <input  name="format" type="radio" onclick="check00000()" value="00000 NUMBERS">00000 NUMBERS
                <input onclick="check000000()" name="format" type="radio" value="000000 NUMBERS" >000000 NUMBERS
                <input onclick="check00X00()" name="format" type="radio" value="00X00 &amp; 00XY00">00X00 &amp; 00XY00
                <input  onclick="check3DIGIT()" name="format" type="radio" value="3 DIGIT NUMBER">3 DIGIT NUMBER
                <input onclick="check786()" name="format" type="radio" value="786 SPECIAL" >786 SPECIAL
                <input onclick="checkABCDABCD()" name="format" type="radio" value="ABCD-ABCD">ABCD-ABCD
                <input onclick="checkABCDXYABCD()" name="format" type="radio" value="ABCD-XY-ABCD">ABCD-XY-ABCD
                
                <input  name="format" type="radio" value="ENDING 000">ENDING 000
                <input  name="format" type="radio" value="ENDING 0000">ENDING 0000
                <input  name="format" type="radio" value="ENDING 0000X">ENDING 0000X
                <input  name="format" type="radio" value="ENDING 0000XY">ENDING 0000XY
                <input  name="format" type="radio" value="ENDING 000X">ENDING 000X
                <input  name="format" type="radio" value="ENDING 000XY">ENDING 000XY
                <input  name="format" type="radio" value="ENDING XXX">ENDING XXX
                <input name="format" type="radio" value="ENDING XY-XY-XY">ENDING XY-XY-XY
                <input name="format" type="radio" value="ENDING XYZ-XYZ">ENDING XYZ-XYZ
                <input name="format" type="radio" value="MIDDLE 0000">MIDDLE 0000
                <input name="format" type="radio" value="MIDDLE XY-XY-XY">MIDDLE XY-XY-XY
                <input name="format" type="radio" value="MIRROR NUMBER">MIRROR NUMBER
                
                <input name="format" type="radio" value="STARTING XY-XY-XY">STARTING XY-XY-XY
                <input name="format" type="radio" value="STARTING XYZ-XYZ">STARTING XYZ-XYZ
                
                
                
</div>
<button onclick="applyFormatting()" class="btn btn-primary">Apply formatting</button>  
<br><br>
</div>
<div class="container">

<div class="col-lg-2" style="float:left">
            
                    
                   The price <input class="form-control form-control-lg" id="price" name="price" type="number" placeholder="Put the price"><br><br><br>
                   Numerology <br><input class="form-control form-control-lg" id="indice1" type="number" name="indice1"><input class="form-control form-control-lg" id="indice2" type="number" name="indice2"><input class="form-control form-control-lg" id="indice3" type="number" name="indice3">
            
</div>
<div class="col-lg-4" style="float:left">
       
            <div class="card" style="float:left;background-color:lightgrey">
              <img src="phone.jpg" width="70" height="70">
        
                <div class="card-header">
                    <h1 id="formattedPhone" class="card-title">xxxx xxxx xx</h1>
                </div>
                <div class="card-body">
              <p >this is your formatted phone number</p>
              <button onclick="insertNumber()" class="btn btn-primary">Validate</button>

                </div>
              </div>

</div>


<div class="col-lg-6" style="float:right">

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dataPhone";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
// si ajouter un numero
//echo "*********************************************** loooooooool";

if(isset($_GET['delete'])){
    $sql3="DELETE FROM phones WHERE number=".strval($_GET['delete']);
    $result3=$conn->query($sql3);	
    $sql3="DELETE FROM vipnum WHERE number=".strval($_GET['delete']);
    $result3=$conn->query($sql3);	

}
if(isset($_GET['numero'])){
    //echo "********************** get is set";
    $sql3="SELECT * FROM phones WHERE number=".strval($_GET['numero']);
    $result3=$conn->query($sql3);
    $abort=false;	
    if (mysqli_num_rows($result3) > 0) {
       // echo "********************************* exists";
        //$conn->close();
        //header("Location:admin.php");
        $abort=true;
    }


    //echo "*********************i will insert to database";
    if(!$abort){
    $number = $_GET['numero'];$ftNumber=$_GET['ftNumber'];$indice1=$_GET['indice1'];$indice2=$_GET['indice2'];$indice3=$_GET['indice3'];$type=$_GET['type'];$typeText1=$_GET['typeText1'];$price=$_GET['price'];
    //echo " ****************the number".$number;
    $sql1="INSERT INTO phones(number,ftNumber,indice1,indice2,indice3,type,typeText1) VALUES (".strval($number).", '".$ftNumber."' ,".strval($indice1).",".strval($indice2).",".strval($indice3).",".strval($type).",'".$typeText1."')";
    //echo $sql1;
    $result1=$conn->query($sql1);
    //$result1->session_commit();
    //$conn->commit();
    $sql2="INSERT INTO prices(number,price) VALUES (".strval($number).",".strval($price).")";
    $result2=$conn->query($sql2);
    }    

}



/*if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}*/


$sql = "SELECT id, number, ftNumber, indice1, indice2, indice3, typeText1 FROM phones";
$result = $conn->query($sql);

?>








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
							
						
					?>





        <tr>
            <th scope="row">1</th>
            <td><?php echo $row['ftNumber']; ?></td>
            <td><?php echo $row['typeText1']; ?></td>
            <td><a onclick="return validateDelete();" href="admin.php?delete=<?php echo $row['number'];  ?>">delete</a></td>
        </tr>

        <?php }
	}
	$conn->close();
?>



        </tbody>
    </table>

</div>
</div>




        



    

























      





















        




















































    

</body>

</html>