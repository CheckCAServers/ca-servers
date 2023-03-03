<?php
$server = '43.157.135.234';
$port = 10001;

$connection = @fsockopen($server, $port, $errno, $errstr, 5);

if (is_resource($connection)) {
    // The server is online
    echo "Combat Arms Brasil ► ONLINE";
    fclose($connection);
} else {
    // The server is offline
    echo "Combat Arms Brasil ► OFFLINE";
}
?>
