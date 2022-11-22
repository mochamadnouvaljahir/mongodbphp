<?php
    
    $manager = new MongoDB\Driver\Manager("mongodb+srv://NouvalJahir:opalkancra12@nouvaljahir0.a0s4pdo.mongodb.net/?retryWrites=true&w=majority");

    // Query Class
    $query = new MongoDB\Driver\Query(array("restaurant_id" => "40356018"));

    // Pilih DB Dan Collection
    $cursor = $manager->executeQuery('sample_restaurants.restaurants',$query);

    // Convert cursor to array and print result
    echo "<pre>";
    print_r($cursor->toArray());
    echo "</pre>"
?>