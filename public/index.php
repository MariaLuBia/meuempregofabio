<?php
require("../vendor/autoload.php");//eh ESSENCIAL pra rodar o programa

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
formatextohhh("SENAo");

?>