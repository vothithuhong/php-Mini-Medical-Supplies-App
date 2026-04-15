<?php


function getStockStatus(int $quantity): string
{
    if ($quantity <= 0) {
        return 'Out of stock';
    } elseif ($quantity <= 2) {
        return 'Low stock';
    }


    return 'Available';
}


function formatnameTitle(string $name): string
{
    return strtoupper($name);
}


function getTotalQuantity(array $names): int
{
    return array_reduce($names, function ($carry, $name) {
        return $carry + $name['quantity'];
    }, 0);
}


function getAvailablenames(array $names): array
{
    return array_values(array_filter($names, function ($name) {
        return $name['quantity'] > 0;
    }));
}
