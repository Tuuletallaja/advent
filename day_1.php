<?php

echo "hello\n";

$input = file_get_contents("input.txt");

//part 1

$up = substr_count($input, '(');
$down = substr_count($input, ')');

echo $up . "\n";
echo $down . "\n";

echo ($up - $down);

//part 2