<!DOCTYPE html>
<html>
<body>

<?php

$recordtype = $_POST["recordtype"];

$this->load->database();

switch ($recordtype) {

	case "employee":

	echo "<form method='post' action='found_employee'>";
		echo "<h3>Finding an Employee</h3>Select the employee's SSN:<br><br>";
		
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
		
	echo "<form method='post' action='found_department'>";
	echo "<h3>Finding a Department</h3>Select the department's number:<br><br>";
		
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
		
	echo "<form method='post' action='found_project'>";
	echo "<h3>Finding a Project</h3>Select the project's number:<br><br>";
		
	$query = $this->db->query("SELECT projNum FROM Project;");

	echo "<select name='projnum'>";
	foreach ($query->result() as $row) {
		echo "<option>" . $row->projNum . "</option>";
	}
	echo "</select><br><br>";

	echo "<div><input type='submit' value='Submit' /><div><br><br>";
	echo "</form>";

	break;


	case "dependent":

	echo "<form method='post' action='found_dependent'>";
	echo "<h3>Finding a Dependent</h3>Select the employee's SSN:<br><br>";
		
	$query = $this->db->query("SELECT DISTINCT(ssn) FROM Dependent;");

	echo "<select name='ssn'>";
	foreach ($query->result() as $row) {
		echo "<option>" . $row->ssn . "</option>";
	}
	echo "</select><br><br>";

	echo "<div><input type='submit' value='Submit' /><div><br><br>";
	echo "</form>";
	
	break;


	case "salariedemp":
		
	echo "<form method='post' action='found_salariedemp'>";
	echo "<h3>Finding a Salaried Employee</h3>Select the employee's SSN:<br><br>";
		
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

	echo "<form method='post' action='found_hourlyemp'>";
	echo "<h3>Finding an Hourly-Paid Employee</h3>Select the employee's SSN:<br><br>";
		
	$query = $this->db->query("SELECT ssn FROM hourEmp;");

	echo "<select name='ssn'>";
	foreach ($query->result() as $row) {
		echo "<option>" . $row->ssn . "</option>";
	}
	echo "</select><br><br>";

	echo "<div><input type='submit' value='Submit' /><div><br><br>";
	echo "</form>";

	break;


	case "manager":

	echo "<form method='post' action='found_manager'>";
	echo "<h3>Finding a Manager</h3>Select the employee's SSN:<br><br>";
		
	$query = $this->db->query("SELECT ssn FROM Manager;");

	echo "<select name='ssn'>";
	foreach ($query->result() as $row) {
		echo "<option>" . $row->ssn . "</option>";
	}
	echo "</select><br><br>";

	echo "<div><input type='submit' value='Submit' /><div><br><br>";
	echo "</form>";

	break;


	case "manages":

	echo "<form method='post' action='found_manages'>";
	echo "<h3>Finding a Manager-Department Relationship</h3>Select the Department's number:<br><br>";
		
	$query = $this->db->query("SELECT deptNum FROM manages;");

	echo "<select name='deptnum'>";
	foreach ($query->result() as $row) {
		echo "<option>" . $row->deptNum . "</option>";
	}
	echo "</select><br><br>";

	echo "<div><input type='submit' value='Submit' /><div><br><br>";
	echo "</form>";

	break;


	case "workson":

	echo "<form method='post' action='found_workson'>";
	echo "<h3>Finding an Employee-Project Relationship</h3>Select the Employee's SSN:<br><br>";
		
	$query = $this->db->query("SELECT ssn FROM worksOn;");

	echo "<select name='ssn'>";
	foreach ($query->result() as $row) {
		echo "<option>" . $row->ssn . "</option>";
	}
	echo "</select><br><br>";

	echo "<div><input type='submit' value='Submit' /><div><br><br>";
	echo "</form>";

	break;


	case "worksin":

	echo "<form method='post' action='found_worksin'>";
	echo "<h3>Finding an Employee-Department Relationship</h3>Select the Employee's SSN:<br><br>";
		
	$query = $this->db->query("SELECT ssn FROM worksIn;");

	echo "<select name='ssn'>";
	foreach ($query->result() as $row) {
		echo "<option>" . $row->ssn . "</option>";
	}
	echo "</select><br><br>";

	echo "<div><input type='submit' value='Submit' /><div><br><br>";
	echo "</form>";

	break;


	case "participates":

	echo "<form method='post' action='found_parti'>";
	echo "<h3>Finding a Department-Project Relationship</h3>Select the Department's number:<br><br>";
		
	$query = $this->db->query("SELECT deptNum FROM participates;");

	echo "<select name='deptnum'>";
	foreach ($query->result() as $row) {
		echo "<option>" . $row->deptNum . "</option>";
	}
	echo "</select><br><br>";

	echo "<div><input type='submit' value='Submit' /><div><br><br>";
	echo "</form>";


	break;


	case "location":

	echo "<form method='post' action='found_location'>";
	echo "<h3>Finding a Location</h3>Select the Location's Name:<br><br>";
		
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