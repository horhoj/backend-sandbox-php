<?php

declare(strict_types=1);

namespace App;

class Helpers
{
    public static function dd(mixed $value): void
    {
        echo '<style>
                    body {background-color: black}
              </style>
        ';

        dd($value);
    }
}
