$('#date').on('click',function(){
    $('#date .arrowdown').toggleClass('hide');
    $('#date .arrowup').toggleClass('hide');
});
$('#type').on('click',function(){
    $('#type .arrowdown').toggleClass('hide');
    $('#type .arrowup').toggleClass('hide');
    $('#date .arrowdown').removeClass('hide');
    $('#date .arrowup').addClass('hide')
});
$('#wdate').on('click',function(){
    $('#wdate .arrowdown').toggleClass('hide');
    $('#wdate .arrowup').toggleClass('hide');
});
$('#wtype').on('click',function(){
    $('#wtype .arrowdown').toggleClass('hide');
    $('#wtype .arrowup').toggleClass('hide');
    $('#wdate .arrowdown').removeClass('hide');
    $('#wdate .arrowup').addClass('hide')
});
$("#namedisc span").click(function() {
      $(this).parent().children(".description").toggleClass("hide");
    });