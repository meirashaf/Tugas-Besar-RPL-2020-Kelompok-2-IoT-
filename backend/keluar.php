<?php

include("conf.php");
include("includes/Template.class.php");
include("includes/DB.class.php");
include("includes/Pengunjung.php");

$pengunjung = new Pengunjung($db_host, $db_user, $db_pass, $db_name);

$pengunjung->open();
$pengunjung->out();
$pengunjung->latest();
$data_utama = $pengunjung->getResult();
echo $data_utama['jml_pengunjung'];
// $data_utama = "hallo";
$pengunjung->close();

// $tpl = new Template("templates/index.html");
// // $tpl->replace("UTAMA", $data_utama);
// $tpl->write();
