<?php

function dd($data, $print = false, $exit = true)
{
    echo '<pre>';
    ($print) ? print_r($data) : var_dump($data);
    echo '</pre>';

    if ($exit) {
        exit;
    }
}

function env($key)
{
    $envs = parse_ini_file('../.env');

    return $envs[$key] ?? null;
}