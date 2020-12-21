<!DOCTYPE html>
<html>
<body>

<?php

$projnum = $_POST["projnum"];

$this->load->database();

$myquery = $this->db->query("SELECT * FROM Project WHERE projNum = '$projnum';");

$myrow = $myquery->first_row('array');

$projnum = $myrow['projNum'];
$projname = $myrow['projName'];
$projdesc = $myrow['projDesc'];

echo "

<h2>Update Project</h2>
<h4>Update the Project's description below. The field contains the current information:</h4>

<h4>Note: Only the project's description can be changed.</h4>

<form method='post' action='updated_project'>

	Project Number:
	<input type='radio' name='projnum' value='$projnum' checked> $projnum<br><br>
	
Project Name:
	<input type='radio' name='projname' value='$projname' checked> $projname<br><br>

	Project Description:<br>
	<textarea name='projdesc' rows='6' cols='40'>$projdesc
  </textarea>

	<div><input type='submit' value='Submit' /><div>
</form>

";

?>

</body>
</html>
