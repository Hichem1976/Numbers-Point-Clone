<?php

session_start();

if(!isset($_SESSION['key'])){
	$_SESSION['key']=rand();
	$_SESSION['countCart']=0;
}

if(!isset($_SESSION['index_low'])){
	$_SESSION['index_low']=0;
	$_SESSION['index_hight']=9;
	$_SESSION['table_index']=9;
	$_SESSION['end_of_rows']=false;
	


	
}
if(!isset($_SESSION['min_budget'])){

	$_SESSION['min_budget']=0;
	$_SESSION['max_budget']=1000000;
}

if(!isset($_SESSION['categ'])){

	$_SESSION['categ']="SIMPLE";
	
}


$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "dataPhone";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	
		
	
	
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	
		//die($name);
	$sql = "SELECT * FROM phones ";
	$result = $conn->query($sql);
	$_SESSION['table_index']=mysqli_num_rows($result);
	
	if(($_SESSION['table_index'])<$_SESSION['index_hight']){
		//$_SESSION['index_hight']=$_SESSION['table_index'];
		$_SESSION['end_of_rows']=true;
	}
	$conn->close();


if ($_SERVER["REQUEST_METHOD"] == "GET") {


	if(isset($_GET['next'])){
		
			//echo "**************************************************".strval($_SESSION['table_index']);

			$_SESSION['index_low']=$_SESSION['index_low']+10;
			$_SESSION['index_hight']=$_SESSION['index_hight']+10;
			

			//if(($_SESSION['table_index'])<$_SESSION['index_hight']){
				//$_SESSION['index_hight']=$_SESSION['table_index'];
				//$_SESSION['end_of_rows']=true;
			//}else{ 
				//$_SESSION['end_of_rows']=false;
			//}

		

	} else{
			$_SESSION['index_low']=0;
			$_SESSION['index_hight']=9;
			//$_SESSION['table_index']=3;
			$_SESSION['end_of_rows']=false;

	}
	

}



//else{ $_SESSION['index_low']=0;}
?>






<!DOCTYPE html>
<!-- saved from url=(0034)https://www.numberspoint.com/store -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="canonical" href="https://www.numberspoint.com/store">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<link href="mystyle.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="transform.js"></script>





<body oncontextmenu="return false" data-ls="1" data-script-loaded="1" data-sl="1">
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P2CBCPX"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<div class="waiting_screen">
	<div class="waitbar">
		<div class="bg">
			<div id="floatingCirclesG">
				<div class="f_circleG" id="frotateG_01"></div>
				<div class="f_circleG" id="frotateG_02"></div>
				<div class="f_circleG" id="frotateG_03"></div>
				<div class="f_circleG" id="frotateG_04"></div>
				<div class="f_circleG" id="frotateG_05"></div>
				<div class="f_circleG" id="frotateG_06"></div>
				<div class="f_circleG" id="frotateG_07"></div>
				<div class="f_circleG" id="frotateG_08"></div>
			</div>
		</div>
		<div class="break10"></div>
		<div class="bg"><p>Please wait..</p></div>
	</div>
</div>





<!------------------------Main Menu----------------------------->



