<?php

function translit($str)
{
    $myArray = [
        'а' => 'a',
        'б' => 'b',
        'в' => 'v',
        'г' => 'g',
        'д' => 'd',
        'е' => 'e',
        'ё' => 'e',
        'ж' => 'zh',
        'з' => 'z',
        'и' => 'i',
        'й' => 'y',
        'к' => 'k',
        'л' => 'l',
        'м' => 'm',
        'н' => 'n',
        'о' => 'o',
        'п' => 'p',
        'р' => 'r',
        'с' => 's',
        'т' => 't',
        'у' => 'u',
        'ф' => 'f',
        'х' => 'kh',
        'ц' => 'ts',
        'ч' => 'ch',
        'ш' => 'sh',
        'щ' => 'shch',
        'ы' => 'y',
        'э' => 'e',
        'ю' => 'yu',
        'я' => 'ya',

    ];
    $word = strtr($str, $myArray);
    echo "$word ";
}

;

// translit('всем привет').PHP_EOL;

function removeword($str1)
{
    $arr1 = array (' ');
    $arr2 =array ('_');
    return str_replace($arr1, $arr2, $str1);

};
// removeword('всем привет, как дела');
 echo translit('всем приветик');