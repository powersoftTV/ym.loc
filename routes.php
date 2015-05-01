<?php
    $url=$_SERVER['REQUEST_URI'];
    $pars_url=parse_url($url, PHP_URL_PATH);
    if($pars_url=="/" || $pars_url=="")$pars_url="/am";
    $uri_parts = explode('/', urldecode(trim($pars_url, ' /')));
    $lang=array_shift($uri_parts);
    $lang=array_shift($uri_parts);
    if($lang != "en" && $lang != "ru" && $lang != "am" )$lang="hy";
    if($lang=="am")$lang="hy";
    $title=$_LANG["Yerkir_media"][$lang];
?>