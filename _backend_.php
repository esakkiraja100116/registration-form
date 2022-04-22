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

    public function check_dup($mail,$number1,$number2){
        $query = "SELECT *  FROM `student-info` where `mail_id` = '$mail';";
        $query_1 = "SELECT *  FROM `student-info` where `contact_number_1` = '$number1' or `contact_number_2` = '$number2';"; 
        $result = $this->conn->select($query);
        $result_1 = $this->conn->select($query_1);

        if($result == "No user found"){
            //echo "helo";
            if($result_1 == "No user found"){
                return 1;
            }else{
                return 2;
            }
        }else{
            return 2;
        }

    }
}

