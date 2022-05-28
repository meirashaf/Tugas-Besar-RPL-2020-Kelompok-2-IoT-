<?php

class Pengunjung extends DB
{

    function in()
    {
        $query = "SELECT * from t_pengunjung ORDER BY tgl_pengunjung DESC LIMIT 1";
        $data = mysqli_fetch_assoc($this->execute($query));
        $jumlah = $data['jml_pengunjung'] + 1;

        date_default_timezone_set("Asia/Jakarta");

        $tanggal = date("Y-m-d");
        $waktu = date("H:i:s");

        $query = "INSERT into t_pengunjung values ('$tanggal', '$waktu', '$jumlah')";

        return $this->execute($query);
    }

    function out()
    {
        $query = "SELECT * from t_pengunjung ORDER BY tgl_pengunjung DESC LIMIT 1";
        $data = mysqli_fetch_assoc($this->execute($query));
        $jumlah = $data['jml_pengunjung'] - 1;

        if ($jumlah < 0) {
            $jumlah = 0;
        }

        date_default_timezone_set("Asia/Jakarta");

        $tanggal = date("Y-m-d");
        $waktu = date("H:i:s");

        $query = "insert into t_pengunjung values ('$tanggal', '$waktu', '$jumlah')";
        // echo "gell"
        return $this->execute($query);
    }

    function latest()
    {
        $query = "SELECT jml_pengunjung from t_pengunjung ORDER BY tgl_pengunjung DESC LIMIT 1";

        return $this->execute($query);
    }

    function today_visitor()
    {
        $query = "SELECT waktu_pengunjung, jml_pengunjung from t_pengunjung";

        return $this->execute($query);
    }
}
