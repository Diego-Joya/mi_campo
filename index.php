<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<script src = "https://unpkg.com/sweetalert/dist/sweetalert.min.js " > </script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<?php
require_once "controller/control.php";
require_once "models/model.php";

$mvc = new controller();
$mvc->plantilla();

?>