</div><!-- <a href="javascript:void(Tawk_API.toggle())" class="tawkto_launch" ><i class="far fa-comment"></i> Chat Support</a> --><div id="nav_header" class="bg nav_header">
  <div class="container">
    <div class="flexbox">
      <div class="flex-md-15 flex-xs-100">
        <div class="bg logo_header">
          <a href="index.php" title="Numbers Point"><img src="./monpetittest_files/logo.png" alt="Numbers Point" class="img-responsive logo"></a>
          <table class="tbl1">
            <tbody><tr>
              <td><a href="mycart.php" title="MyCart"><i class="fas fa-shopping-basket"></i> My Cart <span data-cart-item="true">0</span></a></td>
              <td><a href="tel:74-78787878" title="Customer Care"><i class="fas fa-phone-volume"></i> Help</a></td>
              <td><a href="store.php" data-main-nav="true"><i class="fas fa-ellipsis-v"></i> Menu</a></td>
            </tr>
          </tbody></table>
        </div>
      </div>
      <div class="flex-md-35 flex-xs-100">
        <form action="store.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="sum" value="0">
          <input type="hidden" name="min" value="0">
          <input type="hidden" name="max" value="1000000">
          <input type="hidden" name="cat" value="">
          <input type="hidden" name="sqtype" value="Anywhere">
          <input type="hidden" name="sq" value="">
          <input type="hidden" name="start" value="0">
          <input type="hidden" name="limit" value="30">
          <div class="bg searchtool">
            <table>
              <tbody><tr><td><select name="sqtype" required=""><option value="Anywhere" selected="">Anywhere</option><option value="StartWith">StartWith</option><option value="Endwith">Endwith</option></select></td>
                <td><input type="text" name="sq" maxlength="10" value="" data-type="num" placeholder="Search Number"></td>
                <td><button type="submit"><i class="fa fa-search"></i></button></td>
              </tr>
            </tbody></table>
          </div>
        </form>
      </div>
      <div class="flex-md-50 flex-xs-100">
        <div class="bg nav_cover">
          <div class="bg nav_block">
            <ul class="nav1">
              <li><a href="index.php"><i class="fa fa-home"></i> <span>Home</span></a></li>
              <li><a href="store.php"><i class="far fa-bookmark"></i> Store <span>New Collection</span></a></li>
              <li><a href="offers.php"><i class="far fa-star"></i> Offers <span>Only For You</span></a></li>
              <li><a href="wishlist.php"><i class="far fa-heart"></i> Wishlist <span>Your Favorite</span></a></li>
              <li><a href="contact.php"><i class="fas fa-map-signs"></i> Contact <span>Need Our Help</span></a></li>

				<?php
					if(!isset($_SESSION['mobile'])){
				
				?>


              <li><a href="login.php" data-popup-button="wbsigninblk"><i class="far fa-user"></i> login<span>my Accoount</span></a></li>            </ul>
			  <?php
					} else{


				?>

				<li><a  style="color:green" href= "logout.php" data-popup-button="wbsigninblk"><i class="far fa-user"></i> logout <span style="color: green"><?php echo $_SESSION['mobile'];   ?></span></a></li>

				<?php
					}

				?>


          </div>
        </div>
      </div>
    </div>
  </div>
</div>
















<!---------------------------Flyer Cart------------------------------->



<a href="mycartorder.php" title="Goto Cart" class="flycartlink">
    <div class="flexbox">
      <div class="flex-md-50"><i class="fa fa-shopping-basket"></i> <span class="t1">My Cart</span></div>
      <div class="flex-md-50"><span class="t2" data-cart-item="true"><?php echo $_SESSION['countCart']; ?></span></div>
    </div>
  </a><div class="bg mobile_nav"><div class="bg usernav">
	<button class="closmenu"><i class="fa fa-times"></i></button>
	<div class="bg profblock" align="center"><p class="t1">Guest</p></div>
	<div class="bg navcol">
		<ul class="nav1">
			<li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
			<li><a href="store.php"><i class="far fa-bookmark"></i> Store</a></li>
			<li><a href="wishlist.php" title="Wishlist"><i class="far fa-heart"></i> Wishlist</a></li>
			<li><a href="offers.php" title="My Offers"><i class="far fa-star"></i> My Offers</a></li>
			<li><a href="contact.php" title="Contact Us"><i class="fas fa-map-signs"></i> Contact Us</a></li>
			<li><a href="login.php" data-popup-button="wbsigninblk" title="Login"><i class="far fa-user"></i> Login (My Account)</a></li>		</ul>
	</div>
</div>
</div>








<!---------------Form Research options--------------->


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dataPhone";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// collect value of input field
	if(isset($_POST['sq']))$name = $_POST['sq'];
	

	
}
	


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "GET"){
	



			if (isset($_GET['min'])) {
				$_SESSION['min_budget']=$_GET['min'];
				$_SESSION['max_budget']=$_GET['max'];
			
				$sqlx="SELECT * FROM prices WHERE price>=".strval($_GET['min'])." AND price<=".strval($_GET['max']);
				$resultx = $conn->query($sqlx);
				if (mysqli_num_rows($resultx) > 0) {
					// output data of each row
					$row = $resultx->fetch_assoc();
					$sql="SELECT * fROM phones WHERE number=".$row['number'];
					while($row = $resultx->fetch_assoc()) {
						$sql=$sql." UNION "."SELECT * fROM phones WHERE number=".$row['number'];
					}
				}
			} else{
 			if (isset($_GET['cat'])) {
				$_SESSION['categ']=$_GET['cat'];
				$sql="SELECT * FROM phones WHERE typeText1='".strval($_GET['cat'])."'";


			}else{
				$_SESSION['categ']="SIMPLE";
				$sql = "SELECT id, number, ftNumber, indice1, indice2, indice3 FROM phones";
		}
	}
}

