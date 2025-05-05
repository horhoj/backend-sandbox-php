<?php

declare(strict_types=1);

namespace App;

class Core
{
    public static function makeCore(): self
    {
        return new self;
    }

    public function run(): void
    {

        Helpers::dd('hello world');
    }
}
