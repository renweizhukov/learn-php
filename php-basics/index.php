<?php

$users = [
  [
    'username' => 'alex',
    'likes' => ['pizza', 'pasta', 'ice cream'],
  ],
  [
    'username' => 'billy',
    'likes' => ['code', 'cats', 'ice cream'],
  ],
  [
    'username' => 'alex',
    'likes' => ['dogs', 'code', 'ice cream'],
  ],
];

$to_find = 'code';
$found = null;
foreach ($users as $user) {
  foreach ($user['likes'] as $like) {
    if ($like === $to_find) {
      $found = $user;
      break 2;
    }
  }
}

var_dump($found);
echo '<br>';

$names = ['Alex', 'Billy', 'Cindy', 'David', 'Eric'];
foreach($names as $index => $name) {
  echo "{$index}: {$name}<br>";
}

$number_i_want = 5;
while (($dice = rand(1, 6)) !== $number_i_want) {
  echo "You rolled a {$dice}, we need a {$number_i_want}.<br>";
}

echo "You rolled a {$dice}!<br>";

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
  echo $daysOfWeek[$dayOfWeek] . '<br>';
} else {
  echo 'Invalid day of week' . '<br>';
}

$int_str = '123s';
echo (int)$int_str . '<br>';

$non_int_str = 's123';
echo (int)$non_int_str . '<br>';

$weather = 'snowy';
$color = null;

switch (true) {
  case $weather === 'sunny':
    $color = 'blue';
    break;
  case $weather === 'rainy':
    $color = 'green';
    break;
  case $weather === 'snowy':
    $color = 'white';
    break;
  default:
    $color = 'black';
}

echo $weather . ' is ' . $color . '<br>';

$total_lessons = 30;
$completed_lessons = 7;

$percentage_completed = number_format($completed_lessons / $total_lessons * 100, 2);
echo "You've completed {$percentage_completed}% of the lessons.<br>";

$rows = 10;
for ($row = 0; $row < $rows; ++$row) {
  if ($row % 2 === 0) {
    echo 'Even<br>';
  } else {
    echo 'Odd<br>';
  }
}

$total_items = 520;
$items_per_page = 20;

$page_count = ceil($total_items / $items_per_page);
if ($page_count > 1) {
  for ($i = 1; $i <= $page_count; ++$i) {
    echo "<a href='?page={$i}'>{$i}</a> ";
  }
}
