<?php
    // A simple PHP script demonstrating how to connect to MySQL.
    // Press the 'Run' button on the top to start the web server,
    // then click the URL that is emitted to the Output tab of the console.

    //$servername = getenv('IP');
    $servername = dbInfo('server');
    $username = dbInfo('username');
    $password = dbInfo('password');
    $database = dbInfo('database');
    $dbport = dbInfo('port');

    // Create connection
    $db = new mysqli($servername, $username, $password, $database, $dbport);

    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    } 
    echo "Connected successfully (".$db->host_info.")";