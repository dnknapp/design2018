/*jslint browser: true, sloppy: true, vars: true, white: true, indent: 2 */
/*global $, jQuery*/
/*$(function() {
	var $container = $('.isotope')
				
		$container.imagesLoaded( function() {
		// images have loaded

			$container.isotope({
				itemSelector: '.item',
				masonry: {
					columnWidth: '.grid-sizer',
					gutter: '.gutter-sizer'
				},
				filter: '*', 
					animationOptions: { 
					duration: 750, 
					easing: 'linear', 
					queue: false
				}
			});	
			$('.filter-container a').click(function(){ 
				var selector = $(this).attr('data-filter'); 
				$container.isotope({ 
					filter: selector, 
						animationOptions: { 
							duration: 750, 
							easing: 'linear', 
							queue: false, 
						} 
				}); 
				return false; 
			}); 
		});

});*/

$(function(){
  
  var $container = $('.isotope'),
      $checkboxes = $('#filters input');
  
  $container.imagesLoaded( function() {
	
	
		$container.isotope({
			itemSelector: '.item',
			masonry: {
						columnWidth: '.grid-sizer',
						gutter: '.gutter-sizer'
					},
					filter: '*', 
						animationOptions: { 
						duration: 750, 
						easing: 'linear', 
						queue: false
					}
		});

		$checkboxes.change(function(){
			var filters = [];
			// get unchecked checkboxes values
			$checkboxes.filter(':not(:checked)').each(function(){
				filters.push( this.value );
			});
			// ['.red', '.blue'] -> '.red, .blue'

			if(filters.length == 0){
			 filters = 'purplemonkeydishwasher'; 
			}
			else{
					filters = filters.join(', ');
			}
			$container.isotope({ filter: filters });
		});

		$( ".filter-button img" ).click(function() {
			$( this ).toggleClass( "filter-button-fade" );
		});

		$('#shuffle-button').on( 'click', function() {
		$container.isotope('shuffle');
		});
	});
});