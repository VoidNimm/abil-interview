<?php 

function groupByCategory($transactions) {
    $result = [];
    foreach ($transactions as $transaction) {
        if (isset($result[$transaction['category']])) {
            $result[$transaction['category']] += $transaction['amount'];
        } else {
            $result[$transaction['category']] = $transaction['amount'];
        }
    }
    return $result;
}

$transactions = [
    [ "category" => "food", "amount" => 25 ],
    [ "category" => "transport", "amount" => 10 ],
    [ "category" => "food", "amount" => 40 ],
    [ "category" => "entertainment", "amount" => 100 ],
];

print_r(groupByCategory($transactions));


?>