<?php

echo '<pre>';
var_dump(is_int(123));
var_dump(is_int('123'));
var_dump(is_float('123'));
var_dump(is_bool(true));
var_dump(is_bool('true'));
var_dump(gettype(true));
var_dump(gettype(1.23));
var_dump(gettype(array()));
echo '</pre>';