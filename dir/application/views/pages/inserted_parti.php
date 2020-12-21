<DOCTYPE html>
<html>
<body>

<h3>Department-Project Relationship created successfully:</h3>

<?php

$this->load->database();

$deptnum = $_POST["deptnum"];
$projnum = $_POST["projnum"];
$fquery = $this->db->query("SELECT projName FROM Project WHERE projNum = $projnum;");

$projnameAr = $fquery->result(); // This is an array!
$projname = $projnameAr[0]->projName; // This is a string

echo "Department with number " . $deptnum . " now participates on Project " . $projname . ".";

$myquery = "INSERT INTO participates (deptNum, projName, projNum) VALUES (?, ?, ?);";

$result = $this->db->query($myquery, array($deptnum, $projname, $projnum));

?>

<br><br>
<a href="dbhome">Return to the Main Menu</a><br><br>

</body>
</html>
