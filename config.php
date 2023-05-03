<?php
    $conn = mysqli_init();
    $conn->ssl_set(NULL, NULL, "/etc/ssl/certs/ca-certificates.crt", NULL, NULL);
    $conn->real_connect($_ENV["HOST"], $_ENV["USERNAME"], $_ENV["PASSWORD"], $_ENV["DATABASE"]);
    //$conn->close();
?>
