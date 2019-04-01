<?php
         require_once "server.php";
?>
<?php
     $req_2xx_total = $redis->get("http_2xx_req_total");

     $req_5xx_total = $redis->get("http_5xx_req_total");
     if (! $req_2xx_total) {
         $req_2xx_total = 0;
     }
     if (! $req_5xx_total) {
        $req_5xx_total = 0;
     }

     echo "http_2xx_req_total{} $req_2xx_total\n";
     echo "http_5xx_req_total{} $req_5xx_total\n";
?>
