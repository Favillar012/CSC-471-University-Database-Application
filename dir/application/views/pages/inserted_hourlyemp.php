<DOCTYPE html>
<html>
<body>

<h3>Hourly-Paid employee inserted successfully:</h3>

<?php

$ssn = $_POST["ssn"];
$hourpay = $_POST["hourpay"];

echo "Employee with ssn " . $ssn . " now has an hourly wage of $" . $hourpay . ".";

$this->load->database();

$myquery = "INSERT INTO hourEmp (ssn, hourPay) VALUES (?, ?);";

$result = $this->db->query($myquery, array($ssn, $hourpay));

?>

<br><br>
<a href="dbhome">Return to the Main Menu</a><br><br>

</body>
</html>
