
<?php

include("connection.php");
class Incident {
	protected $conn;
	protected $data = array();
	public function __construct()  {

		$db = new dbObj();
		$connString =  $db->getConnstring();
		$this->conn = $connString;
	}

    public function getCrashPersons() {
		$sql = "SELECT gender, race, contributing_circumstance_1, date_of_crash, vehicletype  FROM mv_crash_persons limit 20;";
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch incidents data");
		$data = pg_fetch_all($queryRecords);
		return $data;
	}

?>

