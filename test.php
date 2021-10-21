<!DOCTYPE html>
<html>

<head>
	<style>
		.error {
			color: #FF0001;
		}
	</style>
</head>

<body>
	<form name="myForm" method="post" onsubmit="/*return validateForm() && */CheckPassword(document.myForm.password1)" action="view.php">
		<div class="form-group">
			<!-- <label>Your Name</label>
			<input type="text" name="your-name" class="form-control" id="fname" placeholder="Enter your Name">
			<span id="error-name"></span>
		</div>
		<div class="form-group">
			<label>Your Number</label> <span id="error-email"></span>
			<input type="email" name="your-email" class="form-control" placeholder="Enter your Email">
		</div>
		<div class="form-group">
			<label>Your number</label> <span id="error-phone"></span>
			<input type="text" name="your-phone" class="form-control" id="phone" placeholder="Enter your Phone">
		</div>
		<div class="form-group">
			<label>Your rollnumber</label> <span id="error-message"></span>
			<input type="text" name="your-message" class="form-control" rows="10" placeholder="Enter your Message">
		</div>
		<div class="form-group">
			<input type="submit" value="Send" onclick="Validate() && phonenumber((document.myForm.phone))">
		</div> -->
		<input type="password" name="password1" id="" placeholder="Password" required>
	</form>

	<script>
		function phonenumber(inputtxt) {
			var phoneno = /^\d{10}$/;
			if (inputtxt.value.match(phoneno)) {
				// alert("Correct");
				return true;
			} else {
				alert("Not a valid Phone Number");
				return false;
			}
		}

		function CheckPassword(inputtxt) {
		var passw = /^[A-Za-z]\w{5,10}$/;
		if (inputtxt.value.match(passw)) {
			// alert('Correct, try another...')
			return true;
		} else {
			alert('[Password must contain 5 to 10 characters with numeric digits, underscore and first character must be a letter]')
			return false;
		}
	}

		function Validate() {
			//Regex for Valid Characters i.e. Alphabets, Numbers and Space.
			var regex = /^[A-Za-z, ]+$/

			//Validate TextBox value against the Regex.
			var isValid = regex.test(document.getElementById("fname").value);
			if (!isValid) {
				alert("Contains Special Characters.");
			} else {
				return true;
			}


		}


		function validateForm() {
			var name = document.forms["myForm"]["your-name"].value;
			var email = document.forms["myForm"]["your-email"].value;
			var phone = document.forms["myForm"]["your-phone"].value;
			var message = document.forms["myForm"]["your-message"].value;

			if (name.length < 2) {
				document.getElementById('error-name').innerHTML = " Please Enter Your Name *"
			}
			if (email.length < 1) {
				document.getElementById('error-email').innerHTML = " Please Enter Your Email *";
			}
			if (phone.length < 1) {
				document.getElementById('error-phone').innerHTML = " Please Enter Your Phone *";
			}
			if (message.length < 1) {
				document.getElementById('error-message').innerHTML = " Please Enter Your Message *";
			}
			if (name.length < 1 || email.length < 1 || phone.length < 1 || message.length < 1) {
				return false;
			}
		}
	</script>
</body>

</html>