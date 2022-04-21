<?php

include("db/get-db.php");

class user
{
    private $conn;
    public function __construct()
    {
        $this->conn = new Database();
    }

    public function insert_user($name, $class, $mail, $contact_num_1, $contact_num_2, $father_name, $father_mobile, $mother_name, $mother_mobile, $course, $field_type)
    {
        $query = "INSERT INTO `student-info` (`name`, `class`, `mail_id`, `contact_number_1`, `contact_number_2`, `father_name`, `father_mobile`, `mother_name`, `mother_mobile`, `course`, `field_type`,`created_at`)
        VALUES ('$name', '$class', '$mail', '$contact_num_1', '$contact_num_2', '$father_name', '$father_mobile', '$mother_name', '$mother_mobile', '$course', '$field_type',now());";
        echo $query;
        $result = $this->conn->action($query);
        return $result;
    }

    public function get_all()
    {
        $query = "SELECT * FROM `student-info`;";
        $result = $this->conn->get_all($query);
        return $result;
    }
}
