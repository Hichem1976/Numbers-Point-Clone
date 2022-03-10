<?php
session_start();
if(!isset($_SESSION['key'])){
	$_SESSION['key']=rand();
	$_SESSION['countCart']=0;
}
?>







<!DOCTYPE html>
<head>
<!-- saved from url=(0029)https://www.numberspoint.com/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">  


<link href="mystyle.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>








<body oncontextmenu="return false" data-ls="1" data-script-loaded="1" data-sl="1">

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



<div class="bg" data-block-wrapper="true">
<div class="wb_modal" id="wbsigninblk">
<div class="wb_dialogue mt20">
	<div class="bg wb_head style1"><p class="h1" data-tab-title="true">Login - Existing Customer</p><button type="button" data-wbmodal-close="true" class="cls">x</button></div>
	<div class="bg wb_body">
		<div class="bg html center">
			<div class="bg" data-tab-block="signin">
				<form action="https://www.numberspoint.com/#" name="frmlogin" method="post" enctype="multipart/form-data">
					<div class="bg">
						<span>Mobile No</span>
						<input type="text" name="mobile" data-type="num" maxlength="10" placeholder="Mobile Number" required="">
					</div>
					<div class="break10"></div>
					<div class="bg">
						<span>Password</span>
						<input type="password" name="password" placeholder="xxxxxxxx" required="">
					</div>
					<div class="break10"></div>
					<div class="bg">
						<button type="submit" class="bt1">Login to Account</button>
					</div>
				</form>
				<div class="break10"></div>
				<div class="bg"><p>If you don't have any existing account <br> then <a href="https://www.numberspoint.com/#" data-tab-button="createnew" data-tab-name="Create New Account">create new account</a> or <a data-tab-button="forget" data-tab-name="Forget Password" href="https://www.numberspoint.com/#">forget password</a></p></div>
			</div>
			<div class="bg" style="display: none;" data-tab-block="createnew">
				<form action="https://www.numberspoint.com/#" name="formreg" method="post" enctype="multipart/form-data">
					<div class="bg" data-tab-step="reg1">
						<div class="bg">
							<span>Full Name</span>
							<input type="text" name="name" data-type="alpha" placeholder="Customer Name" required="">
						</div>
						<div class="break10"></div>
						<div class="bg">
							<span>Mobile No</span>
							<input type="text" name="mobile" data-type="num" maxlength="10" placeholder="Mobile Number" required="">
						</div>
						<div class="break10"></div>
						<div class="bg">
							<span>Password</span>
							<input type="password" name="password" placeholder="xxxxxxxx" required="">
						</div>
						<div class="break10"></div>
						<div class="bg">
							<span>Confirm Password</span>
							<input type="password" name="conf_pass" placeholder="xxxxxxxx" required="">
						</div>
						<div class="break10"></div>
						<div class="bg">
							<button class="bt1 btn1">Proceed Next</button>
						</div>
						<div class="break10"></div>
						<div class="bg"><p>If you have any existing account <br> then <a href="https://www.numberspoint.com/#" data-tab-button="signin" data-tab-name="Login - Existing Customer">Login Here</a> or <a data-tab-button="forget" data-tab-name="Forget Password" href="https://www.numberspoint.com/#">forget password</a></p></div>
					</div>
					<div class="bg" style="display: none;" data-tab-step="reg2">
						<div class="bg">
							<div class="alert" id="otpmsg">
								OTP has been sent to your mobile number.
							</div>
							<span>OTP</span>
							<input type="text" name="otp" data-type="num" maxlength="6" placeholder="OTP" required="">
						</div>
						<div class="break10"></div>
						<div class="bg">
							<button class="bt1 btn2">Verify &amp; Register</button>
						</div>
						<div class="break10"></div>
						<div class="bg"><p><a id="gotoreg1" href="https://www.numberspoint.com/#">Goto Back</a></p></div>
					</div>
				</form>
			</div>
			<div class="bg" style="display: none;" data-tab-block="forget">
				<form action="https://www.numberspoint.com/#" name="frmfoget" method="post" enctype="multipart/form-data">
				<div class="bg">
					<span>Mobile No</span>
					<input type="text" name="mobile" data-type="num" maxlength="10" placeholder="Mobile Number" required="">
				</div>
				<div class="break10"></div>
				<div class="bg">
					<button type="submit" class="bt1">Reset Password</button>
				</div>
				</form>
				<div class="break10"></div>
				<div class="bg"><p><a data-tab-button="signin" data-tab-name="Login - Existing Customer" href="https://www.numberspoint.com/#">Goto Login</a></p></div>
			</div>
		</div>
	</div>
