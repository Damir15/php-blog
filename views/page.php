
<!DOCTYPE html lang="en-US">
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Euclid Free Responsive Html5 Themes</title>

<link rel='stylesheet' id='reset-css'  href='views/css/reset.css' type='text/css' media='all' />
<link rel='stylesheet' id='superfish-css'  href='views/css/superfish.css' type='text/css' media='all' />
<link rel='stylesheet' id='fontawsome-css'  href='views/css/font-awsome/css/font-awesome.css' type='text/css' media='all' />
<link rel='stylesheet' id='orbit-css-css'  href='views/css/orbit.css' type='text/css' media='all' />
<link rel='stylesheet' id='style-css'  href='views/css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='color-scheme-css'  href='views/css/color/green.css' type='text/css' media='all' />
<link rel="stylesheet" href="views/css/zerogrid.css" type="text/css" media="screen">
<link rel="stylesheet" href="views/css/responsive.css" type="text/css" media="screen">
<script type='text/javascript' src='views/js/jquery.js'></script>
<script type='text/javascript' src='views/js/jquery-migrate.min.js'></script>
<script type='text/javascript' src='views/js/jquery-1.10.2.min.js'></script>
<script type='text/javascript' src='views/js/jquery.carouFredSel-6.2.1-packed.js'></script>
<script type='text/javascript' src='views/js/hoverIntent.js'></script>
<script type='text/javascript' src='views/js/superfish.js'></script>
<script type='text/javascript' src='views/js/orbit.min.js'></script>
<script type='text/javascript' src='views/js/comment-reply.min.js'></script>
 <script src="views/js/css3-mediaqueries.js"></script>
<script type="text/javascript" language="javascript">
	$(function() {
		
		/* Start Carousel */
		$('#featured-posts').carouFredSel({
			auto: true,
					prev: '#prev2',
					next: '#next2',
		});
		/* End Carousel */
		
		
		/* Start Orbit Slider */
		$(window).load(function() {
			$('.post-gallery').orbit({
				animation: 'fade',
			});
		});
		/* End Orbit Slider */
			
			
		/* Start Super fish */
		jQuery(document).ready(function(){
			jQuery('ul.sf-menu').superfish({
				delay:         100,
				speed:         'fast',
				speedOut:      'fast',
			});
		});
		/* End Of Super fish */
			
	});
</script>
</head>

<body class="single single-post postid-49 single-format-standard">

	<!-- Start Header -->
    <div class="container zerogrid">
        <div class="col-full"><div class="wrap-col">
        	<div id="header-nav-container">
            
                    <a href="#">
                    <img src="views/images/logo.png" id="logo" />
                    </a>
                    
					<!-- Navigation Menu -->
                    
                    <ul class="sf-menu">
                        <li class="menu-item"><a href="index.php">Главая</a></li>
                        <li class="menu-item"><a href="about.php">Об Авторе</a></li>
                        <li class="menu-item"><a href="login.php">Вход</a></li>
                    </ul>
                    <!-- End Navigation Menu -->
                    
                    <div class="clear"></div>
                    
            </div>
			</div>
        </div>
    <div class="clear"></div> 
    </div>
    <div class="spacing-30"></div>
    <!-- End Header -->   
    
  
    <!-- Start Main Container -->
    <div class="container zerogrid">
    
        <!-- Start Posts Container -->
        <div class="col-2-3" id="post-container">
        	<div class="wrap-col">
            
            <?php foreach ($items as $val) : ?>
                <!-- Start Post Item -->
            <div class="post">
            	<div class="post-margin">
                
                <div class="post-avatar">
                    <div class="avatar-frame"></div>
                    <img alt='' src='http://1.gravatar.com/avatar/16afd22c8bf5c2398b206a76c9316a3c?s=70&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D70&amp;r=G' class='avatar avatar-70 photo' height='70' width='70' />                </div>
                
                <h4><?php echo $val["articleName"]; ?></h4>
                	<ul class="post-status">
                    <li>Дата создания: <i class="fa fa-clock-o"></i><?php echo $val["articleData"]; ?></li>
