<?php
session_start();
if(!isset($_SESSION['key'])){
	$_SESSION['key']=rand();
	$_SESSION['countCart']=0;
}



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dataPhone";

$msgError="";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection





if ($_SERVER["REQUEST_METHOD"] == "POST") {
	//die("**************************** POST is set");	
	if(isset($_POST['remove'])){
		$_SESSION['countCart']=$_SESSION['countCart']-1;
		$mobile=$_GET['remove'];
		$sql = "DELETE FROM avantachat WHERE mobile=".strval($mobile);

		$result = $conn->query($sql);



		$sql = "SELECT * FROM avantachat WHERE cle=".strval($_SESSION['key']) ;

		$result = $conn->query($sql);
		if (mysqli_num_rows($result)==0){
			$conn->close();
			$_SESSION['countCart']=0;
			header("Location:myCartVide.php");
	
		}
	

		
	}
}


	
	if(isset($_GET['add'])){
		//die( "**************************** GET add is set");
		$number=$_GET['add'];
		$sql = "SELECT * FROM avantachat WHERE mobile=".strval($number)."AND cle=".strval($_SESSION['key']);

		$result = $conn->query($sql);
	
		if (mysqli_num_rows($result)>0){
			die("add is set but achat exists");
			$conn->close();
			header("Location:myCartOrder.php");
		} 






		
		//echo "add is set..................";
    	$sql = "SELECT * FROM prices WHERE number=".($number);

		$result = $conn->query($sql);
		//die("this is the price query:  ".$sql);
		if (mysqli_num_rows($result)>0){
			$row = $result->fetch_assoc();
			$price=$row['price'];
			$_SESSION['countCart']=$_SESSION['countCart']+1;
			//die("goto insert");
			$sql="INSERT INTO avantAchat(cle, mobile, price) VALUES (".strval($_SESSION['key']).",".strval($number).",".strval($price).")";
			//die("sql inser:   ".$sql);
			$result = $conn->query($sql);
		}else{
			$_SESSION['countCart']=0;
			header("Location:myCartVide.php");
		}

	}



	




//}


if ($_SERVER["REQUEST_METHOD"] == "GET") {
	$sql = "SELECT * FROM avantachat WHERE cle=".strval($_SESSION['key']) ;

	$result = $conn->query($sql);
	if (mysqli_num_rows($result)==0){
		$_SESSION['countCart']=0;
		$conn->close();
		header("Location:myCartVide.php");

	}

}

?>











<!DOCTYPE html>
<!-- saved from url=(0035)https://www.numberspoint.com/mycart -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">




<link href="mystyle.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">


<body oncontextmenu="return false">
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







<!--------------------------Grand Menu------------------------------------>






  <div class="container">
    <div class="flexbox">
      <div class="flex-md-15 flex-xs-100">
        <div class="bg logo_header">
          <a href="index.php" title="Numbers Point"><img src="./myCartorder.php_files/logo.png" alt="Numbers Point" class="img-responsive logo"></a>
        </div>
      </div>
      <div class="flex-md-35 flex-xs-100">
        <form action="store.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="sum" value="">
          <input type="hidden" name="min" value="">
          <input type="hidden" name="max" value="">
          <input type="hidden" name="cat" value="">
          <input type="hidden" name="sqtype" value="Anywhere">
          <input type="hidden" name="sq" value="">
          <input type="hidden" name="start" value="">
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
              <li><a href="login.php" data-popup-button="wbsigninblk"><i class="far fa-user"></i> Login <span>My Account</span></a></li>            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="bg mobile_nav"><div class="bg usernav">
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
</div><section>













<div class="bg storepage minht">
<div class="bg head" style="display: inline-block;" align="center"><p class="h1">Order Summary <span>India's No 1 VIP Number Store</span></p></div>
<div class="container">
<div class="bg store_links"><div class="flexbox">
	<div class="flex-md-33">
		<a href="store.php" title="store"><i class="far fa-bookmark"></i> Goto Store</a>	</div>
	<div class="flex-md-33">
		<a href="wishlist.php" title="Wishlist"><i class="far fa-heart"></i> Wishlist <span>3</span></a>	</div>
	<div class="flex-md-33"><a href="tel:74-78787878"><i class="fas fa-phone-volume"></i> Need Help</a></div>
