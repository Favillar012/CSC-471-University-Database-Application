<!DOCTYPE html>
<html>
<body>

<?php

$ssn = $_POST["ssn"];
$fname = $_POST["fname"];
$minit = $_POST["minit"];
$lname = $_POST["lname"];
$dob = $_POST["dob"];
$address = $_POST["address"];

$this->load->database();

echo "<h3>Updated employee with SSN " . $ssn . ".</h3>";

$myquery = $this->db->query("UPDATE Employee SET ssn='$ssn', Fname='$fname', Minit='$minit', Lname='$lname', dob=$dob, address='$address' WHERE ssn='$ssn';");

echo "SSN: " . $ssn . "<br>";
echo "First Name: " . $fname . "<br>" ;
echo "Middle Initial: " . $minit . "<br>" ;
echo "Last Name: " . $lname . "<br>" ;
echo "Date of Birth: " . $dob . "<br>";
echo "Address: " . $address . "<br>";

?>

<br><br>
<a href="dbhome">Return to the Main Menu</a><br><br>

</body>
</html>