<!--                    <li><i class="fa fa-folder-open-o"></i><a href="#" title="View all posts in Illustration" rel="category">Illustration</a></li>-->
<!--                    <li><i class="fa fa-comment-o"></i>No Comments</li>-->
                    </ul>
                    <div class="clear"></div>
                </div>
                
           <div class="featured-image">
                    <img src="<?php echo $val["path"]; ?>" class="attachment-post-standard "  />
                    <div class="post-icon">
                    <span class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                    </span>
                    </div>
                    </div>
            
            <div class="post-margin">
            <p><?php echo $val["article"]; ?></p>
			<!-- Post Tags -->
            
            <div class="post-tags">
            <span class="fa-stack fa-lg">
               <i class="fa fa-circle fa-stack-2x"></i>
               <i class="fa fa-tags fa-stack-1x fa-inverse"></i>
            </span><a href="#" rel="tag">Color Schemes</a>, <a href="#" rel="tag">Gallery</a>, <a href="#" rel="tag">Images</a>, <a href="#" rel="tag">Light</a>, <a href="#" rel="tag">Post</a>, <a href="#" rel="tag">Slider</a>, <a href="#" rel="tag">Standard</a></div>
            <div class="clear"></div>            <!-- End Post Tags -->
            
            </div>
            
            <!-- Post Social -->
            <ul class="post-social">
            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        
             <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        
             <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
            
            <li><a href="#" target="_blank">
            <i class="fa fa-linkedin"></i></a></li>
            </ul>
            <!-- End Post Social -->
            <div class="clear"></div>
            </div>
            <!-- End Post Item -->

            <?php endforeach; ?>


<div class="post">
    <div class="post-margin">

    <!-- Start Related Item -->
    <div class="related-posts">

    <div class="post-avatar">
    <div class="avatar-frame"></div>
    <img width="70" height="70" src="views/img/one-more-beer-70x70.png" class="attachment-post-widget #"  />    </div>

    <div class="related-posts-aligned">
	<h6><a href="#">One More Beer</a></h6>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet auctor ligula. Donec eu</p>
    <div class="clear"></div>
    </div>

    <div class="clear"></div>
    </div>
    <!-- End Related Item -->


    <!-- Start Related Item -->
    <div class="related-posts">

    <div class="post-avatar">
    <div class="avatar-frame"></div>
    <img width="70" height="70" src="views/img/Port_Harbor1-70x70.jpg" class="attachment-post-widget #"  />    </div>

    <div class="related-posts-aligned">
	<h6><a href="#">Port Harbor</a></h6>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet auctor ligula. Donec eu</p>
    <div class="clear"></div>
    </div>

    <div class="clear"></div>
    </div>
    <!-- End Related Item -->


    <!-- Start Related Item -->
    <div class="related-posts">

    <div class="post-avatar">
    <div class="avatar-frame"></div>
    <img width="70" height="70" src="views/img/Timothy-J-Reynolds-2560x14401-70x70.jpg" class="attachment-post-widget #"  />    </div>

    <div class="related-posts-aligned">
	<h6><a href="#">Underground Volcano</a></h6>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet auctor ligula. Donec eu</p>
    <div class="clear"></div>
    </div>

    <div class="clear"></div>
    </div>
    <!-- End Related Item -->

        <div class="clear"></div>
    </div>
</div>

			<!-- Comments -->
            <div class="comment-container">
            
            <h6 id="comment-header">No Comments, Be The First!</h6>
            
            <ul class="comment-list">
                        </ul>
            
            
            <!-- Comment Form -->
            <div class="commen-form">
            								<div id="respond" class="comment-respond">
				<h3 id="reply-title" class="comment-reply-title"> <small><a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancel Reply</a></small></h3>
									<form action="" method="post" id="comment-form-container" class="comment-form">
																			<p class="comment-notes"></p>							<input type="text" name="author" placeholder="Enter Name" class="comment-name"  />
<input type="text" name="email" placeholder="Enter Email" class="comment-email"  />
<input type="text" name="url" placeholder="Enter URL" class="comment-url" />
												<textarea name="comment" placeholder="Enter Message Here" class="comment-text-area"></textarea>						<p class="form-allowed-tags"></p>						<p class="form-submit">
							<input name="submit" type="submit" id="comment-submit" value="Send Comment" />
							<input type='hidden' name='comment_post_ID' value='49' id='comment_post_ID' />
