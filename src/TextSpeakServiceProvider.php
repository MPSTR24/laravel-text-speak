<?php

namespace Mpstr24\TextSpeak;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class TextSpeakServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Str::macro('textSpeak', function (string $value): string {

            $mapping = [
                'A' => '4', 'a' => '4',
                'B' => '8', 'b' => '8',
                'E' => '3', 'e' => '3',
                'G' => '6', 'g' => '6',
                'I' => '1', 'i' => '1',
                'O' => '0', 'o' => '0',
                'S' => '5', 's' => '5',
                'T' => '7', 't' => '7',
                'Z' => '2', 'z' => '2',
            ];

            return strtr($value, $mapping);
        });
    }
}
