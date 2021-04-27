
<!doctype html>
<head>
	
	<title>Invoice</title>
	<link rel='stylesheet' type='text/css' href='css/invoice.css' />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>About Us</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="icon" href="images/fox.png" type="image/x-icon">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/scrollbar.css">
	<link rel="stylesheet" href="css/fontawesome/fontawesome-all.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/tipso.css">
	<link rel="stylesheet" href="css/chosen.css">
	<link rel="stylesheet" href="css/prettyPhoto.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/color.css">
	<link rel="stylesheet" href="css/transitions.css">
	<link rel="stylesheet" href="css/responsive.css">
	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

	<?php
	include('bidacction.php');
	$row= getpaymentditels($_GET['id']);
	$result = $row->fetch_assoc();
	?>
</head>

<body>
<form>
	<div id="page-wrap">

		<textarea  id="header" style="height:55px;">INVOICE</textarea>
		
		<div id="identity" class="row">
			
           <p class="col" style="width:100px;">Address: <br><?php echo $result["cname"]."<br>".$result["location"];?></br>Phone:<?echo $result["phno"]?></p>
		   <p class="col"style="width:100px;float:right;">Payment method:<br><?echo "Card : ".substr($result["card_num"],0,4)."*** *** ***"."<br>card holder name:<br>".$result["name"];?></p>
		</div>
		
		<div style="clear:both"></div>
		
		<div id="customer">
            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td><?echo $result["oid"]?></td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><?echo $result["date"]?></td>
                </tr>
                <tr>
                    <td class="meta-head">Amount Due</td>
                    <td>$<?echo $result["item_price"]?></td>
                </tr>

            </table>
		
		</div>
		
		<table id="items">
		
		  <tr>
		      <th>Item</th>
		      <th>Unit Cost</th>
		      <th>Price</th>
		  </tr>
		  
		  <tr class="item-row">
		  <td><p style="height:80px;">I<?echo $result["item_name"]?></p></td>
		  <td>$<?echo $result["item_price"]?></td>
		  <td>$<?echo $result["item_price"]?></td>
		  </tr>	
		  <td class="blank"> </td>

		      <td colspan="1" class="total-line">Subtotal</td>
			  <td class="total-value balance"><div class="due">$<?echo $result["item_price"]?></td>
		  </tr>
		  <tr>
		  <td class="blank"> </td>

		      <td colspan="1" class="total-line">Total</td>
			  <td class="total-value balance"><div class="due">$<?echo $result["item_price"]?></td>
		  </tr>
	
		  <tr>
		      <td class="blank"> </td>
		      <td colspan="1" class="total-line balance">Toal Paid</td>
			  <td class="total-value balance"><div class="due">$<?echo $result["item_price"]?></td>
		  </tr>
		</table>
		<input class="wt-actionbtn" type="button" value="Print" onclick="window.print()" /> 		<div id="terms">
		  <h5>Terms</h5>
		  <textarea>NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</textarea>
		</div>
	
	</div>
</form>	
<script src="js/vendor/jquery-3.3.1.js"></script>
	<script src="js/vendor/jquery-library.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/chosen.jquery.js"></script>
	<script src="js/scrollbar.min.js"></script>
	<script src="js/tilt.jquery.js"></script>
	<script src="js/prettyPhoto.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/readmore.js"></script>
	<script src="js/countTo.js"></script>
	<script src="js/appear.js"></script>
	<script src="js/tipso.js"></script>
	<script src="js/jRate.js"></script>
	<script src="js/main.js"></script>
</body>

</html>