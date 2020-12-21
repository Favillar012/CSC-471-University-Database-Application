<!DOCTYPE html>
<html>
<body>

<?php

$ssn = $_POST["ssn"];
$salary = $_POST["salary"];

$this->load->database();

echo "<h3>Updated salary of employee with SSN " . $ssn . ".</h3>";

$myquery = $this->db->query("UPDATE salariedEmp SET ssn='$ssn', salary='$salary' WHERE ssn='$ssn';");

echo "SSN: " . $ssn . "<br>";
echo "Salary: $" . $salary . "<br>" ;

?>

<br><br>
<a href="dbhome">Return to the Main Menu</a><br><br>

</body>
</html>