if (!empty($name)) {
	//die($name);
	$sql = "SELECT id, number, ftNumber, indice1, indice2, indice3 FROM phones WHERE LOCATE('".$name."',ftnumber)>0";
	//echo("*****************:   ".$sql);
} 






$result = $conn->query($sql);

?>











<section style="margin-top: 0px;">
<div class="bg storepage fullht">
<div class="bg head" align="center"><p class="h1">Our Collection <span>Don't miss this chance</span></p></div>
<div class="bg container">
<div class="flexbox" data-store-page="true">
	<div class="flex-md-25 flex-xs-100">

<input type="hidden" name="start" value="30">
<input type="hidden" name="sqtype" value="Anywhere">
<input type="hidden" name="sq" value="">
<div class="bg leftcol">
	<div align="center" class="bg"><button type="button" class="openfltr1">Search Filter</button></div>
	<div class="bg leftcolbg">
		<div align="center" class="bg"><p class="h1">Search Options</p></div>
		
		<div  class="bg tool">
			<p class="h2">Set Budget</p>
			<div class="bg">
				<div  class="price-slider">
				   <table>
				   	<tbody><tr><td><input id="minbar" type="number" style="background: #FAFAFA;" data-input-type="number" data-filter-change="true" value="<?php echo $_SESSION['min_budget']; ?>" min="0" max="1000000">
				   	</td><td><input id="maxbar" type="number" style="background: #FAFAFA;" data-input-type="number" data-filter-change="true" value="<?php echo $_SESSION['max_budget']; ?>" min="0" max="1000000">
				   	</td></tr>
				   	
				   </tbody></table>
					<br>
				   <button onclick="priceSearch()" class="btn btn-success">Validate</button>
				</div>
			</div>
		</div>
		<div class="bg tool">
		<p class="h2">Category</p>
		<div class="bg">
			<ul class="checkul">
				
				
				<input <?php if($_SESSION['categ']=="MIRROR NUMBER") echo " checked ";  ?> onclick="checkredirect(this)" name="cat" value="MIRROR NUMBER" type="radio">MIRROR NUMBER<br>
				
				<input <?php if($_SESSION['categ']=="XY-XY-XY-XY") echo " checked ";  ?> onclick="checkredirect(this)" name="cat" value="XY-XY-XY-XY" type="radio">XY-XY-XY-XY<br>
				
				
				<input <?php if($_SESSION['categ']=="ENDING XY-XY-XY") echo "checked";  ?> onclick="checkredirect(this)" name="cat" value="ENDING XY-XY-XY" type="radio">ENDING XY-XY-XY<br>
				<input <?php if($_SESSION['categ']=="MIDDLE XY-XY-XY") echo "checked";  ?> onclick="checkredirect(this)" name="cat" value="MIDDLE XY-XY-XY" type="radio">MIDDLE XY-XY-XY<br>
				<input <?php if($_SESSION['categ']=="STARTING XY-XY-XY") echo "checked";  ?> onclick="checkredirect(this)" name="cat" value="STARTING XY-XY-XY" type="radio">STARTING XY-XY-XY<br>
				<input <?php if($_SESSION['categ']=="ABCD-XY-ABCD") echo "checked";  ?> onclick="checkredirect(this)" name="cat" value="ABCD-XY-ABCD" type="radio">ABCD-XY-ABCD<br>
				
				<input <?php if($_SESSION['categ']=="STARTING XYZ-XYZ") echo "checked";  ?> onclick="checkredirect(this)" name="cat" value="STARTING XYZ-XYZ" type="radio">STARTING XYZ-XYZ<br>
				<input <?php if($_SESSION['categ']=="ENDING XYZ-XYZ") echo "checked";  ?> onclick="checkredirect(this)" name="cat" value="ENDING XYZ-XYZ" type="radio">ENDING XYZ-XYZ<br>
				
				<input <?php if($_SESSION['categ']=="XY-XY") echo "checked";  ?> onclick="checkredirect(this)" name="cat" value="XY-XY" type="radio">XY-XY<br>
				<input <?php if($_SESSION['categ']=="XYXY-ABAB") echo "checked";  ?> onclick="checkredirect(this)" name="cat" value="XYXY-ABAB" type="radio">XYXY-ABAB<br>
				<input <?php if($_SESSION['categ']=="3 DIGIT NUMBER") echo "checked";  ?> onclick="checkredirect(this)" name="cat" value="3 DIGIT NUMBER" type="radio">3 DIGIT NUMBER<br>
				<input <?php if($_SESSION['categ']=="TWO DIGIT NUMBER") echo "checked";  ?> onclick="checkredirect(this)" name="cat" value="TWO DIGIT NUMBER" type="radio">TWO DIGIT NUMBER<br>
				<input <?php if($_SESSION['categ']=="XXX-YYY") echo "checked";  ?> onclick="checkredirect(this)" name="cat" value="XXX-YYY" type="radio">XXX-YYY<br>
				<input <?php if($_SESSION['categ']=="ABCD-ABCD") echo "checked";  ?> onclick="checkredirect(this)" name="cat" value="ABCD-ABCD" type="radio">ABCD-ABCD<br>
				<input <?php if($_SESSION['categ']=="786 SPECIAL") echo "checked";  ?> onclick="checkredirect(this)" name="cat" value="786 SPECIAL" type="radio">786 SPECIAL<br>
				<input <?php if($_SESSION['categ']=="13 SPECIAL") echo "checked";  ?> onclick="checkredirect(this)" name="cat" value="13 SPECIAL" type="radio">13 SPECIAL<br>
				<input <?php if($_SESSION['categ']=="00X00 &amp; 00XY00") echo "checked";  ?> onclick="checkredirect(this)" name="cat" value="00X00 &amp; 00XY00" type="radio">00X00 &amp; 00XY00<br>
				
				<input <?php if($_SESSION['categ']=="ENDING XXX") echo "checked";  ?> onclick="checkredirect(this)" name="cat" value="ENDING XXX" type="radio">ENDING XXX<br>
				<input <?php if($_SESSION['categ']=="000000 NUMBERS") echo "checked";  ?> onclick="checkredirect(this)" name="cat" value="000000 NUMBERS" type="radio">000000 NUMBERS<br>
				<input <?php if($_SESSION['categ']=="00000 NUMBERS") echo "checked";  ?> onclick="checkredirect(this)" name="cat" value="00000 NUMBERS" type="radio">00000 NUMBERS<br>
				<input <?php if($_SESSION['categ']=="ENDING 0000") echo "checked";  ?> onclick="checkredirect(this)" name="cat" value="ENDING 0000" type="radio">ENDING 0000<br>
				<input <?php if($_SESSION['categ']=="ENDING 0000X") echo "checked";  ?> onclick="checkredirect(this)" name="cat" value="ENDING 0000X" type="radio">ENDING 0000X<br>
				<input <?php if($_SESSION['categ']=="ENDING 0000XY") echo "checked";  ?> onclick="checkredirect(this)" name="cat" value="ENDING 0000XY" type="radio">ENDING 0000XY<br>
				<input <?php if($_SESSION['categ']=="MIDDLE 0000") echo "checked";  ?> onclick="checkredirect(this)" name="cat" value="MIDDLE 0000" type="radio">MIDDLE 0000<br>
				<input <?php if($_SESSION['categ']=="ENDING 000") echo "checked";  ?> onclick="checkredirect(this)" name="cat" value="ENDING 000" type="radio">ENDING 000<br>
				<input <?php if($_SESSION['categ']=="ENDING 000X") echo "checked";  ?> onclick="checkredirect(this)" name="cat" value="ENDING 000X" type="radio">ENDING 000X<br>
				<input <?php if($_SESSION['categ']=="ENDING 000XY") echo "checked";  ?> onclick="checkredirect(this)" name="cat" value="ENDING 000XY" type="radio">ENDING 000XY<br>
				
		</div>
		</div>
	</div>
