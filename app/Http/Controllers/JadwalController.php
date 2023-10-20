<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;
use App\Http\Resources\JadwalResource;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwal = Jadwal::all();
        return view('/', ['jadwal' => $jadwal]);
        // return JadwalResource::collection($jadwal);
    }
}
