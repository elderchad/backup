<?php
	$page = "Shopping Cart";
	include '../includes/connect.php';
	include '../includes/header.php'; //includes session_start()
	include '../includes/sidebar.php';
	
	//if the $_REQUEST 'command' is delete then call the PHP remove_product function
	
	if(isset($_REQUEST['command']) && $_REQUEST['command']=='delete' && $_REQUEST['pid']>0)
	{
		remove_product($_REQUEST['pid']);
	}
	
	//if the $_REQUEST 'command' is delete then call the PHP remove_product function
	else if(isset($_REQUEST['command']) && $_REQUEST['command']=='clear')
	{
		unset($_SESSION['cart']);
	}
	
	//if the $_REQUEST 'command' is update then update the cart by the specified quantity
	else if(isset($_REQUEST['command']) && $_REQUEST['command']=='update')
	{
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++)
		{
			$pid=$_SESSION['cart'][$i]['productID'];
			$q=intval($_REQUEST['product'.$pid]);
			if($q>0 && $q<=999)
			{
				$_SESSION['cart'][$i]['qty']=$q;
			}
		}
	}
?>
<div id="content">
<!-- 'delete', 'clear', and 'update' commands -->
<script>
	function del(pid)
	{
		if(confirm('Do you really wish to delete this item?'))
		{
			document.cart.pid.value=pid;
			document.cart.command.value='delete';
			document.cart.submit();
			
		}
	}
	function clear_cart()
	{
		if(confirm('This will empty your shopping cart, continue?'))
		{
			document.cart.command.value='clear';
			document.cart.submit();
		}
	}
	function update_cart()
	{
		document.cart.command.value='update';
		document.cart.submit();
	}
</script>

	<form name="cart" method="post">
	<input type="hidden" name="pid" />
	<input type="hidden" name="command" />
			<h2>Your Shopping Cart</h2>
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
					<td><?php echo "<div id='move'>" . $picon . " <p> " . $pname . "</div></p>"?></td>
					<td>$ <?php echo(number_format((get_price($pid)), 2, '.', ''))?></td>
					<td><input type="text" name="product<?=$pid?>" value="<?=$q?>" maxlength="3" size="2" /></td>
					<td>$ <?php echo(number_format((get_price($pid)*$q), 2, '.', ''))?></td>
					<td><a href="javascript:del(<?=$pid?>)">Remove</a></td></tr>
				<?php
					}
				?>
					<tr>
					<td><strong>Order Total: $ <?php echo(number_format((get_order_total()), 2, '.', ''))?></strong></td>
					<td style="padding:20px" colspan="5" align="right">
					<input type="button" value="Clear Cart" onclick="clear_cart()">
					<input type="button" value="Update Cart" onclick="update_cart()">
					</td>
					</tr>
					<td><img src='../images/soiLogo2.png' style='left:122%; position: relative'></td>
				<?php
				}
				else
				{
					echo "<br /><td>There are no items in your shopping cart<br /><img src='../images/soiLogo2.png' style='left:45.5%; top: 3px; position: relative'/></td>";
				}
				?>
			</table>
			<p><input type="button" value=<?php if(isset($_SESSION['cart'])) { echo "Continue&nbsp;Shopping"; } else { echo "Visit&nbsp;Store"; } ?> onclick="window.location='store.php'" /></p>
		<?php
		if(isset($_SESSION['cart']))
				{
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++) //for each product in the cart get the following
		{
			$total_items=get_total_items($pid);
			if($q==0) continue;
			
			if($total_items==0)
			{
				echo "";
			}
			else
			{
			echo "<div id='cart' style='border: none'>
			<h2>Checkout</h2>
			<h4 style='text-align: center'>All fields are required</h4>
			<label>First Name*</label><input type='text' name='firstname' placeholder='First Name' required /><br />
			<label>Last Name*</label><input type='text' name='firstname' placeholder='Last Name' required /><br />
			<label>Email*</label><input type='text' name='firstname' placeholder='Email' required /><br />
			<label>Address*</label><input type='text' name='firstname' placeholder='Address' required /><br />
			?><!--<label>Credit Card*</label><input type='text' name='firstname' placeholder='Credit Card #' required /><br />--><?php
			<h3>Are you at least 17 years old and willing to view mature content?*</h3>
			<label>Yes</label><input type='radio' required /><br />
			<p style='right:70%; position:relative'><input style='width:40%' type='submit' name='checkout' value='Checkout' />
			</p>
			</div>";
			break;
			}
		}
		}
			?>
			
	</form>
	</div>
<?php
	include '../includes/footer.php';
?>