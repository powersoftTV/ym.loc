<!DOCTYPE html>
<html>
	<head>
		<title><?=$title?></title>
		<!--meta-->
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.2" />
		<meta name="format-detection" content="telephone=no" />
		<meta name="keywords" content="<?=$_LANG['keywords'][$lang]?>" />
		<meta name="description" content="<?=$title?>" />
		<!--style-->
		<link href='//fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="<?=$domen?>style/reset.css">
		<link rel="stylesheet" type="text/css" href="<?=$domen?>style/superfish.css">
		<link rel="stylesheet" type="text/css" href="<?=$domen?>style/prettyPhoto.css">
		<link rel="stylesheet" type="text/css" href="<?=$domen?>style/jquery.qtip.css">
		<link rel="stylesheet" type="text/css" href="<?=$domen?>style/style.css?v=1.4">
		<link rel="stylesheet" type="text/css" href="<?=$domen?>style/menu_styles.css">
		<link rel="stylesheet" type="text/css" href="<?=$domen?>style/animations.css">
		<link rel="stylesheet" type="text/css" href="<?=$domen?>style/responsive.css?v=1.5">
		<link rel="stylesheet" type="text/css" href="<?=$domen?>style/odometer-theme-default.css">
		<link rel="shortcut icon" href="<?=$domen?>images/favicon.ico">
	</head>
	
	<body>
		<div class="site_container">
			<div class="header_top_bar_container clearfix">
				<div class="header_top_bar">
                    <ul class="social_icons clearfix">
                        <li>
							<a href="am" class="lang_bar <? if($lang=='hy')echo active_lang ?>"  title="Հայերեն">
								Հայ
							</a>
						</li>
                        <li>
							<a href="en" class="lang_bar <? if($lang=='en')echo active_lang ?>"  title="English">
								Eng
							</a>
						</li>
                        <li>
							<a href="ru" class="lang_bar <? if($lang=='ru')echo active_lang ?>"  title="Русский">
								Рус
							</a>
						</li>
                    </ul>
					<form class="search">
						<input type="text" name="s" placeholder="<?=$_LANG["Search"][$lang]?>..." value="<?=$_LANG["Search"][$lang]?>..." class="search_input hint">
						<input type="submit" class="search_submit" value="">
						<input type="hidden" name="page" value="search">
					</form>
					<ul class="social_icons clearfix">
						<li>
							<a target="_blank" href="https://www.facebook.com/pages/Yerkir-Media/309735964196" class="social_icon facebook" title="facebook">
								&nbsp;
							</a>
						</li>
						<li>
							<a href="mailto:news@yerkirmedia.am" class="social_icon mail" title="mail">
								&nbsp;
							</a>
						</li>
						
					
					</ul>
					<div class="latest_news_scrolling_list_container">
						<ul>
                            <li class="category">
                                <?php echo $_LANG["LATEST_NEWS"][$lang] ?>
                            </li>
							<li class="left"><a href="#"></a></li>
							<li class="right"><a href="#"></a></li>
							<li class="posts">
								<ul class="latest_news_scrolling_list">
                                <?php
                                $res = mysqli_query($link, "SELECT r_title_$lang , r_date FROM `records` WHERE `r_category` > 0 AND `r_show_$lang` = 1  Order by `id` DESC LIMIT 10 " ) or die(mysqli_error());
                                 while($row = mysqli_fetch_assoc($res)){ ?>
									<li>
										<a href="?page=post" title="<?php echo $row['r_title_'.$lang]." ".$row['r_date'] ?>"><?php echo mb_substr($row['r_title_'.$lang], 0, 45,'utf-8') ?>...</a>
                                        <abbr title="<?php echo $row['r_title_'.$lang]." ".$row['r_date'] ?>" class="timeago current"><?php echo substr($row['r_date'],0,5) ?></abbr>
									</li>
                                    
								<?php } ?>
                                    
								</ul>
                                
							</li>
                            
						</ul>
					</div>
				</div>
			</div>
			
			<div class="header_container">
				<div class="header clearfix">
					<div class="logo">
						<a href="?page=home" title="<?=$_LANG['Yerkir_media'][$lang]?>">
                        <img class="logo_img" src="<?=$domen?>s/i/logohy.png" title="<?=$_LANG['Yerkir_media'][$lang]?>" alt="<?=$_LANG['Yerkir_media'][$lang]?>" style="border:0px;"></a>
                        <embed class="header_adv" src="viva_cell.swf" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer">
				    </div>
					<div class="placeholder">728 x 90</div>
				</div>
			</div>
			
			<div class="menu_container clearfix">
				<?php
				require_once('menu.php');
				?>
			</div>