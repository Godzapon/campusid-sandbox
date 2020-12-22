<?php

function hr(string $title = null) : void
{
    echo '<br>';
    if ($title) {
        echo "<h3>$title</h3>";
    }
    echo '<hr>';
}

function printc(string $str1, string $str2) : void
{
    echo "$str1 : $str2<br>";
}