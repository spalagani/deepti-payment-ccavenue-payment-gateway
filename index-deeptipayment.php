<?php
 // ob_start();

require("libfuncs.php3");
//session_unregister(redirect);

if($_POST['amount']){
$custom_name = $_POST["fullname"];
$Ref_No = rand(111,999);
$Amount = $_POST['amount'];
$phone_no = $_POST['phonenumber'];
$BillingAddress =  $_POST['address'];
$TransactionDate = $_SERVER['REQUEST_TIME'];
$cust_email = $_POST['email'];

$percentage = 2.2;

$charges = ($percentage / 100) * $_POST['amount'];


$total=$_POST["amount"]+$charges;
	
        $Merchant_Id = "14731" ;//This id(also User Id)  available at "Generate Working Key" of "Settings & Options" 
	$Amount = $total ;//your script should substitute the amount in the quotes provided here
	$Order_Id = $Ref_No ;//your script should substitute the order description in the quotes provided here
	$Redirect_Url = "http://www.deeptipayment.com/success.php?sid= $sid" ;//your redirect URL where your customer will be redirected after authorisation from CCAvenue

	$WorkingKey = "D2E6810BDF12D8F16B31065E223923B0"  ;//put in the 32 bit alphanumeric key in the quotes provided here.Please note that get this key ,login to your CCAvenue merchant account and visit the "Generate Working Key" section at the "Settings & Options" page. 

	$billing_cust_name= $custom_name;
	$billing_cust_address= $_POST['address'];
	$billing_cust_country= "India";
	$billing_cust_tel=$_POST['phonenumber'];
	$billing_cust_email= $_POST['email'];
	$delivery_cust_name= $custom_name;
	$delivery_cust_address= $_POST['address'];
	$delivery_cust_tel=$_POST['phonenumber'];
	$delivery_cust_notes="";
	$Merchant_Param="" ;

//}
/*



	








if ($_SERVER["REQUEST_METHOD"] == "POST") {

       

  if (empty($_POST["fullname"])) {
    $nameErr = "Name is required";
  } else {
    $name = $_POST["name"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST["email"];
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
   header("Location:".$URL);

        exit;

}

*/
//ob_end_flush();
?>
	
	
	<form  name="frmpay"  method="post" action="ccavRequestHandler.php">
	<input type="hidden" name="tid" id="tid" readonly />
	<input type="hidden" name="merchant_id" value="<?php echo $Merchant_Id; ?>">
	<input type="hidden" name="amount" value="<?php echo $Amount; ?>">
	<input type="hidden" name="currency" value="INR"/>
	<input type="hidden" name="order_id" value="<?php echo $Order_Id; ?>">
	<input type="hidden" name="redirect_url" value="<?php echo $Redirect_Url; ?>">
	<input type="hidden" name="cancel_url" value="<?php echo $Redirect_Url; ?>">
	<input type="hidden" name="billing_name" value="<?php echo $custom_name; ?>"> 
	<input type="hidden" name="billing_address" value="<?php echo $_POST['address']; ?>"> 
	<input type="hidden" name="billing_country" value="<?php echo $billing_cust_country; ?>"> 
	<input type="hidden" name="billing_tel" value="<?php echo $_POST['phonenumber']; ?>"> 
	<input type="hidden" name="billing_email" value="<?php echo $_POST['email']; ?>"> 
	<input type="hidden" name="delivery_name" value="<?php echo $custom_name; ?>"> 
	<input type="hidden" name="delivery_address" value="<?php echo $_POST['address']; ?>"> 
	<input type="hidden" name="delivery_tel" value="<?php echo $_POST['phonenumber']; ?>"> 
	<input type="hidden" name="delivery_notes" value=""> 
	<input type="hidden" name="Merchant_Param" value=""> 
	<input type="hidden" name="language" value="EN"/>
	</form>
	
	<script language="javascript">
	document.frmpay.submit();
</script>
	
 <?php }?>
	
	
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Deepti Online Payment</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<style>
header {
    background-color: #f5821f;
    color: #ffffff;
    padding:10px 0px;
margin-bottom:15px;
}
footer {
  background-color: #f5821f;
    color: #ffffff;
    padding:10px 0px;
margin-top:15px;
}


/* Custom, iPhone Retina */ 
    @media only screen and (max-width : 320px) {
      .text-right{
      	text-align:center;
      }  
      .text-left{ text-align:center; }
    }

    /* Extra Small Devices, Phones */ 
    @media only screen and (max-width : 480px) {
     .text-right{
      	text-align:center;
      }  
      .text-left{ text-align:center; }
    }

    /* Small Devices, Tablets */
    @media only screen and (max-width : 768px) {
    .text-right{
      	text-align:center;
      }  
      .text-left{ text-align:center; }
    }


</style>

</head>


<body>
<header class="container-fluid">
<div class="col-md-6 text-right"><img src="http://www.deeptipublications.com/image/catalog/Deepti-Publication-Logo.jpg" alt="Deepti Publications - Tenali" style="width: 40%;" /></div>
<div class="col-md-6 text-left"><h2>Online Payment</h2></div>
</header>
<div class="container">

<div class="col-md-8">
<div id="errorBox"></div>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
  <div class="form-group">
    <label for="exampleInputEmail1">College Name / Shop Name / Customer Name </label>
    <input type="text" required class="form-control" name="fullname" id="fullname" placeholder="Name">
    <span class="error"> <?php echo $nameErr;?></span>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" class="form-control" name="address" id="address" placeholder="Address" required >
    <span class="error"> <?php echo $addressErr;?></span>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Mobile Number	</label>
    <input type="text" class="form-control" name="phonenumber" id="phonenumber" placeholder="Mobile Number" required > 
    <span class="error"> <?php echo $phoneErr;?></span>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email ID	</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required >
    <span class="error"> <?php echo $emailErr;?></span>
  </div>
  
  
  <div class="form-group">
    <label for="exampleInputPassword1">Amount</label>
    <input type="text" class="form-control" name="amount" id="amount" placeholder="Amount" required >
    <span class="error"> <?php echo $amountErr;?></span>
  </div>
  <button type="submit" class="btn  btn-warning" >Pay Now</button>
</form>
</div>

<div class="col-md-4 text-center">
<div class="row"><img src="./deepti-BillPayment.png" style="width: 90%;"></div>

</div>
</div>
<footer class="">
<div class="container-fluid" >
	<div class="col-md-4 text-center">
    	<h3>Contact Us</h3>
        <div>Land Line : +91 (08644) 228465, 227677</div>
        <div>Mobile Number : 09848128465</div>
    </div>
    <div class="col-md-4 text-center">
    	<h3>Email</h3>
        <div>deeptipublications@gmail.com</div>
    </div>
    <div class="col-md-4 text-center">
    	<h3>Address</h3>
        <div>22-7-38, Kothapet, TENALI - 522201</div>
        <div>Andhra Pradesh</div>
    </div>
</div>
</footer>
</body>
<script>
function Submit(){
/*	
	var fullname = document.getElementById("fullname").value,
		email = document.getElementById("email").value,
		phonenumber = document.getElementById("phonenumber").value,
		address = document.getElementById("address").value,
		amount = document.getElementById("amount").value;
	if( fullname == "" )
   {
	   alert("fullname");
     //document.getElementbyId("fullname").focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the full name";
     return false;
   }	else if{
	   document.getElementById("errorBox").innerHTML = "New";
   }
 */
}
</script>
</html>