</div>
</form>
	</div>




<!-------------------------liste numéros produits------------------------------------->


















	<div class="flex-md-75 flex-xs-100">

	<div class="bg rightcol">
			<div class="bg store_page">
				<div class="bg store_links"><div class="flexbox">
	<div class="flex-md-33">
		<a href="offers.php" title="Offers"><i class="far fa-star"></i> Offers</a>	</div>
	<div class="flex-md-33">
		<a href="wishlist.php" title="Wishlist"><i class="far fa-heart"></i> Wishlist <span>0</span></a>	</div>
	<div class="flex-md-33"><a href="tel:74-78787878"><i class="fas fa-phone-volume"></i> Need Help</a></div>
</div></div>				
				<div class="flexbox" data-store-block="true">




				<?php
					if (mysqli_num_rows($result) > 0) {
						// output data of each row
						$i=0;
						while($row = $result->fetch_assoc()) {
							$sql2="SELECT * FROM prices WHERE number=". strval($row['number']);
							$result2=$conn->query($sql2);
							$row2=$result2->fetch_assoc();
							//echo "-----------------------------------".strval($_SESSION['index_low']);
							//echo "++++++++++++++++++++++++++++++++++++".strval($_SESSION['index_hight']);
							$i=$i+1;
							if($i<$_SESSION['index_low']){continue;}
							if($i>$_SESSION['index_hight']){break;}
							
							
							
							
					?>





	<div class="flex-md-33 flex-xs-100"><div class="item">
	<table>
		<tbody><tr><td class="td1"></td>
			<td class="td2"><button data-wl-button="90749" class="b1"><i class="far fa-heart"></i></button>				
			<!----form  name="frmaddcart" method="POST" enctype="multipart/form-data"---->
					
					<input type="hidden" id="add" name="add" value="<?php echo strval($row['number']);?>">

					
					

					<div class="bg"><p class="t1" data-similar-cat="30" data-similer-button="77900 3600 4"><?php echo $row['ftNumber']; ?></p></div>
					<div class="bg">
						<div class="flexbox">
						
							<div class="flex-md-100"><p class="t3"><span>Numerology</span></p></div>
							<div class="flex-md-25"><p class="t3"><?php echo $row['indice1']; ?></p></div>
							<div class="flex-md-25"><p class="t3"><?php echo $row['indice2']; ?></p></div>
							<div class="flex-md-25"><p class="t3"><?php echo $row['indice3']; ?></p></div>
							<div class="flex-md-25"><a href="#" data-similar-cat="30" data-similer-button="7790036004" class="b3">Similer</a></div>
						</div>
					</div>

					<div class="bg"><p class="t4"><span>₹ <?php  echo $row2['price'];   ?></span> 
					<a  href="myCartOrder.php?add=<?php echo ($row['number']);?>" class="buy"><i class="fa fa-shopping-basket"></i> AddCart</a></p></div>
					
				<!---/form---->
			</td>
		</tr>
	</tbody>
</table>
</div>

</div>





<?php }
	}
	$conn->close();
