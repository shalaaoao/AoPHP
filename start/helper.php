<?php
/**
 * Created by PhpStorm.
 * User: Chen Jiaao
 * Date: 2019-03-29
 * Time: 14:11
 */

function dd($param = '')
{
    print_r($param);
    die;
}

function env($key, $default = null)
{
    $value = getenv($key);

    if ($value === false) {
        return value($default);
    }

    switch (strtolower($value)) {
        case 'true':
        case '(true)':
            return true;
        case 'false':
        case '(false)':
            return false;
        case 'empty':
        case '(empty)':
            return '';
        case 'null':
        case '(null)':
            return;
    }

    if (($valueLength = strlen($value)) > 1 && $value[0] === '"' && $value[$valueLength - 1] === '"') {
        return substr($value, 1, -1);
    }

    return $value;
}

function value($value)
{
    return $value instanceof Closure ? $value() : $value;
}
