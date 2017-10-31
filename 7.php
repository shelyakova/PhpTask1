<?php
/**
 * Created by PhpStorm.
 * User: Даша
 * Date: 31.10.2017
 * Time: 20:42
 */
$age = 19;

if( $age >= 18 && 59 >= $age ) {
    echo 'You need to work hard!';
}
elseif( $age >= 50 ) {
    echo 'You too old to work!';
}
elseif( $age == 0 && $age <= 17 ) {
    echo 'You too young to work!';
		}