$("#register").click(function () {
  var perfil = document.querySelector("#perfil").value;
  var tipo = document.querySelector("#tipo").value;
  var genero = document.querySelector("#genero").value;
  var datos = $("#registro").serializeArray();
  var dat = {};
  dat.name = "function";
  dat.value = "controlRegister";
  datos.push(dat);
  var dat = {};
  dat.name = "perfil";
  dat.value = perfil;
  datos.push(dat);
  var dat = {};
  dat.name = "tipo";
  dat.value = tipo;
  datos.push(dat);
  var dat = {};
  dat.name = "genero";
  dat.value = genero;
  datos.push(dat);
  console.log(datos);
  $.ajax({
    url: "controller/register.php",
    type: "POST",
    data: datos,
    cache: false,
    success: function (res) {
      console.log(res);
    },
  });
});
