<?php

function sfdump()
{
    foreach (func_get_args() as $var) {
        \Symfony\Component\VarDumper\VarDumper::dump($var);
    }
}