?>
















<div align="center" class="bg"><a href="store.php?next=1" data-load-more="true" class="btnstyle3"><i class="fas fa-sync-alt"></i> Load More</a></div>
</div>
</div>

</div>
</div>
</div>
<div class="bg webfooter">
<div class="bg container">
	<div class="bg"><h1>Why We Need - VIP Mobile Number</h1></div>
	<div class="bg">
		<p>Getting VIP fancy mobile number is one of the small luxuries everyone desires, since it's so easy to remember and share with others. VIP numbers are made available inside a sequence whenever a telecom operator releases a batch of numbers.</p>
		<p><strong>How to get a Fancy Mobile Number Online</strong></p>
		<p>Most of our numbers get sold very quickly as they come on our portal at the best prices. These numbers are available for online VIP number booking. All the VIP fancy Numbers we sell all over India from the low range of Rs 1,200 to the highest price of Rs 24,50,000.</p>
		<p>Once the payment is done, Our team will share a Unique Porting Code (UPC) for the number along with an invoice for the same. Once you receive the UPC, you can go for the registration to your telecom provider's service center and provide them the UPC and supporting documents. The new fancy mobile number usually takes 4-5 days to activate.</p>
	</div>
	<div class="bg">
	<h3>Payment Accepted</h3>
	<p>We accept payment through all available payment methods. Here we assure you 100% payment protection guaranteed. So you can purchase any number with our hassle-free process. We wish you all the best for your future.</p>
	<div class="break10"></div>
	<img src="./monpetittest_files/payment-options.png" class="img-responsive" alt="Payment option available on Numbers Point">
	</div>
