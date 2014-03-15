<?php
if(!defined('__PRAGYAN_CMS'))
{ 
	header($_SERVER['SERVER_PROTOCOL'].' 403 Forbidden');
	echo "<h1>403 Forbidden<h1><h4>You are not authorized to access the page.</h4>";
	echo '<hr/>'.$_SERVER['SERVER_SIGNATURE'];
	exit(1);
}
global $pageId,$userId;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <title><?php $cmstitle=$TITLE;echo $cmstitle; ?></title>
    <?php if(isset($WIDGETS[0])) echo $WIDGETS[0]; ?>
    <meta name="description" content="<?php echo $SITEDESCRIPTION ?>" />
    <meta name="keywords" content="<?php echo $SITEKEYWORDS ?>" /> 
	<?php global $urlRequestRoot;	global $PAGELASTUPDATED;
	if($PAGELASTUPDATED!="")
		echo '<meta http-equiv="Last-Update" content="'.substr($PAGELASTUPDATED,0,10).'" />'."\n";
	?>
    <link rel="index" href="./" title="Home" />

<link rel="stylesheet" type="text/css" media="all" href="<?php echo $TEMPLATEBROWSERPATH; ?>/css/style.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $TEMPLATEBROWSERPATH; ?>/css/error.css" />
<link rel="shortcut icon" href="<?php echo $TEMPLATEBROWSERPATH; ?>/images/vortex_logo.png" />
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

<link rel='stylesheet' id='530f199731a3d-css' href='<?php echo $TEMPLATEBROWSERPATH; ?>/css/reset.css' type='text/css' media='all' />
<link rel='stylesheet' id='530f199731e29-css' href='<?php echo $TEMPLATEBROWSERPATH; ?>/css/style2.css' type='text/css' media='all' />
<link rel='stylesheet' id='jqueryui_css-css'  href='<?php echo $TEMPLATEBROWSERPATH; ?>/css/jqueryui/custom.css' type='text/css' media='all' />
<link rel='stylesheet' id='screen_css-css'  href='<?php echo $TEMPLATEBROWSERPATH; ?>/css/screen.css' type='text/css' media='all' />
<link rel='stylesheet' id='tipsy_css-css'  href='<?php echo $TEMPLATEBROWSERPATH; ?>/css/tipsy.css' type='text/css' media='all' />
<link rel='stylesheet' id='fancybox_css-css'  href='<?php echo $TEMPLATEBROWSERPATH; ?>/js/fancybox/jquery.fancybox.css' type='text/css' media='all' />
<link rel='stylesheet' id='flexslider_css-css'  href='<?php echo $TEMPLATEBROWSERPATH; ?>/js/flexslider/flexslider.css' type='text/css' media='all' />
<link rel='stylesheet' id='grid_css-css'  href='<?php echo $TEMPLATEBROWSERPATH; ?>/css/grid.css' type='text/css' media='all' />
<link rel='stylesheet' id='pp_slider_style-css'  href='<?php echo $TEMPLATEBROWSERPATH; ?>/css/fullslide.css' type='text/css' media='all' />
<link rel='stylesheet' id='colorpicker.css-css'  href='<?php echo $TEMPLATEBROWSERPATH; ?>/js/colorpicker/css/colorpicker.css' type='text/css' media='all' />
<link rel='stylesheet' id='google_fonts-css'  href='<?php echo $TEMPLATEBROWSERPATH; ?>/css/gfont.css' type='text/css' media='all' />
<link rel='stylesheet' id='wp-postratings-css'  href='<?php echo $TEMPLATEBROWSERPATH; ?>/css/postratings-css.css' type='text/css' media='all' />
<script type='text/javascript' src='<?php echo $TEMPLATEBROWSERPATH; ?>/js/jquery.js'></script>
<script type='text/javascript' src='<?php echo $TEMPLATEBROWSERPATH; ?>/js/jquery.cookie.js'></script>
<script type='text/javascript' src='<?php echo $TEMPLATEBROWSERPATH; ?>/js/jquery-ui.js'></script>
<script type='text/javascript' src='<?php echo $TEMPLATEBROWSERPATH; ?>/js/swfobject.js'></script>
<script type='text/javascript' src='<?php echo $TEMPLATEBROWSERPATH; ?>/js/colorpicker.js'></script>
<script type='text/javascript' src='<?php echo $TEMPLATEBROWSERPATH; ?>/js/eye.js'></script>
<script type='text/javascript' src='<?php echo $TEMPLATEBROWSERPATH; ?>/js/utils.js'></script>
<script type='text/javascript' src='<?php echo $TEMPLATEBROWSERPATH; ?>/js/fancybox/jquery.fancybox.pack.js'></script>
<script type='text/javascript' src='<?php echo $TEMPLATEBROWSERPATH; ?>/js/jquery.easing.js'></script>
<script type='text/javascript' src='<?php echo $TEMPLATEBROWSERPATH; ?>/js/hint.js'></script>
<script type='text/javascript' src='<?php echo $TEMPLATEBROWSERPATH; ?>/js/jquery.validate.js'></script>
<script type='text/javascript' src='<?php echo $TEMPLATEBROWSERPATH; ?>/js/jquery.tipsy.js'></script>
<script type='text/javascript' src='<?php echo $TEMPLATEBROWSERPATH; ?>/js/reflection.js'></script>
<script type='text/javascript' src='<?php echo $TEMPLATEBROWSERPATH; ?>/js/browser.js'></script>
<script type='text/javascript' src='<?php echo $TEMPLATEBROWSERPATH; ?>/js/flexslider/jquery.flexslider-min.js'></script>
<script type='text/javascript' src='<?php echo $TEMPLATEBROWSERPATH; ?>/js/jquery.marquee.js'></script>
<script type='text/javascript' src='<?php echo $TEMPLATEBROWSERPATH; ?>/js/jwplayer.js'></script>
<script type='text/javascript' src='<?php echo $TEMPLATEBROWSERPATH; ?>/js/jquery.isotope.js'></script>
<script type='text/javascript' src='<?php echo $TEMPLATEBROWSERPATH; ?>/js/gmap.js'></script>
<script type='text/javascript' src='<?php echo $TEMPLATEBROWSERPATH; ?>/js/custom.js'></script>
<style type="text/css">
.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}
</style>
    <script language="javascript" type="text/javascript">
		//defined here for use in javascript
		var templateBrowserPath = "<?php echo $TEMPLATEBROWSERPATH ?>";
		var urlRequestRoot = "<?php echo $urlRequestRoot?>";
	</script>

