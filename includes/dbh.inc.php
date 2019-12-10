<?php
$servername = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'twc_database';

// connecting met de server
$dbc = mysqli_connect($servername, $dbusername, $dbpassword, $dbname) or die("Connection failed: " . mysqli_connect_error());
