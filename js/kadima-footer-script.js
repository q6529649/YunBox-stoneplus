var $nav=jQuery('.prolist');
$nav.children('li').mouseenter(function(){
	jQuery(this).addClass("cur").siblings().removeClass("cur");
})
$nav.children('li').eq(0).mouseenter();
/* Scrolling Animations */
jQuery('.scrollimation').waypoint(function(){
	jQuery(this).addClass('in');
},{offset:'100%'});

jQuery('span.menu').click(function() {
	jQuery('ul.nav1').slideToggle( 300, function() {
		// Animation complete.
	});
});
