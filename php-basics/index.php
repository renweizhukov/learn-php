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
