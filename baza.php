<?PHP
	define('DB_HOST', 'localhost');
	define('DB_USER', 'yerkir_karen');
	define('DB_PASSWORD', 'Power2013');
	define('DB_SELECT', 'yerkir_yerkirtv');
	
    $link = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die(mysql_error());
    $db=mysql_select_db(DB_SELECT, $link);
    if(!mysql_query("SET NAMES UTF8"))die(mysql_error());
    $time=time();
	date_default_timezone_set('Asia/Yerevan');
	$time2=time();
	$timenew=$time2-$time;
	$t=date("P",$timenew);
	mysql_query("SET SESSION time_zone = '$t'")or die(mysql_error());

    $domen="ym.loc";
    $userfiles_path="/userfiles";
?>
