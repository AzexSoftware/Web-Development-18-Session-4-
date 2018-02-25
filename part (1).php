<?php
    // function print_array($arr){
    //     foreach($arr as $val){
    //         echo $val . "<br />";
    //     }
    // }
    $users = array('a', 'ksdfjjlk', 'c', 'd');
    // print_array($users);

    echo "<pre>";
    print_r($users);
    echo "</pre>";

    var_dump($users);

    $person = array(
        'name'  => "koko",
        'age'   => 22,
        'phone' => '12123123234'
    )

    foreach($person as $key => $val){
        echo "person information: " . $key . " => " . $val . "<br>";
    }
