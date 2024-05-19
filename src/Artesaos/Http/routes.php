<?php

Route::get('/ufs/', function($uf = null){
    return response()->json(\Lucenarenato\Cidade::select('uf')->distinct('uf')->orderBy('uf')->get());
});

Route::get('/cidades/{uf}', function($uf = null){
    return response()->json(\Lucenarenato\Cidade::where('uf', $uf)->orderBy('nome')->get());
});