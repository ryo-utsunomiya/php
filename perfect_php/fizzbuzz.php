<?php
//print_r(array_map(function($n){return ($n % 15 === 0)?'fizzbuzz':(($n%5===0)?'buzz':(($n%3===0)?'fizz':$n));},range(1,100)));

//print_r(array_map(function($n){return($n%15===0)?'fizzbuzz':(($n%5===0)?'buzz':(($n%3===0)?'fizz':$n));},range(1,100)));

//array_map(function($n){echo$n%15===0?'fizzbuzz':($n%5===0?'buzz':($n%3===0?'fizz':$n));},range(1,100));

for ($i = 1; $i <= 100; $i++) {
    echo $i % 15 ? $i % 5 ? $i %3 ? $i : 'fizz' : 'buzz' : 'fizzbuzz';
}