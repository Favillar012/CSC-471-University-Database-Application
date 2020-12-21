<DOCTYPE html>
<html>
<body>

<h3>Location inserted successfully:</h3>

<?php

$locname = $_POST["locname"];
$locaddress = $_POST["locaddress"];
$deptnum = $_POST["deptnum"];
echo "Location (" . $locname . ", " . $deptnum . ") at " . $locaddress . ".";

$this->load->database();

$myquery = "INSERT INTO Location (locName, address, deptNum) VALUES (?, ?, ?);";

$result = $this->db->query($myquery, array($locname, $locaddress, $deptnum));

?>

<br><br>
<a href="dbhome">Return to the Main Menu</a><br><br>

</body>
</html>
