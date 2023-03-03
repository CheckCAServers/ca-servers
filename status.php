<?php

// The IP and port of the server
$server = '43.135.220.34';
$port = 10001;

// Attempt to open a socket connection with a 5-second timeout
$connection = @fsockopen($server, $port, $errno, $errstr, 5);

// Check if the connection was successful
if (is_resource($connection)) {
    // The server is online
    echo "Combat Arms Brasil is ONLINE.";
    fclose($connection);
} else {
    // The server is offline
    echo "Combat Arms Brasil is OFFLINE.";
}

?>
