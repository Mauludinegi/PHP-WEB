<?php
header('Application: Belajar PHP Web');
header('Version: 1.0.2');
$client = $_SERVER['HTTP_CLIENT_NAME'];
echo "Hello $client";