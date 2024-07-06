<?php

function maxProfit($prices) 
{
    if (count($prices) < 2) {
        return 0; // Not enough prices to make a profit
    }

    $buy = $prices[0];
    $max_profit = 0;

    foreach ($prices as $price) {
        if ($price < $buy) {
            $buy = $price;
        } else {
            $profit = $price - $buy;
            if ($profit > $max_profit) {
                $max_profit = $profit;
            }
        }
    }

    return $max_profit;
}

maxProfit([7,1,5,3,6,4]);