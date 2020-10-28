$("#register").click(function () {
    var datos = $('#registro').serialize();
    datos.function = "controlRegister";
    console.log(datos)
  $.ajax({
      url: '../../controller/register.php',
      type: 'POST',
      data: datos,
      success: function(res){
          alert(res);
      }    
  });
});
