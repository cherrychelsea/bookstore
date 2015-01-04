/**
 * Bookstore.js for thebookstore
 * @author:
 */

 // Change the value of category chooser to selected one
 // Since dropdown menu is not static -> bind event to ._search-select
 $('._search-select').on('click', '.dropdown-menu li a', function(e) {
 	e.preventDefault();
 	$('#categoryChooser').text($(this).text());
 	$('#categoryChooser').html($(this).text() + " <span><i class=\"fa fa-angle-down\"></i></span>")
 });

 $('#search').focus(function() {
 	$('#categoryChooser').css('border-color',cr);
 });

 $('#search').focusout(function() {
 	$('#categoryChooser').css('border-color',cib);
 });

 $('.megamenu__nav-item .megamenu__nav-item-link').hover(function() {
 	$(this).next().css('color',cr);
 }, function() {
 	$(this).next().css('color',cbx);
 });

 // Show category menu when move entered
 $('#categoryMenu').hover(
 	function() {
 		$('.megamenu__list').css('display', 'block');
 	}
 );

 $('.exit-on-out').hover(function(){}, function(){
 	$(this).css('display', 'none');
 })