<!--[if IE]>
<link rel="stylesheet" href="<?php echo $TEMPLATEBROWSERPATH; ?>/ie.css" type="text/css" media="all"/>
<![endif]-->

<style type="text/css">
h2.breaking, .flex-control-nav li a:hover, .flex-control-nav li a.active, .post_comment_number, .post_comment_number:hover, .post_comment_number:active, .pagination span.current, .pagination a:hover, input[type=submit], input[type=button], a.button, a.button:hover, a.button:active, .readmore, .widget_tag_cloud div a:hover, .meta-tags a:hover, #footer .widget_tag_cloud div a:hover, #footer .meta-tags a:hover, .main_nav ul li a:hover, .main_nav li a:hover, .main_nav ul li a.hover, .main_nav li a.hover, .main_nav ul li a:active, .main_nav li a:active, .main_nav li.current-menu-item a, .rev_title
{ 
	background: #1bc4de; 
}
#footer a:hover, #footer a:active, a:hover, a:active, ul.twitter li a
{
	color: #1bc4de;
}
#slider_wrapper
{
	/*border-top: 5px solid #1bc4de;*/border-bottom: 5px solid #1bc4de;  
}
body { background: url(<?php echo $TEMPLATEBROWSERPATH; ?>/images/bg-body.jpg) repeat top left;}
.breaking_new { margin-top: 15px; }
</style>
</head>
<body class="home blog" onload="<?php echo $STARTSCRIPTS; ?>" >
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=124148371088993";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<input type="hidden" id="pp_homepage_slider_trans" name="pp_homepage_slider_trans" value="fade"/>
	<input type="hidden" id="pp_homepage_url" name="pp_homepage_url" value="/"/>	
	<div id="wrapper">			
		<div id="header_wrapper">
			<div class="standard_wrapper">
				<div class="menu-main-menu-container"><ul id="main_menu" class="main_nav" style="width:auto">
				<li id='main_logo' class='menu-item menu-item-type-custom menu-item-object-custom'><a id='custom_logo' style='height:50px;padding:0px'  href='./'><img src='images/vortex_logo.png' style='height:100%' class='rotate_once override' alt=''/><h1 style='display:inline;color:white;padding-right:18px;position:relative;bottom:15px'>Vortex 14</h1></a></li>
				<li id="menu-item-533" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-533"><a href="/">Home</a></li>
