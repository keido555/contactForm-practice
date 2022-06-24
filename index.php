<?php

const MAX = "test";
$array = [
    [1,2,3],
    [4,5,6]
];

echo MAX;
echo "<pre/>";
var_dump(($array));

echo "<pre/>";

echo $array[1][2];

echo "<pre/>";

$array_member = [
    "name" => "KEN",
    "height" => 170,
    "hobby" => "camp", 
];

echo $array_member["name"];

$array_member_2 = [
    "本田" => [
        "height" => 170,
        "hobby" => "baseball",
    ],
    "香川" => [
        "height" => 178,
        "hobby" => "baseball",
    ]
];

echo "<pre/>";
echo $array_member_2["香川"]["height"];

$array_member_3 = [
    "class_1" => [
        "本田" => [
            "height" => 170,
            "hobby" => "baseball",
        ],
        "香川" => [
            "height" => 178,
            "hobby" => "baseball",
        ]
    ],
    "class_2" => [
        "山本" => [
            "height" => 182,
            "hobby" => "baseball",
        ],
        "衣笠" => [
            "height" => 188,
            "hobby" => "baseball",
        ]
    ],
];

echo "<pre/>";
echo $array_member_3["class_2"]["山本"]["height"];

?>