<?php
function BinSearch($arr,$x,$skip=0){
  if(count($arr) == 0) return [];
  $i = count($arr) >> 1;
  if($arr[$i] == $x){
    $ret = [];
    //var_dump($skip,$arr,$i);
    while($arr[$i] == $x && --$i >= 0);
    while(++$i<count($arr) && $arr[$i] == $x) array_push($ret,$i+$skip);
    return $ret;
  }
  
  return $arr[$i] > $x  ? BinSearch(array_slice($arr, 0, $i), $x,$skip) : BinSearch(array_slice($arr, ++$i), $x, $skip+$i);
}
$ololo = [1,2,3,4,4,4,5,6,7,8,9,9,9,9,10];
var_dump(BinSearch($ololo, 9));