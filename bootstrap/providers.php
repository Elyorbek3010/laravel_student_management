<?php
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Foundation\AliasLoader;

app()->booting(function () {
    AliasLoader::getInstance()->alias('Debugbar', Debugbar::class);
});

return [
    App\Providers\AppServiceProvider::class,
    Barryvdh\Debugbar\ServiceProvider::class,

];