<!--
<li id="menu-item-534" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-534"><a href="#footer">About Vortex</a>
<ul class="sub-menu">
	<li id="menu-item-536" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-536">
	<a href="">Events</a>	</li>
	<li id="menu-item-537" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-537">
	<a href="">Workshops</a></li>
	<li id="menu-item-800" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-800">
	<a href="">Sponsors</a>	</li>
	<li id="menu-item-540" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-540">
	<a href="">Contacts</a></li>
	<li id="menu-item-541" class="menu-item menu-item-type-post_type menu-item-object-gallery menu-item-541">
	<a href="">Gallery</a></li>
</ul>
</li>
-->
</ul>
</div>			
				<div id="menu_border_wrapper"></div>
				<div class="social_wrapper">
				    <ul>
			    	<li><a target="_blank" href="http://facebook.com/vortex.nitt"><img src="<?php echo $TEMPLATEBROWSERPATH; ?>/images/facebook.png" alt="Vortex Facebook Page"/></a></li>
					<li><a target="_blank" href="http://twitter.com/vortex.nitt"><img src="<?php echo $TEMPLATEBROWSERPATH; ?>/images/twitter.png" alt="Vortex Twitter Page"/></a></li>
				    </ul>
				</div>
			</div>
		</div>
		<br class="clear"/>							
		<div id="boxed_wrapper">
			<div class="logo">
			<style>
.rotate_once {
    -webkit-animation:spin 0.5s linear 1;
    -moz-animation:spin 0.5s linear 1;
    animation:spin 0.5s linear 1;
}
@-moz-keyframes spin { 100% { -moz-transform: rotate(360deg); } }
@-webkit-keyframes spin { 100% { -webkit-transform: rotate(360deg); } }
@keyframes spin { 100% { -webkit-transform: rotate(360deg); transform:rotate(360deg); } }
			</style>
<?php if($pageId==0)echo "					
<!--				<a id='custom_logo' href='./'><img src='$TEMPLATEBROWSERPATH/images/vortex_logo.png' class='rotate_once' alt=''/></a>
			        <div class='logo_tagline' style='font-size:1.5em'>
			        <h1 style='display:inline;margin-right:20px;font-size:2em;'>Vortex</h1><br>
			        The Annual National Level Technical Symposium of Dept of CSE</div>
-->			        ";
else echo "			        
<!--				<a id='custom_logo' href='./'><img src='$TEMPLATEBROWSERPATH/images/vortex_logo.png' class='rotate_once' alt=''/></a>
-->					<div class='header_text logo_tagline' style='font-size:1.5em'>
								<h1 style='display:inline;margin-right:20px;font-size:2em;'>
								$cmstitle</h1>
					</div>
";					
if(isset($WIDGETS[1])) echo $WIDGETS[1]; 
?>		

					</div>
