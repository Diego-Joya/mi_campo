$("#close").click(function () {
  var close = document.createElement("div");
  close.className = "close";
  close.innerHTML =
    "<p>¿Estas seguro de cerrar session?</p><br> <div><button>Cancelar</button><button>Acceptar</button></div>";
  var body = ducument.querySelector(".cuerpo");
  body.append(close);
});
