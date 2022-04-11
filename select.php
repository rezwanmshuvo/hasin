<?php
header('X-XSS-Protection:0');
include_once "functions2.php";
$fruits = ["mango","orange","banana","apple","lemon","peach"]; 
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
				<h2>Select/Dropdown</h2>
				<p>
					<?php
						/*print_r($_POST);
						if (isset($_POST['fruits']) && $_POST['fruits'] !='') {
							printf("You have selected : %s",filter_input(INPUT_POST,'fruits',FILTER_SANITIZE_STRING));
						}*/

						//$sfruits = $_POST['fruits'] ?? array();  This is approve
						//$sfruits = isset($_POST['fruits']) ? $_POST['fruits']:array(); This is also approve
						$sfruits = filter_input(INPUT_POST,'fruits', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY);
						if(count($sfruits)>0) {
							echo "You have selected :".join(", ",$sfruits);
						}
					?>
				</p>
				
			</div>
		</div>
		<div class="row">
			<div class="column column-60 column-offset-20">
				<form method="POST">
					<label for="fruits">Select Some Fruits</label>
					
						<select style="height: 200px;" name="fruits[]" id="fruits" multiple>
							<option value="" disabled selected>Select Fruits</option>
							<?php displayOptions($fruits);?>
						</select>
						<button type="summit">Submit</button>
				</form>

			</div>
		</div>
	</div>

</body>
</html>