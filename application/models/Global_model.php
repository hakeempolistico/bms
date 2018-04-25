<?php
class Global_model extends CI_Model{

	public function insert($table,$data)
	{
		$query = $this->db->insert($table, $data);
		return $query;
	}

	public function getRecords($table)
	{
		$res = $this->db->get($table)->result();
		return $res;
	}


}
?>