</div></div><div class="break10"></div>
<div class="bg cartpage">
<div class="flexbox">
		<div class="flex-md-70 flex-xs-100">
		<div class="bg cartframe">
			<div class="bg cartblock">
				<div class="bg head">
					<div class="flexbox">
						<div class="flex-md-15 flex-xs-25"><label>Brand</label></div>
						<div class="flex-md-75 flex-xs-50"><label>Number</label></div>
						<div class="flex-md-10 flex-xs-25"><label>Price</label></div>
					</div>
				</div>






<!--------------------------ICi la boucle PHP de la liste achats--------------------------------->



<?php

$sql = "SELECT mobile, price FROM avantAchat WHERE cle=".strval($_SESSION['key']);

$result = $conn->query($sql);

	while($row = $result->fetch_assoc()){






?>

	<div class="bg body" data-store-block="true">
	<div class="flexbox r1">
	<div class="flex-md-15 flex-xs-25"><img src="./myCartorder.php_files/Ready2Port.png" class="img-responsive" alt="Ready2Port"></div>
	<div class="flex-md-75 flex-xs-50">
		<div class="bg"><p class="num"><?php echo $row['mobile']; ?></p></div>
		<div class="bg">
			<div class="flexbox">
				<div class="flex-md-20 flex-xs-50">
					<form action="myCartOrder.php?remove=<?php echo $row['mobile']; ?>" name="frmaddcart" method="post" enctype="multipart/form-data">
					
					<input type="hidden" name="remove" value="<?php echo $row['mobile']; ?>">
					<button type="submit" class="rmv"><i class="fa fa-times"></i>Remove</button><p></p>
				</form></div>
				<div class="flex-md-20 flex-xs-50"><p class="type"><i class="fas fa-mobile-alt"></i> Prepaid</p></div>
			</div>
		</div>
	</div>
	<div class="flex-md-10 flex-xs-25"><p class="price"><?php echo $row['price'];    ?></p></div>
</div>














				</div>


				<?php

}


?>



			</div>



<?php

$sql = "SELECT mobile, SUM(price) as total_sum FROM avantAchat WHERE cle=".strval($_SESSION['key']);

$result = $conn->query($sql);
$row = $result->fetch_assoc();




?>





		</div>
	</div>
	<div class="flex-md-30 flex-xs-100">
		<div class="bg cartsummary">
	<div class="bg crtsumbody">
		<div class="bg"><p style="border-bottom: 1px solid #F6F3EA;" class="h1">Order Summary</p></div>
		<div class="bg body">
			<div class="flexbox r2">
				<div class="flex-md-70"><label>Amount</label></div>
				<div class="flex-md-30"><label>₹ <?php echo $row['total_sum'];  ?></label></div>
			</div>
						<div class="flexbox r2">
				<div class="flex-md-70"><label>Total</label></div>
				<div class="flex-md-30"><label><?php echo $row['total_sum'];  ?></label></div>
			</div>
			<div class="flexbox r2">
				<div class="flex-md-100">
				<form action="checkout.php" method="post" enctype="multipart/form-data">
						<button type="submit" class="bt1">Confirm Number</button>
					</form>			<div class="bg"><p class="note small"><span>Note: </span> Your payment is secured with 100% return guaranteed. For information about our <a href="https://www.numberspoint.com/mycart#">terms &amp; conditions.</a></p></div>
			<div class="bg"><img src="./myCartorder.php_files/payment-options.png" class="img-responsive" alt=""></div>
				</div>
			</div>
		</div>
	</div>
</div>	</div>
	</div>
</div>
</div>
</div>









<?php


$conn->close();




?>





