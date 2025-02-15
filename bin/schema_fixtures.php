<?php
require_once __DIR__ . "/../bootstrap.php";

use App\Models\User;
use Core\App;

$users = [[
    'id' => 1,
    'name' => 'Super Admin',
    "email"=> "super@admin.co",
    "password"=> password_hash("@Pass123", PASSWORD_DEFAULT),
    "seo_name"=> "super-admin",
]
];
$db = App::get("database");

$db->query("DELETE FROM userAccount");
foreach ($users as $user) {
    User::create($user);
}



echo "Fixtures loaded successfully.\n";