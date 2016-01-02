<?php
class DBC
{
	public $db;
	public $query;
	public $result;

	public function DBI()
	{
		$this->db = new mysqli('localhost', 'root', 'taxi', 'youjun');
		$this->db->query('SET NAMES UTF8');
		$this->db->query('set session character_set_connection=utf8');

         $this->db->query('set session character_set_results=utf8');

         $this->db->query('set session character_set_client=utf8');
		if(mysqli_connect_errno())
		{
			header("Content-Type: text/html; charset=UTF-8");
			echo "데이터 베이스 연동에 실패했습니다!";
			exit;
		}
	}

	public function DBQ()
	{
		$this->result = $this->db->query($this->query);
	}

	public function DBO()
	{
		
		$this->db->close();
	}
}
?>