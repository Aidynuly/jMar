<?php

$products = [
    [
        "name" => "X-Box One",
        "price" => 450000.00,
        "amount" => 15
    ],
    [
        "name" => "IPhone X",
        "price" => 560000.00,
        "amount" => 6
    ],
];

function my_function($products)
{
    $arr = [];
    foreach ($products as $product) {
        $price = $product['price'];
        $amount = $product['amount'];
        $total = $price * $amount; // idk total correct or not
        $percentage = ($price * 2) / 100;
        $product['shipping_cost'] = $percentage;
        $arr[] = [
            'name'  =>  $product['name'],
            'price' =>  $product['price'],
            'amount'    =>  $product['amount'],
            'shipping_cost'      =>  $percentage,
        ];
    }
    return $arr;
}
print_r(my_function($products));