<!--			<div class="header_ads">
				<a href=""><img src="" alt=""/></a>		
			</div>			-->
		<div class='hidden' style="display:none">
		<!-- breadcrumb starts-->
		<div class="breadcrumb">
			<div id="breadcrumb">
			<?php echo $BREADCRUMB; ?>
			</div>
		</div>
		<!-- breadcrumb ends-->
		<div class="clearer"></div>
		<div class="actionbarcontainer">	
			<div class="actionbar">
			<?php echo $ACTIONBARMODULE; ?>
			<?php echo $ACTIONBARPAGE; ?>
			</div>
		</div>
		<?php echo $MENUBAR; ?>
		<?php if(isset($WIDGETS[4])) echo $WIDGETS[4]; ?>
		</div>
		<?php 
		if($userId==0){
			echo "<div id='loginpanel' style='display:none;position:absolute;top:15%;left:25%;z-index:2;padding:10%;background:rgba(20,20,20,0.6);border:2px groove black;height:30%;width:25%;'>
			<div class='close' style='position:absolute;top:0px;right:0px;cursor:pointer' onclick='$(\"#loginpanel\").fadeOut(\"slow\")'><img style='height:30px' class='override' src='images/close.png'></div>
			<form method='POST' class='registrationform' name='user_loginform' id='pragyan_loginform' action='./+login'>
			<h2 style='color:white'>Login</h2>
			<table>
			<tr><td>Username or Email</td><td>:<input type='text' name='user_email' id='user_email' class='required' required></td></tr>
			<tr><td>Password</td><td>:<input type='password' name='user_password' id='user_password' required></td></tr>
			<tr>
									<td><input type='submit' value='Login'></td>
									<td><a href='./+login&subaction=resetPasswd'>Lost Password?</a> <a href='./+login&subaction=register'>Sign Up</a></td>
								</tr>
			</table>
			</form>
			<a href='./+login&subaction=register' style='position:absolute;right:2%;bottom:2%'><button>Sign Up</button></a>
			</div>";
		}
		?>
		<script>
		$=$j;
		$(function(){
			var cmscontent=$("#cms-content").detach();
			$("#content_wrapper").before(cmscontent);
			var breadcrumb=$(".cms-breadcrumbsubmenu").detach();
			$(".cms-actionlogin").live('click',function(e){
				$("#loginpanel").fadeIn("slow");
				e.stopPropagation();
    			e.preventDefault();
			});
			$(".div_topnav:first .topnav li").each(function(){
				$(this).addClass("menu-item menu-item-type-custom menu-item-object-custom");
				$("#main_menu").append($(this));
			});
			$(".cms-actionbarModuleItem").each(function(){
				$("#rightmenu .posts").append('<li><strong class="title">'+$(this).html()+'</li>');
				$(this).detach();
			});
			$(".cms-actionbarPageItem").each(function(){
				$("#rightmenu .posts").append('<li><strong class="title">'+$(this).html()+'</li>');
				$(this).detach();
			});
			// if page has sub pages
			if($(".div_topnav").length>1){
				//var pagename=$(".cms-menuhead").html();
				//$("#cms-page-name").html(pagename);
				$(".div_topnav:last .topnav li").each(function(){
					$("#cms-subpages").append("<li><strong class='title'>"+$(this).html()+"</strong><br/></li>")
				});
			}
			else $("#cms-subpage-bar").detach(); 


			$("img.override").each(function(){
				$(this).attr("src",templateBrowserPath+"/"+$(this).attr("src"));
			});
			var tmptext,tmphead,tmpbody;
			var ct=0
			if($(".text-block").length==0){
				$("#cms-first-text").html($("#cms-content"));
			}
			$(".text-block").each(function(){
				tmphead=tmpbody="";
				txtblock='<div class="sidebar_content"'+(ct>0?' style="float:left" ':'')+'><div class="post_wrapper"><div class="post_inner_wrapper">';
				if($(this).find(".header"))
					{
						txtblock+='<div class="post_header_wrapper"><div class="post_header"><h3>'+$(this).find(".header").html()+'</h3></div></div>';
						tmphead=$(this).find(".header").html();
					}
				txtblock+='<div class="post_wrapper_inner">';
				if($(this).find(".text").length){
					if($(this).find(".text .half")!=[] && $(this).find(".text .half").length){
						if($(this).find(".text .half:first img"))$(this).find(".text .half:first img").addClass("post_img");
						tmptext=$(this).find(".text .half:first").html();
						txtblock+='<div class="one_half">'+tmptext+'</div>';
						tmpbody+='<div class="one_half">'+tmptext+'</div>';
						if($(this).find(".text .half:last img"))$(this).find(".text .half:last img").addClass("post_img");
						tmptext=$(this).find(".text .half:last").html();
						txtblock+='<div class="one_half last">'+tmptext+'</div>';					
						tmpbody+='<div class="one_half last">'+tmptext+'</div>';
					}else{
						txtblock+=$(this).find(".text").html();
					}
				}else {
					txtblock+=$(this).html();
					tmpbody=$(this).html();
				}
				txtblock+='<br class="clear"/><br/><br/><hr/><br/><br class="clear"/></div></div></div><br class="clear"/>';
				if(ct>0)
				$(".inner_wrapper .clear:last").before(txtblock);
				else{
					$("#cms-first-head").html(tmphead);
					$("#cms-first-text").html(tmpbody);
				    $("#cms-first-text").append('<br class="clear"/><br/><br/><hr/><br/>');
				}
				ct++;
				$(this).detach();
			});

		});
		</script>
	
		<div id="content_wrapper">
			
			<div class="inner">
			
				<div class="inner_wrapper">				
