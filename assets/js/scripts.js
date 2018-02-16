/*
 * Title:   Travelo | Responsive HTML5 Travel Template - Custom Javascript file
 * Author:  http://themeforest.net/user/soaptheme
 */

tjq(document).ready(function() {
    tjq(window).scroll(function() {

		if (tjq(document).scrollTop()) {
		  tjq('#header').addClass('scrolled');
		  tjq('.topnav').children().css('color', 'black');
	
		  // $('.navigasi').animate({background: '#f7faff', filter: 'unset'}, 800);
		} else {
		  tjq('.navigasi').removeClass("scrolled");
		  tjq('.topnav').children().css('color', '#f7faff');
		}
	  });

	tjq('#submit').on('click', function(e){
		tjq('#form-search').submit();
	});
});
