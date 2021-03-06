/*
	Easy plugin to get element index position
	Author: Peerapong Pulpipatnan
	http://themeforest.net/user/peerapong
*/

var $j = jQuery.noConflict();

$j.fn.getIndex = function(){
	var $jp=$j(this).parent().children();
    return $jp.index(this);
}

this.imagePreview = function(){	
	/* CONFIG */
		
		xOffset = 0;
		yOffset = 0;
		
		// these 2 variable determine popup's distance from the cursor
		// you might want to adjust to get the right result
		
	/* END CONFIG */
	$j("a.preview").hover(function(e){
		this.t = this.title;
		this.title = "";	
		var this_name = $j(this).attr('data-name');
		var c = (this.t != "") ? "<br/>" + this.t : "";
		$j("#option_wrapper").append("<p id='preview'><img src='"+ this_name +"' alt='Image preview' style='z-index:999999' />"+ c +"</p>");								 
		$j("#preview")
			.css("top",(e.pageY - 50) + "px")
			.css("left",(e.pageX - 20) + "px")
			.fadeIn("fast");						
    },
	function(){
		this.title = this.t;	
		$j("#preview").remove()
    });		
    
    $j("a.preview").mousemove(function(e){
		$j("#preview")
			.css("top",(e.pageY - 50) + "px")
			.css("left",(e.pageX - 20) + "px");
	});	
};

$j.fn.setNav = function(){
	$j('#main_menu li ul').css({display: 'none'});

	$j('#main_menu li').each(function()
	{	
		var $jsublist = $j(this).find('ul:first');
		
		$j(this).hover(function()
		{	
			position = $j(this).position();
			
			if($j(this).parents().attr('class') == 'sub-menu')
			{	
				$jsublist.css({top: position.top-10+'px', paddingBottom: '5px'});
				$jsublist.stop().css({height:'auto', display:'none'}).show();
			}
			else
			{
				$jsublist.stop().css({overflow: 'visible', height:'auto', display:'none'}).show();
				
				if(BrowserDetect.browser == 'Explorer' && BrowserDetect.version < 8)
 				{
 					hackMargin = -$j(this).width()-2;
					$jsublist.css({marginLeft: hackMargin+'px'});
				}
			}
		},
		function()
		{	
			$jsublist.stop().css({height:'auto', display:'none'}).slideUp(200);	
		});

	});
	
	$j('#main_menu li').each(function()
	{
		
		$j(this).hover(function()
		{	
			$j(this).find('a:first').addClass('hover');
		},
		function()
		{	
			$j(this).find('a:first').removeClass('hover');
		});	
		
	});
	
	$j('#menu_wrapper .nav ul li ul').css({display: 'none'});

	$j('#menu_wrapper .nav ul li').each(function()
	{
		
		var $jsublist = $j(this).find('ul:first');
		
		$j(this).hover(function()
		{	
			if(BrowserDetect.browser == 'Explorer' && BrowserDetect.version < 8)
 			{
 				$jsublist.css({top: position.top-10+'px', paddingBottom: '5px'});		
 			}
 			else
 			{
 				$jsublist.css({top: position.top-10+'px', paddingBottom: '5px'});
 			}
		
			$jsublist.stop().css({height:'auto', display:'none'}).show();	
		},
		function()
		{	
			$jsublist.stop().css({height:'auto', display:'none'}).slideUp(200);	
		});		
		
	});
	
	$j('#menu_wrapper .nav ul li').each(function()
	{
		
		$j(this).hover(function()
		{	
			$j(this).find('a:first').addClass('hover');
		},
		function()
		{	
			$j(this).find('a:first').removeClass('hover');
		});	
		
	});
}

