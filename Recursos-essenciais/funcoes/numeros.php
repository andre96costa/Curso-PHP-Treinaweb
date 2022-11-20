<?php

echo "<pre>";
var_dump(abs(-6), abs(6));
echo "</pre>";

echo "<pre>";
var_dump(round(7.5), round(7.4), round(18.34567, 2));
echo "</pre>";

echo "<pre>";
var_dump(ceil(7.4), floor(7.8));
echo "</pre>";

echo "<pre>";
var_dump(mt_rand(1,10));
echo "</pre>";

echo "<pre>";
var_dump(pow(2,2), sqrt(10));
echo "</pre>";