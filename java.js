$(function(){
  $("select[name=reason]").change(function(){
      if($(this).val() == 'Andere')
          $('#txtarea').show();
      else
          $('#txtarea').hide();
  });
});