<!--
<div id="slider_wrapper" class="fullslide">
 
  <div id="home_slider" class="flexslider">
		<ul class="slides">
		    <li>
		    	<a href="">
	    			<img src="<?php // echo $TEMPLATEBROWSERPATH; ?>/images/slider/1.jpg" style='width:55%;height:95%' alt="Slider 1"/>
		    	</a>		    		
		    	<div id="caption0" class="flexslider_caption" style="display:block">
    			    <div class="flexslider_excerpt">
    			    	<a href=""><h4>Clueless Registrations are up.</h4></a>
    			    	<br class="clear"/><br/>    			    
							Register for Clueless event here.
     			    	<br/><br/>
    			    	<a href="" class="readmore">Register →</a>
			    </div>
    			</div>
		    </li>		    
		    <li>
		    	<a href="">
	    			<img src="<?php //echo $TEMPLATEBROWSERPATH; ?>/images/slider/2.jpg" style='width:55%;height:95%' alt="Slider 2"/>
		    	</a>		    		
		    	<div id="caption1" class="flexslider_caption" >
    			    <div class="flexslider_excerpt">
    			    	<a href=""><h4>Vortex 14 has started successfully.</h4></a>
    			    	<br class="clear"/><br/>
Lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod...    			    	<br/><br/>
    			    	<a href="#" class="readmore">Read more →</a>
    			    </div>
    			</div>
		    </li>		    
		    <li>
		    	<a href="">
	    			<img src="<?php //echo $TEMPLATEBROWSERPATH; ?>/images/slider/3.jpg" style='width:55%;height:95%' alt="Slider 3"/>
		    	</a>		    		
		    	<div id="caption2" class="flexslider_caption" >
    			    <div class="flexslider_excerpt">
    			    	<a href="#"><h4>Message 3</h4></a>
    			    	<br class="clear"/><br/>    			    	
Lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod...    			    	<br/><br/>
    			    	<a href="#" class="readmore">Read more →</a>
    			    </div>
    			</div>
		    </li>		    
		    <li>
		    	<a href="#">
	    			<img src="<?php //echo $TEMPLATEBROWSERPATH; ?>/images/slider/4.jpg" style='width:55%;height:95%' alt="Slider 4"/>
		    	</a>		    		
		    	<div id="caption3" class="flexslider_caption" >
    			    <div class="flexslider_excerpt">
    			    	<a href="#"><h4>Message 4</h4></a>
    			    	<br class="clear"/><br/>
Lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod...    			    	<br/><br/>
    			    	<a href="#" class="readmore">Read more →</a>
    			    </div>
    			</div>
		    </li>		    
		</ul>
	</div>
</div>
	-->
