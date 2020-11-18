$("#send").click(function () {
  var perfil = document.querySelector("#perfil").value;
  var datos = $("#login").serializeArray();
  var dat = [
    {
      name: "function",
      value: "validateEntry",
    },
    {
      name: "perfil",
      value: perfil,
    },
  ];
  datos = datos.concat(dat);
  validateFields(datos, function (callback) {
    $.ajax({
      url: "controller/login.php",
      type: "POST",
      data: datos,
      cache: false,
      success: function (res) {
        console.log(res);
        if (res == "true") {
          window.location.href = "./views/modules/productores.php";
          Swal.fire({
            icon: "success",
            title: "Bienvenido",
            showConfirmButton: false,
            timer: 1500,
          });
        } else {
          Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Error al ingresar clave o usuario invalida",
            showConfirmButton: false,
            footer: "",
            timer: 1500,
          });
        }
      },
    });
  });
});
