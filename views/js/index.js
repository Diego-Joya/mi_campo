$("#close").click(function () {
  var exist = document.querySelector(".pupup");
  var close = document.createElement("div");
  close.className = "pupup";
  close.innerHTML =
    "<div class='close'><p>¿Estas seguro de cerrar sessión?</p><br> <div class='buttons'><button  id='close_cancel'>Cancelar</button><button id='close_accept'>Aceptar</button></div></div>";
  var body = document.querySelector(".contendenor3");
  if (exist === null) {
    body.append(close);
  }
});
$(".contendenor3").delegate("#close_cancel", "click", function () {
  var d = document.querySelector(".pupup");
  d.remove();
});

$(".contendenor3").delegate("#close_accept", "click", function () {
  $.ajax({
    type: "POST",
    url: "controller/login.php",
    data: { function: "closeSession" },
    success: function (r) {
      window.location.href = "login";
    },
  });
});

function editUser(r) {
  var f = document.querySelector(".form_registro");
  var d = document.querySelector(".security_user");
  f.append(d);
}
