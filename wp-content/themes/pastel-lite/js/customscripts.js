jQuery(document).ready(function(){
    jQuery(".search-icon").click(function(){
        jQuery("#searchpanel").fadeToggle(200);
        jQuery('body').toggleClass('search-opened');
        if (jQuery('body').hasClass('search-opened')) {
          jQuery('.search-icon').appendTo('#searchpanel');
        } else {
          jQuery('.search-icon').appendTo('#woomenu');
        };
        if (jQuery('body').hasClass('search-opened')) {
          var findInsiders = function(elem) {
    					var tabbable = elem.find('select, input, textarea, button, a');

    					var firstTabbable = tabbable.first();
    					var lastTabbable = tabbable.last();
    					/*set focus on first input*/
    					firstTabbable.focus();

    					/*redirect last tab to first input*/
    					lastTabbable.on('keydown', function (e) {
    						 if ((e.which === 9 && !e.shiftKey)) {
    								 e.preventDefault();
    								 firstTabbable.focus();
    						 }
    					});

    					/*redirect first shift+tab to last input*/
    					firstTabbable.on('keydown', function (e) {
    							if ((e.which === 9 && e.shiftKey)) {
    									e.preventDefault();
    									lastTabbable.focus();
    							}
    					});

    					/* allow escape key to close insiders div */
    					elem.on('keyup', function(e){
    						if (e.keyCode === 27 ) {
    							elem.hide();
    						};
    					});
    				};
    			findInsiders(jQuery('#searchpanel'));
        };
    });
});
