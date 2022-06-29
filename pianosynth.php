<?php
session_start();
include('connection.php');
$status="";
if (isset($_POST['id']) && $_POST['id']!=""){
$id = $_POST['id'];
$result = mysqli_query($con,"SELECT * FROM `products` WHERE `id`='$id'");
$row = mysqli_fetch_assoc($result);
$id = $row['id'];
$name = $row['prod_name'];
$actual = $row['act_price'];
$discount = $row['disc_price'];
$image = $row['image'];
$code = $row['code'];

$cartArray = array(
	$id=>array(
	'id'=>$id,
	'name'=>$name,
	'actual'=>$actual,
	'discount'=>$discount,
  'image'=>$image,
  'code'=>$code)
);

if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
	$status = "<div class='box'>Product is added to your cart!</div>";
}else{
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($id,$array_keys)) {
		$status = "<div class='box' style='background-color: white;color:red;'>
		Product is already added to your cart!</div>";	
	} else {
	  $_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	  $status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}
?>
<html>
<head>
<title>KeyZoo: Our Products</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
<link rel="icon" type="image/x-icon" href="piano.png">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  background-image: url("pianobg.jpg");
  background-repeat: no-repeat;
  background-size:1450px 900px;
  background-attachment: fixed;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 24.4%;
  margin-bottom: 16px;
  padding: 4px;
  background-color: aliceblue;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  color: white;
  background-image: url("bg.png");
  background-repeat: no-repeat;
  background-size: cover;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

</style>
</head>
<body>

<div class="about-section">
  <h1 style="font-family: 'Tahoma';font-size:80px; color:aliceblue;"><u>OUR PRODUCTS</u></h1>
  <p><h2 style="color:red;">MEGA SALE: FLAT 50% OFF ON ALL ITEMS</h2></p><br><br><br>
</div>
<div style="width:1344px; margin:2.5px; auto">
<br>
<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>

<div class="message_box" style="margin:10px 0px; background-color: black; color: white;">
<?php echo $status; ?>
</div>
<div class="cart_div">
<a href="cart.php"><img src="cart-icon.png" />Cart<span style="background-color:black;width:20px;height:20px;"><?php echo $cart_count; ?></a></span>
</div>
<br><br>
<?php
}

$result = mysqli_query($con,"SELECT * FROM `products`");
while($row = mysqli_fetch_assoc($result)){
		echo "<div class='column'>
          <div class='product_wrapper'>
			  <form method='post' action=''>
			  <input type='hidden' name='id' value=".$row['id']." />
			  <div class='image'><img src='".$row['image']."' /></div>
        <br>
			  <div class='name'>".$row['prod_name']."</div><br>
		   	<div class='price'>Actual Price: Rs. ".$row['act_price']."</div>
        <div class='price'>After Discount: Rs. ".$row['disc_price']."</div>
			  <button type='submit' class='buy'><b>Buy Now</b></button>
			  </form>
          </div>
		   	  </div>";
        }
mysqli_close($con);
?>

</div>
</body>
</html>