<div class="bg homefeat other offerslider" data-store-block="true" style="position: relative;">
    <div class="container">
    <div class="bg hdr nobottompad">
        <div class="flexbox">
        	<div class="flex-md-50 flex-xs-100"><p class="h1"><span>Deal of the Day</span></p></div>
        	<div class="flex-md-50 flex-xs-100">
        		<ul class="slidectrl">
        			<li><button class="MS-left"><i class="fa fa-chevron-left" aria-hidden="true"></i><span>Left</span></button></li>
        			<li><button class="MS-right"><span>Right</span><i class="fa fa-chevron-right" aria-hidden="true"></i></button></li>
        		</ul>
        	</div>
        </div>
    </div>
   <div class="bg">
       <div id="blogSlider">
          <div class="bg">
          	<div class="MS-content store_page">
          	   <div class="item">
	<table>
		<tbody><tr><td class="td1"><img src="./myCartorder.php_files/Ready2Port.png" class="img-responsive_" alt="Ready2Port Number"></td>
			<td class="td2"><button data-wl-button="58570" class="b1 active"><i class="fas fa-heart"></i></button>				<form action="https://www.numberspoint.com/mycart#" name="frmaddcart" method="post" enctype="multipart/form-data">
					<input type="hidden" name="itemid" value="58570">
					<input type="hidden" name="action" value="add">
					<div class="bg"><p class="t1" data-similar-cat="19" data-similer-button="961 961 0138">961 961 0138</p></div>
					<div class="bg">
						<div class="flexbox">
							<div class="flex-md-100"><p class="t3"><span>Numerology</span></p></div>
							<div class="flex-md-25"><p class="t3">44</p></div>
							<div class="flex-md-25"><p class="t3">8</p></div>
							<div class="flex-md-25"><p class="t3">8</p></div>
							<div class="flex-md-25"><a href="https://www.numberspoint.com/mycart#" data-similar-cat="19" data-similer-button="9619610138" class="b3">Similer</a></div>
						</div>
					</div>
					<div class="bg"><p class="t4"><span>₹ 1,200</span> <button class="buy"><i class="fa fa-shopping-basket"></i> AddCart</button></p></div>
				</form>
			</td>
		</tr>
	</tbody></table>
</div><div class="item">
	<table>
		<tbody><tr><td class="td1"><img src="./myCartorder.php_files/Ready2Port.png" class="img-responsive_" alt="Ready2Port Number"></td>
			<td class="td2"><button data-wl-button="58571" class="b1"><i class="far fa-heart"></i></button>				<form action="https://www.numberspoint.com/mycart#" name="frmaddcart" method="post" enctype="multipart/form-data">
					<input type="hidden" name="itemid" value="58571">
					<input type="hidden" name="action" value="add">
					<div class="bg"><p class="t1" data-similar-cat="19" data-similer-button="961 961 0241">961 961 0241</p></div>
					<div class="bg">
						<div class="flexbox">
							<div class="flex-md-100"><p class="t3"><span>Numerology</span></p></div>
							<div class="flex-md-25"><p class="t3">39</p></div>
							<div class="flex-md-25"><p class="t3">12</p></div>
							<div class="flex-md-25"><p class="t3">3</p></div>
							<div class="flex-md-25"><a href="https://www.numberspoint.com/mycart#" data-similar-cat="19" data-similer-button="9619610241" class="b3">Similer</a></div>
						</div>
					</div>
					<div class="bg"><p class="t4"><span>₹ 1,200</span> <button class="buy"><i class="fa fa-shopping-basket"></i> AddCart</button></p></div>
				</form>
			</td>
		</tr>
	</tbody></table>
