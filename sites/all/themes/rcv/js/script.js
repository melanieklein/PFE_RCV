/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - http://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document, undefined) {


$(window).ready(function() {
        $('#club-histoire').turn({
                            display: 'double', //assigning display style
                            acceleration: true,
                            gradients: true,
                            elevation:50,
                            when: {
                                turned: function(e, page) {
                                    /*console.log('Current view: ', $(this).turn('view'));*/
                                }
                            }
                        });
    });
     
     
    $(window).bind('keydown', function(e){
         
        if (e.keyCode==37)
            $('#club-histoire').turn('previous');
        else if (e.keyCode==39)
            $('#club-histoire').turn('next');
             
    });

    $('#footer-top').on('click',function(e){
    	$('html,body').animate({scrollTop:0},"slow");
    });


})(jQuery, Drupal, this, this.document);
