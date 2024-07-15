<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
    public function __invoke()
    {
        $initialMarkers = [
            [
                'position' => [
                    'lat' => 117.43553,
                    'lng' => -8.57364,
                ],
                'draggable' => false
            ],

        ];
        return view('maps', compact('initialMarkers'));
    }
}
