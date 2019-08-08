<?php


function translit($str)
{
   $arr1 = array (' ');
   $arr2 =array ('_');
    return str_replace($arr1, $arr2, $str);

}

echo translit("Всем привет!  как дела? что нового");

