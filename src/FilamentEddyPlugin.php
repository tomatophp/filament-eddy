<?php

namespace TomatoPHP\FilamentEddy;

use Filament\Contracts\Plugin;
use Filament\Panel;


class FilamentEddyPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-eddy';
    }

    public function register(Panel $panel): void
    {
        //
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function make(): static
    {
        return new static();
    }
}
