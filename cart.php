<?php
session_start();
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
	foreach($_SESSION["shopping_cart"] as $key => $value) 
    {
        unset($_SESSION["shopping_cart"][$key]);
		if(empty($_SESSION["shopping_cart"]))
		unset($_SESSION["shopping_cart"]);
	}		
		}
}

?>
<html>
<head>
<title>KeyZoo - Checkout Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link rel="stylesheet" href="payment.css">
<link rel="icon" type="image/x-icon" href="piano.png">
</head>
<body style="background-color:aliceblue;">
<div style="width:700px; margin:50 auto;">

<h2 style="font-family:Book Antiqua;"><b>Your Shopping Cart</b></h2>   

<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="cart.php">
<img src="cart-icon.png" />
<?php echo $cart_count; ?></a>
</div>
<?php
}
?>

<div class="cart">
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>	
<table class="table">
<tbody>
<tr>
<td></td>
<td>ITEM NAME</td>
<td>&emsp;&emsp;&emsp;</td>
<td>PRICE</td>
<td>ITEMS TOTAL</td>
</tr>	
<?php		
foreach ($_SESSION["shopping_cart"] as $product){
?>
<tr>
<td><img src='<?php echo $product["image"]; ?>' width="50" height="40" /></td>
<td><?php echo $product["name"]; ?><br />
</td>
<td>
<form method='post' action=''>
<input type='hidden' name='action' value="change" />
</form>
</td>
<td><?php echo "Rs. ".$product["discount"]; ?></td>
<td><?php echo "Rs. ".$product["discount"]; ?></td>
</tr>
<?php
$total_price += ($product["discount"]);
}
?>
<tr>
<td colspan="5" align="right">
<strong>TOTAL: <?php echo "Rs. ".$total_price; ?></strong>
</td>
</tr>
</tbody>
<form method='post' action=''>
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove'><b>Remove All Items</b></button>
</table>		
  <?php
}else{
	echo "<h3>Your cart is empty!</h3>";
	}
?>
</div><br><br>
<div class="card-details">
            <h3 class="title"><b><u>Credit Card Details</u></b></h3>
            <div class="row">
              <div class="form-group col-sm-7">
                <label for="card-holder">Card Holder Name</label>
                <input id="card-holder" type="text" class="form-control" placeholder="Card Holder" aria-label="Card Holder" aria-describedby="basic-addon1">
              </div>
              <div class="form-group col-sm-5">
                <label for="">Expiration Date</label>
                <div class="input-group expiration-date">
                  <input type="text" class="form-control" placeholder="MM" aria-label="MM" aria-describedby="basic-addon1">
                  <span class="date-separator">/</span>
                  <input type="text" class="form-control" placeholder="YY" aria-label="YY" aria-describedby="basic-addon1">
                </div>
              </div>
              <div class="form-group col-sm-8">
                <label for="card-number">Card Number</label>
                <input id="card-number" type="text" class="form-control" placeholder="Card Number" aria-label="Card Holder" aria-describedby="basic-addon1">
              </div>
              <div class="form-group col-sm-4">
                <label for="cvc">CVC</label>
                <input id="cvc" type="text" class="form-control" placeholder="CVC" aria-label="Card Holder" aria-describedby="basic-addon1">
              </div>
              <div class="form-group col-sm-12">
                <button type="button" class="btn btn-primary btn-block">Proceed</button>
              </div>
            </div>
</div>
</div>
</body>
</html>