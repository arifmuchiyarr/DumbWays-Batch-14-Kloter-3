<?php
//koneksi database
$my['host']	= "localhost";
$my['user']	= "root";
$my['pass']	= "";
$my['dbs']	= "inventory";

$koneksidb	= ($GLOBALS["___mysqli_ston"] = mysqli_connect($my['host'],  $my['user'],  $my['pass']));
if (! $koneksidb) {
  echo "Failed Connection !";
}
// memilih database pda server
mysqli_select_db($GLOBALS["___mysqli_ston"], $my['dbs'])
	 or die ("Database not Found, please contact administrator system!");
?>