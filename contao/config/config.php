<?php

function sfdump(...$vars)
{
    foreach ($vars as $var) {
        \Symfony\Component\VarDumper\VarDumper::dump($var);
    }
}

// dump and die
function dd(...$vars)
{
    foreach ($vars as $var) {
        \Symfony\Component\VarDumper\VarDumper::dump($var);
    }

    die();
}
