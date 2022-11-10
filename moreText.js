
jQuery(document).ready(function ($) {
	$.each(blogs_post_ids, function(idxArray, valArray) {
  		var moreLink = ".more-link" + valArray;
  		var catFootprints = ".catFootprints" + valArray;
	 	$(moreLink).hover(function () {  		
			$(catFootprints).show().attr('src', 'localhost:8888/WordPress/wp-content/uploads/2022/09/cat_footprints.gif?rnd=' +Math.random()+'');
			}, function () {
			$(catFootprints).hide().attr('src', '');
		});
	}); 
});
