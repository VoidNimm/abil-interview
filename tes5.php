<?php 
function findOrderWithMostShoes($orders) {
    $maxShoes = 0;
    $orderWithMostShoes = [];
    
    foreach ($orders as $order) {
        foreach ($order['items'] as $item) {
            if ($item['name'] == 'Shoes') {
                $maxShoes = max($maxShoes, $item['qty']);
                if ($maxShoes == $item['qty']) {
                    $orderWithMostShoes = $order;
                }
            }
        }
    }
    return $orderWithMostShoes;
}

$orders = [
    [ "id" => 1, "items" => [ ["name" => "Shoes", "qty" => 1], ["name" => "Socks", "qty" => 2] ] ],
    [ "id" => 2, "items" => [ ["name" => "Shoes", "qty" => 3] ] ],
    [ "id" => 3, "items" => [ ["name" => "Hat", "qty" => 1] ] ],
];

print_r(findOrderWithMostShoes($orders));



?>