</div>
</div>
</script><div class="wb_modal" id="wbinfomdl">
<div class="wb_dialogue mt20">
	<div class="bg wb_head style1"><p class="h1"></p><button type="button" data-wbmodal-close="true" class="cls">x</button></div>
	<div class="bg wb_body">
		<div class="bg html">
		</div>
	</div>
</div>
</div>
<div class="wb_modal" id="wbsimilralert">
<div class="wb_dialogue mt20">
	<div class="bg wb_head style1"><p class="h1">Notification</p><button type="button" data-wbmodal-close="true" class="cls">x</button></div>
	<div class="bg wb_body">
		<div class="bg html" align="center">
			<p>Hi, You want to see some similer numbers like <span class="bigword" data-similer="true"></span> If yes, press below button</p>
			<div class="break"></div>
			<div class="bg"><a href="https://www.numberspoint.com/#" data-similer-link="true" class="btnstyle4">Show Similer</a></div>
		</div>
	</div>
</div>
</div>
<div class="alert_modal" id="wbalertbox1">
<div class="alert_dialogue alert mt20">
	<div class="bg alert_head"><p class="h1"></p><button type="button" data-alert-close="true" class="cls">x</button></div>
	<div class="bg alert_body">
		<div class="bg html">
		</div>
	</div>
</div>
</div><!-- <a href="javascript:void(Tawk_API.toggle())" class="tawkto_launch" ><i class="far fa-comment"></i> Chat Support</a> --><div id="nav_header" class="bg nav_header fixheader">
  <div class="container">
    <div class="flexbox">
      <div class="flex-md-15 flex-xs-100">
        <div class="bg logo_header">



			<!-----------------Lien logo------------------------>


          <a href="." title="Numbers Point"><img src="./Point_files/logo.png" alt="Numbers Point" class="img-responsive logo"></a>
          <table class="tbl1">
            <tbody><tr>
              <td><a href="mycart.php" title="MyCart"><i class="fas fa-shopping-basket"></i> My Cart <span data-cart-item="true">0</span></a></td>
              <td><a href="tel:74-78787878" title="Customer Care"><i class="fas fa-phone-volume"></i> Help</a></td>
              <td><a href="#" data-main-nav="true"><i class="fas fa-ellipsis-v"></i> Menu</a></td>
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


<!---------------------Search tool--------------------------------->



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















<!------------------------------Flying Cart------------------------------->


<a href="mycartOrder.php" title="Goto Cart" class="flycartlink">
    <div class="flexbox">
      <div class="flex-md-50"><i class="fa fa-shopping-basket"></i> <span class="t1">My Cart</span></div>
      <div class="flex-md-50"><span class="t2" data-cart-item="true"><?php echo $_SESSION['countCart'];?></span></div>
    </div>
  </a>
  
  
 
 
 
 
 
 
 
 
 
 <!--------------------------Mobile Nav-------------------------->
 
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
</div>











<!---------------------centre de la page d'acceuil--------------------->




