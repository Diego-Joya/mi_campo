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
  $.ajax({
    url: "controller/register.php",
    type: "POST",
    data: datos,
    cache: false,
    success: function (res) {
      console.log(res)
      if (res == "true") {
        Swal.fire({
          position: "top-end",
          icon: "success",
          title: "Datos guardados correctamente",
          showConfirmButton: false,
          timer: 1500,
        });
      }else{
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Error al guardar',
          showConfirmButton: false,
          footer: '',
          timer: 1500,
        })
      }
    },
  });
});
