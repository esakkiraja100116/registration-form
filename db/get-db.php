<?php

class Database
{
    public $host = "mariadb.selfmade.ninja";
    public $uname = "esakkiraja_new";
    public $pass = "helo world@098";
    public $db_name = "esakkiraja_new_registration";

    public $conn;
    public $error;

    public function __construct()
    {
        $this->connect_db();
    }

    // This is for the connections
    private function connect_db()
    {
        $this->conn = new mysqli($this->host, $this->uname, $this->pass, $this->db_name);
        if (!$this->conn) {
            $this->error = "Connection failed " . $this->conn->connect_error;
            return false;
        }
    }

    // This is for select what you mentioned on the query
    public function select($query)
    {
        //echo $query;
        $result = $this->conn->query($query) or die($this->conn->error . __LINE__);
        //print_r(mysqli_fetch_all($result));
        if ($result->num_rows > 0) {
            return mysqli_fetch_assoc($result);
        } else {
            return "No user found";
        }
    }

    // This is for insert what you want
    // insert update delete - operations
    public function action($query)
    {
        //echo  $query;
        $result = $this->conn->query($query);
        if ($result) {
            return 1;
        } else {
            return false;
        }
    }

    // fetch all the result with associative array

    public function get_all($query)
    {
        $result = $this->conn->query($query) or die($this->conn->error);
        //print_r(mysqli_fetch_all($result));
        if (mysqli_num_rows($result)) {
            $files = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $files[] = $row;
            }
            return $files;
        }
    }

    public function md5_pass_salt($pass)
    {
        $salt = "pimelikapilafhiiiiii";
        //print_r($non_validate_info[4]);
        $total = $salt . $pass . "234";
        return md5($total);
    }

    public function md5_pass($pass)
    {
        return md5($pass);
    }

    public function __destruct()
    {
        $this->conn->close();
    }
}

$new = new Database();