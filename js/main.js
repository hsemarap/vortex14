$j(function(){
    $j(".cms-info,.cms-warning,.cms-error").each(function(){
	$j("#content_wrapper").prepend($(this).detach());
    });
});
