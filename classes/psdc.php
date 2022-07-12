<?php


Class dbConn{
	/* Database connection start */
        var $servername, $username, $password, $dbname, $port, $conn;

	function __construct()
	{
	  $this->servername = "192.168.86.2";
	  $this->username = "postgres";
	  $this->password = "Boomer2025";
	  $this->dbname = "incident";
	  $this->port = "5432";
	}
	function getConnstring() {
		$con = pg_connect("host=".$this->servername." port=".$this->port." dbname=".$this->dbname." user=".$this->username." password=".$this->password."") or die("Connection failed: ".pg_last_error());

		/* check connection */
		//if (pg_last_error()) {
		//	printf("Connect failed: %s\n", pg_last_error());
		//	exit();
		//} else {
			$this->conn = $con;
		//}
		return $this->conn;
	}
}


class Psdc {
	protected $conn;
	protected $data = array();
	public function __construct()  {

		$db = new dbConn();
		$connString =  $db->getConnstring();
		$this->conn = $connString;
	}


    public function getTop20CrimeCodes() {
		$sql = "SELECT * FROM mv_top_20_crime_code_counts limit 10;";
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch incidents data");
		$data = pg_fetch_all($queryRecords);
		return $data;
	}

	public function getCrimeCodes() {
		$sql = "SELECT * FROM mv_crime_code_counts limit 10;";
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch incidents data");
		$data = pg_fetch_all($queryRecords);
		return $data;
	}

	public function getCrimeCodesByDistrict() {
		$sql = "SELECT * FROM mv_top_crime_codes_by_district;";
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch incidents data");
		$data = pg_fetch_all($queryRecords);
		return $data;
	}


}

?>