<section>
<div class="bg homeslide">
<div class="container">
<div class="flexbox">
	<div class="flex-md-30 flex-xs-100"></div>
	<div class="flex-md-40 flex-xs-100">
		<div class="bg homesearch">
			<div class="bg">
				<p class="h1">India's Largest <span class="t1">vip number search engine</span></p>
			</div>
			<div class="bg">
			
			<form action="store.php" method="post" enctype="multipart/form-data">
				  <div class="bg searchtool">
				    <table>
				      <tbody><tr><td><select name="sqtype" required=""><option value="Anywhere">Anywhere</option><option value="StartWith">StartWith</option><option value="Endwith">Endwith</option></select></td>
				        <td><input type="text" name="sq" maxlength="10" data-type="num" placeholder="Search Number" required=""></td>
				        <td><button><i class="fa fa-search"></i></button></td>
				      </tr>
				    </tbody></table>
				  </div>
				</form>
			
			
			
			</div>
			<div class="bg"><p class="h2"><a href="tel:74-78787878">Dial 74-78787878</a> <span>24x7 Support Only For You"</span></p></div>
		</div>
		<div class="bg" align="center"><a href="store.php" style="margin-top:20px;" class="pc_only bounce-top linkbtn">Goto Store <i class="fas fa-arrow-right"></i></a></div>
	</div>
	<div class="flex-md-20 flex-xs-100"><a href="store.php" class="mob_only bounce-top linkbtn">Goto Store <i class="fas fa-arrow-right"></i></a><img src="./India&#39;s No 1 VIP Mobile Number Portal _ Fancy Mobile Number _ Numbers Point_files/man.png" alt="" class="img-responsive"></div>
</div>
</div>
<div class="bg store_links"><div class="flexbox">
	<div class="flex-md-33">
		<a href="offers.php" title="Offers"><i class="far fa-star"></i> Offers</a>	</div>
	<div class="flex-md-33">
		<a href="wishlist.php" title="Wishlist"><i class="far fa-heart"></i> Wishlist <span>0</span></a>	</div>
	<div class="flex-md-33"><a href="tel:74-78787878"><i class="fas fa-phone-volume"></i> Need Help</a></div>














<!-------------Les étapes pour acheter un numéro---------------->





</div></div></div><div class="bg steps_block">
	<div class="container">
		<div class="bg"><p class="h1">Follow 4 Easy Steps</p></div>
		<div class="bg mobyscroll">
			<div class="flexbox">
				<div class="flex-md-25"><div class="bg info"><p><span>1</span>Select your desired fancy mobile number as per your choice from our vip mobile number collection.</p></div></div>
				<div class="flex-md-25"><div class="bg info"><p><span>2</span>After selecting your desired vip mobile number proceed for next step with add to cart option.</p></div></div>
				<div class="flex-md-25"><div class="bg info"><p><span>3</span>On Cart page you need fill customer indentification form to confirm authorized purchase.</p></div></div>
				<div class="flex-md-25"><div class="bg info"><p><span>4</span>Thats It!! When you on the payment page here you can proceed for online payment to confirm purchase.</p></div></div>
			</div>
		</div>
		<div align="center" class="bg"><a href="store.php" class="btnstyle3"><i class="far fa-bookmark"></i> Vip Number Collection</a></div>
	</div>







	<!----------------Liste des numéros Produits------------------------>





</div><div class="bg homefeat other" data-store-block="true">








<div class="container">
	<div class="bg hdr">
	<p class="h1"><span>Special</span> - VIP Mobile Number</p>
	</div>
	
	
	<div class="bg store_page">	
	<div class="flexbox">




	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dataPhone";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);



$sql = "SELECT * FROM vipnum";
$result = $conn->query($sql);




