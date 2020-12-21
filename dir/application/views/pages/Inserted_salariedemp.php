<DOCTYPE html>
<html>
<body>

<h3>Salaried employee inserted successfully:</h3>

<?php

$ssn = $_POST["ssn"];
$salary = $_POST["salary"];

echo "Employee with ssn " . $ssn . " now has a salary of $" . $salary . ".";

$this->load->database();

$myquery = "INSERT INTO salariedEmp (ssn, salary) VALUES (?, ?);";

$result = $this->db->query($myquery, array($ssn, $salary));

?>

<br><br>
<a href="dbhome">Return to the Main Menu</a><br><br>

</body>
</html>
