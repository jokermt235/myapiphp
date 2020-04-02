<?php
namespace Lib;
class Model {
    private static $servername = "localhost";
    private static $username = "root";
    private static $password = "dbexesoft2357";
    private static $dbname = "it_academy";
    private static $conn; 
    public static function init(){
        self::$conn = mysqli_connect(self::$servername, self::$username, self::$password,self::$dbname);
        if (!self::$conn) {
            die("Connection failed: " . $conn->connect_error);
        }else{
            self::$conn->set_charset("utf8");
        }
    }

    public static function find(){
        $sql = "SELECT * FROM questions";
        $result = self::$conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }

        return []; 
    }

}
