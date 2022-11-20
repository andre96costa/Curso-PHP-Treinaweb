<?php

echo "<pre>";
var_dump(isset($valor));
echo "</pre>";

$valor;
echo "<pre>";
var_dump(isset($valor));
echo "</pre>";

$valor = null;
echo "<pre>";
var_dump(isset($valor));
echo "</pre>";

$valor = [];
echo "<pre>";
var_dump(isset($valor));
echo "</pre>";