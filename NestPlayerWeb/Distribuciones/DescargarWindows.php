<?php phpinfo();
?>

<?php
$ruta = "Distribuciones/Windows/NestPlayerWindows-Portable-x64.rar";
header("Content-disposition: attachment; filename=NestPlayerWindows-Portable-x64.rar");
header("Content-type: application/x-rar-compressed");
readfile($ruta);
?>