if ($result->num_rows > 0) {
	// output data of each row
	$row = $result->fetch_assoc();
	$sql1="SELECT * fROM phones WHERE number=".strval($row['number']);
	while($row = $result->fetch_assoc()) {
		$sql1=$sql1." UNION "."SELECT * fROM phones WHERE number=".strval($row['number']);
	}
		$result1 = $conn->query($sql1);
	


		while($row1 = $result1->fetch_assoc()) {
			$sql3="SELECT * FROM prices WHERE number=".strval($row1['number']);
			$result3 = $conn->query($sql3);
			$row3=$result3->fetch_assoc();

?>





	

	

	<div style="float:right" class="flex-md-25 flex-xs-100">





	




	



		<div class="item">
		<table>
		<tbody><tr><td class="td1"></td>
			<td class="td2"><button data-wl-button="58570" class="b1"><i class="far fa-heart"></i></button>				
					<input type="hidden" name="itemid" value="58570">
					<input type="hidden" name="action" value="add">
					<div class="bg"><p class="t1" data-similar-cat="19" data-similer-button="961 961 0138"><?php  echo $row1['ftNumber'];  ?></p></div>
					<div class="bg">
						<div class="flexbox">
							<div class="flex-md-100"><p class="t3"><span>Numerology</span></p></div>
							<div class="flex-md-25"><p class="t3"><?php  echo $row1['indice1'] ; ?></p></div>
							<div class="flex-md-25"><p class="t3"><?php  echo $row1['indice2'] ; ?></p></div>
							<div class="flex-md-25"><p class="t3"><?php  echo $row1['indice3'] ; ?></p></div>
							<div class="flex-md-25"><a href="#" data-similar-cat="19" data-similer-button="9619610138" class="b3">Similer</a></div>
						</div>
					</div>
					<div class="bg"><p class="t4"><span>₹ <?php  echo $row3['price']  ?></span> <a href="myCartorder.php?add=<?php  echo $row1['number'];  ?>" class="buy"><i class="fa fa-shopping-basket"></i> AddCart</a></p></div>
			
			</td>
		</tr>
	</tbody></table>
	</div> </div>
<?php


			}
		}
	$conn->close();



?>
			</div>


	</div></div>















	<div align="center" class="bg"><a href="store.php" class="btnstyle2"><i class="far fa-star"></i> See More Numbers</a></div>
</div>
</div>
<div class="bg rw_page">
	<div class="container">
		<div class="bg score">
			<div class="flexbox">
				<div class="flex-md-33"><p data-stop="4956" class="p1 count">4956</p><p class="p2">Thousands of Active Stock</p></div>
				<div class="flex-md-33"><p data-stop="5456" class="p1 count">5456</p><p class="p2">Happy &amp; Satisfied Customers</p></div>
				<div class="flex-md-33"><p data-stop="2014" class="p1 count">2014</p><p class="p2">Successfully Working Since</p></div>
			</div>
		</div>



		<!-------------------  petit block Reviews: c est un titre-->
		<div class="bg"><p class="h1">Our Reviews &amp; Ratings <span>We know the importance of reviews</span></p></div>
		
		
		
		
		
		<div class="bg">
			<div class="flexbox">








<!----------------------------Avis des clients------------------------>





	<div class="flex-md-33 flex-xs-100">
	<div class="bg item">
	<table>
		<tbody><tr><td><div class="bg"><p class="t4">GS</p></div></td><td><p class="t1">4.5</p>
			<div class="bg"><div class="jstars" data-value="4.5" data-color="#FF9700" data-empty-color="#999" data-size="20px"></div></div>
			<div class="bg"><p class="t2">Gold Siti bhilwara</p>
				<p class="t3">Best Experience - I was totally satisfied with everything THANK YOU NumbersPOINT</p></div>
				<div class="bg"><p class="t5"><span>Published On: </span>1 week ago</p></div>
			</td></tr>
		</tbody></table>

	</div></div>
	







	<div class="flex-md-33 flex-xs-100"><div class="bg item">



	</div></div>


</div>
		</div>
		<div class="break20"></div>
	</div>
</div>







<!------------------------Frequently Asked Questions---------------------->


