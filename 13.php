<?php
/**
 * Created by PhpStorm.
 * User: Даша
 * Date: 01.11.2017
 * Time: 8:27
 */
$s = 600;
$t = 60;

$v_ms = $s/$t;
$line_v_ms = "V = {$v_ms} m/s. </br>";
echo $line_v_ms;

$v_kg = ($s*1000)/($t*3600);
$line_v_kg = "V = {$v_kg} km/h. </br>";
echo $line_v_kg;