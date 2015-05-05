<div class="page">
	
                    <?php 
                        $query="SELECT 
                                                        records.r_pic,records.r_title_$lang,records.r_date,records.r_short_$lang,records.r_category,categories.c_name_$lang
                                FROM 
                                            records
                                LEFT JOIN
                                            categories 
                                ON
                                            r_category=orderCode
                                WHERE
                                            `r_category` > 0 AND `r_show_$lang` = 1
                                ORDER BY   
                                            records.id
                                DESC
                                LIMIT 
                                            20
                                        ";
                        $resh = mysqli_query($link, $query ) or die(mysqli_error());
						while($row = mysqli_fetch_assoc($resh)){
                        
                  /*  echo '    
					<li class="slide">
						<a href="?page=post" title="'.$rowh['r_title_hy'.$lang].'">
							<img style="width:100%;" src="'.$domen.'userfiles/'.$row['r_pic'].'" alt="img">
						</a>
						<div class="slider_content_box">
							<ul class="post_details simple">
								<li class="category"><a href="?page=category&amp;cat=health" title="'.$row['c_name_'.$lang].'">'.$row['c_name_'.$lang].'</a></li>
								<li class="date">
									'.$row['r_date'].'
								</li>
							</ul>
							<h2><a href="?page=post" title="'.$row['r_title_'.$lang].'">'.$row['r_title_'.$lang].'</a></h2>
							<p class="clearfix">'.$row['r_short_'.$lang].'</p>
						</div>
					</li>';*/
                         } ?>
		
		<div class="row page_margin_top_section">
			<div class="column column_1_1">
				<!--<h4 class="box_header">Posts Carousel</h4>-->
				<div class="horizontal_carousel_container page_margin_top">
					<ul class="blog horizontal_carousel autoplay-1 visible-4 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
						<li class="post">
							<a href="?page=post" title="New Painkiller Rekindles Addiction Concerns">
								<img src='<?=$domen?>images/samples/330x242/image_08.jpg' alt='img'>
							</a>
							<h5><a href="?page=post" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>
							<ul class="post_details simple">
								<li class="category"><a href="?page=category&amp;cat=health" title="HEALTH">HEALTH</a></li>
								<li class="date">
									10:11 PM, Feb 02
								</li>
							</ul>
						</li>
						<li class="post">
							<a href="?page=post" title="High Altitudes May Aid Weight Control">
								<img src='<?=$domen?>images/samples/330x242/image_01.jpg' alt='img'>
							</a>
							<h5><a href="?page=post" title="High Altitudes May Aid Weight Control">High Altitudes May Aid Weight Control</a></h5>
							<ul class="post_details simple">
								<li class="category"><a href="?page=category&amp;cat=health" title="HEALTH">HEALTH</a></li>
								<li class="date">
									10:11 PM, Feb 02
								</li>
							</ul>
						</li>
						<li class="post">
							<a href="?page=post_gallery" title="Built on Brotherhood, Club Lives Up to Name">
								<span class="icon gallery"><!--<span class="info">999</span>--></span>
								<img src='<?=$domen?>images/samples/330x242/image_03.jpg' alt='img'>
							</a>
							<h5><a href="?page=post_gallery" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a></h5>
							<ul class="post_details simple">
								<li class="category"><a href="?page=category&amp;cat=health" title="HEALTH">HEALTH</a></li>
								<li class="date">
									10:11 PM, Feb 02
								</li>
							</ul>
						</li>
						<li class="post first">
							<a href="?page=post" title="Built on Brotherhood, Club Lives Up to Name">
								<img src='<?=$domen?>images/samples/330x242/image_09.jpg' alt='img'>
							</a>
							<h5><a href="?page=post" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a></h5>
							<ul class="post_details simple">
								<li class="category"><a href="?page=category&amp;cat=health" title="HEALTH">HEALTH</a></li>
								<li class="date">
									10:11 PM, Feb 02
								</li>
							</ul>
						</li>
						<li class="post first">
							<a href="?page=post" title="Nuclear Fusion Closer to Becoming a Reality">
								<img src='<?=$domen?>images/samples/330x242/image_04.jpg' alt='img'>
							</a>
							<h5><a href="?page=post" title="Nuclear Fusion Closer to Becoming a Reality">Nuclear Fusion Closer to Becoming a Reality</a></h5>
							<ul class="post_details simple">
								<li class="category"><a href="?page=category&amp;cat=health" title="HEALTH">HEALTH</a></li>
								<li class="date">
									10:11 PM, Feb 02
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row page_margin_top_section">
			<div class="column column_1_3">
				<h4 class="box_header">Sports</h4>
				<ul class="blog">
					<li class="post">
						<a href="?page=post" title="Struggling Nuremberg Sack Coach Verbeek">
							<img src='<?=$domen?>images/samples/330x242/image_06.jpg' alt='img'>
						</a>
						<h2 class="with_number">
							<a href="?page=post" title="Struggling Nuremberg Sack Coach Verbeek">Struggling Nuremberg Sack Coach Verbeek</a>
							<a class="comments_number" href="?page=post#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>
						</h2>
						<ul class="post_details">
							<li class="category"><a href="?page=category&amp;cat=sports" title="SPORTS">SPORTS</a></li>
							<li class="date">
								10:11 PM, Feb 02
							</li>
						</ul>
						<p>Politicans have looked weak in the face of such natural disaster, with many facing criticism from local residents for doing little more than turning up as flood tourists at the side of disasters.</p>
						<a class="read_more" href="?page=post" title="Read more"><span class="arrow"></span><span>READ MORE</span></a>
					</li>
				</ul>
				<ul class="blog small clearfix">
					<li class="post">
						<a href="?page=post_small_image" title="Bayern Says Ties With Rivals Dortmund Have Frozen">
							<img src='<?=$domen?>images/samples/100x100/image_14.jpg' alt='img'>
						</a>
						<div class="post_content">
							<h5>
								<a href="?page=post_small_image" title="Bayern Says Ties With Rivals Dortmund Have Frozen">Bayern Says Ties With Rivals Dortmund Have Frozen</a>
							</h5>
							<ul class="post_details simple">
								<li class="category"><a href="?page=category&amp;cat=sports" title="SPORTS">SPORTS</a></li>
								<li class="date">
									10:11 PM, Feb 02
								</li>
							</ul>
						</div>
					</li>
					<li class="post">
						<a href="?page=post_soundcloud" title="Built on Brotherhood, Club Lives Up to Name">
							<img src='<?=$domen?>images/samples/100x100/image_12.jpg' alt='img'>
						</a>
						<div class="post_content">
							<h5>
								<a href="?page=post_soundcloud" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>
							</h5>
							<ul class="post_details simple">
								<li class="category"><a href="?page=category&amp;cat=sports" title="SPORTS">SPORTS</a></li>
								<li class="date">
									10:11 PM, Feb 02
								</li>
							</ul>
						</div>
					</li>
				</ul>
				<a class="more page_margin_top" href="#">READ MORE</a>
			</div>
			<div class="column column_1_3">
				<h4 class="box_header">Lifestyle</h4>
				<ul class="blog">
					<li class="post">
						<a href="?page=post" title="High Altitudes May Aid Weight Control">
							<img src='<?=$domen?>images/samples/330x242/image_07.jpg' alt='img'>
						</a>
						<h2 class="with_number">
							<a href="?page=post" title="High Altitudes May Aid Weight Control">High Altitudes May Aid Weight Control</a>
							<a class="comments_number" href="?page=post#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>
						</h2>
						<ul class="post_details">
							<li class="category"><a href="?page=category&amp;cat=lifestyle" title="LIFESTYLE">LIFESTYLE</a></li>
							<li class="date">
								10:11 PM, Feb 02
							</li>
						</ul>
						<p>Politicans have looked weak in the face of such natural disaster, with many facing criticism from local residents for doing little more than turning up as flood tourists at the side of disasters.</p>
						<a class="read_more" href="?page=post" title="Read more"><span class="arrow"></span><span>READ MORE</span></a>
					</li>
				</ul>
				<ul class="blog small clearfix">
					<li class="post">
						<a href="?page=post" title="Bayern Says Ties With Rivals Dortmund Have Frozen">
							<img src='<?=$domen?>images/samples/100x100/image_01.jpg' alt='img'>
						</a>
						<div class="post_content">
							<h5>
								<a href="?page=post" title="Bayern Says Ties With Rivals Dortmund Have Frozen">Bayern Says Ties With Rivals Dortmund Have Frozen</a>
							</h5>
							<ul class="post_details simple">
								<li class="category"><a href="?page=category&amp;cat=lifestyle" title="LIFESTYLE">LIFESTYLE</a></li>
								<li class="date">
									10:11 PM, Feb 02
								</li>
							</ul>
						</div>
					</li>
					<li class="post">
						<a href="?page=post_video" title="Built on Brotherhood, Club Lives Up to Name">
							<span class="icon small video"></span>
							<img src='<?=$domen?>images/samples/100x100/image_03.jpg' alt='img'>
						</a>
						<div class="post_content">
							<h5>
								<a href="?page=post_video" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>
							</h5>
							<ul class="post_details simple">
								<li class="category"><a href="?page=category&amp;cat=lifestyle" title="LIFESTYLE">LIFESTYLE</a></li>
								<li class="date">
									10:11 PM, Feb 02
								</li>
							</ul>
						</div>
					</li>
				</ul>
				<a class="more page_margin_top" href="#">READ MORE</a>
			</div>
			<div class="column column_1_3">
				<h4 class="box_header">Science</h4>
				<ul class="blog small clearfix">
					<li class="post">
						<a href="?page=post" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">
							<img src='<?=$domen?>images/samples/100x100/image_09.jpg' alt='img'>
						</a>
						<div class="post_content">
							<h5>
								<a href="?page=post" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>
							</h5>
							<ul class="post_details simple">
								<li class="category"><a href="?page=category&amp;cat=science" title="SCIENCE">SCIENCE</a></li>
								<li class="date">
									10:11 PM, Feb 02
								</li>
							</ul>
						</div>
					</li>
					<li class="post">
						<a href="?page=post" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">
							<img src='<?=$domen?>images/samples/100x100/image_12.jpg' alt='img'>
						</a>
						<div class="post_content">
							<h5>
								<a href="?page=post" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">Syrian Civilians Trapped For Months Continue To Be Evacuated</a>
							</h5>
							<ul class="post_details simple">
								<li class="category"><a href="?page=category&amp;cat=science" title="SCIENCE">SCIENCE</a></li>
								<li class="date">
									10:11 PM, Feb 02
								</li>
							</ul>
						</div>
					</li>
					<li class="post">
						<a href="?page=post" title="Built on Brotherhood, Club Lives Up to Name">
							<img src='<?=$domen?>images/samples/100x100/image_02.jpg' alt='img'>
						</a>
						<div class="post_content">
							<h5>
								<a href="?page=post" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>
							</h5>
							<ul class="post_details simple">
								<li class="category"><a href="?page=category&amp;cat=science" title="SCIENCE">SCIENCE</a></li>
								<li class="date">
									10:11 PM, Feb 02
								</li>
							</ul>
						</div>
					</li>
					<li class="post">
						<a href="?page=post_gallery" title="Nuclear Fusion Closer to Becoming a Reality">
							<span class="icon small gallery"></span>
							<img src='<?=$domen?>images/samples/100x100/image_01.jpg' alt='img'>
						</a>
						<div class="post_content">
							<h5>
								<a href="?page=post_gallery" title="Nuclear Fusion Closer to Becoming a Reality">Nuclear Fusion Closer to Becoming a Reality</a>
							</h5>
							<ul class="post_details simple">
								<li class="category"><a href="?page=category&amp;cat=science" title="SCIENCE">SCIENCE</a></li>
								<li class="date">
									10:11 PM, Feb 02
								</li>
							</ul>
						</div>
					</li>
				</ul>
				<a class="more page_margin_top" href="#">MORE FROM SCIENCE</a>
			</div>
		</div>
	</div>
</div>