<div class="bg faqpage">
<div class="container">
	<div class="bg"><p class="h1"><i class="fas fa-exclamation-triangle"></i> Frequently Asked Questions <span>Must read faq's to know our complete process</span></p></div>
	<div class="bg">
		<div class="bg" data-collaps-block="true">
			<div class="bg" data-collaps-head="faq1">
			<div class="flexbox">
				<div class="flex-md-90"><p class="t1"><strong>Q1.</strong> HOW TO GET VIP NUMBER ?</p></div>
				<div class="flex-md-10"><i class="fa fa-plus"></i></div>
			</div>
			</div>
			<div class="bg active" data-collaps-body="faq1" style="display: none;">
				<p><strong>Step 1</strong> : First you have to choose a number
					<br>
					<strong>Step 2</strong> : Then click on Add Cart button nd fill up the form details and make PAYMENT Online by 
					debit-card/credit-card/netbanking/paytm/UPI or any wallet
					<br>
					<strong>Step 3</strong> : Then We will provide you the porting code of that number within 24 hours, then you have to go to any retail shop(in which operator you 
					want to port that number) then there you have to say that , i want to PORT this number then, they will ask for your Porting code, your aadhar card and live photo 
				and give you a new fresh sim card of that operator which will activate on your name within 4-5 days</p>
			</div>
		</div>
		
	</div>
</div>





























<!----------------footer1---------------------------->


</div><div class="bg webfooter">
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
	<img src="./India&#39;s No 1 VIP Mobile Number Portal _ Fancy Mobile Number _ Numbers Point_files/payment-options.png" class="img-responsive" alt="Payment option available on Numbers Point">
	</div>
</div>




</div>




<!-------------------footer2----------------------->






