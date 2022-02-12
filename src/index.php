<?php
require '../vendor/autoload.php';

if(str_starts_with('foobar','foo')) {
    echo 'foobar starts with foo';
}

if(str_contains('foobar','foo')) {
    echo 'foobar contains foo';
}