<?php
	$page = "Confirm Order";
	include '../includes/header.php'; //contains session_start()
	include '../includes/functions.php';
	include '../includes/connect.php';
?>

<div id="content">

<h2>Order Total</h2>
<p>Please confirm your order details</p>
<table>
			<?php
				if(isset($_SESSION['cart']))
				{
					echo '<tr><td><strong>Product Name</strong></td><td><strong>Price</strong></td><td><strong>Qty</strong></td><td><strong>Subtotal</strong></td></tr>';
					$max=count($_SESSION['cart']);
					for($i=0;$i<$max;$i++) //for each product in the cart get the following
					{
						$pid=$_SESSION['cart'][$i]['productID'];
						$q=$_SESSION['cart'][$i]['qty'];
						$pname=get_product_name($pid);
						$picon=get_icon($pid);
						if($q==0) continue;
			?>
					<tr>
					<td><?php echo $picon . " <p> " . $pname . "</p>"?></td>
					<td>$ <?php echo(number_format((get_price($pid)), 2, '.', ''))?></td>
					<td><input type="text" name="product<?=$pid?>" value="<?=$q?>" maxlength="3" size="2" /></td>
					<td>$ <?php echo(number_format((get_price($pid)*$q), 2, '.', ''))?></td>
					<td><a href="javascript:del(<?=$pid?>)">Remove</a></td></tr><br />
				<?php
					}
				?>
					<tr>
					<td><strong>Order Total: $ <?php echo(number_format((get_order_total()), 2, '.', ''))?></strong></td>
					<td style="padding:20px" colspan="5" align="right">
					<input type="button" value="Clear Cart" onclick="clear_cart()">
					<input type="button" value="Update Cart" onclick="update_cart()">
					<input type="button" value="Checkout" onclick="window.location='shopconfirm.php'"></td>
					</tr>
				<?php
				}
				else
				{
					echo "<br /><td>There are no items in your shopping cart</td>";
				}
				?>
			</table>
<p>*Free Shipping Australia-Wide</p>
</div>
<?php
	include '../includes/footer.php';
?>

<!--The user will also need to enter their delivery details at some stage in the shopping cart process. You might like to try adding this to the confirmation page. You could create a form with fields that asks for the user’s name, billing address details and email address. You will need to amend your user table in the MySQL database to include columns to store billing address details and email address so that this information can be stored in the database. -->