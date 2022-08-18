<?php

date_default_timezone_set('Asia/Kolkata'); 
@session_start();


$search_db = array(
    "Database_Server" => "localhost",
  	"User_Id" => "kanhadeveloper_db_appuser",
	"Password" => "_GLAiP2#5Lrh",
	"Database_Name" => "kanhadeveloper_db_petha"
);

$search_db_server      = $search_db['Database_Server'];
$search_db_user        = $search_db['User_Id'];
$search_db_password    = $search_db['Password'];
$search_db_name        = $search_db['Database_Name'];

$db = new mysqli($search_db_server, $search_db_user, $search_db_password, $search_db_name);
mysqli_set_charset($db, 'utf8');


?>
