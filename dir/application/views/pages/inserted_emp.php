<DOCTYPE html>
<html>
<body>

<h3>New employee inserted successfully.</h3>

<?php

$ssn = $_POST["ssn"];
$fname = $_POST["fname"];
$minit = $_POST["minit"];
$lname = $_POST["lname"];
$dob = $_POST["dob"];
$address = $_POST["address"];

$this->load->database();

$myquery = "INSERT INTO Employee (ssn, Fname, Minit, Lname, dob, address) VALUES (?, ?, ?, ?, ?, ?);";

$result = $this->db->query($myquery, array($ssn, $fname, $minit, $lname, $dob, $address));

$txt = " | Welcome " . $fname . " " . $lname . ".";
echo $txt;

?>

<br><br>
<a href="dbhome">Return to the Main Menu</a><br><br>

</body>
</html>