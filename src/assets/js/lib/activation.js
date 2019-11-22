$(document).ready(function(){ 
    $("#publications").tablesorter({
        initialized: function(){
            $('#publications').animate({opacity: 'toggle'}, {duration: 400, start: function() {
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
            $('#work').animate({opacity: 'toggle'}, {duration: 400, start: function() {
                $(this).css('display', 'table');
            }
        });
        }
    });
});

// LOADER

jQuery(document).ready(function() {
    /* Show the HTML page only after the js and css are completely loaded */
    delayShow();
  });
  
  function delayShow() {
    var secs = 1000;
    setTimeout('jQuery("body").css("visibility","visible");', secs);
  }