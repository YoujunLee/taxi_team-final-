$(document).ready(function(){
   $("div").on("click",".flip",function(event){
	   event.stopPropagation();
	   $(this).unbind("click");
	   var Array = $(this).next();
	    $(Array).slideToggle("slow");
	});
});