<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/health', function(BoosterOps\HealthCheck\HealthCheck $health) {
    return $health->healthStatus();
});