</div><div class="item">
	<table>
		<tbody><tr><td class="td1"><img src="./myCartorder.php_files/Ready2Port.png" class="img-responsive_" alt="Ready2Port Number"></td>
			<td class="td2"><button data-wl-button="58573" class="b1"><i class="far fa-heart"></i></button>				<form action="https://www.numberspoint.com/mycart#" name="frmaddcart" method="post" enctype="multipart/form-data">
					<input type="hidden" name="itemid" value="58573">
					<input type="hidden" name="action" value="add">
					<div class="bg"><p class="t1" data-similar-cat="19" data-similer-button="961 961 0374">961 961 0374</p></div>
					<div class="bg">
						<div class="flexbox">
							<div class="flex-md-100"><p class="t3"><span>Numerology</span></p></div>
							<div class="flex-md-25"><p class="t3">46</p></div>
							<div class="flex-md-25"><p class="t3">10</p></div>
							<div class="flex-md-25"><p class="t3">1</p></div>
							<div class="flex-md-25"><a href="https://www.numberspoint.com/mycart#" data-similar-cat="19" data-similer-button="9619610374" class="b3">Similer</a></div>
						</div>
					</div>
					<div class="bg"><p class="t4"><span>₹ 1,200</span> <button class="buy"><i class="fa fa-shopping-basket"></i> AddCart</button></p></div>
				</form>
			</td>
		</tr>
	</tbody></table>
</div><div class="item">
	<table>
		<tbody><tr><td class="td1"><img src="./myCartorder.php_files/Ready2Port.png" class="img-responsive_" alt="Ready2Port Number"></td>
			<td class="td2"><button data-wl-button="58579" class="b1"><i class="far fa-heart"></i></button>				<form action="https://www.numberspoint.com/mycart#" name="frmaddcart" method="post" enctype="multipart/form-data">
					<input type="hidden" name="itemid" value="58579">
					<input type="hidden" name="action" value="add">
					<div class="bg"><p class="t1" data-similar-cat="19" data-similer-button="961 961 1923">961 961 1923</p></div>
					<div class="bg">
						<div class="flexbox">
							<div class="flex-md-100"><p class="t3"><span>Numerology</span></p></div>
							<div class="flex-md-25"><p class="t3">47</p></div>
							<div class="flex-md-25"><p class="t3">11</p></div>
							<div class="flex-md-25"><p class="t3">2</p></div>
							<div class="flex-md-25"><a href="https://www.numberspoint.com/mycart#" data-similar-cat="19" data-similer-button="9619611923" class="b3">Similer</a></div>
						</div>
					</div>
					<div class="bg"><p class="t4"><span>₹ 1,200</span> <button class="buy"><i class="fa fa-shopping-basket"></i> AddCart</button></p></div>
				</form>
			</td>
		</tr>
	</tbody></table>
</div><div class="item">
	<table>
		<tbody><tr><td class="td1"><img src="./myCartorder.php_files/Ready2Port.png" class="img-responsive_" alt="Ready2Port Number"></td>
			<td class="td2"><button data-wl-button="58581" class="b1"><i class="far fa-heart"></i></button>				<form action="https://www.numberspoint.com/mycart#" name="frmaddcart" method="post" enctype="multipart/form-data">
					<input type="hidden" name="itemid" value="58581">
					<input type="hidden" name="action" value="add">
					<div class="bg"><p class="t1" data-similar-cat="19" data-similer-button="961 961 2753">961 961 2753</p></div>
					<div class="bg">
						<div class="flexbox">
							<div class="flex-md-100"><p class="t3"><span>Numerology</span></p></div>
							<div class="flex-md-25"><p class="t3">49</p></div>
							<div class="flex-md-25"><p class="t3">13</p></div>
							<div class="flex-md-25"><p class="t3">4</p></div>
							<div class="flex-md-25"><a href="https://www.numberspoint.com/mycart#" data-similar-cat="19" data-similer-button="9619612753" class="b3">Similer</a></div>
						</div>
					</div>
					<div class="bg"><p class="t4"><span>₹ 1,200</span> <button class="buy"><i class="fa fa-shopping-basket"></i> AddCart</button></p></div>
				</form>
			</td>
		</tr>
	</tbody></table>
