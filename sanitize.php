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
			
		</div>
		
		<div class="row">
			<div class="column column-60 column-offset-20">
				<h2>Sanitized Form</h2>
				<p>
					<?php
						$fpname = '';
						$lpname = '';

					?>
					<?php if(isset($_REQUEST['fpname']) && !empty($_REQUEST['fpname'])){
						$fpname = htmlspecialchars($_REQUEST['fpname']);
						 } ?>
					
					<?php if(isset($_REQUEST['lpname']) && !empty($_REQUEST['lpname'])){
						$lpname = htmlspecialchars($_REQUEST['lpname']);
						} ?>
				</p>
				<p>
					First Name :<?php echo $fpname;?><br>
					Last Name :<?php echo $lpname;?>

				</p>
			</div>
		</div>
		<div class="row">
			<div class="column column-60 column-offset-20">
				<form method="REQUEST">
					<label for="fpname">First Name</label>
					<input type="text" name="fpname" id="fpname" value="<?php echo $fpname;?>">
					<label for="lpname">Last Name</label>
					<input type="text" name="lpname" id="lpname" value="<?php echo $lpname;?>">
					<div>
						<input type="checkbox" name="cb1" id="cb1">
						<label for="cb1" class="label-inline">Some Checkbox</label>
					</div>
					<button type="submit">Submit</button>
				</form>

			</div>
		</div>
	</div>

</body>
</html>