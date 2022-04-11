<?php
header('X-XSS-Protection:0');
include_once "functions.php";
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
						$checked = '';
						if(isset($_REQUEST['cb1']) && ($_REQUEST['cb1'])==1){
							$checked = 'checked';
						}
						//print_r($_REQUEST);

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
				<form method="POST">
					<label for="fpname">First Name</label>
					<input type="text" name="fpname" id="fpname" value="<?php echo $fpname;?>">
					<label for="lpname">Last Name</label>
					<input type="text" name="lpname" id="lpname" value="<?php echo $lpname;?>">
					
					    <label class="label">Select Some Fruits</label>
					    <input type="checkbox" name="fruits[]" value="orange" <?php isFruitChecked('orange')?>>
						<label class="label-inline">Orange</label>
						<input type="checkbox" name="fruits[]" value="mango" <?php isFruitChecked('mango')?> >
						<label class="label-inline">Mango</label>
						<input type="checkbox" name="fruits[]" value="banana" <?php isFruitChecked('banana')?> >
						<label class="label-inline">Banana</label>
						<input type="checkbox" name="fruits[]" value="lemon" <?php isFruitChecked('lemon')?> >
						<label class="label-inline">Lemon</label>
						<button type="submit" name="btn2">Submit</button>
						 <label class="label">Select Some Fruits</label>
					    <input type="checkbox" name="fruits[]" value="orange" <?php isChecked('fruits','orange')?>>
						<label class="label-inline">Orange</label>
						<input type="checkbox" name="fruits[]" value="mango" <?php isChecked('fruits','mango')?> >
						<label class="label-inline">Mango</label>
						<input type="checkbox" name="fruits[]" value="banana" <?php isChecked('fruits','banana')?> >
						<label class="label-inline">Banana</label>
						<input type="checkbox" name="fruits[]" value="lemon" <?php isChecked('fruits','lemon')?> >
						<label class="label-inline">Lemon</label>
					<button type="submit" name="btn1">Submit</button>
				</form>

			</div>
		</div>
	</div>

</body>
</html>