<?php

function sfdump(...$vars)
{
    foreach ($vars as $var) {
        \Symfony\Component\VarDumper\VarDumper::dump($var);
    }
}
