<?php
$dbServer = DB_SERVER;
$dbUser = DB_USER;
$dbPass = 'giugi8e8e';
$dbName = DB_NAME;

$flag = TRUE;
if( !$link = mysql_connect($dbServer,$dbUser,$dbPass)){
	$flag = FALSE;
    die('mysql_connect error');	
}
else if(!mysql_select_db($dbName,$link)){
	$flag = FALSE;
    die('mysql_select_db error');	
}
else if(!mysql_set_charset('utf8',$link)){
		$flag = FALSE;
        die('mysql_set_charset error');
}

if($flag == FALSE ){
	die('database error');
}

