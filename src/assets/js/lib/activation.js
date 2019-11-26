// LOADER

jQuery(document).ready(function() {
    /* Show the HTML page only after the js and css are completely loaded */
    delayShow();
  });

$(document).ready(function(){ 
    $("#publications").tablesorter({
        initialized: function(){
            $('#publications').animate({opacity: 'toggle'}, {duration: 500, start: function() {
                $(this).css('display', 'table');
            }
        });
        }
    });   
});

$(document).ready(function(){
    $("#work").tablesorter({
        sortList : [0,1],
        initialized: function(){
            $('#work').animate({opacity: 'toggle'}, {duration: 500, start: function() {
                $(this).css('display', 'table');
            }
        });
        }
    });
});

$(document).ready(function(){
    setTimeout(function() {$('body').fadeIn(250); }, 500);
});