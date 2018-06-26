<?php 
session_start();
require('../items.php');
require('../header.php');

checkout();

function checkout() {
	if (isset($_POST['purchase'])) {
		echo '<div class="container">';
		echo '	<div class="row">';
		echo '		<div class="col-md-8 col-md-offset-2">';
		echo '				 <h1 class="text-center">Thank You!</h1>';
		echo '				 <p class="text-center">Your order has been placed</p>';
		echo '		</div>';
		echo '	</div>';
		echo '</div>';
		session_destroy();
		exit();
	}
	return;
}

?>
<div class="container">		
	<div class="row">
		<div>
		</div>
		<div class="col-md-8 col-md-offset-2">
					<h4 class="mb-3">Shipping address</h4>
					<form class="needs-validation" method="post" action="" novalidate>
						<div class="row">
							<div class="col-md-6 mb-3">
								<label for="firstName">First name</label>
								<input type="text" class="form-control" id="firstName" placeholder="" value="" required>
							</div>
							<div class="col-md-6 mb-3">
								<label for="lastName">Last name</label>
								<input type="text" class="form-control" id="lastName" placeholder="" value="" required>
							</div>
						</div>

						<div class="mb-3">
							<label for="address">Address</label>
							<input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
						</div>

						<div class="mb-3">
							<label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
							<input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
						</div>

						<div class="row">
							<div class="col-md-2 mb-3">
								<label for="country">Country</label>
								<select class="form-control" id="country" required>
									<option value="">...</option>
									<option>US</option>
								</select>
							</div>
							<div class="col-md-3 mb-3">
								<label for="state">State</label>
								<select class="form-control" id="state" required>
									<option value="">Choose...</option>
									<option>California</option>
								</select>
							</div>
							<div class="col-md-3 mb-3">
								<label for="city">City</label>
								<input type="text" class="form-control" id="city" placeholder="" required>
							</div>
							<div class="col-md-3 mb-3">
								<label for="zip">Zip</label>
								<input type="text" class="form-control" id="zip" placeholder="" required>
							</div>
						</div>
						<hr class="mb-4">
						<div class="text-center">
						<h4 class="mb-3">Quickly check out with:</h4>		
								<button name="purchase" type="submit"><img type="image" src="../visa_checkout.png" id="securely_checkout" width="150" height="85"></button>
						</div>
						<h2 class="mb-3 text-center"> OR</h2>

					<h4 class="mb-3">Billing address</h4>
						<div class="row">
							<div class="col-md-6 mb-3">
								<label for="firstName">First name</label>
								<input type="text" class="form-control" id="firstNameBilling" placeholder="" value="" required>
							</div>
							<div class="col-md-6 mb-3">
								<label for="lastName">Last name</label>
								<input type="text" class="form-control" id="lastNameBilling" placeholder="" value="" required>
							</div>
						</div>

						<div class="mb-3">
							<label for="address">Address</label>
							<input type="text" class="form-control" id="addressBilling" placeholder="1234 Main St" required>
						</div>

						<div class="mb-3">
							<label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
							<input type="text" class="form-control" id="address2Billing" placeholder="Apartment or suite">
						</div>

						<div class="row">
							<div class="col-md-2 mb-3">
								<label for="country">Country</label>
								<select class="form-control" id="countryBilling" required>
									<option value="">...</option>
									<option>US</option>
								</select>
							</div>
							<div class="col-md-3 mb-3">
								<label for="state">State</label>
								<select class="form-control" id="stateBilling" required>
									<option value="">Choose...</option>
									<option>California</option>
								</select>
							</div>
							<div class="col-md-3 mb-3">
								<label for="city">City</label>
								<input type="text" class="form-control" id="cityBilling" placeholder="" required>
							</div>
							<div class="col-md-3 mb-3">
								<label for="zip">Zip</label>
								<input type="text" class="form-control" id="zipBilling" placeholder="" required>
							</div>
						</div>
								 
						<h4 class="mb-3">Payment</h4>

						<div class="row">
							<div class="col-md-6 mb-3">
								<label for="cc-name">Name on card</label>
								<input type="text" class="form-control" id="cc-name" placeholder="" required>
								<small class="text-muted">Full name as displayed on card</small>
							</div>
							<div class="col-md-6 mb-3">
								<label for="cc-number">Credit card number</label>
								<input type="text" class="form-control" id="cc-number" placeholder="" required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 mb-3">
								<label for="cc-expiration">Expiration</label>
								<input type="text" class="form-control" id="cc-expiration" placeholder="" required>
							</div>
							<div class="col-md-3 mb-3">
								<label for="cc-expiration">CVV</label>
								<input type="text" class="form-control" id="cc-cvv" placeholder="" required>
							</div>
						</div>
						<hr class="mb-4">
						<button class="btn btn-primary btn-lg btn-block" name="purchase" type="submit">Purchase</button>
					</form>
		</div>
	</div>
</div><br /><br />

<?php
	require('../footer.php');
?>