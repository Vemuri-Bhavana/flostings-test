<?php

$host = "satao.db.elephantsql.com";
$user = "octznsvz";
$pass = "gPJEkV_d4lVFyMpT3VybUR0ctSdh5pKr";
$db = "octznsvz";

$con = pg_connect("host=$host dbname=$db user=$user password=$pass") or die ("Could not connect to Server\n");

if(!$con) {
echo "Error: Unable to open database\n"; 
}
?>
