<?php 
function getSortedInStockProducts($products) {
    $inStockProducts = array_filter($products, function($product) {
        return $product['inStock'] === true;
    });

    usort($inStockProducts, function($a, $b) {
        return $a['price'] - $b['price'];
    });

    return array_map(function($product) {
        return $product['name'];
    }, $inStockProducts);
}

$products = [
    [ "name" => "Laptop", "price" => 1200, "inStock" => true ],
    [ "name" => "Mouse", "price" => 25, "inStock" => false ],
    [ "name" => "Keyboard", "price" => 75, "inStock" => true ],
    [ "name" => "Monitor", "price" => 300, "inStock" => true ],
];

print_r(getSortedInStockProducts($products));



?>