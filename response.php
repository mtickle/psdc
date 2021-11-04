<?php
include("connection.php");
class Incident {
	protected $conn;
	protected $data = array();
	function __construct() {

		$db = new dbObj();
		$connString =  $db->getConnstring();
		$this->conn = $connString;
	}
	
	public function getIncidents() {
		$sql = "SELECT * FROM get_incidents();";
		//$sql = "SELECT * FROM public.incident";
                //$sql = "select * from public.incident where"
                //$sql .= " (EXTRACT(YEAR FROM incident.""ReportedDate"") = '2021'"
                //$sql .= " AND EXTRACT(MONTH FROM incident.""ReportedDate"") = '10')"
                //$sql .= " ORDER BY incident.""ReportedDate"" DESC"

	

		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch incidents data");
		$data = pg_fetch_all($queryRecords);
		return $data;
	}
}
?>
