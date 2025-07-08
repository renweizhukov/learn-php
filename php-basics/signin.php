<?php

echo $_POST['username'], '<br>';
echo $_POST['password'], '<br>';

$balance = 10;
$available_balance = $balance ?: 0;

echo "You available balance is {$available_balance}." . '<br>';

phpinfo();
