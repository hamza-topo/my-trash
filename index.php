<?php
require('User.php');
require('UserFilter.php');

$users = [
    [
        'name' => 'hamza',
        'email' => 'hamza@gmail.com',
        'age' => 28,
    ],
    [
        'name' => 'soufiane',
        'email' => 'soufiane@gmail.com',
        'age' => 26,
    ],
    [
        'name' => 'adib',
        'email' => 'adib@gmail.com',
        'age' => 29,
    ],
];
// Example usage:
$collection = new User($users);
$names = $collection->map(function ($el) {
    return $el['name'];
});
$filterAges26 = $collection->filter(function ($el) {
    return $el['age'] == 26;
});

$userFilter29 = new UserFilter();
$filterAges29 = $collection->filter($userFilter29)
    ->map(function ($res) {
        return $res['name'];
    });

print_r($filterAges26);
echo '<br>';
print_r($filterAges29);
