<?php

$data_type_scalar=[
    "Magang TOP",
    168,
    true,
    false,
];

foreach($data_type_scalar as $key)
{
    if(is_scalar($key))
    {
        echo gettype($key). "scalar Type".PHP_EOL;
    }
}

echo isset($data_type_scalar)? "Ditemukan" : "Tidak Ditemukan";

echo PHP_EOL;

$data=[
    "",
    null,
    0,
    false,
    true
];
foreach($data as $key)
{
    if(empty($key) && is_array($key))
    {
        echo gettype($key). "data anda kososng".PHP_EOL;
    }

}

//constan

define("VERSION","v-1.0");

const AUTHOR="venom";

$nama="Hello";

$nama="World";

echo VERSION;

// echo PHP_OS;

echo AUTHOR;

// var_dump(defined("AUTHOR"));

defined("AUTHOR") or exit ("Not Found");