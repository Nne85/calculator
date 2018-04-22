<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>
<?php

if (isset($_POST['submit'])) {
if (is_numeric($_POST['numbers1']) && is_numeric($_POST['numbers2'])) {
	if ($_POST['operate'] =='plus') {
		$total =$_POST['numbers1'] + $_POST['numbers2'];}
	if ($_POST['operate'] =='minus' ) {
		$total = $_POST['numbers1'] - $_POST['numbers2'];
	}
	if ($_POST['operate'] == 'times') {
		$total = $_POST['numbers1'] * $_POST['numbers2'];
		}
	if ($_POST['operate'] == 'divide') {
		$total = $_POST['numbers1'] / $_POST['numbers2'];
	}
	echo "{$_POST['numbers1']} {$_POST['operate']} {$_POST['numbers2']} = {$total}";}
	else  { echo "Numbers are required.";
		# code...
	
	}	
}



?>
<form action="" method="POST"><center>
<p style="color: red">Please complete the following.</p>
<p><input type="text" name="numbers1" placeholder="Enter your number here"></p>
<p><input type="text" name="numbers2" placeholder="Enter your number here"></p>

<select name="operate">
<p><option value="">Operation</option></p>
<p><option value="plus">Addition</option></p>
<p><option value="minus">Subtraction</option></p>
<p><option value="times">Multiplication</option></p>
<p><option value="divide">Division</option></p>
</select>


<input type="submit" name="submit" value="Calculate">
</form>

</body>
</html>
	