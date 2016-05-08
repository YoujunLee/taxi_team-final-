<?php
<<<<<<< HEAD

=======
>>>>>>> b2be1ba44f8a24f2f0e520433f672efc0d2b6c4c
class DBC
{
    public $db;
    public $query;
    public $result;
    public $name;

    public function DBI()
    {
        $this->db = new mysqli('211.108.60.110', 'cconmausa_dev', '#zoq6ton', 'cconma_DEV'); //host, id, pw, database 순서입니다.
        $this->db->query('SET NAMES UTF8');
        if(mysqli_connect_errno())
        {

            echo "데이터 베이스 연동에 실패했습니다.";
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