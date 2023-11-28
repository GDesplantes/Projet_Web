<?php

function hello(string $name) :string
{
    if ($name == "") {
        return " nobody";
    }
    else {
    return "Hello $name";
    }
}

echo hello("Guillaume");
echo hello ("");