<div class="bg main_footer">
<div class="bg container">
<div class="bg">
<table>
    <tbody><tr><td><span>About Company </span></td><td>
        <ul class="links">
            <li><a href="https://www.numberspoint.com/page/terms-conditions/1/" title="Terms &amp; Conditions">Terms &amp; Conditions</a></li><li><a href="https://www.numberspoint.com/page/refund-cancellation-policy/2/" title="Refund &amp; Cancellation Policy">Refund &amp; Cancellation Policy</a></li><li><a href="https://www.numberspoint.com/page/privacy-policy/3/" title="Privacy Policy">Privacy Policy</a></li>        </ul>
    </td></tr>
    <tr><td><span>Category </span></td><td><ul class="links">
        <li><a href="store.php?cat=00000 NUMBERS" rel="nofollow" title="00000 NUMBERS">00000 NUMBERS</a></li><li><a href="store.php?cat=000000 NUMBERS" rel="nofollow" title="000000 NUMBERS">000000 NUMBERS</a></li><li><a href="store.php?cat=00X00 &amp; 00XY00" rel="nofollow" title="00X00 &amp; 00XY00">00X00 &amp; 00XY00</a></li><li><a href="store.php?cat=13 SPECIAL" rel="nofollow" title="13 SPECIAL">13 SPECIAL</a></li><li><a href="store.php?cat=3 DIGIT NUMBER" rel="nofollow" title="3 DIGIT NUMBER">3 DIGIT NUMBER</a></li><li><a href="store.php?cat=786 SPECIAL" rel="nofollow" title="786 SPECIAL">786 SPECIAL</a></li><li><a href="store.php?cat=ABCD-ABCD" rel="nofollow" title="ABCD-ABCD">ABCD-ABCD</a></li><li><a href="store.php?cat=ABCD-XY-ABCD" rel="nofollow" title="ABCD-XY-ABCD">ABCD-XY-ABCD</a></li><li><a href="store.php?cat=COUNTING NUMBER" rel="nofollow" title="COUNTING NUMBER">COUNTING NUMBER</a></li><li><a href="store.php?cat=DOUBLING NUMBER" rel="nofollow" title="DOUBLING NUMBER">DOUBLING NUMBER</a></li><li><a href="store.php?cat=ENDING 000" rel="nofollow" title="ENDING 000">ENDING 000</a></li><li><a href="store.php?cat=ENDING 0000" rel="nofollow" title="ENDING 0000">ENDING 0000</a></li><li><a href="store.php?cat=ENDING 0000X" rel="nofollow" title="ENDING 0000X">ENDING 0000X</a></li><li><a href="store.php?cat=ENDING 0000XY" rel="nofollow" title="ENDING 0000XY">ENDING 0000XY</a></li><li><a href="store.php?cat=ENDING 000X" rel="nofollow" title="ENDING 000X">ENDING 000X</a></li><li><a href="store.php?cat=ENDING 000XY" rel="nofollow" title="ENDING 000XY">ENDING 000XY</a></li><li><a href="store.php?cat=ENDING HEXA" rel="nofollow" title="ENDING HEXA">ENDING HEXA</a></li><li><a href="store.php?cat=ENDING PENTA" rel="nofollow" title="ENDING PENTA">ENDING PENTA</a></li><li><a href="store.php?cat=ENDING TETRA" rel="nofollow" title="ENDING TETRA">ENDING TETRA</a></li><li><a href="store.php?cat=ENDING XXX" rel="nofollow" title="ENDING XXX">ENDING XXX</a></li><li><a href="store.php?cat=ENDING XY-XY-XY" rel="nofollow" title="ENDING XY-XY-XY">ENDING XY-XY-XY</a></li><li><a href="store.php?cat=ENDING XYZ-XYZ" rel="nofollow" title="ENDING XYZ-XYZ">ENDING XYZ-XYZ</a></li><li><a href="store.php?cat=FANCY NUMBER" rel="nofollow" title="FANCY NUMBER">FANCY NUMBER</a></li><li><a href="store.php?cat=HIGH RANGE NUMBER" rel="nofollow" title="HIGH RANGE NUMBER">HIGH RANGE NUMBER</a></li><li><a href="store.php?cat=LOW COST NUMBERS" rel="nofollow" title="LOW COST NUMBERS">LOW COST NUMBERS</a></li><li><a href="store?cat=43" rel="nofollow" title="MIDDLE 0000">MIDDLE 0000</a></li><li><a href="store?cat=32" rel="nofollow" title="MIDDLE HEXA">MIDDLE HEXA</a></li><li><a href="store?cat=34" rel="nofollow" title="MIDDLE PENTA">MIDDLE PENTA</a></li><li><a href="store?cat=36" rel="nofollow" title="MIDDLE TETRA">MIDDLE TETRA</a></li><li><a href="store?cat=15" rel="nofollow" title="MIDDLE XY-XY-XY">MIDDLE XY-XY-XY</a></li><li><a href="store?cat=6" rel="nofollow" title="MIRROR NUMBER">MIRROR NUMBER</a></li><li><a href="store?cat=7" rel="nofollow" title="SEMI-MIRROR NUMBER">SEMI-MIRROR NUMBER</a></li><li><a href="store?cat=21" rel="nofollow" title="SPECIAL DIGIT NUMBER">SPECIAL DIGIT NUMBER</a></li><li><a href="store?cat=16" rel="nofollow" title="STARTING XY-XY-XY">STARTING XY-XY-XY</a></li><li><a href="store?cat=19" rel="nofollow" title="STARTING XYZ-XYZ">STARTING XYZ-XYZ</a></li><li><a href="store.php?cat=SYMMETRY NUMBER" rel="nofollow" title="SYMMETRY NUMBER">SYMMETRY NUMBER</a></li><li><a href="store?cat=25" rel="nofollow" title="TWO DIGIT NUMBER">TWO DIGIT NUMBER</a></li><li><a href="store?cat=47" rel="nofollow" title="WITHOUT 2,4 &amp; 8">WITHOUT 2,4 &amp; 8</a></li><li><a href="store?cat=26" rel="nofollow" title="XXX-YYY">XXX-YYY</a></li><li><a href="store?cat=22" rel="nofollow" title="XY-XY">XY-XY</a></li><li><a href="store?cat=8" rel="nofollow" title="XY-XY-XY-XY">XY-XY-XY-XY</a></li><li><a href="store?cat=23" rel="nofollow" title="XYXY-ABAB">XYXY-ABAB</a></li>    </ul></td></tr>
