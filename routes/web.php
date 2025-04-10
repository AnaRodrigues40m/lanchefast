<?php

use Illuminate\Support\Facades\Route;

Route::prefix('cliente')->group(function () {
    Route::get('/', \App\Livewire\Clientes\Index::class)->name('clientes.index');
    Route::get('/create', \App\livewire\Clientes\Create::class)->name('clientes.crate');
    Route::get('/{cliente}', \App\livewire\Clientes\Show::class)->name('clientes.show');
    Route::get('/{cliente}/edit', \App\livewire\Clientes\Edit::class)->name('clientes.edit');
});