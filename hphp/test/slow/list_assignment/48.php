<?php

function foo($a) {
  list($x, $y) = 'x'.$a;
  return $x + $y;
}

<<__EntryPoint>> function main() {}
