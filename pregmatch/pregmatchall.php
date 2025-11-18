<?php
$str = "abc ABC";
$pattern = "/((a)b)(c)/i";
if(preg_match_all($pattern, $str, $matches, PREG_PATTERN_ORDER)) {
  print_r($matches);
}
?>