<script type="text/javascript"> 
$j(window).load(function() {
    $j('#slider_wrapper .flexslider').flexslider({
    	animation: "slide",
    	slideDirection: 'horizontal',
    	slideshowSpeed: 20000,
    	slideshow: true,
    	start: function(slider) {
       		var slide_control_width = 100/4;
    		$j('#slider_wrapper .flex-control-nav li').css('width', slide_control_width+'%');
      	}
    });
});</script> 

 					<div class="sidebar_content">																
						<div class="post_wrapper">    	
    						<div class="post_inner_wrapper">
						    	<div class="post_header_wrapper">
							        <div class="post_header">
							        	<h3 id='cms-first-head'></h3>
							        </div>
							    </div>						    
							    <div class="post_wrapper_inner" id='cms-first-text'>							    
			<div id="cms-content">
				<?php echo $INFOSTRING; ?>
				<?php echo $WARNINGSTRING;?>
				<?php echo $ERRORSTRING; ?>
				<?php if(isset($WIDGETS[2])) echo $WIDGETS[2]; ?>
				<?php echo $CONTENT; ?>
				<?php if(isset($WIDGETS[3])) echo $WIDGETS[3]; ?>
			</div>

								</div>    
							</div>
						</div>
						<br class="clear">
					</div>
					<div class="sidebar_wrapper" id='rightmenu' style="/*right:1%;top:76%;position: absolute;*/">
						<div class="sidebar" style='width:40%;'>					    
					    	<div class="content">					    
					    		<ul class="sidebar_widget">
					    		<li id="custom_cat_posts-2" class="widget Custom_Cat_Posts">
					    		<ul class="posts">
					    		</ul>
					    		<br class="clear"></li>
					    	</div>					
					    </div>
					    <br class="clear">
					</div>

					<div class="sidebar_wrapper">
						<div class="sidebar">					    
					    	<div class="content">					    
					    		<ul class="sidebar_widget">
					    		<li id="cms-subpage-bar" class="widget">
					    		<h2 class="widgettitle" id='cms-page-name'>
					    			<?php echo $cmstitle?>
					    		</h2>
					    		<ul class="posts" id='cms-subpages'>
					    		
					    		</ul>
					    		<br class="clear"/></li>
<li id="custom_social_counter-2" class="widget Custom_Social_Counter">		    <div class="social_profile">
					<div class="post_header" style="width:100%;padding:0;margin:0">
			        	<h3>Like us on Facebook</h3>
			        </div>
					<div class="profile">
<!--		        	<a href="http://facebook.com/vortex.nitt">
		        		<img src="<?php echo $TEMPLATEBROWSERPATH; ?>/images/facebook.png" alt="" class="social"/>
		        	</a>
-->		        	<div class="counter">
<div class="fb-like" data-href="https://www.facebook.com/vortex.nitt" data-width="10" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>		        	</div>
		        </div>
		    </div>
</li>
<!--
<li id="custom_facebook_page-3" class="widget Custom_Facebook_Page"><h2 class="widgettitle">Find us on Facebook</h2>
<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fenvato&amp;width=295&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;border_color=%23ffffff&amp;stream=false&amp;header=false&amp;appId=268239076529520" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:295px; height:258px;" allowTransparency="true"></iframe>
</li>
-->
</ul>
					    	
					    	</div>
					
					    </div>
					    <br class="clear"/>

					</div>

					<br class="clear"/>
				</div>
				
			</div>

</div>

	</div>

		<div class="footer_wrapper">
		
		<div id="footer">
			<ul class="sidebar_widget">
				<li id="text-3" class="widget widget_text"><h2 class="widgettitle">About Vortex</h2>
			<div class="textwidget">Vortex '14 - Footer Text
<br/><br/>
</div>
		</li>
			</ul>			
			<br class="clear"/>		
		</div>		
		<div id="copyright">
			<div class="standard_wrapper wide">
			<div id="copyright_left" style="float:center">Copyright &copy; 2014 Vortex '14. All rights reserved.</div>
			<div class="social_wrapper" style="bottom: 25px;position: relative;">
			    <ul>
					<li><a href="http://twitter.com/"><img src="<?php echo $TEMPLATEBROWSERPATH; ?>/images/twitter.png" alt=""/></a></li>
					<li><a href="http://facebook.com/vortex.nitt"><img src="<?php echo $TEMPLATEBROWSERPATH; ?>/images/facebook.png" alt=""/></a></li>
			    </ul>
			</div>
			</div>
		</div>
		
		</div>
		
	</div>
	
	<div id="toTop">
		<img src="<?php echo $TEMPLATEBROWSERPATH; ?>/images/arrow_up_24x24.png" alt=""/>
	</div>
</body>
</html>
