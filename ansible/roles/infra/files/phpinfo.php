<?php
include('server.php');
phpinfo();
$redis->incr("http_2xx_req_total");
?>
