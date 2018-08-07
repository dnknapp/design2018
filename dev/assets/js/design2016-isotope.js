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

//THIS VERSION WORKS. JUST TRYING TO MAKE IT BETTER SO I CAN ADD ACTIVE CLASSES
/*
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
      
      $( "h6.filter-button" ).click(function() {
          //var itemElems = $container.isotope('getFilteredItemElements');
            //  $(itemElems).toggleClass('active');
			$( this ).toggleClass( "filter-inactive" ).toggleClass( "filter-active" ).removeClass( "amp-before" ),
            setTimeout(function (){
                $( ".filter-active:gt(0)" ).addClass( "amp-before" ),
                $( ".filter-active:lt(1)" ).removeClass( "amp-before" );  
            }, 100);
		});
      
      
      
      	$('#shuffle-button').on( 'click', function() {
		$container.isotope('shuffle');
		});
	});
});
*/ 

$(function(){
// init Isotope
    var $grid = $('.isotope').isotope({
        itemSelector: '.item',
        fitRows: {
            columnWidth: '.grid-sizer',
            gutter: '.gutter-sizer'
        },
        animationOptions: { 
            duration: 750, 
            easing: 'linear', 
            queue: false
        }
    });
    
    $grid.imagesLoaded().progress( function() {
        $grid.isotope({ layoutMode: 'fitRows' }),
            jQuery.fn.matchHeight._update();
    });
    
    
    // store filter for each group
    var filters = [];

    // change is-checked class on buttons
    $('.filters').on( 'click', 'h6.filter-button', function( event ) {
      var $target = $( event.currentTarget );
      $target.toggleClass('is-checked');
      var isChecked = $target.hasClass('is-checked');
      var filter = $target.attr('data-filter');
      if ( isChecked ) {
        addFilter( filter );
      } else {
        removeFilter( filter );
      }
      // filter isotope
      // group filters together, inclusive
      $grid.isotope({ filter: filters.join(',') });
        
        var allElems = $grid.isotope('getItemElements');
        var filteredElems = $grid.isotope('getFilteredItemElements');
        $(allElems).removeClass('active');     
        $(filteredElems).addClass('active');
    });

    function addFilter( filter ) {
      if ( filters.indexOf( filter ) == -1 ) {
        filters.push( filter );
      }
    }

    function removeFilter( filter ) {
      var index = filters.indexOf( filter);
      if ( index != -1 ) {
        filters.splice( index, 1 );
      }
    }

    
    
    $( "h6.filter-button" ).click(function() {
          //var itemElems = $container.isotope('getFilteredItemElements');
            //  $(itemElems).toggleClass('active');
			$( this ).toggleClass( "filter-inactive" ).toggleClass( "filter-active" ).removeClass( "amp-before" ),
            setTimeout(function (){
                $( ".filter-active:gt(0)" ).addClass( "amp-before" ),
                $( ".filter-active:lt(1)" ).removeClass( "amp-before" );  
            }, 100);
		});
    
});