</div>
</div>
<div class="bg main_footer">
<div class="bg container">
<div class="bg">
<table>
    <tbody><tr><td><span>About Company </span></td><td>
        <ul class="links">
            <li><a href="#" title="Terms &amp; Conditions">Terms &amp; Conditions</a></li><li><a href="https://www.numberspoint.com/page/refund-cancellation-policy/2/" title="Refund &amp; Cancellation Policy">Refund &amp; Cancellation Policy</a></li><li><a href="https://www.numberspoint.com/page/privacy-policy/3/" title="Privacy Policy">Privacy Policy</a></li>        </ul>
    </td></tr>
    <tr><td><span>Category </span></td><td><ul class="links">
        <li><a href="store.php?cat=00000 NUMBERS" rel="nofollow" title="00000 NUMBERS">00000 NUMBERS</a></li><li><a href="store.php?cat=000000 NUMBERS" rel="nofollow" title="000000 NUMBERS">000000 NUMBERS</a></li><li><a href="store.php?cat=00X00 &amp; 00XY00" rel="nofollow" title="00X00 &amp; 00XY00">00X00 &amp; 00XY00</a></li><li><a href="store.php?cat=13 SPECIAL" rel="nofollow" title="13 SPECIAL">13 SPECIAL</a></li><li><a href="store.php?cat=3 DIGIT NUMBER" rel="nofollow" title="3 DIGIT NUMBER">3 DIGIT NUMBER</a></li><li><a href="store.php?cat=786 SPECIAL" rel="nofollow" title="786 SPECIAL">786 SPECIAL</a></li><li><a href="store.php?cat=ABCD-ABCD" rel="nofollow" title="ABCD-ABCD">ABCD-ABCD</a></li><li><a href="store.php?cat=ABCD-XY-ABCD" rel="nofollow" title="ABCD-XY-ABCD">ABCD-XY-ABCD</a></li><li><a href="store.php?cat=COUNTING NUMBER" rel="nofollow" title="COUNTING NUMBER">COUNTING NUMBER</a></li><li><a href="store.php?cat=DOUBLING NUMBER" rel="nofollow" title="DOUBLING NUMBER">DOUBLING NUMBER</a></li><li><a href="store.php?cat=ENDING 000" rel="nofollow" title="ENDING 000">ENDING 000</a></li><li><a href="store.php?cat=ENDING 0000" rel="nofollow" title="ENDING 0000">ENDING 0000</a></li><li><a href="store.php?cat=ENDING 0000X" rel="nofollow" title="ENDING 0000X">ENDING 0000X</a></li><li><a href="store.php?cat=ENDING 0000XY" rel="nofollow" title="ENDING 0000XY">ENDING 0000XY</a></li><li><a href="store.php?cat=ENDING 000X" rel="nofollow" title="ENDING 000X">ENDING 000X</a></li><li><a href="store.php?cat=ENDING 000XY" rel="nofollow" title="ENDING 000XY">ENDING 000XY</a></li><li><a href="store.php?cat=ENDING HEXA" rel="nofollow" title="ENDING HEXA">ENDING HEXA</a></li><li><a href="store.php?cat=ENDING PENTA" rel="nofollow" title="ENDING PENTA">ENDING PENTA</a></li><li><a href="store.php?cat=ENDING TETRA" rel="nofollow" title="ENDING TETRA">ENDING TETRA</a></li><li><a href="store.php?cat=ENDING XXX" rel="nofollow" title="ENDING XXX">ENDING XXX</a></li><li><a href="store.php?cat=ENDING XY-XY-XY" rel="nofollow" title="ENDING XY-XY-XY">ENDING XY-XY-XY</a></li><li><a href="store.php?cat=ENDING XYZ-XYZ" rel="nofollow" title="ENDING XYZ-XYZ">ENDING XYZ-XYZ</a></li><li><a href="store.php?cat=FANCY NUMBER" rel="nofollow" title="FANCY NUMBER">FANCY NUMBER</a></li><li><a href="store.php?cat=HIGH RANGE NUMBER" rel="nofollow" title="HIGH RANGE NUMBER">HIGH RANGE NUMBER</a></li><li><a href="store.php?cat=LOW COST NUMBERS" rel="nofollow" title="LOW COST NUMBERS">LOW COST NUMBERS</a></li><li><a href="store?cat=43" rel="nofollow" title="MIDDLE 0000">MIDDLE 0000</a></li><li><a href="store?cat=32" rel="nofollow" title="MIDDLE HEXA">MIDDLE HEXA</a></li><li><a href="store?cat=34" rel="nofollow" title="MIDDLE PENTA">MIDDLE PENTA</a></li><li><a href="store?cat=36" rel="nofollow" title="MIDDLE TETRA">MIDDLE TETRA</a></li><li><a href="store?cat=15" rel="nofollow" title="MIDDLE XY-XY-XY">MIDDLE XY-XY-XY</a></li><li><a href="store?cat=6" rel="nofollow" title="MIRROR NUMBER">MIRROR NUMBER</a></li><li><a href="store?cat=7" rel="nofollow" title="SEMI-MIRROR NUMBER">SEMI-MIRROR NUMBER</a></li><li><a href="store?cat=21" rel="nofollow" title="SPECIAL DIGIT NUMBER">SPECIAL DIGIT NUMBER</a></li><li><a href="store?cat=16" rel="nofollow" title="STARTING XY-XY-XY">STARTING XY-XY-XY</a></li><li><a href="store?cat=19" rel="nofollow" title="STARTING XYZ-XYZ">STARTING XYZ-XYZ</a></li><li><a href="store.php?cat=SYMMETRY NUMBER" rel="nofollow" title="SYMMETRY NUMBER">SYMMETRY NUMBER</a></li><li><a href="store?cat=25" rel="nofollow" title="TWO DIGIT NUMBER">TWO DIGIT NUMBER</a></li><li><a href="store?cat=47" rel="nofollow" title="WITHOUT 2,4 &amp; 8">WITHOUT 2,4 &amp; 8</a></li><li><a href="store?cat=26" rel="nofollow" title="XXX-YYY">XXX-YYY</a></li><li><a href="store?cat=22" rel="nofollow" title="XY-XY">XY-XY</a></li><li><a href="store?cat=8" rel="nofollow" title="XY-XY-XY-XY">XY-XY-XY-XY</a></li><li><a href="store?cat=23" rel="nofollow" title="XYXY-ABAB">XYXY-ABAB</a></li>    </ul></td></tr>
