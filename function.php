<?php

// インプット引数　なし
// アウトプット戻り値　なし
function test() {
    echo "テスト";
}

test();

$comment = "コメント2";
$comment2 = "コメント3";

// インプット引数　なし
// アウトプット戻り値　あり
function getComment($string) {
    echo $string;
}

getComment($comment2);

// インプット引数　なし
// アウトプット戻り値　あり
function getNumberOfComment() {
    return 5;
}

$commentNumber = getNumberOfComment();
echo $commentNumber;

// インプット引数　2つ
// アウトプット戻り値　あり
function sumPrice($int1, $int2) {
    $int3 = $int1 + $int2;
    return $int3;
}

$total = sumPrice(3,5);
echo($total);

echo("<br/>");
// ****************
$text = "あいうえお";
echo mb_strlen($text);

// 文字列の置換
$str = "文字列を痴漢します";
echo str_replace("痴漢", "置換", $str);

echo("<br/>");

$postalCode = "123-4567";

// camelCase
// checkpostalCode();
function checkPostalCode($str) {
    $replaced = str_replace("-", "", $str);
    $length = strlen($replaced);

    if ($length === 7) {
        return true;
    }
    return false;
}

var_dump(checkPostalCode(($postalCode)));

// snakeCase
// check_postal_Code();

?>