<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
						</p>
											</form>
							</div><!-- #respond -->
			            <div class="clear"></div>
            </form>
            </div>
            <!-- End Comment Form -->
            
            </div>
            <!-- End Comments -->            
            
            
        <div class="clear"></div>
		</div>
        </div>
        <!-- End Posts Container -->
		
        <!-- Start Sidebar -->
		<div class="col-1-3"><div class="wrap-col">
			<div class="widget-container"><form role="search" method="get" id="searchform" class="searchform" action="">
				<div>
					<label class="screen-reader-text" for="s">Search for:</label>
					<input type="text" value="" name="s" id="s" />
					<input type="submit" id="searchsubmit" value="Search" />
				</div>
			</form><div class="clear"></div></div><div class="widget-container"><h6 class="widget-title">Categories</h6>		<ul>
	<li class="cat-item cat-item-5"><a href="#" title="View all posts filed under Apps">Apps</a>
</li>
	<li class="cat-item cat-item-3"><a href="#" title="View all posts filed under Illustration">Illustration</a>
</li>
	<li class="cat-item cat-item-4"><a href="#" title="View all posts filed under Logo">Logo</a>
</li>
		</ul>
<div class="clear"></div></div><div class="widget-container"><h6 class="widget-title">Latest Posts</h6>	<!-- Start Widget -->
                <ul class="widget-recent-posts">
                                
                <li>
                <div class="post-image">
                <div class="post-mask"></div>
                <img width="70" height="70" src="views/img/HighRes-70x70.jpg" class="attachment-post-widget #"  />                </div>
                
                <h6><a href="#">The Lighthouse Effect</a></h6>
                <span>November 02, 2013</span>
                <div class="clear"></div>
                </li> 
                
                                
                <li>
                <div class="post-image">
                <div class="post-mask"></div>
                <img width="70" height="70" src="views/img/one-more-beer-70x70.png" class="attachment-post-widget #"  />                </div>
                
                <h6><a href="#">One More Beer</a></h6>
                <span>November 02, 2013</span>
                <div class="clear"></div>
                </li> 
                
                                
                <li>
                <div class="post-image">
                <div class="post-mask"></div>
                <img width="70" height="70" src="views/img/Port_Harbor1-70x70.jpg" class="attachment-post-widget #"  />                </div>
                
                <h6><a href="#">Port Harbor</a></h6>
                <span>November 02, 2013</span>
                <div class="clear"></div>
                </li> 
                
                                
                <li>
                <div class="post-image">
                <div class="post-mask"></div>
                <img width="70" height="70" src="views/img/Timothy-J-Reynolds-2560x14401-70x70.jpg" class="attachment-post-widget #"  />                </div>
                
                <h6><a href="#">Underground Volcano</a></h6>
                <span>November 02, 2013</span>
                <div class="clear"></div>
                </li> 
                
                 
                </ul>
   <!-- End Widget -->
<div class="clear"></div></div><div class="widget-container"><h6 class="widget-title">Tag Cloud</h6><div class="tagcloud"><a href='#' class='tag-link-12' title='1 topic' style='font-size: 8pt;'>Color Schemes</a>
<a href='#gallery' class='tag-link-6' title='1 topic' style='font-size: 8pt;'>Gallery</a>
<a href='#images' class='tag-link-8' title='1 topic' style='font-size: 8pt;'>Images</a>
<a href='#light' class='tag-link-11' title='1 topic' style='font-size: 8pt;'>Light</a>
<a href='#post' class='tag-link-7' title='1 topic' style='font-size: 8pt;'>Post</a>
<a href='#slider' class='tag-link-9' title='1 topic' style='font-size: 8pt;'>Slider</a>
<a href='#standard' class='tag-link-10' title='1 topic' style='font-size: 8pt;'>Standard</a></div>
<div class="clear"></div></div> 
    <div class="clear"></div>
</div></div>        <!-- End Sidebar -->
    
    <div class="clear"></div>
    </div>
	<!-- End Main Container -->

    
    <!-- Start Footer -->
    <div class="spacing-30"></div>
    <div class="container zerogrid">
        <div id="footer-container" class="col-full">
        <div class="wrap-col">	
            <!-- Footer Copyright -->
            <p>Copyrigh &copy; 2017 </p>
            <!-- End Footer Copyright -->
            
            <!-- Footer Logo -->
			<img src="views/images/footer-logo.png" id="footer-logo" />
            <!-- End Footer Logo -->
        
        <div class="clear"></div>
		</div>
        </div>
    </div>
    <!-- End Footer -->


</body>

</html>