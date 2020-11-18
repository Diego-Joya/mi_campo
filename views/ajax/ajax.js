$("#register").click(function () {
  var perfil = document.querySelector("#perfil").value;
  var tipo = document.querySelector("#tipo").value;
  var genero = document.querySelector("#genero").value;
  var datos = $("#registro").serializeArray();
  var dat = [
    {
      name: "function",
      value: "controlRegister",
    },
    {
      name: "perfil",
      value: perfil,
    },
    {
      name: "tipo",
      value: tipo,
    },
    {
      name: "genero",
      value: genero,
    },
  ];
  datos = datos.concat(dat);
  validateFields(datos, function (callback) {
    $.ajax({
      url: "controller/register.php",
      type: "POST",
      data: datos,
      cache: false,
      success: function (res) {
        console.log(res);
        if (res == "true") {
          Swal.fire({
            icon: "success",
            title: "Datos guardados correctamente",
            showConfirmButton: false,
            timer: 1500,
          });
          cleanFields(datos);
        } else {
          Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Error al guardar",
            showConfirmButton: false,
            footer: "",
            timer: 1500,
          });
        }
      },
    });
  });
});

// Carga los perfiles
$("#perfil").ready(function (e) {
  var datos = [
    {
      name: "function",
      value: "loadProfiles",
    },
  ];
  $.ajax({
    url: "controller/register.php",
    type: "POST",
    data: datos,
    cache: false,
    success: function (res) {
      if (res) {
        var select = document.querySelector("#perfil");
        var profiles = JSON.parse(res);
        profiles.forEach(function (p) {
          var option = document.createElement("option");
          option.text = p.nombre;
          option.value = p.id;
          select.add(option);
        });
      }
    },
  });
});

//valida la existencia de un usuario

$("#usuario").focusout(function (e) {
  var user = document.querySelector("#usuario").value;
  var dat = [
    {
      name: "function",
      value: "validateUsers",
    },
    {
      name: "usuario",
      value: user,
    },
  ];
  $.ajax({
    url: "controller/register.php",
    type: "POST",
    data: dat,
    cache: false,
    success: function (res) {
      if (res != "false") {
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "Ya existe ese usuario registrado",
          showConfirmButton: false,
          footer: "Sugerimos utilizar como usuario un correo electronico",
          timer: 1500,
        });
      }
    },
  });
});

//valida campos requeridos

function validateFields(fields, callback) {
  var count = 0;
  fields.forEach(function (f) {
    if (f.value.length == 0 && f.value != "function") {
      count++;
      var msg = document.createElement("div");
      msg.className = "msg";
      msg.innerHTML = "Por favor completar todos los campos";
      $("#" + f.name).css("cssText", "border-color: red;");
      // $("#" + f.name).closest(".icon-input").after(msg);
    } else {
      var express = /^[a-zA-Z0-9]*$/;
      var field = document.querySelector("." + f.name);
      if (!express.test(f.value) && f.name != "email") {
        count++;
        if (field === null) {
          var msg = document.createElement("div");
          msg.className = "msg " + f.name;
          msg.innerHTML = "No se permiten caracteres especiales<br><br>";
          $("#" + f.name)
            .closest(".icon-input")
            .after(msg);
        }
      } else if (f.name != "function") {
        if (field !== null) {
          document.querySelector("." + f.name).remove();
        }
      }
    }
  });

  if (count > 0) {
    return;
  } else {
    callback(true);
  }
}

$("#repeat_password").focusout(function (r) {
  var pass = document.querySelector("#password").value;
  var rep_pass = document.querySelector("#repeat_password").value;
  if (pass != rep_pass) {
    var msg = document.createElement("div");
    msg.className = "msg";
    msg.innerHTML = "Las contraseñas no son iguales";
    $("#repeat_password").closest(".icon-input").after(msg);
    document.querySelector("#password").value = "";
    document.querySelector("#repeat_password").value = "";
    // $("#repeat_password").after(msg);
  }
});
$("#password").focus(function (e) {
  $(".msg").remove();
});

function cleanFields(fields) {
  fields.forEach(function (f) {
    if (f.name != "function") {
      document.querySelector("#" + f.name).value = "";
    }
  });
}
