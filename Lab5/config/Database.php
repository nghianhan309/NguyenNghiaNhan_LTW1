<?php
class Database
{
    private string $host = "localhost";
    private string $username = "root";
    private string $password = "";
    private string $database = "nguyennghianhan_mydb1";

    public function getConnection()
    {
        $conn = new mysqli(
            $this->host,
            $this->username,
            $this->password,
            $this->database
        );

        if ($conn->connect_errno) {
            die("Kết nối CSDL thất bại: " . $conn->connect_error);
        }
        
        $conn->set_charset("utf8mb4");
        return $conn;
    }
}
?>
