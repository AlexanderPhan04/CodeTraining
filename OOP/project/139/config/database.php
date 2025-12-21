<?php
    class Database 
    {
        private $conn = null;
        private $host = 'localhost';
        private $user = 'root';
        private $pass = 'quan2004';
        private $dbname = 'OOP_db';
        private $result = null;

        // hàm kết nối
        public function connect()
        {
            $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname)
            or die ('connect faild');

            $this->conn->query('SET NAMES UTF8');
        }

        // hàm thực thi
        public function select($sql)
        {
            $this->connect();
            $this->result = $this->conn->query($sql);
        }

        // hàm lấy dữ liệu
        public function fetch()
        {
            if ($this->result->num_rows > 0) {
                $row = $this->result->fetch_assoc();
            }
            else 
            {
                $row = 0;
            }
            return $row;
        }

        // hàm thêm sửa xóa
        public function command($sql)
        {
            $this->connect();
            $this->conn->query($sql);
        }
    }
?>