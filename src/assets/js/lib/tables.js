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

$("#namedisc span").click(function() {
      $(this).parent().children(".description").toggleClass("hide");
    });