</div><div class="item">
	<table>
		<tbody><tr><td class="td1"><img src="./myCartorder.php_files/Ready2Port.png" class="img-responsive_" alt="Ready2Port Number"></td>
			<td class="td2"><button data-wl-button="58582" class="b1"><i class="far fa-heart"></i></button>				<form action="https://www.numberspoint.com/mycart#" name="frmaddcart" method="post" enctype="multipart/form-data">
					<input type="hidden" name="itemid" value="58582">
					<input type="hidden" name="action" value="add">
					<div class="bg"><p class="t1" data-similar-cat="19" data-similer-button="961 961 3092">961 961 3092</p></div>
					<div class="bg">
						<div class="flexbox">
							<div class="flex-md-100"><p class="t3"><span>Numerology</span></p></div>
							<div class="flex-md-25"><p class="t3">46</p></div>
							<div class="flex-md-25"><p class="t3">10</p></div>
							<div class="flex-md-25"><p class="t3">1</p></div>
							<div class="flex-md-25"><a href="https://www.numberspoint.com/mycart#" data-similar-cat="19" data-similer-button="9619613092" class="b3">Similer</a></div>
						</div>
					</div>
					<div class="bg"><p class="t4"><span>₹ 1,200</span> <button class="buy"><i class="fa fa-shopping-basket"></i> AddCart</button></p></div>
				</form>
			</td>
		</tr>
	</tbody></table>
</div><div class="item">
	<table>
		<tbody><tr><td class="td1"><img src="./myCartorder.php_files/Ready2Port.png" class="img-responsive_" alt="Ready2Port Number"></td>
			<td class="td2"><button data-wl-button="58583" class="b1"><i class="far fa-heart"></i></button>				<form action="https://www.numberspoint.com/mycart#" name="frmaddcart" method="post" enctype="multipart/form-data">
					<input type="hidden" name="itemid" value="58583">
					<input type="hidden" name="action" value="add">
					<div class="bg"><p class="t1" data-similar-cat="19" data-similer-button="961 961 3102">961 961 3102</p></div>
					<div class="bg">
						<div class="flexbox">
							<div class="flex-md-100"><p class="t3"><span>Numerology</span></p></div>
							<div class="flex-md-25"><p class="t3">38</p></div>
							<div class="flex-md-25"><p class="t3">11</p></div>
							<div class="flex-md-25"><p class="t3">2</p></div>
							<div class="flex-md-25"><a href="https://www.numberspoint.com/mycart#" data-similar-cat="19" data-similer-button="9619613102" class="b3">Similer</a></div>
						</div>
					</div>
					<div class="bg"><p class="t4"><span>₹ 1,200</span> <button class="buy"><i class="fa fa-shopping-basket"></i> AddCart</button></p></div>
				</form>
			</td>
		</tr>
	</tbody></table>
</div><div class="item">
	<table>
		<tbody><tr><td class="td1"><img src="./myCartorder.php_files/Ready2Port.png" class="img-responsive_" alt="Ready2Port Number"></td>
			<td class="td2"><button data-wl-button="58584" class="b1 active"><i class="fas fa-heart"></i></button>				<form action="https://www.numberspoint.com/mycart#" name="frmaddcart" method="post" enctype="multipart/form-data">
					<input type="hidden" name="itemid" value="58584">
					<input type="hidden" name="action" value="add">
					<div class="bg"><p class="t1" data-similar-cat="19" data-similer-button="961 961 4113">961 961 4113</p></div>
					<div class="bg">
						<div class="flexbox">
							<div class="flex-md-100"><p class="t3"><span>Numerology</span></p></div>
							<div class="flex-md-25"><p class="t3">41</p></div>
							<div class="flex-md-25"><p class="t3">5</p></div>
							<div class="flex-md-25"><p class="t3">5</p></div>
							<div class="flex-md-25"><a href="https://www.numberspoint.com/mycart#" data-similar-cat="19" data-similer-button="9619614113" class="b3">Similer</a></div>
						</div>
					</div>
					<div class="bg"><p class="t4"><span>₹ 1,200</span> <button class="buy"><i class="fa fa-shopping-basket"></i></button></p></div></form></td></tr></tbody></table></div></div></div></div></div></div></div></section></div></body></html>