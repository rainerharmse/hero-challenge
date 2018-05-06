<?php

$inventory = array(

array("type"=>"pork", "price"=>5.43),
array("type"=>"fruit", "price"=>3.50),
array("type"=>"milk", "price"=>2.90),

);

$standings = array(

    "Mike" => array(
        "index" => 0,
        "games_played" => 2,
        "score" => 5
    ),
    "Chris" => array(
        "index" => 1,
        "games_played" => 1,
        "score" => 5
    ),
    "Arnold" => array(
        "index" => 2,
        "games_played" => 1,
        "score" => 5
    )
);

array_multisort(array_column($standings, 'games_played'), SORT_ASC,
                array_column($standings, 'index'),      SORT_ASC,
                $standings);
var_dump($standings);

// $array[0] = array('key_a' => 'z', 'key_b' => 'c');
// $array[1] = array('key_a' => 'x', 'key_b' => 'b');
// $array[2] = array('key_a' => 'y', 'key_b' => 'a');

// function build_sorter($key) {
//     return function ($a, $b) use ($key) {
//         return strnatcmp($a[$key], $b[$key]);
//     };
// }

// usort($standings, build_sorter('games_played'));

// foreach ($standings as $item) {
//     echo 'Index: '. $item['index'] . ', ' . "Games played " . $item['games_played'] . "\n";
// }


?>