<?php 
function createUserMap($users) {
    $userMap = [];
    foreach ($users as $user) {
        $userMap[$user['id']] = $user['name'];
    }
    return $userMap;
}

$users = [
    [ "id" => 101, "name" => "Alice" ],
    [ "id" => 102, "name" => "Bob" ],
    [ "id" => 103, "name" => "Charlie" ],
];

print_r(createUserMap($users));



?>