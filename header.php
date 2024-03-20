<?php

header('Application: Belajar PHP Web');
header('Author: Farel Mercys');

$client = $_SERVER['HTTP_CLIENT_NAME'];

echo "Hello $client";