<!DOCTYPE html>
<?php $thisPage="contact"; ?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Contact</title>
		<link rel="stylesheet" href="css/long-scrolly.css">
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato|Source+Sans+Pro">
		
		<script type="text/javascript">
		function validate() {
			if(document.myForm.name.value == "") {
				alert("Please provide your name!");
				document.myForm.name.focus();
				return false;
			}

			if(document.myForm.email.value == "") {
				alert("Please provide your Email!");
				document.myForm.email.focus();
				return false;
			}

			validateEmail();

			if(document.myForm.phone.value == "" || isNaN( document.myForm.phone.value ) || document.myForm.phone.value.length != 10) {
				alert("Please provide a valid 10-digit phone number!");
				document.myForm.phone.focus();
				return false;
			}
		}
		</script>
		<script type="text/javascript">
		function validateEmail() {
			var emailID = document.myForm.email.value;
			atpos = emailID.indexOf("@");
			dotpos = emailID.lastIndexOf(".");

			if (atpos < 1 || ( dotpos - atpos < 2 )) {
				alert("Please enter correct email ID!")
				document.myForm.email.focus();
				return false;
			}
			return(true);
		}
		</script>

	</head>
		<!-- Navigation -->
		<?php include "inc/nav.inc";?>
	<body>
	<section id="first">
		<form method="post" action="database-write.php" name="myForm" onsubmit="return(validate());">

			<table cellspacing="2" cellpadding="2" border="1">

		

				<tr>

					<td align="right">Name</td>

					<td><input type="text" name="name" /></td>

				</tr>



				<tr>

					<td align="right">Email</td>

					<td><input type="text" name="email" /></td>



				<tr>

				   <td align="right">Phone</td>

				   <td><input type="tel" name="phone" /></td>

				</tr>

				

				<tr>

					<td align="right">Message</td>

					<td>
						<textarea name="message" cols="40" rows="5"></textarea>

					</td>

				</tr>



				<tr>

					<td align="right"></td>

					<td><input type="submit" value="Send" /></td>

				</tr>



			</table>

		</form>
	</section>
	</body>

</html>