<?php 
    $height = 90;

    // == 一致
    // === 型も一致
    // !== 一致しない
    if ($height >= 91) {
        echo "身長は" . $height . "cmです";
    } 
    if ($height <= 90) {
        echo "身長は" . $height . "cmです";
    }

    echo "<pre/>";

    $signal = "red";
    if ($signal == "red") {
        echo "止まれ";
    } else if ($signal == "yellow") {
        echo "一時停止";
    } else {
        echo "進め";
    }

    echo "<pre/>";
    // データが入っているかどうか
    // isset empty is_null
    $test = "1";
if (!empty($test)) {
    echo "変数は空です";
}
if (empty($test)) {
    echo "変数は空ではない";
}

    echo "<pre/>";
    $members = [
        "name" => "KEN",
        "height" => "171",
        "hobby" => "baseball",
    ];
    $members_2 = [
        "KEN" => [
            "height" => "171",
            "hobby" => "baseball",
        ],
        "YOU" => [
            "height" => "175",
            "hobby" => "baseball",
        ],
    ];

    // バリューのみ
    foreach($members as $member) {
        echo $member;
    }

    echo "<pre/>";
    // キーとバリュー
    foreach($members as $key => $value) {
        echo $key . "は" . $value . "です";
    }

    echo "<pre/>";
    // キーとバリュー
    foreach($members_2 as $member_1) {
        foreach($member_1 as $member => $value) {
            echo $member . "は" . $value . "です";
        }
    }
?>