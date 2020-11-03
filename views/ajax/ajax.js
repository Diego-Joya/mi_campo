$("#register").click(function () {
    var datos = $("#registro").serializeArray();
    var dat = {};
    dat.name = "function";
    dat.value = "controlRegister";
    datos.push(dat);
    console.log(dat);
    console.log(datos);
    $.ajax({
      url: "../../controller/register.php",
      type: "POST",
      data: datos,
      cache: false,
      success: function (res) {
        console.log(res);
      }
    });
    return;
  });
