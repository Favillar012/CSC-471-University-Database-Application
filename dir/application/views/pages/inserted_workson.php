<DOCTYPE html>
<html>
<body>

<h3>Employee-Project Relationship created successfully:</h3>

<?php

$this->load->database();

$ssn = $_POST["ssn"];
$projnum = $_POST["projnum"];
$fquery = $this->db->query("SELECT projName FROM Project WHERE projNum = $projnum;");

$projnameAr = $fquery->result(); // This is an array!
$projname = $projnameAr[0]->projName; // This is a string

echo "Employee with ssn " . $ssn . " now works on Project " . $projname . ".";

$myquery = "INSERT INTO worksOn (ssn, projName, projNum) VALUES (?, ?, ?);";

$result = $this->db->query($myquery, array($ssn, $projname, $projnum));

?>

<br><br>
<a href="dbhome">Return to the Main Menu</a><br><br>

</body>
</html>
