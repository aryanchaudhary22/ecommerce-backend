<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/test', function () {

    try {

        DB::connection('mongodb')->getMongoClient();

        return response()->json([
            'message' => 'MongoDB Connected Successfully'
        ]);

    } catch (\Exception $e) {

        return response()->json([
            'error' => $e->getMessage()
        ]);

    }

});