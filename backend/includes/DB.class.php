<?php

class DB
{
    var $db_host = "localhost";
    var $db_user = "root";
    var $db_pass = "";
    var $db_name = "rpl_tubes";
    var $db_link = "";
    var $result = 0;

    function __construct($db_host = '', $db_user = '', $db_pass = '', $db_name = '')
    {
        $this->db_host = $db_host;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_name = $db_name;
    }

    function open()
    {
        return mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
    }

    function execute($query = "")
    {
        $this->result = mysqli_query($this->open(), $query);
        return $this->result;
    }

    function getResult()
    {
        return mysqli_fetch_array($this->result);
    }

    function close()
    {
        mysqli_close($this->open());
    }
}
