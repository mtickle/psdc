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
	
	public function getIncidents() {
		$sql = "select * from get_incidents();";
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch incidents data");
		$data = pg_fetch_all($queryRecords);
		return $data;
	}

	public function getRecentIncidents() {
		$sql = "select * from get_recent_incidents();";
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch incidents data");
		$data = pg_fetch_all($queryRecords);
		return $data;
	}

	public function getCrimeTypeStats() {
		$sql = "SELECT * FROM crime_description_count limit 5;";
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch incidents data");
		$data = pg_fetch_all($queryRecords);
		return $data;
	}

	public function getTopCharges() {
		$sql = "select * from get_top_charges();";
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch incidents data");
		$data = pg_fetch_all($queryRecords);
		return $data;
	}

	public function getRecentCalls() {
		$sql = "select * from get_recent_calls();";
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch incidents data");
		$data = pg_fetch_all($queryRecords);
		return $data;
	}

	
	public function getArrestsByGender() {
		$sql = "select * from get_arrests_by_gender();";
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch incidents data");
		$data = pg_fetch_all($queryRecords);
		return $data;
	}

	public function getArrests() {
		$sql = "select * from get_arrests();";
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch incidents data");
		$data = pg_fetch_all($queryRecords);
		return $data;
	}


	public function getIncidentsByDistrict() {
		$sql = "select * from get_incidents_by_district();";
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch incidents data");
		$data = pg_fetch_all($queryRecords);
		return $data;
	}
	
	public function getTopCalls() {
		$sql = "select * from get_top_calls();";
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch incidents data");
		$data = pg_fetch_all($queryRecords);
		return $data;
	}

	public function getTopCallAgencies() {
		$sql = "select * from get_top_call_agencies();";
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch incidents data");
		$data = pg_fetch_all($queryRecords);
		return $data;
	}
	
	public function getMakes() {
		$sql = "select * from get_makes();";
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch incidents data");
		$data = pg_fetch_all($queryRecords);
		return $data;
	}

	public function getModels($make_id) {
		$sql = "select * from get_models($make_id);";
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch incidents data");
		$data = pg_fetch_all($queryRecords);
		return $data;
	}

	public function getCrashDriversByAge() {
		$sql = "select * from get_crash_drivers_by_age();";
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch incidents data");
		$data = pg_fetch_all($queryRecords);
		return $data;
	}

	public function getCrashDriversByGender() {
		$sql = "select * from get_crash_drivers_by_gender();";
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch incidents data");
		$data = pg_fetch_all($queryRecords);
		return $data;
	}

	public function getTopCrashFactors() {
		$sql = "select * from public.get_top_crash_factors();";
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch incidents data");
		$data = pg_fetch_all($queryRecords);
		return $data;
	}
}

?>
