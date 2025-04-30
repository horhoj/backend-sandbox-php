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
        echo '<style>*,
                *::before,
                *::after {
                  font-family: Roboto, sans-serif;
                  margin: 0;
                  padding: 0;
                  box-sizing: border-box;
                  font-size: 18px;
                }
                
                .sf-dump {
                   height: 100vh;
                   background-color: #1A2426 !important;
                   padding: 40px 300px 40px 300px !important;
                }
              </style>
        ';


        
        dd(self::makeCore());
    }
}
