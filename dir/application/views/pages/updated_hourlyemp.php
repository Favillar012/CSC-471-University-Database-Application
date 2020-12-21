<!DOCTYPE html>
<html>
<body>

<?php

$ssn = $_POST["ssn"];
$hourpay = $_POST["hourpay"];

$this->load->database();

echo "<h3>Updated hourly wage of employee with SSN " . $ssn . ".</h3>";

$myquery = $this->db->query("UPDATE hourEmp SET ssn='$ssn', hourPay='$hourpay' WHERE ssn='$ssn';");

echo "SSN: " . $ssn . "<br>";
echo "Hourly Wage: $" . $hourpay . "<br>" ;

?>

<br><br>
<a href="dbhome">Return to the Main Menu</a><br><br>

</body>
</html>
