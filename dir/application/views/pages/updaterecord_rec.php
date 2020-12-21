<!DOCTYPE html>
<html>
<body>

<?php

$recordtype = $_POST["recordtype"];

$this->load->database();

switch ($recordtype) {

	case "employee":

	echo "<form method='post' action='update_employee'>";
		echo "<h3>Update an Employee</h3>Select the employee's SSN:<br><br>";
		
	$query = $this->db->query("SELECT ssn FROM Employee;");

	echo "<select name='ssn'>";
	foreach ($query->result() as $row) {
		echo "<option>" . $row->ssn . "</option>";
	}
	echo "</select><br><br>";

	echo "<div><input type='submit' value='Submit' /><div><br><br>";
	echo "</form>";
		
	break;


	case "department":
		
	echo "<form method='post' action='update_department'>";
	echo "<h3>Update a Department</h3>Select the department's number:<br><br>";
		
	$query = $this->db->query("SELECT deptNum FROM Department;");

	echo "<select name='deptnum'>";
	foreach ($query->result() as $row) {
		echo "<option>" . $row->deptNum . "</option>";
	}
	echo "</select><br><br>";

	echo "<div><input type='submit' value='Submit' /><div><br><br>";
	echo "</form>";

	break;


	case "project":
		
	echo "<form method='post' action='update_project'>";
	echo "<h3>Update a Project</h3>Select the project's number:<br><br>";
		
	$query = $this->db->query("SELECT projNum FROM Project;");

	echo "<select name='projnum'>";
	foreach ($query->result() as $row) {
		echo "<option>" . $row->projNum . "</option>";
	}
	echo "</select><br><br>";

	echo "<div><input type='submit' value='Submit' /><div><br><br>";
	echo "</form>";

	break;


	case "salariedemp":
		
	echo "<form method='post' action='update_salariedemp'>";
	echo "<h3>Update a Salaried Employee</h3>Select the employee's SSN:<br><br>";
		
	$query = $this->db->query("SELECT ssn FROM salariedEmp;");

	echo "<select name='ssn'>";
	foreach ($query->result() as $row) {
		echo "<option>" . $row->ssn . "</option>";
	}
	echo "</select><br><br>";

	echo "<div><input type='submit' value='Submit' /><div><br><br>";
	echo "</form>";

	break;


	case "hourlyemp":

	echo "<form method='post' action='update_hourlyemp'>";
	echo "<h3>Update an Hourly-Paid Employee</h3>Select the employee's SSN:<br><br>";
		
	$query = $this->db->query("SELECT ssn FROM hourEmp;");

	echo "<select name='ssn'>";
	foreach ($query->result() as $row) {
		echo "<option>" . $row->ssn . "</option>";
	}
	echo "</select><br><br>";

	echo "<div><input type='submit' value='Submit' /><div><br><br>";
	echo "</form>";

	break;


	case "location":

	echo "<form method='post' action='update_location'>";
	echo "<h3>Update a Location</h3>Select the Location's Name:<br><br>";
		
	$query = $this->db->query("SELECT locName FROM Location;");

	echo "<select name='locname'>";
	foreach ($query->result() as $row) {
		echo "<option>" . $row->locName . "</option>";
	}
	echo "</select><br><br>";

	echo "<div><input type='submit' value='Submit' /><div><br><br>";
	echo "</form>";

	break;


	default:
		echo "Error 404!";
}

?>

</body>
</html>
