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


    public function getTop20CrimeCodes() {
		$sql = "SELECT * FROM mv_top_20_crime_code_counts limit 5;";
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch incidents data");
		$data = pg_fetch_all($queryRecords);
		return $data;
	}

}

?>