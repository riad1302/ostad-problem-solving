<?php

function twoSum($nums, $target) {
    $numMap = [];
    for ($i = 0; $i < count($nums); $i++) {
        $complement = $target - $nums[$i];
        if (array_key_exists($complement, $numMap)) {
            return [$numMap[$complement], $i];
        } else {
            $numMap[$nums[$i]] = $i;
        }
    }
    return [];
}

$nums1 = [2, 7, 11, 15];
$target1 = 9;
$result1 = twoSum($nums1, $target1);

if (!empty($result1)) {
    echo "Indices for first set: " . $result1[0] . ", " . $result1[1] . "\n";
} else {
    echo "No two sum solution found for first set\n";
}

if (!empty($result2)) {
    echo "Indices for second set: " . $result2[0] . ", " . $result2[1] . "\n";
} else {
    echo "No two sum solution found for second set\n";
}

