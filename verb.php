<?php
header('X-XSS-Protection:0');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
<style>
	body{
		margin-top: 30px;
	}
</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="column column-60 column-offset-20">
				<h2>Get Form</h2>
				<p>
					<?php if(isset($_GET['fname']) && !empty($_GET['fname'])){?>
					First Name : <?php echo $_GET['fname'];?><br>
					<?php } ?>
					<?php if(isset($_GET['lname']) && !empty($_GET['lname'])){?>
					:ast Name : <?php echo $_GET['lname'];?><br>
					<?php } ?>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="column column-60 column-offset-20">
				<form method="GET">
					<label for="fname">First Name</label>
					<input type="text" name="fname" id="fname">
					<label for="lname">Last Name</label>
					<input type="text" name="lname" id="lname">
					<button type="submit">Submit</button>
				</form>

			</div>
		</div>
		<div class="row">
			<div class="column column-60 column-offset-20">
				<h2>Post Form</h2>
				<p>
					<?php if(isset($_POST['fpname']) && !empty($_POST['fpname'])){?>
					First Name : <?php echo $_POST['fpname'];?><br>
					<?php } ?>
					<?php if(isset($_POST['lpname']) && !empty($_POST['lpname'])){?>
					:ast Name : <?php echo $_POST['lpname'];?><br>
					<?php } ?>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="column column-60 column-offset-20">
				<form method="POST">
					<label for="fpname">First Name</label>
					<input type="text" name="fpname" id="fpname">
					<label for="lpname">Last Name</label>
					<input type="text" name="lpname" id="lpname">
					<button type="submit">Submit</button>
				</form>

			</div>
		</div>
	</div>

</body>
</html>