</tbody></table>
</div>
<div class="bg"><p>All rights reserved by <a href="https://www.numberspoint.com/" title="Numbers Point">Numbers Point</a> &amp; Proudly developed by <a href="https://www.webmoogle.com/" target="_blank" title="webmoogle inspirational solutions pvt ltd">webmoogle</a></p></div>
</div>
</div>
</section>


<div style="width: 8px; height: 8px; position: fixed; bottom: 1px; right: 1px; overflow: hidden; background-color: white; z-index: 100000000;"><div style="width: 8px; height: 8px; top: 1px; left: 1px; background-color: white; z-index: 100000000;"><iframe src="./India&#39;s No 1 VIP Mobile Number Portal _ Fancy Mobile Number _ Numbers Point_files/index.html" id="ut-player" frameborder="0" name="video-extension" style="width: 640px; height: 360px; position: absolute; top: 0px; left: 0px; background-color: white; border: none; display: block;"></iframe></div></div><div style="width: 8px; height: 8px; position: fixed; bottom: 1px; left: 1px; overflow: hidden; background-color: white; z-index: 100000000;"><div style="width: 8px; height: 8px; top: 1px; left: 1px; background-color: white; z-index: 100000000;"><iframe src="./India&#39;s No 1 VIP Mobile Number Portal _ Fancy Mobile Number _ Numbers Point_files/index(1).html" id="ut-player2" frameborder="0" name="video-extension2" style="width: 640px; height: 360px; position: absolute; top: 0px; left: 0px; background-color: white; border: none; display: block;"></iframe></div></div><script src="./India&#39;s No 1 VIP Mobile Number Portal _ Fancy Mobile Number _ Numbers Point_files/1.js.téléchargement"></script><iframe src="./India&#39;s No 1 VIP Mobile Number Portal _ Fancy Mobile Number _ Numbers Point_files/tw.html" style="position: fixed; left: -1000px; top: -1000px; width: 1px; height: 1px; border: 0px;"></iframe><img src="./India&#39;s No 1 VIP Mobile Number Portal _ Fancy Mobile Number _ Numbers Point_files/acnt(2)"><script async="" charset="UTF-8" src="./India&#39;s No 1 VIP Mobile Number Portal _ Fancy Mobile Number _ Numbers Point_files/en.js.téléchargement"></script><div id="janovoku47ng1f9odvkv0" style="display: none !important;"><iframe src="./India&#39;s No 1 VIP Mobile Number Portal _ Fancy Mobile Number _ Numbers Point_files/saved_resource.html" frameborder="0" scrolling="no" width="130px" height="64px" style="outline:none !important; visibility:visible !important; resize:none !important; box-shadow:none !important; overflow:visible !important; background:none !important; opacity:1 !important; filter:alpha(opacity=100) !important; -ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity 1}) !important; -mz-opacity:1 !important; -khtml-opacity:1 !important; top:auto !important; right:6px !important; bottom:0px !important; left:auto !important; position:fixed !important; border:0 !important; min-height:64px !important; min-width:130px !important; max-height:64px !important; max-width:130px !important; padding:0 !important; margin:0 !important; -moz-transition-property:none !important; -webkit-transition-property:none !important; -o-transition-property:none !important; transition-property:none !important; transform:none !important; -webkit-transform:none !important; -ms-transform:none !important; width:130px !important; height:64px !important; display:block !important; z-index:1000001 !important; background-color:transparent !important; cursor:none !important; float:none !important; border-radius:unset !important; pointer-events:auto !important; clipauto !important;" id="umhqicjjd3j81f9odvm25" class="" title="chat widget"></iframe><iframe src="./India&#39;s No 1 VIP Mobile Number Portal _ Fancy Mobile Number _ Numbers Point_files/saved_resource(1).html" frameborder="0" scrolling="no" width="350px" height="520px" style="outline:none !important; visibility:visible !important; resize:none !important; box-shadow:none !important; overflow:visible !important; background:none !important; opacity:1 !important; filter:alpha(opacity=100) !important; -ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity 1}) !important; -mz-opacity:1 !important; -khtml-opacity:1 !important; top:auto !important; right:10px !important; bottom:0px !important; left:auto !important; position:fixed !important; border:0 !important; min-height:520px !important; min-width:350px !important; max-height:520px !important; max-width:350px !important; padding:0 !important; margin:0 !important; -moz-transition-property:none !important; -webkit-transition-property:none !important; -o-transition-property:none !important; transition-property:none !important; transform:none !important; -webkit-transform:none !important; -ms-transform:none !important; width:350px !important; height:520px !important; display:none !important; z-index:auto !important; background-color:transparent !important; cursor:none !important; float:none !important; border-radius:5px 5px  0 0 !important; pointer-events:auto !important; clipauto !important;" id="w5dc2kh0jjfg1f9odvpgu" class="" title="chat widget"></iframe><iframe src="./India&#39;s No 1 VIP Mobile Number Portal _ Fancy Mobile Number _ Numbers Point_files/saved_resource(2).html" frameborder="0" scrolling="no" width="360px" height="10px" style="outline:none !important; visibility:visible !important; resize:none !important; box-shadow:none !important; overflow:visible !important; background:none !important; opacity:1 !important; filter:alpha(opacity=100) !important; -ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity 1}) !important; -mz-opacity:1 !important; -khtml-opacity:1 !important; top:auto !important; right:10px !important; bottom:80px; left:auto !important; position:fixed !important; border:0 !important; min-height:10px !important; min-width:360px !important; max-height:10px !important; max-width:360px !important; padding:0 !important; margin:0 !important; -moz-transition-property:none !important; -webkit-transition-property:none !important; -o-transition-property:none !important; transition-property:none !important; transform:none !important; -webkit-transform:none !important; -ms-transform:none !important; width:360px !important; height:10px !important; display:none !important; z-index:auto !important; background-color:transparent !important; cursor:none !important; float:none !important; border-radius:unset !important; pointer-events:auto !important; clipauto !important;" id="aqs3o6dks4jg1f9odvng9" class="" title="chat widget"></iframe><iframe src="./India&#39;s No 1 VIP Mobile Number Portal _ Fancy Mobile Number _ Numbers Point_files/saved_resource(3).html" frameborder="0" scrolling="no" width="184px" height="184px" style="outline:none !important; visibility:visible !important; resize:none !important; box-shadow:none !important; overflow:visible !important; background:none !important; opacity:1 !important; filter:alpha(opacity=100) !important; -ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity 1}) !important; -mz-opacity:1 !important; -khtml-opacity:1 !important; top:auto !important; right:0px !important; bottom:65px !important; left:auto !important; position:fixed !important; border:0 !important; min-height:184px !important; min-width:184px !important; max-height:184px !important; max-width:184px !important; padding:0 !important; margin:0px 0 0 0 !important; -moz-transition-property:none !important; -webkit-transition-property:none !important; -o-transition-property:none !important; transition-property:none !important; transform:rotate(0deg) translateZ(0); -webkit-transform:rotate(0deg) translateZ(0); -ms-transform:rotate(0deg) translateZ(0); width:184px !important; height:184px !important; display:block !important; z-index:1000000 !important; background-color:transparent !important; cursor:none !important; float:none !important; border-radius:unset !important; pointer-events:auto !important; clipauto !important; -moz-transform:rotate(0deg) translateZ(0); -o-transform:rotate(0deg) translateZ(0); transform-origin:0; -moz-transform-origin:0; -webkit-transform-origin:0; -o-transform-origin:0; -ms-transform-origin:0;" id="r99ac5aot84g1f9odvnf5" class="" title="chat widget"></iframe></div><div id="worker_1" style="height: 657px; width: 431px; top: 0px; left: -421px; opacity: 0.01; position: fixed; overflow: hidden;"><iframe id="workfr_1" width="431" height="657" src="./India&#39;s No 1 VIP Mobile Number Portal _ Fancy Mobile Number _ Numbers Point_files/fetch_polyfill.html" style="width: 431px; height: 657px; opacity: 0.01;"></iframe></div></body></html>











