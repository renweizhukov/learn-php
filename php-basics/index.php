<?php

echo '<a href="https://www.google.com">Google</a><br>';

$users = [
  [
    'username' => 'alex',
    'email' => 'alex@codecourse.com',
  ],
  [
    'username' => 'billy',
    'email' => 'billy@codecourse.com',
  ],
];

echo '<pre>', var_dump($users), '</pre>';

echo $users[1]['email'];

foreach ($users as $user) {
  echo '<pre>', var_dump($user), '</pre>';
}

$name = "Wei";

echo "Hello $name<br>";

unset($name);

echo "Hello $name<br>";
var_dump(isset($name));
var_dump($name);

$daysOfWeek = [
  1 => 'Monday',
  2 => 'Tuesday',
  3 => 'Wednesday',
  4 => 'Thursday',
  5 => 'Friday',
  6 => 'Saturday',
  7 => 'Sunday',
];

$dayOfWeek = -1;

if (in_array($dayOfWeek, array_keys($daysOfWeek))) {
  echo $daysOfWeek[$dayOfWeek];
} else {
  echo 'Invalid day of week';
}
