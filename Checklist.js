$('.cb').click(function() {
  $('ul').html("");
  $(".cb").each(function(){
    if($(this).is(":checked")){
      $('ul').append('<li><input type="checkbox">'+$(this).val()+'</li>')
    }
  });
  });