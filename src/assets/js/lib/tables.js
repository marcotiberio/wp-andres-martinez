$('#date').on('click',function(){
    $('#date .arrowdown').toggleClass('hide');
    $('#date .arrowup').toggleClass('hide');
});

$('#type').on('click',function(){
    $('#type .arrowdown').toggleClass('hide');
    $('#type .arrowup').toggleClass('hide');
    $('#date .arrowdown').removeClass('hide');
    $('#date .arrowup').addClass('hide');
});

$("#name").on("click", function() {                  //NEW ARROWDOWN-UP
    $("#name .arrowdown").toggleClass("hide"),       //NEW ARROWDOWN-UP
    $("#name .arrowup").toggleClass("hide"),         //NEW ARROWDOWN-UP

    $(".description").removeClass("activated")       //NEW ARROWDOWN-UP
});

$('#wdate').on('click',function(){
    $('#wdate .arrowdown').toggleClass('hide');
    $('#wdate .arrowup').toggleClass('hide');
});

$("#wname").on("click", function() {                 //NEW ARROWDOWN-UP
    $("#wname .arrowdown").toggleClass("hide"),      //NEW ARROWDOWN-UP
    $("#wname .arrowup").toggleClass("hide"),        //NEW ARROWDOWN-UP
    $("#wdate .arrowdown").removeClass("hide"),      //NEW ARROWDOWN-UP
    $("#wdate .arrowup").addClass("hide"),           //NEW ARROWDOWN-UP

    $(".description").removeClass("activated")       //NEW ARROWDOWN-UP
});

$('#wtype').on('click',function(){
    $('#wtype .arrowdown').toggleClass('hide');
    $('#wtype .arrowup').toggleClass('hide');
    $('#wdate .arrowdown').toggleClass('hide');
    $('#wdate .arrowup').toggleClass('hide');
});

$("#namedisc span").click(function() {
      $(this).parent().children(".description").toggleClass("activated");
    });


$(".type").click( function() {
    var filter = $(this)[0].textContent.toLowerCase().replace(' ', '_');
    $("." + filter).toggleClass('filter');
    $(".tablesorter").toggleClass('filtered');
    $(".sorter-false").toggleClass('hideth');            //SHOW-HIDE TH

    window.location.hash = filter;
});

$(".clear").click(function(){
    $("table.filtered").removeClass("filtered");
    $(".filter").removeClass("filter");
    $(".sorter-false").removeClass('hideth');          //SHOW-HIDE TH

    history.replaceState(null, null, ' ');
    
});


if(window.location.hash) {

    var filter = window.location.hash.substr(1);
    $("." + filter).toggleClass('filter');
    $(".tablesorter").toggleClass('filtered');
    $(".sorter-false").toggleClass('hideth');           

    window.location.hash = filter;

}