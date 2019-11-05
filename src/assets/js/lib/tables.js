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
$("#name").on("click", function() {                 //NEW ARROWDOWN-UP
    $("#name .arrowdown").toggleClass("hide"),      //NEW ARROWDOWN-UP
    $("#name .arrowup").toggleClass("hide"),        //NEW ARROWDOWN-UP
    $("#date .arrowdown").toggleClass("hide"),      //NEW ARROWDOWN-UP
    $("#date .arrowup").toggleClass("hide"),        //NEW ARROWDOWN-UP

    $(".description").removeClass("activated")      //NEW ARROWDOWN-UP
}),
$('#wdate').on('click',function(){
    $('#wdate .arrowdown').toggleClass('hide');
    $('#wdate .arrowup').toggleClass('hide');
});
$("#wname").on("click", function() {                 //NEW ARROWDOWN-UP
    $("#wname .arrowdown").toggleClass("hide"),      //NEW ARROWDOWN-UP
    $("#wname .arrowup").toggleClass("hide"),        //NEW ARROWDOWN-UP
    // $("#wdate .arrowdown").toggleClass("hide"),      //NEW ARROWDOWN-UP
    // $("#wdate .arrowup").toggleClass("hide"),        //NEW ARROWDOWN-UP

    $(".description").removeClass("activated")       //NEW ARROWDOWN-UP
}),
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
    $("." + filter).addClass('filter');
    $(".tablesorter").addClass('filtered');
});

$("#clear").click(function(){
    $("table.filtered").removeClass("filtered");
    $(".filter").removeClass("filter");
});