$j(document).ready(function(){ 

	$j(document).setNav();
	
	$j('.img_frame').fancybox({
	    helpers:  {
	        overlay : {
	            css : {
	                'background-color' : '#000'
	            }
	        }
	    }
	});
	
	$j('.pp_gallery a').fancybox({
	    helpers:  {
	        overlay : {
	            css : {
	                'background-color' : '#000'
	            }
	        }
	    }
	});
	
	$j('.flickr li a').fancybox({
	    helpers:  {
	        overlay : {
	            css : {
	                'background-color' : '#000'
	            }
	        }
	    }
	});
	
	$j('.lightbox').fancybox({
	    helpers:  {
	        overlay : {
	            css : {
	                'background-color' : '#000'
	            }
	        }
	    }
	});
	
	$j('.lightbox_youtube').fancybox({
		scrolling: 'no',
	    helpers:  {
	        overlay : {
	            css : {
	                'background-color' : '#000'
	            }
	        }
	    }
	});
	
	$j('.lightbox_vimeo').fancybox({
		scrolling: 'no',
	    helpers:  {
	        overlay : {
	            css : {
	                'background-color' : '#000'
	            }
	        }
	    }
	});
	
	$j('.lightbox_iframe').fancybox({
		type : 'iframe',
	    helpers:  {
	        overlay : {
	            css : {
	                'background-color' : '#000'
	            }
	        }
	    }
	});
	
	$j('a[rel=gallery]').fancybox({
	    helpers:  {
	        overlay : {
	            css : {
	                'background-color' : '#000'
	            }
	        }
	    }
	});
	
	if(BrowserDetect.browser == 'Explorer' && BrowserDetect.version < 8)
	{
		var zIndexNumber = 1000;
		$j('div').each(function() {
			$j(this).css('zIndex', zIndexNumber);
			zIndexNumber -= 10;
		});

		$j('#thumbNav').css('zIndex', 1000);
		$j('#thumbLeftNav').css('zIndex', 1000);
		$j('#thumbRightNav').css('zIndex', 1000);
		$j('#fancybox-wrap').css('zIndex', 1001);
		$j('#fancybox-overlay').css('zIndex', 1000);
	}
	
	$j(".pp_accordion_close").accordion({ active: 1, collapsible: true, clearStyle: true });
	
	$j(".pp_accordion").accordion({ active: 0, collapsible: true, clearStyle: true });
	
	$j(".tabs").tabs();
	
	$j('.thumb li a').tipsy({fade: false});
	
	$j('.social_media ul li a').tipsy({fade: false});
	
	var footerLi = 0;
	jQuery('#footer .sidebar_widget li.widget').each(function()
	{
		footerLi++;
		
		if(footerLi%4 == 0)
		{ 
			$j(this).addClass('widget-four');
		}
	});
	
	$j('input#s').attr('title', 'to search type and hit enter');
	
	$j('input[title!=""]').hint();
	
	$j('textarea[title!=""]').hint();
	
	$j('#slider_wrapper div').css('visibility', 'visible');
	
	$j('#option_btn').click(
    	function() {
    		if($j('#option_wrapper').css('left') != '0px')
    		{
 				$j('#option_wrapper').animate({"left": "0px"}, { duration: 300 });
	 			$j(this).animate({"left": "240px"}, { duration: 300 });
	 		}
	 		else
	 		{
	 			$j('#option_wrapper').animate({"left": "-245px"}, { duration: 300 });
    			$j('#option_btn').animate({"left": "0px"}, { duration: 300 });
	 		}
    	}
    );
    
    $j('#pp_skin_preview').ColorPicker({
		color: $j('#pp_skin').val(),
		onShow: function (colpkr) {
			$j(colpkr).fadeIn(500);
			return false;
		},
		onHide: function (colpkr) { 
			$j('body').css('cursor', 'wait');
			$j.ajax({
  				type: 'GET',
  				url: $j('#form_option').attr('action'),
  				data: 'pp_skin='+$j('#pp_skin_preview').css('backgroundColor'),
	  		    success: function(msg){ 
	  		    	$j('body').css('cursor', 'default');
	  		    	window.location.href = $j('#pp_homepage_url').attr('value');
	  		    }
			});
			
			$j(colpkr).fadeOut(500);
			return false;
		},
		onChange: function (hsb, hex, rgb) {
			$j('h2.breaking, .flex-control-nav li a:hover, .flex-control-nav li a.active, .post_comment_number, .post_comment_number:hover, .post_comment_number:active, .pagination span.current, .pagination a:hover, input[type=submit], input[type=button], a.button, a.button:hover, a.button:active, .readmore, .widget_tag_cloud div a:hover, .meta-tags a:hover, #footer .widget_tag_cloud div a:hover, #footer .meta-tags a:hover, .main_nav ul li a:hover, .main_nav li a:hover, .main_nav ul li a.hover, .main_nav li a.hover, .main_nav ul li a:active, .main_nav li a:active, .main_nav li.current-menu-item a, .rev_title').css('backgroundColor', '#' + hex);
			$j('#footer a:hover, #footer a:active, a:hover, a:active, ul.twitter li a').css('color', '#' + hex);
			$j('#slider_wrapper').css('borderColor', '#' + hex);
			$j('#pp_skin_preview').css('backgroundColor', '#' + hex);
		}
	});
	
	$j("#pp_slider_style").change(function() { 
		$j('body').css('cursor', 'wait');
		jQuery.ajax({
  		    type: 'GET',
  		    url: $j('#form_option').attr('action'),
  		    data: 'pp_slider_style='+$j(this).attr('value'),
  		    success: function(msg){ 
  		    	$j('body').css('cursor', 'default');
  		    	window.location.href = $j('#pp_homepage_url').attr('value');
  		    }
		});
	});
	
	$j("#pp_font").change(function(){
	    $j("#pp_font_family").attr('value', $j("#pp_font option:selected").attr('data-family'));
	
	    var ppCufonFont = 'http://fonts.googleapis.com/css?family='+$j(this).attr('value')+'&subset=latin,cyrillic';
	    $j('#google_fonts-css').attr('href', ppCufonFont);
	    
	    if($j("#pp_font option:selected").attr('data-family') != '')
	    {
	    	$j('h1, h2, h3, h4, h5, h6, input[type=submit], input[type=button], a.button, a.button:hover, a.button:active, .btn2 a, .btn2 a:hover, button, button:hover, strong.title, a.post_title, #top_menu li, .main_nav ul li a,  .main_nav li a, .breaking_new p a, .post_comment_number, .post_comment_number:hover, .post_comment_number:active, .readmore, .caption_cat, .post_img .caption_cat, #content_wrapper .sidebar .content .sidebar_widget li h2.widgettitle, h2.widgettitle, .pagination a, .pagination a:active, .pagination a.active, .pagination span.current, .styled_box_title, table tr th').css('font-family', '"'+$j("#pp_font option:selected").attr('data-family')+'"');
	    }
	    else
	    {
	    	$j('h1, h2, h3, h4, h5, h6, input[type=submit], input[type=button], a.button, a.button:hover, a.button:active, .btn2 a, .btn2 a:hover, button, button:hover, strong.title, a.post_title, #top_menu li, .main_nav ul li a,  .main_nav li a, .breaking_new p a, .post_comment_number, .post_comment_number:hover, .post_comment_number:active, .readmore, .caption_cat, .post_img .caption_cat, #content_wrapper .sidebar .content .sidebar_widget li h2.widgettitle, h2.widgettitle, .pagination a, .pagination a:active, .pagination a.active, .pagination span.current, .styled_box_title, table tr th').css('font-family', 'Patua One');
	    }
	});
    
    // Create the dropdown base
	$j("<select />").appendTo("#menu_border_wrapper");
	
	// Create default option "Go to..."
	$j("<option />", {
	   "selected": "selected",
	   "value"   : "",
	   "text"    : "- Main Menu -"
	}).appendTo("#menu_border_wrapper select");
    
    $j(".main_nav li,.div_topnav:first .topnav li").each(function() {
		var current_item = $j(this).hasClass('current-menu-item'); 
		var el = $j(this).children('a');
		var menu_text = el.text();
		
		if($j(this).parent('ul.sub-menu').length > 0)
		{
			menu_text = "- "+menu_text;
		}
		 
		if($j(this).parent('ul.sub-menu').parent('li').parent('ul.sub-menu').length > 0)
		{
		 	menu_text = el.text();
		 	menu_text = "- - "+menu_text;
		}
		 
		if(menu_text.length > 0)
		{
			if(current_item)
			{
			 	$j("<option />", {
			 		 "selected": "selected",
			    	 "value"   : el.attr("href"),
			    	 "text"    : menu_text
				 }).appendTo("#menu_border_wrapper select");
			}
			else
			{
			 	$j("<option />", {
			     	"value"   : el.attr("href"),
			     	"text"    : menu_text
			 	}).appendTo("#menu_border_wrapper select");
			}
		}
	});
	
	$j("#menu_border_wrapper select").change(function() {
  		window.location = $j(this).find("option:selected").val();
	});
	
	$j('.post_img img, ul.posts img, ul.flickr li img, img.frame, .pp_gallery a img, #gallery-1 img, img.thumb, .img_shadow').hover(function(){ 
		$j(this).animate({ opacity: 0.8 }, 300);
	},
	function()
	{	
		$j(this).animate({ opacity: 1 }, 300);
	});
	
	$j(function () {
        $j('div.marquee').marquee('pointer').mouseover(function () {
            $j(this).trigger('stop');
        }).mouseout(function () {
            $j(this).trigger('start');
        });
    });
    
    $j(".reflection").reflect();
    
    $j(window).scroll(function() {
		if($j(this).scrollTop() != 0) {
			$j('#toTop').fadeIn();	
		} else {
			$j('#toTop').fadeOut();
		}
	});
 
	$j('#toTop').click(function() {
		$j('body,html').animate({scrollTop:0},800);
	});

});

$j(window).load(function(){ 
	
	var $container = $j('#post_mansory_wrapper');
    $container.isotope();	
	
});