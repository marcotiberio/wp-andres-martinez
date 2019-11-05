$(document).ready(function(){ 
    $("#publications").tablesorter({
        initialized: function(){
            $('#publications').animate({opacity: 'toggle'}, {duration: 400, start: function() {
                $(this).css('display', 'table');
            }
        });
        }
    });
    
    
} 
);

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