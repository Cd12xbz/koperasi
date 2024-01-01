<?php
class database {
    private $con;
    public $host = "localhost";
    public $username = "root";
    public $password = "";
    public $db = "koperasi";

    function __construct(){
        $this->start_con();
    }

    function start_con(){
        $this->con = new mysqli($this->host, $this->username, $this->password, $this->db);
        if ($this->con->connect_error) {
            die('Can not connect to the MySQL server: ' . $this->con->connect_error);
        }
    }

    function close_con(){
        return mysqli_close($this->con);
    }

    function sqlquery($sql){
        return $this->con->query($sql);
    }

    function jumrec($sql){
        $hasil = $this->sqlquery($sql);
        if ($hasil) {
            $jum = mysqli_num_rows($hasil);
        } else {
            $jum = 0;
        }
        return $jum;
    }

    function datasql($sql){
        $data = array();
        $hasil = $this->sqlquery($sql);
        if ($hasil) {
            $data = $hasil->fetch_array(MYSQLI_BOTH);
        }
        return $data;
    }

    function fetchdata($sql){
        $res = array();
        $hasil = $this->sqlquery($sql);
        if ($hasil) {
            while ($data = $hasil->fetch_array(MYSQLI_BOTH)) {
                $res[] = $data;
            }
        }
        return $res;
    } 
}
?>