</tbody></table>
</div>
<div class="bg"><p>All rights reserved by <a href="#" title="Numbers Point">Numbers Point</a> &amp; Proudly developed by <a href="https://www.webmoogle.com/" target="_blank" title="webmoogle inspirational solutions pvt ltd">webmoogle</a></p></div>
</div>
</div>
</section>
</div>

<div style="width: 8px; height: 8px; position: fixed; bottom: 1px; right: 1px; overflow: hidden; background-color: white; z-index: 100000000;"><div style="width: 8px; height: 8px; top: 1px; left: 1px; background-color: white; z-index: 100000000;"><iframe src="./monpetittest_files/index.html" id="ut-player" frameborder="0" name="video-extension" style="width: 640px; height: 360px; position: absolute; top: 0px; left: 0px; background-color: white; border: none; display: block;"></iframe></div></div><div style="width: 8px; height: 8px; position: fixed; bottom: 1px; left: 1px; overflow: hidden; background-color: white; z-index: 100000000;"><div style="width: 8px; height: 8px; top: 1px; left: 1px; background-color: white; z-index: 100000000;"><iframe src="./monpetittest_files/index(1).html" id="ut-player2" frameborder="0" name="video-extension2" style="width: 640px; height: 360px; position: absolute; top: 0px; left: 0px; background-color: white; border: none; display: block;"></iframe></div></div><script src="./monpetittest_files/1.js.téléchargement"></script><iframe src="./monpetittest_files/tw.html" style="position: fixed; left: -1000px; top: -1000px; width: 1px; height: 1px; border: 0px;"></iframe><img src="./monpetittest_files/acnt"><script async="" charset="UTF-8" src="./monpetittest_files/en.js.téléchargement"></script><div id="rqou244toero1f9ookg9n" style="display: block !important;"><iframe src="./monpetittest_files/saved_resource.html" frameborder="0" scrolling="no" width="130px" height="64px" style="outline:none !important; visibility:visible !important; resize:none !important; box-shadow:none !important; overflow:visible !important; background:none !important; opacity:1 !important; filter:alpha(opacity=100) !important; -ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity 1}) !important; -mz-opacity:1 !important; -khtml-opacity:1 !important; top:auto !important; right:6px !important; bottom:0px !important; left:auto !important; position:fixed !important; border:0 !important; min-height:64px !important; min-width:130px !important; max-height:64px !important; max-width:130px !important; padding:0 !important; margin:0 !important; -moz-transition-property:none !important; -webkit-transition-property:none !important; -o-transition-property:none !important; transition-property:none !important; transform:none !important; -webkit-transform:none !important; -ms-transform:none !important; width:130px !important; height:64px !important; display:block !important; z-index:1000001 !important; background-color:transparent !important; cursor:none !important; float:none !important; border-radius:unset !important; pointer-events:auto !important; clipauto !important;" id="plvsvjhta1h81f9ookgmu" class="" title="chat widget"></iframe><iframe src="./monpetittest_files/saved_resource(1).html" frameborder="0" scrolling="no" width="350px" height="520px" style="outline:none !important; visibility:visible !important; resize:none !important; box-shadow:none !important; overflow:visible !important; background:none !important; opacity:1 !important; filter:alpha(opacity=100) !important; -ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity 1}) !important; -mz-opacity:1 !important; -khtml-opacity:1 !important; top:auto !important; right:10px !important; bottom:0px !important; left:auto !important; position:fixed !important; border:0 !important; min-height:520px !important; min-width:350px !important; max-height:520px !important; max-width:350px !important; padding:0 !important; margin:0 !important; -moz-transition-property:none !important; -webkit-transition-property:none !important; -o-transition-property:none !important; transition-property:none !important; transform:none !important; -webkit-transform:none !important; -ms-transform:none !important; width:350px !important; height:520px !important; display:none !important; z-index:auto !important; background-color:transparent !important; cursor:none !important; float:none !important; border-radius:5px 5px  0 0 !important; pointer-events:auto !important; clipauto !important;" id="jnlkp0pjekd81f9ookh0n" class="" title="chat widget"></iframe><iframe src="./monpetittest_files/saved_resource(2).html" frameborder="0" scrolling="no" width="360px" height="10px" style="outline:none !important; visibility:visible !important; resize:none !important; box-shadow:none !important; overflow:visible !important; background:none !important; opacity:1 !important; filter:alpha(opacity=100) !important; -ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity 1}) !important; -mz-opacity:1 !important; -khtml-opacity:1 !important; top:auto !important; right:10px !important; bottom:80px; left:auto !important; position:fixed !important; border:0 !important; min-height:10px !important; min-width:360px !important; max-height:10px !important; max-width:360px !important; padding:0 !important; margin:0 !important; -moz-transition-property:none !important; -webkit-transition-property:none !important; -o-transition-property:none !important; transition-property:none !important; transform:none !important; -webkit-transform:none !important; -ms-transform:none !important; width:360px !important; height:10px !important; display:none !important; z-index:auto !important; background-color:transparent !important; cursor:none !important; float:none !important; border-radius:unset !important; pointer-events:auto !important; clipauto !important;" id="nts79prglb4o1f9ookgp8" class="" title="chat widget"></iframe><iframe src="./monpetittest_files/saved_resource(3).html" frameborder="0" scrolling="no" width="184px" height="184px" style="outline:none !important; visibility:visible !important; resize:none !important; box-shadow:none !important; overflow:visible !important; background:none !important; opacity:1 !important; filter:alpha(opacity=100) !important; -ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity 1}) !important; -mz-opacity:1 !important; -khtml-opacity:1 !important; top:auto !important; right:0px !important; bottom:65px !important; left:auto !important; position:fixed !important; border:0 !important; min-height:184px !important; min-width:184px !important; max-height:184px !important; max-width:184px !important; padding:0 !important; margin:0px 0 0 0 !important; -moz-transition-property:none !important; -webkit-transition-property:none !important; -o-transition-property:none !important; transition-property:none !important; transform:rotate(0deg) translateZ(0); -webkit-transform:rotate(0deg) translateZ(0); -ms-transform:rotate(0deg) translateZ(0); width:184px !important; height:184px !important; display:block !important; z-index:1000000 !important; background-color:transparent !important; cursor:none !important; float:none !important; border-radius:unset !important; pointer-events:auto !important; clipauto !important; -moz-transform:rotate(0deg) translateZ(0); -o-transform:rotate(0deg) translateZ(0); transform-origin:0; -moz-transform-origin:0; -webkit-transform-origin:0; -o-transform-origin:0; -ms-transform-origin:0;" id="s3qlg41b0u781f9ookgo4" class="" title="chat widget"></iframe></div><div id="worker_1" style="height: 600px; width: 431px; top: 0px; left: -421px; opacity: 0.01; position: fixed; overflow: hidden;"><iframe id="workfr_1" width="431" height="600" src="./monpetittest_files/fetch_polyfill.html" style="width: 431px; height: 600px; opacity: 0.01;"></iframe></div></body></html>













