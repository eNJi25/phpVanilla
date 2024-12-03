<?php

function getListings(): array
{
    return [
        ["title" => "Rocket Leage PS4", "price" => 30, "image" => "rocket-league.jpg", "description" => "Test description"],
        ["title" => "Test 2", "price" => 20, "image" => "rocket-league.jpg", "description" => "Test description"],
        ["title" => "Test 3", "price" => 25, "image" => "rocket-league.jpg", "description" => "Test description"]
    ];
}

function getListingById(int $id): array
{
    $listings = getListings();
    return $listings[$id];
}
