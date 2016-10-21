<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Chapter 8</title>

   <!-- Bootstrap core CSS -->
   <link href="bootstrap3_defaultTheme/dist/css/bootstrap.css" rel="stylesheet">

   <!-- Custom styles for this template -->
   <link href="chapter08-project02.css" rel="stylesheet">

   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!--[if lt IE 9]>
   <script src="bootstrap3_defaultTheme/assets/js/html5shiv.js"></script>
   <script src="bootstrap3_defaultTheme/assets/js/respond.min.js"></script>
   <![endif]-->
</head>

<body>
<?php
	#Reference the header file
	include("art-header.inc.php");
	#Reference the art-data file
	include("art-data.php");
	
	#define variables
		$file;
		$product;
		$quantity=0;
		$price=0;
		$amount = $quantity*$price;
		$subtotal=0; 
		$taxRate=.10;
		
	#function to show item purchased and its amount
	  function outputCartRow($file, $product, $quantity, $price) {
		  $amount = $quantity*$price;

		  echo "<tr><td><img src='images/art/tiny/$file'></td>";
		  echo "<td>" . $product . "</td>";
		  echo "<td>" . $quantity . "</td>";
		  echo "<td>" . number_format($price, 2) . "</td>";
		  echo "<td>" . number_format($amount, 2) . "</td></tr>";
		  return $amount;
	  }
	  #function to calculate shipping charges
	  function calcShip(){
		  if ($subtotal <= 2000){
			  return 100;
		  } else { 
				return 0; }
	  }
?>


<div class="container">

      <div class="page-header">
         <h2>View Cart</h2>
      </div>
      
      <table class="table table-condensed">
         <tr>
            <th>Image</th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Amount</th>
         </tr>
         <?php
		 $subtotal += outputCartRow($file1, $product1, $quantity1, $price1);
		 $subtotal += outputCartRow($file2, $product2, $quantity2, $price2);
		 $tax = $subtotal*$taxRate;
		 $shipping = calcShip();
		 $grandTotal = $subtotal + $tax + $shipping;
		
		 echo "<tr class='success strong'>
            <td colspan='4' class='moveRight'>Subtotal</td>
            <td >" . number_format($subtotal, 2) . "</td></tr>";
		 echo "<tr class='success strong'>
            <td colspan='4' class='moveRight'>Tax</td>
            <td >" . number_format($tax, 2) . "</td></tr>";
		
		 echo "<tr class='success strong'>
            <td colspan='4' class='moveRight'>Shipping</td>
            <td >" . number_format($shipping, 2) . "</td></tr>";
			
		echo "<tr class='warning strong text-danger'>
            <td colspan='4' class='moveRight'>Grand Total</td>
            <td >" . number_format($grandTotal, 2) . "</td></tr>";
		 ?>
  
         <tr >
            <td colspan="4" class="moveRight"><button type="button" class="btn btn-primary" >Continue Shopping</button></td>
            <td><button type="button" class="btn btn-success" >Checkout</button></td>
         </tr>
      </table>         

</div>  <!-- end container -->

<?php
	#Reference the footer file
	include("art-footer.inc.php");
?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap3_defaultTheme/assets/js/jquery.js"></script>
    <script src="bootstrap3_defaultTheme/dist/js/bootstrap.min.js"></script>    
  </body>
</html>
