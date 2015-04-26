<?PHP
	define('DB_HOST', 'localhost');
	define('DB_USER', 'yerkir_karen');
	define('DB_PASSWORD', 'Power2013');
	define('DB_SELECT', 'yerkir_yerkirtv');
	
    $link = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die(mysqli_error());
    $db=mysqli_select_db($link,DB_SELECT);
    if(!mysqli_query($link,"SET NAMES UTF8"))die(mysqli_error());
    $time=time();
	date_default_timezone_set('Asia/Yerevan');
	$time2=time();
	$timenew=$time2-$time;
	$t=date("P",$timenew);
	mysqli_query($link,"SET SESSION time_zone = '$t'")or die(mysqli_error());

    $domen="ym.loc";
    $userfiles_path="/userfiles";
?>
