$j(function(){
    $j(".cms-info,.cms-warning,.cms-error").each(function(){
	$j("#content_wrapper").prepend($(this).detach());
    });
function setCookie(cname,cvalue,exdays)
{
var d = new Date();
d.setTime(d.getTime()+(exdays*24*60*60*1000));
var expires = "expires="+d.toGMTString();
document.cookie = cname + "=" + cvalue + "; " + expires;
}
function getCookie(cname)
{
var name = cname + "=";
var ca = document.cookie.split(';');
for(var i=0; i<ca.length; i++) 
  {
  var c = ca[i].trim();
  if (c.indexOf(name)==0) return c.substring(name.length,c.length);
  }
return "";
}
    if(getCookie("rightmenu")=="hide"){
	    $j("#rightmenu_pull").addClass("flip_h");
	    $j('#rightmenu .sidebar').animate({width: '0px'}, 1000, function() {
                $(this).hide();
		}
	    );
    }
    $j("#rightmenu_pull").click(function()
    {
//	alert("yo");
	if($j(this).hasClass("flip_h"))
	{
//	    $j("#rightmenu .sidebar").fadeIn();
	    $j('#rightmenu .sidebar').show();
	    $j('#rightmenu .sidebar').animate(
            {
//		'margin-left':'0px'
                width: '25%'
            }, 1000);
	    $j(this).removeClass("flip_h");
	    setCookie("rightmenu","show",1/24);
	}
	else
	{
	    //$j("#rightmenu .sidebar").fadeOut();
	    $j(this).addClass("flip_h");
	    $j('#rightmenu .sidebar').animate(
            {
                width: '0px'
//		position:'relative',
//		'margin-left':'100%'
            }, 1000, function() {
                $(this).hide();
	    setCookie("rightmenu","hide",1/24);
//	    $j(this).css("width","25%");
		}
	    );
	}
    });
});
