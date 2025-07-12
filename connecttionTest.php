<?php

if (!function_exists('oci_connect')) {
    echo "OCI8 extension is not enabled or installed in your PHP!! :( ";
    exit;
}

$conn = oci_connect('lafms', 'rkpr', 'localhost/XE');

if (!$conn) {
    $error = oci_error();
    echo "Connection failed: ". $error['message'];
    exit;
}

echo "Connected to Oracle! :) ";
oci_close($conn);
?>
